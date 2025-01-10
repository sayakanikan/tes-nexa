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
        $data = [
            [
                "title" => "What Is The Best Coffee?",
                "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, adipisci! Velit animi nam commodi maiores labore.",
                "image" => "blog-coffee.jpg"
            ],
            [
                "title" => "The Impact Of Coffee On Our Health",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, quisquam. Minus, molestias quia.",
                "image" => "blog-health.jpg"
            ],
            [
                "title" => "5 Reasons Why You Should Drink More Coffee",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, voluptas. Officia, suscipit.",
                "image" => "blog-drink.jpg"
            ]
        ];

        foreach ($data as $blog) {
            Blog::create($blog);
        }
    }
}
