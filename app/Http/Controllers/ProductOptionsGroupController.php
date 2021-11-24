<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductOptionsGroupRequest;
use App\Http\Requests\UpdateProductOptionsGroupRequest;
use App\Models\ProductOptionsGroup;

class ProductOptionsGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreProductOptionsGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductOptionsGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductOptionsGroup  $productOptionsGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOptionsGroup $productOptionsGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductOptionsGroup  $productOptionsGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductOptionsGroup $productOptionsGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductOptionsGroupRequest  $request
     * @param  \App\Models\ProductOptionsGroup  $productOptionsGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductOptionsGroupRequest $request, ProductOptionsGroup $productOptionsGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductOptionsGroup  $productOptionsGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOptionsGroup $productOptionsGroup)
    {
        //
    }
}
