<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Penjualan;
use App\Models\Stok;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['penjualans']= Penjualan::all();
        return view('penjualan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['penjualans']= Penjualan::all();
        $data['stoks']= Stok::where('jenis', '=', 'Makanan')->get();
        $data['members']= Member::all();
        return view('penjualan.create', $data);
    }

    public function createminuman()
    {

        $data['penjualans']= Penjualan::all();
        $data['stoks']= Stok::where('jenis', '=', 'Minuman')->get();
        $data['members']= Member::all();
        return view('penjualan.createmn', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barangk = new Penjualan();
        $barangk->stok_id = $request->stok_id;
        $barangk->jumlah = $request->jumlah;
        $barangk->member_id = $request->member_id;
        $barangk->akun_id = $request->akun_id;
        $barangk->save();
        return redirect()->route("penjualans.index");
    }
    public function storeminuman(Request $request)
    {
        $barangk = new Penjualan();
        $barangk->stok_id = $request->stok_id;
        $barangk->jumlah = $request->jumlah;
        $barangk->member_id = $request->member_id;
        $barangk->akun_id = $request->akun_id;
        $barangk->save();
        return redirect()->route("penjualans.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penjualan::destroy($id);
        return redirect()->route('penjualans.index')->with('success','Data Berhasil Dihapus');
    
    }
}
