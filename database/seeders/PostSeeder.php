<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'title' => 'Salom',
            'content' => 'Bu test uchun',
        ]);
        Post::create([
            'user_id' => 1,
            'title' => '1',
            'content' => 'Bu test uchun',
        ]);
        Post::create([
            'user_id' => 1,
            'title' => 'vbdksjv',
            'content' => 'Bu test uchun',
        ]);
        Post::create([
            'user_id' => 1,
            'title' => ',.fzdnblknfskb',
            'content' => 'Bu test uchun',
        ]);
    }
}
