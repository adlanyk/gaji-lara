<?php

use App\Pengguna;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
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
            'id_pengguna_grup' => '1',
            'username' => 'Super admin',
            'password' => '17c4520f6cfd1ab53d8745e84681eb49',
            'nama' => 'Mohammad Rizki',
            'foto' => 'mohammad_rizki.jpg',
            'blokir' => 'N',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
           
        ];
    Pengguna::insert($data);
    }
}
