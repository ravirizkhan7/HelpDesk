<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'id' => 1,
            'name' => 'admin',
            'keterangan' => 'Administrator with full access',
        ]);

        Level::create([
            'id' => 2,
            'name' => 'kabid',
            'keterangan' => 'Head of Division with elevated access',
        ]);

        Level::create([
            'id' => 3,
            'name' => 'pj',
            'keterangan' => 'Person in Charge with standard access',
        ]);

        Level::create([
            'id' => 4,
            'name' => 'teknisi',
            'keterangan' => 'Technician with limited access',
        ]);

        Level::create([
            'id' => 5,
            'name' => 'user',
            'keterangan' => 'Regular User with basic access',
        ]);

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('admin123'),
        //     'level_id' => 1,
        // ]);
    }
}
