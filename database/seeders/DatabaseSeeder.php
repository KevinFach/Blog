<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'kevin@example.com'],
            [
                'name' => 'Kevin Chi',
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
            ]
        );

        Category::factory(10)->create();
    }
}
