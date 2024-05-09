<?php

namespace Database\Seeders;

use App\Models\Cat;
use App\Models\User; // Add this line to import the Cat model
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        $this->call([
            CatSeeder::class,
        ]);
    }
}
