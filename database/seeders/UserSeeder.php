<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::create(
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>'123456',
            ]
        );
    }
}
