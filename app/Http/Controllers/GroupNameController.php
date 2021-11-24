<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupNameRequest;
use App\Http\Requests\UpdateGroupNameRequest;
use App\Models\GroupName;

class GroupNameController extends Controller
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
     * @param  \App\Http\Requests\StoreGroupNameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupNameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupName  $groupName
     * @return \Illuminate\Http\Response
     */
    public function show(GroupName $groupName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupName  $groupName
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupName $groupName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupNameRequest  $request
     * @param  \App\Models\GroupName  $groupName
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupNameRequest $request, GroupName $groupName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupName  $groupName
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupName $groupName)
    {
        //
    }
}
