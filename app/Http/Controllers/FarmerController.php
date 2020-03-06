<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Farmer;
use Illuminate\Http\Request;

class FarmerController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmers = DB::table('farmers')->paginate(15);
        return view('farmer.index', ['farmers' => $farmers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Farmer $farmer)
    {
        return view('farmer.create',compact('farmer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'=>'required|min:6',
            'location'=>'required|min:6',
            'farm_size'=>'required|min:6',
            'produce'=>'required|min:6',
            'phone'=>'required|min:6',
        );
        $request->validate($rules);
        $farmer = new Farmer();
        $farmer->create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer $farmer)
    {
        return view('farmer.show',compact('farmer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer $farmer)
    {
        return view('farmer.edit',compact('farmer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Farmer $farmer)
    {

        $rules = array(
            'name'=>'required|min:6',
            'location'=>'required|min:6',
            'farm_size'=>'required|min:6',
            'produce'=>'required|min:6',
            'phone'=>'required|min:6',
        );
        $request->validate($rules);

        $farmer->name = $request->input('name');
        $farmer->location = $request->input('location');
        $farmer->farm_size = $request->input('farm_size');
        $farmer->produce = $request->input('produce');
        $farmer->phone = $request->input('phone');
        $farmer->save();
        if($farmer)
        {
            return redirect()->route('farmers.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $farmers = Farmer::find($id);
        $farmers -> delete();
        return redirect()->route('farmers.index');

    }
}
