<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quote::create([
            "quote" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto recusandae officia, vitae ipsam aliquid a?",
            "author" => "Sarah Anderson"
        ]);
    }
}
