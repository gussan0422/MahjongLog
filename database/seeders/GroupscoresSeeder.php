<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupscoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groupscores')->insert([
            'user01_id' => '1',
            'user02_id' => '2',
            'user03_id' => '3',
            'user04_id' => '4',
            'sumgamescore01' => '10',
            'sumgamescore02' => '-10',
            'sumgamescore03' => '20',
            'sumgamescore04' => '-20',
        ]);
        
        DB::table('groupscores')->insert([
            'user01_id' => '1',
            'user02_id' => '2',
            'user03_id' => '3',
            'user04_id' => '4',
            'sumgamescore01' => '50',
            'sumgamescore02' => '-50',
            'sumgamescore03' => '15',
            'sumgamescore04' => '-15',
        ]);
    }
}
