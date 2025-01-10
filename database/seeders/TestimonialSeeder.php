<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            "testimonial" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto recusandae officia, vitae ipsam aliquid a?",
            "author" => "Sarah Anderson"
        ]);
    }
}
