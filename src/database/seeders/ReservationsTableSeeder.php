<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'shop_id' => 1,
            'user_id' => 1,
            'reserved_date' => '2025-10-07',
            'reserved_time' => '17:00',
            'number_of_people' => '1',
        ]);
    }
}
