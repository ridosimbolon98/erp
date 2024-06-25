<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name'     => 'Developer',
            'email'    => 'admin@mail.dev',
            'password' => Hash::make('rahasia--'),
            'role'     => 1,
            'unit'     => 1,
            'jabatan'  => 'OWNER',
            'status'   => 1,
        ]);
    }
}
