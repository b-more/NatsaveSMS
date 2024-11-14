<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        // 1. Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@natsave.com',
            'password' => Hash::make('Admin.1234!!!!'),
            'role' => 'Admin',
            'department_id' => null, // Admin doesn't need department
            'branch_id' => null, // Admin doesn't need branch
            'is_active' => true,
        ]);

        // 2. Department Head
        User::create([
            'name' => 'Department Head',
            'email' => 'department.head@natsave.com',
            'password' => Hash::make('Admin.1234!!!!'),
            'role' => 'Department Head',
            'department_id' => 1, // Assuming department_id 1 exists
            'branch_id' => null,
            'is_active' => true,
        ]);

        // 3. Branch User
        User::create([
            'name' => 'Branch User',
            'email' => 'branch.user@natsave.com',
            'password' => Hash::make('Admin.1234!!!!'),
            'role' => 'Branch User',
            'department_id' => 1, // Assuming department_id 1 exists
            'branch_id' => 1, // Assuming branch_id 1 exists
            'is_active' => true,
        ]);

        // 4. API User
        User::create([
            'name' => 'API User',
            'email' => 'api.user@natsave.com',
            'password' => Hash::make('Admin.1234!!!!'),
            'role' => 'API User',
            'department_id' => null,
            'branch_id' => null,
            'api_key' => Str::random(32),
            'api_secret' => Str::random(64),
            'is_active' => true,
        ]);
    }
}
