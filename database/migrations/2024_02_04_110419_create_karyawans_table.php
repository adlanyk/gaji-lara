<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jabatan');
            $table->char('nama',50);
            $table->text('alamat');
            $table->char('no_telp',25);
            $table->enum('jk',['L','P']);
            $table->char('tempat_lahir',30);
            $table->date('tgl_lahir');
            $table->char('email',50);
            $table->char('pendidikan',20);
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
        Schema::dropIfExists('karyawans');
    }
}
