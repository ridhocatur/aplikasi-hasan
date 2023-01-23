<?php

namespace App\Http\Controllers;

use App\Models\PerangkatJar_m;
use Illuminate\Http\Request;

class PerangkatJar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get posts
        $jaringan = PerangkatJar_m::latest()->paginate(5);

        //render view with posts
        return view('data-perangkat-jaringan.index',['title' => 'Data Perangkat Jaringan'], compact('jaringan'));
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
     * @param  \App\Models\PerangkatJar_m  $perangkatJar_m
     * @return \Illuminate\Http\Response
     */
    public function show(PerangkatJar_m $perangkatJar_m)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerangkatJar_m  $perangkatJar_m
     * @return \Illuminate\Http\Response
     */
    public function edit(PerangkatJar_m $perangkatJar_m)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerangkatJar_m  $perangkatJar_m
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerangkatJar_m $perangkatJar_m)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerangkatJar_m  $perangkatJar_m
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerangkatJar_m $perangkatJar_m)
    {
        //
    }
}
