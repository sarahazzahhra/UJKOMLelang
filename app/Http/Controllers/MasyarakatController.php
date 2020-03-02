<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
    	$masyarakat = DB::table('tb_masyarakat_srh')->get();
 
    	// mengirim data pegawai ke view index
    	return view('back.tab_masyarakat',['masyarakat' => $masyarakat]);
 
    }
}
