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
        User::truncate();
        Category::truncate();


         $user = User::factory()->create();
         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'category_id' => $family->id,
            'user_id' => $user->id,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat. Mollis aliquam ut porttitor leo a diam sollicitudin. Erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. In tellus integer feugiat scelerisque. Amet justo donec enim diam. Ultrices in iaculis nunc sed. Laoreet suspendisse interdum consectetur libero. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque.',
        ]);

        Post::create([
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'category_id' => $work->id,
            'user_id' => $user->id,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat. Mollis aliquam ut porttitor leo a diam sollicitudin. Erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. In tellus integer feugiat scelerisque. Amet justo donec enim diam. Ultrices in iaculis nunc sed. Laoreet suspendisse interdum consectetur libero. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque.',
        ]);
    }
}
