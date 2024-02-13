<?php

use App\Perkiraan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PerkiraanSeeder extends Seeder
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
            'kode' => '001',
            'nama' => 'Gaji Pokok',
            'aktif' => 'Y',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '002',
            'nama' => 'Lembur',
            'aktif' => 'Y',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '003',
            'nama' => 'Uang Makan',
            'aktif' => 'Y',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '004',
            'nama' => 'Uang Transport',
            'aktif' => 'Y',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '005',
            'nama' => 'Tunjangan Keluarga',
            'aktif' => 'Y',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '006',
            'nama' => 'Tunjangan Kesehatan',
            'aktif' => 'Y',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '007',
            'nama' => 'THR',
            'aktif' => 'Y',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '008',
            'nama' => 'Bonus',
            'aktif' => 'Y',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '101',
            'nama' => 'Pajak',
            'aktif' => 'Y',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '102',
            'nama' => 'Koperasi',
            'aktif' => 'Y',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '103',
            'nama' => 'Utang Pinjam',
            'aktif' => 'Y',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '104',
            'nama' => 'Asuransi Jiwa',
            'aktif' => 'Y',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'kode' => '105',
            'nama' => 'Jamsostek',
            'aktif' => 'Y',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            
        ];
    Perkiraan::insert($data);
    }
}
