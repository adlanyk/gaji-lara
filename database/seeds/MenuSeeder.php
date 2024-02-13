<?php

use App\Menu;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
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
            'nama' => 'Data Master',
            'uri' => '#',
            'id_menu_induk' => '0',
            'urutan' => '1',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Transaksi',
            'uri' => '#',
            'id_menu_induk' => '0',
            'urutan' => '2',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Laporan',
            'uri' => '#',
            'id_menu_induk' => '0',
            'urutan' => '3',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Back Office',
            'uri' => '#',
            'id_menu_induk' => '0',
            'urutan' => '4',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Perkiraan',
            'uri' => '/master_data/perkiraan',
            'id_menu_induk' => '1',
            'urutan' => '5',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Jabatan',
            'uri' => '/master_data/jabatan',
            'id_menu_induk' => '1',
            'urutan' => '6',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Karyawan',
            'uri' => '/master_data/karyawan',
            'id_menu_induk' => '1',
            'urutan' => '7',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Penggajian',
            'uri' => '/transaksi/penggajian',
            'id_menu_induk' => '2',
            'urutan' => '8',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Rekap Gaji Karyawan',
            'uri' => '/laporan/rekap_gaji_karyawan',
            'id_menu_induk' => '3',
            'urutan' => '9',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Rincian Gaji Karyawan',
            'uri' => '/laporan/rincian_gaji_karyawan',
            'id_menu_induk' => '3',
            'urutan' => '10',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Manajemen Menu',
            'uri' => '/back_office/manajemen_menu',
            'id_menu_induk' => '4',
            'urutan' => '11',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Pengguna grup',
            'uri' => '/back_office/pengguna_grup',
            'id_menu_induk' => '4',
            'urutan' => '12',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Pengguna',
            'uri' => '/back_office/pengguna',
            'id_menu_induk' => '4',
            'urutan' => '13',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
        ];
    Menu::insert($data);

    }
}
