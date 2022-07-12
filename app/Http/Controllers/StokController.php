<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['stoks']=Stok::all();
        return view('stok.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['stoks']=Stok::all();
        return view('stok.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Stok();
        $user->nama = $request->nama;
        $user->jumlah = $request->jumlah;
        $user->harga = $request->harga;
        $user->jenis = $request->jenis;
        $user->save();
        return redirect()->route("stoks.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['stoks']=Stok::find($id);
        return view('stok.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user = Stok::find($id);
        $user->nama = $request->nama;
        $user->jumlah = $request->jumlah;
        $user->harga = $request->harga;
        $user->jenis = $request->jenis;
        $user->save();
        return redirect()->route("stoks.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stok::destroy($id);
        return redirect()->route('stoks.index')->with('success','Data Berhasil Dihapus');
    
    }
}
