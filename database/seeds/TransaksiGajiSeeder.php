<?php

use Carbon\Carbon;
use App\TransaksiGaji;
use Illuminate\Database\Seeder;

class TransaksiGajiSeeder extends Seeder
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
            'id_karyawan' => '2',
            'tgl_gaji' => '2023-01-29',
            'pendapatan' => '4000000',
            'potongan' => '200000',
            'gaji_bersih' => '3800000',
            'waktu_input' => '2023-01-29 06:26:32',
            'id_pengguna_input' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
           
           
        ];
    TransaksiGaji::insert($data);
    }
}
