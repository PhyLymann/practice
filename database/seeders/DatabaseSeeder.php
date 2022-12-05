<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $admin =\App\Models\Admin::where('email', 'lymannphy9@gmail.com')->first();

        if(! $admin)
         {
            // Create defualt administrator account
            \App\Models\Admin::factory()->create([
                'name' => 'Administrator',
                'email'=> 'lymannphy9@gmail.com',
                'password'=> Hash::make('123456789')
            ]);
        }   
        $this->call(categoriesTableSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
