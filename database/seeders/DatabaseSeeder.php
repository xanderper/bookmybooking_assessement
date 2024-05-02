<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client; // Add this line to import the Client model
use App\Models\Property; // Add this line to import the Property model
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);


        /* Client Factory */
        Client::factory()->count(2)->create();

        /* Property Factory */
        Property::factory()->count(10)->create();

    }
}
