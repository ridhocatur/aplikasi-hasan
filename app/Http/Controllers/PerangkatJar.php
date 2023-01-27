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
        // KOSONG
    }

    public function store(Request $request)
    {
        PerangkatJar_m::create([
            'merk_perangkat'   => $request->merkperangkat,
            'cpu'              => $request->cpu,
            'ram'              => $request->ram,
            'lan_port'         => $request->lanport,
            'tahun'            => $request->tahun
        ]);
        dd($request->merkperangkat);
        return redirect()->route('data-perangkat-jaringan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(PerangkatJar_m $jaringan)
    {
        //return response
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data'    => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerangkatJar_m  $perangkatJar_m
     * @return \Illuminate\Http\Response
     */
    public function edit(PerangkatJar_m $jaringan)
    {
        // KOSONG
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerangkatJar_m  $jaringan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // KOSONG
    }

    public function ubah(Request $request)
    {
        $update = PerangkatJar_m::where('id', $request->id)->firstOrfail();
        $update->merk_perangkat   = $request->merkperangkat; //kiri database, kanan nama field
        $update->cpu              = $request->cpu;
        $update->ram              = $request->ram;
        $update->lan_port         = $request->lanport;
        $update->tahun            = $request->tahun;
        $update->save();
        return redirect()->route('data-perangkat-jaringan.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerangkatJar_m  $jaringan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerangkatJar_m $jaringan, Request $request)
    {
        PerangkatJar_m::where('id', $request->id)->delete();
        return redirect()->route('data-perangkat-jaringan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function getAPI($id)
    {
        $jaringan = PerangkatJar_m::where('id', $id)->get();

        return response()->json($jaringan, 200, ['pesan' => 'success'] );

    }
}
