<?php

use Carbon\Carbon;
use App\Perusahaan;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
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
            'nama' => 'PT. Adlan Software Solution',
            'alamat' => 'Jl. Kerukunan Selatan BTP Makassar',
            'kode_pos' => '90246',
            'no_telp' => '041123456',
            'fax' => '0254956164',
            'email' => 'adlan@adlansolution.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
           
        ];
    Perusahaan::insert($data);
    }
}
