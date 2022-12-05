<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678')
            ],

            [
                
                'name' => 'Sok Nev',
                'email' => 'soknevweb8@gmail.com',
                'password' => bcrypt('12345678')
            ],
            
            [
                'name' => 'Phy Lymann',
                'email' => 'lymannphy9@gmail.com',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}