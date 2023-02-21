<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Bookings;
use App\Models\Times;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Times::orderBy('id','desc')->paginate(10);
        return view('admin.time.index',compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.time.create');
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
            'time' => 'required',
        ]);
        
        $time = new Times();
        $time->time = date('H:i',strtotime($request->time));
        $time->save();
        return redirect()->route('time.index')->with('success','Time Has Been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Times $time)
    {
        return view('admin.time.edit',compact('time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Times $time)
    {
        $request->validate([
            'time' => 'required',
        ]);
        if(date('H:i',strtotime($request->time)) != date('H:i',strtotime($time->time)))
        {
            $time->time = date('H:i',strtotime($request->time));
            $time->save();
        }
        
        return redirect()->route('time.index')->with('success','Time Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Times $time)
    {
        DB::beginTransaction();
        Schema::disableForeignKeyConstraints();
        $checkDelete = Bookings::where('time_id',$time->id)->first();
        if($checkDelete) return redirect()->route('time.index')->with('success','Time can not delete');
        else {
            $time->delete();
            DB::commit();
            return redirect()->route('time.index')->with('success','Time has been deleted successfully');
        }
        
        Schema::enableForeignKeyConstraints();
    }
}
