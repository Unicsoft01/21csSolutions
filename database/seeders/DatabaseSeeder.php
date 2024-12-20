<?php

namespace Database\Seeders;

use App\Models\ServiceListing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'yakubmuhammed51@gmail.com',
        ]);

        
        ServiceListing::factory()->create([
            'service' => 'Test User',
            'description' => 'yakubmuhammed51@gmail.com',
        ]);
    }
}