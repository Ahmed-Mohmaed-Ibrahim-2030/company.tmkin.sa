<?php

namespace App\Http\Controllers;

use App\Models\SubService;
use App\Http\Requests\StoreSubServiceRequest;
use App\Http\Requests\UpdateSubServiceRequest;

class SubServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreSubServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function show(SubService $subService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function edit(SubService $subService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubServiceRequest  $request
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubServiceRequest $request, SubService $subService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubService $subService)
    {
        //
    }
}
