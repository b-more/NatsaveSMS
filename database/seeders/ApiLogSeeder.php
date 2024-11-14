<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ApiLog;

class ApiLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApiLog::create([
            'api_user_id' => 1,
            'endpoint' => '/api/send-sms',
            'method' => 'POST',
            'request_data' => json_encode(['message' => 'Test Message', 'recipient' => '1234567890']),
            'response_data' => json_encode(['status' => 'success']),
            'status_code' => 200,
            'error_message' => null,
            'created_at' => now(),
        ]);

        ApiLog::create([
            'api_user_id' => 2,
            'endpoint' => '/api/schedule-sms',
            'method' => 'POST',
            'request_data' => json_encode(['message' => 'Scheduled Message', 'recipient' => '0987654321']),
            'response_data' => json_encode(['status' => 'queued']),
            'status_code' => 202,
            'error_message' => null,
            'created_at' => now(),
        ]);
    }
}
