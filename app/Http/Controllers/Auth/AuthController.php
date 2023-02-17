<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($request->remember) $remember = true;
        else $remember = false;
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials,$remember) ) {
            if(Auth::user()->role == 2)
                return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
            else return redirect()->intended("home");
        }else{
            return redirect()->back()->with('message','Oppes! You have entered invalid credentials');
        }

        return redirect()->back();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function dashboard()
    // {
    //     if(Auth::check() && (Auth::user()->role) == 2){
    //         return view('admin.dashboard');
    //     }
    //     else if((Auth::user()->role) == 1){
    //         return redirect("home");
    //     }
    //     return redirect("login")->withSuccess('Opps! You do not have access');
    // }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
