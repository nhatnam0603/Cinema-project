<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function dashboard(){
        if(Auth::check() && (Auth::user()->role) == 2){
            return view('admin.dashboard');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
