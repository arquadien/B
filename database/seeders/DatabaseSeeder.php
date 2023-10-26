<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        $categories=Category::factory(2)->create();

        // User::factory(10)->create()->each(function($user) use ($categories) {
        //     Post::factory(rand(1,4))->create([
        //         'user_id'=>$user->id,
        //         'categorie_id'=>($categories->random(1)->first())->id
        //     ]);
        // });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
