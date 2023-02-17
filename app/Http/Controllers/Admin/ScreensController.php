<?php

namespace App\Http\Controllers\Admin;

use App\Models\Screens;
use App\Models\TypeScreens;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ScreensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $screens = Screens::all();
        return view('admin.screen.index', compact('screens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $screenType = TypeScreens::all();
        return view('admin.screen.create', compact('screenType'));
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
            'type' => 'required',
            'price' => 'required',
        ]);
        $screen = new Screens();
        $screen->name = $request->name;
        $screen->type = $request->type[0];
        $screen->price = $request->price;
        $screen->save();
        return redirect()
            ->route('admin.screen.index')
            ->with('success', 'Cast Has Been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cast
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cast
     * @return \Illuminate\Http\Response
     */
    public function edit(Screens $screen)
    {
        $screenType = TypeScreens::all();
        return view('admin.screen.edit', compact('screen', 'screenType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Screens $screen)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
        ]);

        $screen->name = $request->name;
        $screen->type = $request->type[0];
        $screen->price = $request->price;
        $screen->save();
        return redirect()
            ->route('admin.screen.index')
            ->with('success', 'Screen Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Screens $screen)
    {
        try {
            DB::beginTransaction();
            $screen->id = $request->screen->id;
            $screen->delete();

            Schema::enableForeignKeyConstraints();
            DB::commit();
        } catch (Exception $th) {
            DB::rollBack();
            return redirect()
                ->route('admin.screen.index')
                ->with('success', 'Screen has been deleted errors');
        }
        return redirect()
            ->route('admin.screen.index')
            ->with('success', 'Screen has been deleted successfully');
    }
    // public function assign(Request $request, Casts $cast)
    // {
    //     if ($request->search) {
    //         $movies = Movie::where(
    //             'name',
    //             'like',
    //             '%' . $request->search . '%'
    //         )->paginate(10);
    //         return view('admin.cast.assign-movie', compact('cast', 'movies'));
    //     }
    //     $movies = Movie::orderBy('began_at', 'desc')->paginate(10);
    //     return view('admin.cast.assign-movie', compact('cast', 'movies'));
    // }
    // public function assignStore(Request $request, Movie $movie)
    // {
    //     if ($request->castid) {
    //         $moviesCast = new MoviesCasts();
    //         $moviesCast->cast_id = $request->castid;
    //         $moviesCast->movie_id = $movie->id;
    //         $moviesCast->save();
    //         return redirect()
    //             ->route('cast.index')
    //             ->with('success', 'Cast has been assign successfully');
    //     }
    //     return redirect()->back();
    // }
}
