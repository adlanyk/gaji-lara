<?php

use Carbon\Carbon;
use App\RincianTransaksiGaji;
use Illuminate\Database\Seeder;

class RincianTransaksiGajiSeeder extends Seeder
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
            'id_transaksi_gaji' => '1602290006',
            'id_perkiraan' => '1',
            'jumlah' => '100000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'id_transaksi_gaji' => '1602290006',
            'id_perkiraan' => '2',
            'jumlah' => '20000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'id_transaksi_gaji' => '1602290006',
            'id_perkiraan' => '3',
            'jumlah' => '15000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
           
        ];
    RincianTransaksiGaji::insert($data);
    }
}
