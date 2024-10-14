<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sports')->insert([
            ['name' => 'Basketball', 'max_participants' => 10],
            ['name' => 'Volleyball', 'max_participants' => 12],
            ['name' => 'Badminton', 'max_participants' => 4],
            ['name' => 'Takraw', 'max_participants' => 6],
            ['name' => 'Mobile Legends', 'max_participants' => 6],
            ['name' => 'Call of Duty', 'max_participants' => 6],
            // Add more sports here
        ]);
    }
    
}
