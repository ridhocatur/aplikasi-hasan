<?php

namespace App\Http\Controllers;

use App\Models\CctvPemko_m;
use Illuminate\Http\Request;

class CctvPemko extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get posts
        $pemko = CctvPemko_m::latest()->paginate(5);

        //render view with posts
        return view('data-cctv-pemko.index',['title' => 'Data CCTV Pemerintah Kota'], compact('pemko'));
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
     * @param  \App\Models\CctvPemko_m  $cctvPemko_m
     * @return \Illuminate\Http\Response
     */
    public function show(CctvPemko_m $cctvPemko_m)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CctvPemko_m  $cctvPemko_m
     * @return \Illuminate\Http\Response
     */
    public function edit(CctvPemko_m $cctvPemko_m)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CctvPemko_m  $cctvPemko_m
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CctvPemko_m $cctvPemko_m)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CctvPemko_m  $cctvPemko_m
     * @return \Illuminate\Http\Response
     */
    public function destroy(CctvPemko_m $cctvPemko_m)
    {
        //
    }
}
