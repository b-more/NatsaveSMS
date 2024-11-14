<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Department::create([
            'name' => 'Customer Service',
            'description' => 'Handles all customer inquiries and support.',
        ]);

        Department::create([
            'name' => 'Finance',
            'description' => 'Responsible for managing financial operations.',
        ]);

        Department::create([
            'name' => 'IT',
            'description' => 'Maintains and manages IT infrastructure and systems.',
        ]);

        Department::create([
            'name' => 'Compliance',
            'description' => 'Ensures adherence to regulatory and policy requirements.',
        ]);

        Department::create([
            'name' => 'Marketing',
            'description' => 'Oversees marketing strategies and customer engagement.',
        ]);
    }
}
