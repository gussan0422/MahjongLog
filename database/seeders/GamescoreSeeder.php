<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamescoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gamescores')->insert([
            'user01_id' => '1',
            'user02_id' => '3',
            'user03_id' => '4',
            'user04_id' => '5',
            'groupscore_id' => '1',
            'gamescore01' => '50',
            'gamescore02' => '25',
            'gamescore03' => '-15',
            'gamescore04' => '-60',
        ]);
    }
}
