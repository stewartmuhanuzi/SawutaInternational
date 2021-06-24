<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
   public function index()
   {
       $sale = Sale::latest()->get();
       return view('sale.index')->with(['sale'=>$sale]);

   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view ('sale.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store()
   {
       Sale::create($this->validateSaleData())->get();
       return redirect('/sale')->with('success', 'Sale Created');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $sale = Sale::find($id);
       return view('sale.show')->with('sale', $sale);

   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $sale = Sale::find($id);

     return view('sale.edit')->with('sale', $sale);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */

   public function update($id)
   {
        $sale = Sale::find($id);

        $sale::whereId($id)->update($this->validateSaleData());
        $sale->save();

        return redirect('/sale')->with('sale', $sale);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function destroy(Product $product)
   {
       //
   }

   /*
   This method has to validate data to provide
   some layer of protection
   */
   public function validateSaleData()
   {
       return request()->validate([
               'client_name' => 'required',
               'product_name' => 'required',
               'selling_price' => 'required',
               'quantity' => 'required',
               'transaction_date' => 'required',
               'branch_name' => 'required'
       ]);
   }
}
