<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = DB::select('select * from beritas');
        return view('admin.berita', ['beritas' => $beritas]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-berita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beritas = new Berita;
        $beritas->kategori = $request->kategori;
        $beritas->judul = $request->judul;
        $beritas->isi_berita =$request->isi_berita;

        $beritas->save();
        return redirect('admin-panel/pengumuman')->with('status','pengumuman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beritas = Berita::find($id);
        return view('admin.edit-berita',['beritas' => $beritas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $beritas = Berita::find($id);
        $beritas->kategori = $request->kategori;
        $beritas->judul = $request->judul;
        $beritas->isi_berita = $request->isi_berita;

        $beritas->save();
        return redirect('admin-panel/pengumuman')->with('status','pengumuman berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect('admin-panel/pengumuman')->with('status','pengumuman berhasil dihapus');
    }
}
