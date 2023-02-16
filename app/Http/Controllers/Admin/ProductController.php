<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Models\Movie;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Genres;
use App\Models\MoviesCasts;
use App\Models\MoviesGenres;
use App\Models\MoviesScreensTimeAssign;
use App\Models\MoviesTypes;
use App\Models\Screens;
use App\Models\Times;
use App\Models\TypeScreens;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class ProductController extends Controller
{
    public function index()
    {
        $prods = Movie::all();
        $moviecheck = Movie::where('id',4)->get();

        return view('admin.product.index', compact('prods'));
    }

    public function create()
    {
        $screenType = TypeScreens::all();
        $genres = Genres::all();
        return view('admin.product.create',compact('screenType','genres'));
    }

    public function store(ProductFormRequest $request)
    {
        $validatedData = $request->validated();
        $began_at = new DateTime($request->input('began_at'));
        $end_at = new DateTime($request->input('end_at'));
        DB::beginTransaction();
        try {
            $product = new Movie;
            $product->began_at = $began_at;
            $product->end_at = $end_at;
            $product->name = $validatedData['name'];
            $product->description = $validatedData['description'];
            $product->video = $request->video;
            if($request->hasFile('banner')){
                $file = $request->file('banner');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;

                $file->move(public_path('assets/img/banner'), $filename);

                $product->banner = $filename;
            }
            if($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;

                $file->move(public_path('assets/img/movie'), $filename);

                $product->image = $filename;
            }

            $product->save();
            foreach ($validatedData['type'] as $key => $value) {
                $productType = new MoviesTypes();
                $productType->type_id= $value;
                $productType->movie_id= $product->id;
                $productType->save();
            }
            foreach ($validatedData['genre'] as $key => $value) {
                $productType = new MoviesGenres();
                $productType->genre_id= $value;
                $productType->movie_id= $product->id;
                $productType->save();
            }
            DB::commit();
        } catch (\Throwable $th) {
           DB::rollBack();
           dd( $th);
        }

        return redirect('/product')->with('message', 'Product added Successfully');
    }

    public function edit(Movie $movie)
    {
        $screenType = TypeScreens::all();
        $genres = Genres::all();
        $movieTypeList = [];
        foreach ($movie->types as $key => $value) {
            $movieTypeList[] = $value->id;
        }
        $movieGenreList = [];
        foreach ($movie->genres as $key => $value) {
            $movieGenreList[] = $value->id;
        }
        return view('admin.product.edit',compact('movie','screenType','genres','movieTypeList','movieGenreList'));
    }
    public function update(ProductFormRequest $request,Movie $movie)
    {
        $validatedData = $request->validated();
        $began_at = new DateTime($request->input('began_at'));
        $end_at = new DateTime($request->input('end_at'));
        DB::beginTransaction();
        try {
            $product = $movie;
            $product->began_at = $began_at;
            $product->end_at = $end_at;
            $product->name = $validatedData['name'];
            $product->description = $validatedData['description'];
            $product->video = $request->video;
            if($request->hasFile('banner')){
                $file = $request->file('banner');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;

                $file->move(public_path('assets/img/banner'), $filename);
                if(file_exists(public_path('assets/img/banner/'). $product->banner))
                {
                    $status = unlink(public_path('assets/img/banner/'). $product->banner);
                }
                $product->banner = $filename;
            }
            if($request->hasFile('image')){
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;

                $file->move(public_path('assets/img/movie'), $filename);
                if(file_exists(public_path('assets/img/movie/'). $product->banner))
                {
                    $status = unlink(public_path('assets/img/movie/'). $product->banner);
                }
                $product->image = $filename;
            }

            $product->save();
             // Xoa type
             $movieTypes = MoviesTypes::where('movie_id',$movie->id)->get();
             foreach ($movieTypes as $key => $value) {
                 $value->delete();
             }
             //xoa genre
             $movieGenres = MoviesGenres::where('movie_id',$movie->id)->get();
             foreach ($movieGenres as $key => $value) {
                 $value->delete();
             }
            foreach ($validatedData['type'] as $key => $value) {
                $productType = new MoviesTypes();
                $productType->type_id= $value;
                $productType->movie_id= $product->id;
                $productType->save();
            }
            foreach ($validatedData['genre'] as $key => $value) {
                $productType = new MoviesGenres();
                $productType->genre_id= $value;
                $productType->movie_id= $product->id;
                $productType->save();
            }

            DB::commit();
        } catch (\Throwable $th) {
           DB::rollBack();
           dd( $th);
        }

        return redirect('/product')->with('message', 'Product updated Successfully');
    }
    public function destroy(Movie $movie){
        try {
            Schema::disableForeignKeyConstraints();
            DB::beginTransaction();
            // Xoa type
            $movieTypes = MoviesTypes::where('movie_id',$movie->id)->get();
            foreach ($movieTypes as $key => $value) {
                $value->delete();
            }
            //xoa cast
            $movieCasts = MoviesCasts::where('movie_id',$movie->id)->get();
            foreach ($movieCasts as $key => $value) {
                $value->delete();
            }
            //xoa genre
            $movieGenres = MoviesGenres::where('movie_id',$movie->id)->get();
            foreach ($movieGenres as $key => $value) {
                $value->delete();
            }
            //xoa assign
            $movieAssign = MoviesScreensTimeAssign::where('movie_id',$movie->id)->get();
            foreach ($movieAssign as $key => $value) {
                $value->delete();
            }
            $movie->delete();
            DB::commit();
            Schema::enableForeignKeyConstraints();
            return redirect()->route('admin.product.index');
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
    public function assign(Request $request,Movie $movie)
    {
        $times = [];
        $screens = Screens::all();
        if($request->screen && $request->date){
            $times = Times::whereDoesntHave('time_assign_movie_screen',function($query) use($movie,$request){
                $query->where('movie_id',$movie->id)->where('screen_id',$request->screen)->whereDate('date',date('Y-m-d',strtotime($request->date)));
            })->get();
        }
        return view('admin.product.assign-movie',compact('movie','screens','times'));
    }
    public function assignscreen(Request $request,Movie $movie)
    {
        $validated = $request->validate([
            'screenid' => 'required',
            'dateAssign' => 'required',
            'time' => 'required',
        ]);
        foreach ($request->time as $key => $value) {
            $movieAssignScreenTime = new MoviesScreensTimeAssign();
            $movieAssignScreenTime->movie_id = $movie->id;
            $movieAssignScreenTime->screen_id = $request->screenid;
            $movieAssignScreenTime->time_id = $value;
            $movieAssignScreenTime->date = date('Y-m-d',strtotime($request->dateAssign));
            $movieAssignScreenTime->save();
        }
        return redirect()->route('admin.product.index');
    }
}
