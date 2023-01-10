<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
      $movielist = Movie::all();

       return view('web.homepage',compact('movielist'));
    }
    /**
     * Display a listing of movie.
     *
     * @return \Illuminate\Http\Response
     */
    public function movielist()
    {
      $movielist = Movie::all();
      return view('web.movie.list',compact('movielist'));
    }
    /**
     * Display movie detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function moviedetail()
    {
       return view('web.movie.detail');
    }
     /**
     * Display movie checkout
     *
     * @return \Illuminate\Http\Response
     */
    public function moviecheckout()
    {
       return view('web.movie.checkout');
    }
     /**
     * Display ticket plan page
     *
     * @return \Illuminate\Http\Response
     */
    public function ticketplan()
    {
       return view('web.ticketplan');
    }
     /**
     * Display seat plan page
     *
     * @return \Illuminate\Http\Response
     */
    public function seatplan()
    {
       return view('web.seatplan');
    }
      /**
     * Display seat plan page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
       return view('web.contact');
    }
    
}
