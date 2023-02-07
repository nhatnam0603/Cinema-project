<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Genres;
use App\Models\Movie;
use App\Models\MoviesScreensTimeAssign;
use App\Models\Seats;
use App\Models\Tickets;
use App\Models\TypeScreens;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use stdClass;
use Illuminate\Http\Client\Response;

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

      if(!empty($request->all())){
         $genreid = $request->input('genreid');
         $date = $request->input('date');
         $type = $request->input('type');
         $movielist = Movie::query();
         if($request->search)
         {
            $movielist->where('name', 'like', '%'.$request->search.'%')->get();
         }
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
        //dd($movielist);
         $movielist = $movielist->get();
//var_dump($movielist);
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
      if(!empty($request->all()))
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
    public function moviecheckout(Request $request)
    {
      if(!empty($request->all()))
      {

         $movieScreenTime = MoviesScreensTimeAssign::where('id',$request->input('id'))->first();
         $bookList =  $request->input('bookList') ;

         $bookListArr = explode(',',$bookList);
         $bookNumber = count($bookListArr);
      }
       return view('web.movie.checkout',compact('movieScreenTime','bookNumber','bookListArr'));
    }
     /**
     * Display ticket plan page
     *
     * @return \Illuminate\Http\Response
     */
    public function ticketplan(Request $request)
    {
      if(!empty($request->all()))
      {
         $id = $request->input('id');
         $movie = Movie::where('id',$id)->first();

         if(!empty($request->input('date')))
         {

            $screensList = MoviesScreensTimeAssign::whereDate('date', '=', date('Y-m-d',strtotime(str_replace('/','-', $request->input('date')))))
            ->where('movie_id',$id)->get();

            $screensTimeList = [];
            foreach ($screensList as $key => $value) {

               if(!isset($screensTimeList[$value->screen->id]))
               $screensTimeList[$value->screen->id] = new stdClass();
               $screensTimeList[$value->screen->id]->screenName = $value->screen->name;
               $screensTimeList[$value->screen->id]->screenType = $value->screen->type;

               if(!isset($screensTimeList[$value->screen->id]->time))
               $screensTimeList[$value->screen->id]->time = [];
               $screensTimeList[$value->screen->id]->time[] = (object)  array('time' => $value->time->time,'id'=>$value->id);
            }

            return view('web.ticketplan',compact('movie','screensTimeList'));
         }
         return view('web.ticketplan',compact('movie'));
      }
      else return redirect()->back();
    }
     /**
     * Display seat plan page
     *
     * @return \Illuminate\Http\Response
     */
    public function seatplan(Request $request)
    {
      if(!empty($request->all()))
      {
         $movieScreenTime = MoviesScreensTimeAssign::where('id',$request->input('id'))->first();
         $timeId = $movieScreenTime->time_id;
         $listSeat = Seats::where('screen_id',$movieScreenTime->screen_id)->get();
         $listSeatHasChoose = Seats::where('screen_id',$movieScreenTime->screen_id)->whereDoesntHave('bookings', function ($query) use($timeId){
            $query->where('time_id', $timeId);
         })->get();
         $output = [];
         foreach ($listSeat as $key => $value) {
            if(!isset($output[$value->row]))$output[$value->row] = [];
            $output[$value->row][$value->number] = 0;
         }
         foreach ($listSeatHasChoose as $key => $value) {
            $output[$value->row][$value->number] = 1;
         }
         return view('web.seatplan',compact('movieScreenTime','output'));
      }
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


    public function confirmpayment(Request $request){
      $data = $request->all();
      
      $ticket = new Tickets();
      $ticket->user_id = auth()->user()->id;
      $ticket->save();
      //dd($data);
      $html= '';
      foreach ($data['ticket'] as $key=> $value) { 
         try{
            DB::beginTransaction();
            $data['ticketList'][$key]['row'] = $value[0];
            $data['ticketList'][$key]['seat'] = substr($value,1);
            $seat = Seats::where('row', $data['ticketList'][$key]['row'])->where('number',(int)$data['ticketList'][$key]['seat'])->where('screen_id',$data['screenId'])->first();

            $booking = new Bookings();
            $booking->movie_id = $data['movieId'];
            $booking->seat_id = $seat->id;
            $booking->time_id = $data['timeId'];
            $booking->ticket_id = $ticket->id;
            $booking->save();
            $data['ticketList'][$key]['bookingid'] = $booking->id;

            DB::commit();
         }catch(Exception $th)
         {
            DB::rollBack();
            dd($th);
         }
      }
      $pdf = PDF::loadView('pdfticket', $data);
      return $pdf->download('ticket'. auth()->user()->id.'.pdf'); 
    }

    //Search movie by name
    public function searchMovies(Request $request){
        if($request->search) {

            $searchMovies = Movie::where('name', 'like', '%'.$request->search.'%')->get();
            return view('web.movie.search', compact('searchMovies'));
        } else {
            return redirect()->back()->with('message', 'Not found!');
        }
    }
}
