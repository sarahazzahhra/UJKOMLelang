<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    //
    public function index()
    {
    	$barang = DB::table('tb_barang_srh')->get();
 
    	return view('back.tab_barang',['barang' => $barang]);
 
    }

    public function add()
    {
        return view('back.add_barang');
    }

    public function store(Request $request)
    {
	DB::table('tb_barang_srh')->insert([
		'id_barang_srh' => $request->id_barang,
		'nama_barang_srh' => $request->nama_barang,
		'tgl_srh' => $request->tanggal,
        'harga_awal_srh' => $request->harga,
        'deskripsi_barang_srh' => $request->des
	]);
	
	return redirect('/tab_barang');
 
    }

    public function edit($id)
    {
	$barang = DB::table('tb_barang_srh')->where('id_barang_srh',$id)->get();
	
	return view('back.edit_barang',['barang' => $barang]);
 
    }

    public function update(Request $request)
    {
	
	DB::table('tb_barang_srh')->where('id_barang_srh',$request->id)->update([
		'id_barang_srh' => $request->id_barang,
		'nama_barang_srh' => $request->nama_barang,
		'tgl_srh' => $request->tanggal,
        'harga_awal_srh' => $request->harga,
        'deskripsi_barang_srh' => $request->des
	]);

	return redirect('/tab_barang');
	}
	
	public function delete($id)
	{
	DB::table('tb_barang_srh')->where('id_barang_srh',$id)->delete();
		
	return redirect('/tab_barang')->with('sukses','data berhasil dihapus');
	}
}
