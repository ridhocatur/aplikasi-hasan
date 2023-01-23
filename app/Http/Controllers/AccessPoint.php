<?php

namespace App\Http\Controllers;

use App\Models\AccessPoint_m;
use Illuminate\Http\Request;

class AccessPoint extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get posts
        $ap = AccessPoint_m::latest()->paginate(5);

        //render view with posts
        return view('data-access-point.index',['title' => 'Data Access Point'], compact('ap'));
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
     * @param  \App\Models\AccessPoint_m  $accessPoint_m
     * @return \Illuminate\Http\Response
     */
    public function show(AccessPoint_m $accessPoint_m)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccessPoint_m  $accessPoint_m
     * @return \Illuminate\Http\Response
     */
    public function edit(AccessPoint_m $accessPoint_m)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccessPoint_m  $accessPoint_m
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccessPoint_m $accessPoint_m)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccessPoint_m  $accessPoint_m
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccessPoint_m $accessPoint_m)
    {
        //
    }
}
