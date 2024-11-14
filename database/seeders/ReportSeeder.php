<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Report::create([
            'user_id' => 1,
            'report_type' => 'Daily Usage',
            'content' => 'Summary of daily usage by department and user.',
            'generated_at' => now(),
        ]);

        Report::create([
            'user_id' => 2,
            'report_type' => 'Monthly Summary',
            'content' => 'Summary of monthly SMS activity.',
            'generated_at' => now(),
        ]);
    }
}
