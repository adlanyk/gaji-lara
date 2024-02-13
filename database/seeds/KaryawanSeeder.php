<?php

use App\Karyawan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
            'id_jabatan' => '1',
            'nama' => 'Administrator',
            'alamat' => 'Jl. Surya Kencana',
            'no_telp' => '0811456245',
            'jk' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '1990-09-10',
            'email' => 'administrator@admin.com',
            'pendidikan' => 'S1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'id_jabatan' => '2',
            'nama' => 'Siti Nurani',
            'alamat' => 'Jl. Pajala',
            'no_telp' => '0813090102',
            'jk' => 'P',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '1991-02-10',
            'email' => 'sitinurani@admin.com',
            'pendidikan' => 'S1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'id_jabatan' => '2',
            'nama' => 'Yenda Purbadian',
            'alamat' => 'Jl. Cikini',
            'no_telp' => '085659543844',
            'jk' => 'P',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '1989-03-10',
            'email' => 'virus.piss@ymail.com',
            'pendidikan' => 'S3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'id_jabatan' => '3',
            'nama' => 'M. Idris Firdaus',
            'alamat' => 'Jl. Mawar',
            'no_telp' => '081308781209',
            'jk' => 'L',
            'tempat_lahir' => 'Makassar',
            'tgl_lahir' => '1981-02-11',
            'email' => 'idris.firdaus@gmail.com',
            'pendidikan' => 'D3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
           
        ];
    Karyawan::insert($data);
    }
}
