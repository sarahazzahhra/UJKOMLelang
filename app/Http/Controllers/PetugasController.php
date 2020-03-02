<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table petugas
    	$petugas = DB::table('tb_petugas_srh')->get();
 
    	// mengirim data petugas ke view index
    	return view('back.tab_petugas',['petugas' => $petugas]);
 
    }

    public function add()
    {
        return view('back.add_petugas');
    }

    public function store(Request $request)
    {
	DB::table('tb_petugas_srh')->insert([
		'id_petugas_srh' => $request->id_petugas,
		'nama_petugas_srh' => $request->nama_petugas,
		'username_srh' => $request->username,
        'password_srh' => $request->password,
        'level_srh' => $request->level
	]);
	
	return redirect('/tab_petugas');
 
    }
}
