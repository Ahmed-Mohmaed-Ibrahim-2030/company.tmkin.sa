<?php

namespace App\Http\Controllers;

use App\Models\AskService;
use App\Http\Requests\StoreAskServiceRequest;
use App\Http\Requests\UpdateAskServiceRequest;
use Illuminate\Http\Request;


class AskServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreAskServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAskServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AskService  $askService
     * @return \Illuminate\Http\Response
     */
    public function show(AskService $askService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AskService  $askService
     * @return \Illuminate\Http\Response
     */
    public function edit(AskService $askService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAskServiceRequest  $request
     * @param  \App\Models\AskService  $askService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAskServiceRequest $request, AskService $askService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AskService  $askService
     * @return \Illuminate\Http\Response
     */
    public function destroy(AskService $askService)
    {
        //
    }

    public function test(Request $request)
    {
        dd( $request->all());
    }
}
