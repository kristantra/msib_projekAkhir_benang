<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FabricType;
use App\Models\Product;
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

        // Create 4 fabric types
        FabricType::factory()->count(4)->create()->each(function ($fabricType) {
            // For each fabric type, create 50 products
            Product::factory()->count(50)->create(['fabric_type_id' => $fabricType->id]);
        });
    }
}
