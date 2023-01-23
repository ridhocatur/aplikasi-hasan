<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server_m;

class DataServer extends Controller
{
    public function index()
    {
        //get posts
        $server = Server_m::latest()->paginate(5);

        //render view with posts
        return view('data-server.index',['title' => 'Data Server'], compact('server'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'merk_server'   => 'required',
        //     'jenis'         => 'required',
        //     'hardisk'       => 'required',
        //     'ram'           => 'required',
        //     'processor'     => 'required',
        //     'os'            => 'required|numeric|min:4',
        //     'tahun'         => 'required'
        // ],[
        //     'merk_server.required'   => 'Wajib Di Isi',
        //     'jenis.required'         => 'Wajib Di Isi',
        //     'hardisk.required'       => 'Wajib Di Isi',
        //     'ram.required'           => 'Wajib Di Isi',
        //     'processor.required'     => 'Wajib Di Isi',
        //     'os.required'            => 'Wajib Di Isi',
        //     'os.numeric'             => 'Hanya boleh diisi angka',
        //     'os.min'                 => 'Minimal 4 Angka',
        //     'tahun.required'         => 'Wajib Di Isi'
        // ]);

        //create post
        Server_m::create([
            'merk_server'   => $request->merkserver,
            'jenis'         => $request->jenis,
            'hardisk'       => $request->hardisk,
            'ram'           => $request->ram,
            'processor'     => $request->processor,
            'os'            => $request->os,
            'tahun'         => $request->tahun,
            'penggunaan'    => $request->penggunaan
        ]);

        //redirect to index
        return redirect()->route('data-server.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

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
