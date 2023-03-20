<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= DB::table('pinjam_alat')->where('status','Dipinjam')->get();
        $active = 'data_pinjam';
        return view('data.dataPinjam', compact('data', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $petugas = DB::table('users')->get();
        $barang = DB::table('stok_barang')->get();
        $active = 'pinjam';
        return view('pinjam.index', compact('petugas', 'active', 'barang'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $create = DB::table('pinjam_alat')->insert([
                'nama_peminjam'=>$request['nama_peminjam'],
                'kelas'=>$request['kelas'],
                'tanggal_pinjam'=>$request['tanggal_pinjam'],
                'jam_pinjam'=>$request['jam_pinjam'],
                'jam_max_pinjam'=>$request['jam_max_pinjam'],
                'nomor_tlp'=>$request['nomor_tlp'],
                'guru_mapel'=>$request['guru_mapel'],
                'ket_pinjam'=>$request['ket_pinjam'],
                'userid'=>$request['userid'],
                'kode_barang'=>$request['kode_barang'],
                'jumlah_pinjam'=>$request['jumlah_pinjam'],
            ]);
            return redirect('/dataPinjam')->with('success', 'pinjam alat berhasil di tambah');
        }catch(\Illuminate\Database\QueryException $ex){
            return redirect('/dataPinjam')->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $active = 'data_pinjam';
        return view('data.dataPinjam', compact( 'active'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kode_pinjam)
    {
        $petugas = DB::table('users')->get();
        $barang = DB::table('stok_barang')->get();
        $active = 'data_pinjam';
        $edit_pinjam = DB::table('pinjam_alat')->where('kode_pinjam', $kode_pinjam)->first();
        return view('pinjam.editPinjam', compact('edit_pinjam', 'petugas', 'barang','active'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_pinjam)
    {
        
        $edit_pinjam = DB::table('pinjam_alat')->where('kode_pinjam',$kode_pinjam )->first();
        $affected = DB::table('pinjam_alat')->where('kode_pinjam', $kode_pinjam)->update([
            'kode_pinjam'=>$request->kode_pinjam,
            'nama_peminjam'=>$request->nama_peminjam,
            'kelas'=>$request->kelas,
            'jam_pinjam'=>$request->jam_pinjam,
            'jam_max_pinjam'=>$request->jam_max_pinjam,
            'nomor_tlp'=>$request->nomor_tlp,
            'guru_mapel'=>$request->guru_mapel,
            'ket_pinjam'=>$request->ket_pinjam,
            'userid'=>$request->userid,
            'kode_barang'=>$request->kode_barang,
            'jumlah_pinjam'=>$request->jumlah_pinjam,

        ]);
        return redirect('/dataPinjam')->with('succes', 'Data Pinjam Alat Berhasil di Edit');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function kembali($kode_pinjam)
    {
        DB::table('pinjam_alat')->where('kode_pinjam',$kode_pinjam)->update([
            'status'=>'Sudah Kembali',

        ]);
        return redirect('/dataPinjam')->with('success','Barang Berhasil Dikembalikan');
    }
}
