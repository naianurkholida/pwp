<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $active = 'barang';
       return view('barang.index', compact('active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request->file('foto')->store('post-images');
        try{
            $resorce = $request->file('foto');
            $name = $resorce->getClientOriginalName();
            $resorce->move(\base_path()."/public/images", $name);
            $save = DB::table('stok_barang')->insert([
                'kode_barang'=>$request['kode_barang'],
                'nama_barang'=>$request['nama_barang'],
                'stok'=>$request['stok'],
                'jenis_barang'=>$request['jenis_barang'],
                'satuan'=>$request['satuan'],
                'foto'=>$request->file('foto')->getClientOriginalName(),
                'path_foto'=>$path,
            ]);
            return redirect('/dataBarang')->with('success', 'Barang berhasil diinput');
        }catch(QueryException  $x){
            return back();
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = DB::table('stok_barang')->get();
        $active = 'dataBarang';
        return view('data.dataBarang', compact('active', 'data'));
        
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
    public function destroy(string $kode_barang)
    {
        $items = DB::table('stok_barang')->where('kode_barang', $kode_barang)->delete();
        return redirect('/dataBarang')->with('success', 'Barang berhasil dihapus');
    }
}
