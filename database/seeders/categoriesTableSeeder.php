<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
               'name' => 'Hu Peter',
            ],
            
            [
               'name' => 'Sok Nev',
            ],   
   
            [
               'name' => 'Keo Sey',
            ],   
   
            [
               'name' => 'Kim Channkacvey',
            ],   
   
            [
               'name' => 'Phillip',
            ],   
           ]);
    }
}
