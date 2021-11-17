<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct_OptionRequest;
use App\Http\Requests\UpdateProduct_OptionRequest;
use App\Models\Product_Option;

class ProductOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct_OptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct_OptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_Option  $product_Option
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Option $product_Option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_Option  $product_Option
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_Option $product_Option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_OptionRequest  $request
     * @param  \App\Models\Product_Option  $product_Option
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct_OptionRequest $request, Product_Option $product_Option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_Option  $product_Option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Option $product_Option)
    {
        //
    }
}
