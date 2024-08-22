<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // User::factory()->count(10)->create();
        User::factory()->create([
            'first_name' => 'Test User',
            'email' => 'test@example.com',
            "password"=>'123456',
             "admin"=>1,
        ]);
    }

  
}
