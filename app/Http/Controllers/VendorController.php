<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendor::latest()->get();
        return view('vendor.index')->with(['vendor'=>$vendor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        Vendor::create($this->validateCreateData())->get();
        return redirect('/vendor')->with('success', 'Vendor Created');
    
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */

   
    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);

        return view('vendor.show')->with('vendor', $vendor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = Vendor::find($id);

        return view('vendor.edit')->with('vendor', $vendor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         $vendor = Vendor::find($id);
         
         $vendor::whereId($id)->update($this->validateCreateData());
         $vendor->save();

         return redirect('/vendor')->with('vendor', $vendor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $vendor = Vendor::find($id);

      $vendor->delete();

      return redirect('/vendor')->with('vendor', $vendor);
    }

    public function validateCreateData()
    {
        return request()->validate([
                    'salutation' => 'required',
                    'name' => 'required',
                    'address' => 'required',
                    'contactPerson' => 'required',
                    'phone' => 'required',
                    'status' => 'required'
        ]);            
    }
}
