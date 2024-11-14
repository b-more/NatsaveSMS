<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DepartmentSenderId;

class DepartmentSenderIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DepartmentSender::create([
                'department_id' => 1,
                'sender_id' => 1,
            ]);

            DepartmentSender::create([
                'department_id' => 2,
                'sender_id' => 2,
            ]);
        }
    }
}
