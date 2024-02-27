<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();

        User::create([
            'fullname' => 'kepo',
            'username' => 'kepo',
            'email' => 'eeeeee',
            'role' => "user",
            'noTelpon' => "1234567892341",
            'password' => "12345",
        ]);

        $this->call([
            GameSeeder::class,
            JasaSeeder::class,
            ProductSeeder::class,
            roleSeeder::class,
            RolePermisSeeder::class
        ]);
    }
}
