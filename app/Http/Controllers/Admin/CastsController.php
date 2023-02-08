<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Casts;
use App\Models\Movie;
use App\Models\MoviesCasts;
use Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casts = Casts::orderBy('id','desc')->paginate(10);
        return view('admin.cast.index',compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cast.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);
        
        $cast = new Casts();
        $cast->name = $request->name;
        $cast->position = $request->position;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = 'cast-'.$cast->id;
            $filename = time().'.'.$ext;

            $file->move(public_path('assets/img/cast/'), $filename);

            $cast->image = $filename;
        }
        $cast->save();
        return redirect()->route('cast.index')->with('success','Cast Has Been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cast
     * @return \Illuminate\Http\Response
     */
    public function show(Casts $cast)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cast
     * @return \Illuminate\Http\Response
     */
    public function edit(Casts $cast)
    {
        return view('admin.cast.edit',compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casts $cast)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);
        
        $cast->name = $request->name;
        $cast->position = $request->position;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = 'cast-'.$cast->id.'.jpg';
            $filename = time().'.'.$ext;

            $file->move(public_path('assets/img/cast/'), $filename);

            if(file_exists(public_path('assets/img/cast/'). $cast->image))
            {
            $status = unlink(public_path('assets/img/cast/'). $cast->image);
            }

            $cast->image = $filename;
        }
        $cast->save();
        return redirect()->route('cast.index')->with('success','Cast Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casts $cast)
    {
        try{
            DB::beginTransaction();
            $imageLink = $cast->image;
            Schema::disableForeignKeyConstraints();

            $moviesCasts = MoviesCasts::where('cast_id',$cast->id)->get();
            foreach($moviesCasts as $moviesCast)
            {
                $moviesCast->delete();
            }
            $cast->delete();

            Schema::enableForeignKeyConstraints();

            if(file_exists(public_path('assets/img/cast/'). $imageLink))
            {
                $status = unlink(public_path('assets/img/cast/'). $imageLink);
            }
            DB::commit();
        }catch(Exception $th)
        {
            DB::rollBack();
            return redirect()->route('cast.index')->with('success','Cast has been deleted errors');
        }
        return redirect()->route('cast.index')->with('success','Cast has been deleted successfully');
    }
    public function assign(Request $request,Casts $cast)
    {
        if($request->search){
            $movies = Movie::where('name', 'like', '%'.$request->search.'%')->paginate(10);
            return view('admin.cast.assign-movie',compact('cast','movies'));
        }
        $movies = Movie::orderBy('began_at','desc')->paginate(10);
        return view('admin.cast.assign-movie',compact('cast','movies'));
    }
    public function assignStore(Request $request,Movie $movie)
    {
        if($request->castid){
            $moviesCast = new MoviesCasts();
            $moviesCast->cast_id = $request->castid;
            $moviesCast->movie_id = $movie->id;
            $moviesCast->save();
            return redirect()->route('cast.index')->with('success','Cast has been assign successfully');
        }
        return redirect()->back();
    }
}
