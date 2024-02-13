<?php

use App\PenggunaGrup;
use Illuminate\Database\Seeder;

class PenggunaGrupSeeder extends Seeder
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
            'nama' => 'Superadmin',
            ],
            [
            'nama' => 'Admin',
            ],
            [
            'nama' => 'Marketing',
            ],
        ];
    PenggunaGrup::insert($data);
    }
}
