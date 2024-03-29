<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create(["name" => "Nikita"]);
        $category = Category::factory()->create(
            ["name" => "Work", "slug" => "work"]
        );

        Post::factory(3)->create(
            ["user_id" => $user->id, "category_id" => $category->id]
        );

        Post::factory(2)->create();
    }
}
