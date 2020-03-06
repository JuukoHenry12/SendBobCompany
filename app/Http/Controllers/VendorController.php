<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VendorController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = DB::table('vendors')->paginate(15);
        return view('vendor.index', ['vendors' => $vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vendor $vendor)
    {
        return view('vendor.create', compact('vendor'));
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
            'name' => 'required|min:6',
            'location' => 'required|min:6',
            'product_sold' => 'required|min:6',
            'phone' => 'required|min:6',
        );
        $request->validate($rules);
        $vendor = new Vendor();
        $vendor->create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
        return view('vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {

        $rules = array(
            'name' => 'required|min:6',
            'location' => 'required|min:6',
            'product_sold' => 'required|min:6',
            'phone' => 'required|min:6',
        );
        $request->validate($rules);

        $vendor->name = $request->input('name');
        $vendor->location = $request->input('location');
        $vendor->product_sold = $request->input('product_sold');
        $vendor->phone = $request->input('phone');
        $vendor->save();
        if ($vendor) {
            return redirect()->route('vendors.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect()->route('vendors.index');
    }

    public function getForm()
    {
        return view('vendor.form');
    }

    public function postForm(Request $request)
    {
        $rules = array(
            'name' => 'required|min:6',
        );
        $request->validate($rules);
        return redirect('/');
    }
}
