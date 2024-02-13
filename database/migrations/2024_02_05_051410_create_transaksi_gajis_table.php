<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_gajis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_karyawan');
            $table->date('tgl_gaji');
            $table->integer('pendapatan');
            $table->integer('potongan');
            $table->integer('gaji_bersih');
            $table->timestamp('waktu_input');
            $table->integer('id_pengguna_input');
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
        Schema::dropIfExists('transaksi_gajis');
    }
}
