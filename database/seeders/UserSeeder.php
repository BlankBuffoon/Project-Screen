<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create(
            [
                'name' => 'Root Administrator',
                'email' => 'admin@projectscreen.ru',
                'email_verified_at' => null,
            ]
        );
    }
}
