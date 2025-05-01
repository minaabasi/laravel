<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Role;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(BlogSeeder::class);
        Blog::factory(5)->create();
        Role::factory(5)->create();
        $blogs = Blog::all();

    // برای هر پست، بین ۱ تا ۵ کامنت بساز
    

    $this->call(UserSeeder::class);
        
    }
}
