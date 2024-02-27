<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use App\Http\Requests\StoreVolRequest;
use App\Http\Requests\UpdateVolRequest;

class VolController extends Controller
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
     * @param  \App\Http\Requests\StoreVolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vol  $vol
     * @return \Illuminate\Http\Response
     */
    public function show(Vol $vol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vol  $vol
     * @return \Illuminate\Http\Response
     */
    public function edit(Vol $vol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVolRequest  $request
     * @param  \App\Models\Vol  $vol
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVolRequest $request, Vol $vol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vol  $vol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vol $vol)
    {
        //
    }
}
