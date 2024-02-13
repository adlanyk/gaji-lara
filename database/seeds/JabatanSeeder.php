<?php

use App\Jabatan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
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
            'nama' => 'IT Developer Programmer',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'HRD',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Accounting',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'Manager',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'nama' => 'IT Support',
            'aktif' => 'Y',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
           
        ];
    Jabatan::insert($data);
    }
}
