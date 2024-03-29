<?php

namespace App\Http\Controllers;

use App\Models\Launch;
use Illuminate\Http\Request;

class LaunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('oneuitemplate.launch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oneuitemplate.launch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Launch  $launch
     * @return \Illuminate\Http\Response
     */
    public function show(Launch $launch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Launch  $launch
     * @return \Illuminate\Http\Response
     */
    public function edit(Launch $launch)
    {
        return view('oneuitemplate.launch.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Launch  $launch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Launch $launch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Launch  $launch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Launch $launch)
    {
        //
    }
}
