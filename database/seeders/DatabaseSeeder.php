<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Database\Factories\ProductFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class
        ]);

        ProductFactory::new()->count(1000)->create();
    }
}
