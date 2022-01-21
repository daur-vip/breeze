<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscountGroupRequest;
use App\Http\Requests\UpdateDiscountGroupRequest;
use App\Models\DiscountGroup;

class DiscountGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreDiscountGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiscountGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiscountGroup  $discountGroup
     * @return \Illuminate\Http\Response
     */
    public function show(DiscountGroup $discountGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiscountGroup  $discountGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(DiscountGroup $discountGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscountGroupRequest  $request
     * @param  \App\Models\DiscountGroup  $discountGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscountGroupRequest $request, DiscountGroup $discountGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiscountGroup  $discountGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiscountGroup $discountGroup)
    {
        //
    }
}
