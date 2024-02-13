<?php

use App\MenuAkses;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenuAksesSeeder extends Seeder
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
            'id_menu' => '1',
            'id_pengguna_grup' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'id_menu' => '1',
            'id_pengguna_grup' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
        ];
    MenuAkses::insert($data);
    }
}
