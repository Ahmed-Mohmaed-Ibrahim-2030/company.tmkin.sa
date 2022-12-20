<?php

namespace App\Http\Controllers;

use App\Models\Cite;
use App\Http\Requests\StoreCiteRequest;
use App\Http\Requests\UpdateCiteRequest;

class CiteController extends Controller
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
     * @param  \App\Http\Requests\StoreCiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cite  $cite
     * @return \Illuminate\Http\Response
     */
    public function show(Cite $cite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cite  $cite
     * @return \Illuminate\Http\Response
     */
    public function edit(Cite $cite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCiteRequest  $request
     * @param  \App\Models\Cite  $cite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCiteRequest $request, Cite $cite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cite  $cite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cite $cite)
    {
        //
    }
}
