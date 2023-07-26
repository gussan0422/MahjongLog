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
            'user02_id' => '3',
            'user03_id' => '4',
            'user04_id' => '5',
            'sumgamescore01' => '0',
            'sumgamescore02' => '0',
            'sumgamescore03' => '0',
            'sumgamescore04' => '0',
        ]);
    }
}
