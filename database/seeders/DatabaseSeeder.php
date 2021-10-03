<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        $user = User::factory()->create([
            'name' => "JohnJoe"
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        Post::factory(30)->create();
    }
}
