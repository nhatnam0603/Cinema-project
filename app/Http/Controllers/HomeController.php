<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movie;
use App\Models\TypeScreens;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    /**
     * Display home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
      $screenTypes = TypeScreens::all();
      $genres = Genres::all();
      $movielist = Movie::all();

       return view('web.homepage',compact('movielist','genres','screenTypes'));
    }
    /**
     * Display a listing of movie.
     *
     * @return \Illuminate\Http\Response
     */
    public function movielist(Request $request)
    {
      $screenTypes = TypeScreens::all();
      $genres = Genres::all();
     
      if(!empty($request)){
         $genreid = $request->input('genreid');
         $date = $request->input('date');
         $type = $request->input('type');
         

         $movielist = Movie::query();
         if($date)
         $movielist->whereDate('end_at','>=',date('Y-m-d',strtotime($date)));
         
         if($genreid)                     
         $movielist->whereHas('genres', function (Builder $query1) use ($genreid) {
            $query1->where('genres.id',$genreid);
         });
         if($type)
         $movielist->whereHas('types', function (Builder $query) use ($type){
            $query->where('type_screens.id',$type);
         });
         //var_dump($movielist->toSql());
         $movielist = $movielist->get();
         
      }
      else{
         $movielist = Movie::all();
      }
      
      return view('web.movie.list',compact('movielist','screenTypes','genres'));
    }
    /**
     * Display movie detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function moviedetail(Request $request)
    {
      if(!empty($request))
      {
         $id = $request->input('id');
         $movie = Movie::where('id',$id)->first(); 
         
         return view('web.movie.detail',compact('movie'));
      } 
      else return redirect()->back();
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
