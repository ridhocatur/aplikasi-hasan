<?php

namespace App\Http\Controllers;

use App\Models\NvrCctv_m;
use Illuminate\Http\Request;

class NvrCctv extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get posts
        $nvr = NvrCctv_m::latest()->paginate(5);

        //render view with posts
        return view('data-nvr-cctv.index',['title' => 'Data NVR CCTV'], compact('nvr'));
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
     * @param  \App\Models\NvrCctv_m  $nvrCctv_m
     * @return \Illuminate\Http\Response
     */
    public function show(NvrCctv_m $nvrCctv_m)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NvrCctv_m  $nvrCctv_m
     * @return \Illuminate\Http\Response
     */
    public function edit(NvrCctv_m $nvrCctv_m)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NvrCctv_m  $nvrCctv_m
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NvrCctv_m $nvrCctv_m)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NvrCctv_m  $nvrCctv_m
     * @return \Illuminate\Http\Response
     */
    public function destroy(NvrCctv_m $nvrCctv_m)
    {
        //
    }
}
