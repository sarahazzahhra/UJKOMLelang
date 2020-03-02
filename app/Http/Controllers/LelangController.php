<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LelangController extends Controller
{
    public function index()
    {
    	$lelang = DB::table('tb_lelang_srh')->get();
 
    	return view('back.tab_lelang',['lelang' => $lelang]);
 
    }

    public function add()
    {
        return view('back.add_lelang');
    }

    public function store(Request $request)
    {
	DB::table('tb_lelang_srh')->insert([
		'id_lelang_srh' => $request->id_lelang,
		'id_barang_srh' => $request->id_barang,
		'tgl_lelang_srh' => $request->tgl_lelang,
        'harga_akhir_srh' => $request->harga_akhir,
        'id_user_srh' => $request->id_user,
        'id_petugas_srh' => $request->id_petugas,
        'status'=> $request->stat
	]);
	
	return redirect('/tab_lelang');
 
    }

    public function edit($id)
    {
	$lelang = DB::table('tb_lelang_srh')->where('id_lelang_srh',$id)->get();
	
	return view('back.edit_lelang',['lelang' => $lelang]);
 
    }

    public function update(Request $request)
    {
	DB::table('tb_lelang_srh')->where('id_lelang_srh',$request->id)->update([
		'id_lelang_srh' => $request->id_lelang,
		'id_barang_srh' => $request->id_barang,
		'tgl_lelang_srh' => $request->tgl_lelang,
        'harga_akhir_srh' => $request->harga_akhir,
        'id_user_srh' => $request->id_user,
        'id_petugas_srh' => $request->id_petugas,
        'status'=> $request->stat
	]);

	return redirect('/tab_lelang');
    }

    public function delete($id)
	{
	DB::table('tb_lelang_srh')->where('id_lelang_srh',$id)->delete();
		
	return redirect('/tab_lelang')->with('sukses','data berhasil dihapus');
    }
    
    public function autocomplete(Request $request)
    {
        $data = Item::select("id_barang_srh")
                ->where("id_barang_srh","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);
    }
}
