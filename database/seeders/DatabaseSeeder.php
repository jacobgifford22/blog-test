<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;

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
            'name' => 'John Doe',
            'username' => 'johndoe'
        ]);

        $posts = Post::factory(20)->create([
            'user_id' => $user->id
        ]);

        foreach ($posts as $post)
        {
            Comment::factory(5)->create([
                'post_id' => $post->id
            ]);
        }
    }
}
