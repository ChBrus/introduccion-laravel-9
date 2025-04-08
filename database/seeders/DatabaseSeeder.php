<?php

namespace Database\Seeders;

use App\Models\Post;
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

        User::factory()->create([
            'name' => 'ChBrus',
            'email' => 'chbrus@example.com',
            'password' => bcrypt('contraseña_mamalona/123')
        ]);

        User::factory(2)->create();

        Post::factory(80)->create();
    }
}
