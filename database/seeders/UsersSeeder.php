<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'taniguchi',
            'email' => 'taniguchi@mail',
            'password' => Hash::make('taniguchi3470'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'awrg5300',
            'email' => 't.gussan0422@outlook.com',
            'password' => Hash::make('v6Y7N9TL'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'gussan',
            'email' => 'gussan@mail',
            'password' => Hash::make('34701401k'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'gucci',
            'email' => 'gucci@mail',
            'password' => Hash::make('14013470k'),
        ]);
    }
}
