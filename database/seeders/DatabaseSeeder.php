<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\User::factory()->create([
            'name'=> 'Charles Motaroki',
            'role_id'=>'1',
            'email'=> 'charles@motaroki.com',
            'password'=> \bcrypt('password'),
        ]);
    }
}
