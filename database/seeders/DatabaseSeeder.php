<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
        User::factory(80)->create();
        $this->call(IndoRegionSeeder::class);
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'password' => bcrypt('password'),
            'level' => 'super',
            'email' => 'test@example.com',
        ]);
    }
}