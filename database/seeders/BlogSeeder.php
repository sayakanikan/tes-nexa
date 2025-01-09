<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            "title" => "What Is The Best Coffee?",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, adipisci! Velit animi nam commodi maiores labore.",
        ]);
    }
}
