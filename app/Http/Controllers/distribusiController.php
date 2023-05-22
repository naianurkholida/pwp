<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class distribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= DB::table('distribusi_alat')->get();
        $active = 'data_distribusi';
        return view('data.dataDistribusi', compact('data', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $petugas = DB::table('users')->get();
        $barang = DB::table('stok_barang')->get();
        $active = 'distribusi';
        return view('distribusi.index', compact('petugas', 'active', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->request);
        try{
            $create = DB::table('distribusi_alat')->insert([
                'nama_pemohon'=>$request['nama_pemohon'],
                'ket_kebutuhan' => $request['ket_kebutuhan'],
                'kelas'=>$request['kelas'],
                'tgl_distribusi'=>$request['tgl_distribusi'],
                'kode_barang'=>$request['kode_barang'],
                'userid'=>$request['userid'],
                'jumlah_distribusi'=>$request['jumlah_distribusi'],
            ]);
            return redirect('/')->with('succes', 'Pendistribusian Telah Berhasil');
        }catch(QueryException $ex){
            return redirect('/')->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        $active = 'data_distribusi';
        return view('data.dataDistribusi', compact('active'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
