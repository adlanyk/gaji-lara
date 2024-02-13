<?php

use App\Pengguna;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(PenggunaGrupSeeder::class);
        $this->call(PerkiraanSeeder::class);
        $this->call(PerusahaanSeeder::class);
        $this->call(KaryawanSeeder::class);
        $this->call(MenuAksesSeeder::class);
        $this->call(PenggunaSeeder::class);
        $this->call(RincianTransaksiGajiSeeder::class);
        $this->call(TransaksiGajiSeeder::class);
    }
}
