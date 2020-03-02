<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'tb_petugas_srh';

    protected $primarykey = 'tb_petugas_srh';

    protected $fillable = [
        'id_petugas_srh',
        'nama_petugas_srh',
        'username_srh',
        'password_srh',
        'level_srh'
    ];

    public $timestamp = false;
}
