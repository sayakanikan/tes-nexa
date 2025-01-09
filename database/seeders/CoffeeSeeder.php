<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coffee::create([
            "name" => "Caramelicious",
            "price" => "29.00",
            "item_sold" => "390"
        ]);
        
        Coffee::create([
            "name" => "Hazelnut Heaven",
            "price" => "29.00",
            "item_sold" => "300"
        ]);

        Coffee::create([
            "name" => "Maple Magic",
            "price" => "29.00",
            "item_sold" => "120"
        ]);
    }
}
