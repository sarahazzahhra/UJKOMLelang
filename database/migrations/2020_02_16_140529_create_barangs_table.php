<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_barang_srh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang_srh');
            $table->string('tgl_srh');
            $table->string('harga_awal_srh');
            $table->string('deskripsi_barang_srh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
