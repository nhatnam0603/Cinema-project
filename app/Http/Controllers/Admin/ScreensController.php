<?php

namespace App\Http\Controllers\Admin;

use App\Models\Screens;
use App\Models\Seats;
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
        $seat = Seats::all();
        return view('admin.screen.index', compact('screens', 'seat'));
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
        $typename = TypeScreens::where('id',$request->type[0])->first();
        $screen = new Screens();
        $screen->name = $request->name;
        $screen->type = $typename->name;
        $screen->price = $request->price;
        $screen->save();
        return redirect()
            ->route('admin.screen.index')
            ->with('success', 'Screen Has Been created successfully');
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
    public function assign(Request $request)
    {
        $screen = $request->screen;
        $screenInfo = Screens::where('id', $request->screen)->get();
        return view(
            'admin.screen.assign-seat',
            compact('screen', 'screenInfo')
        );
    }
    public function assignStore(Request $request)
    {
        $screen = $request->screen;
        $checkAssign = Seats::where('number', $request->number)
            ->where('row', $request->row)
            ->first();
        if ($checkAssign) {
            return redirect()
                ->route('admin.screen.assign', compact('screen'))
                ->with('success', 'Seats Existed');
        } else {
            try {
                $seat = new Seats();
                $seat->number = $request->number;
                $seat->row = $request->row;
                $seat->screen_id = $request->screenid;
                $seat->save();
            } catch (Exception $th) {
                DB::rollBack();
                return redirect()
                    ->route('admin.screen.assign', compact('screen'))
                    ->with('success', 'Seats errors');
            }
        }
        return redirect()
            ->route('admin.screen.assign', compact('screen'))
            ->with('success', 'Seats add successfully');
    }
}
