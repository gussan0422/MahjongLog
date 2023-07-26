<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'gussan',
            'email' => 'gussan@mail',
            'password' => '1401',
        ]);
        
        DB::table('users')->insert([
            'name' => 'gucci',
            'email' => 'gucci@mail',
            'password' => '34701401k',
        ]);
    }
}
