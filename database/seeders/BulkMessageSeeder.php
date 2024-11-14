<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BulkMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        BulkSms::create([
            'user_id' => 1,
            'department_id' => 1,
            'sender_id' => 1,
            'message' => 'Hello VIP clients!',
            'recipients' => '1234567890,0987654321',
            'status' => 'sent',
            'error_message' => null,
            'scheduled_at' => now()->addHours(1),
            'sent_at' => now(),
            'total_recipients' => 2,
            'delivered_count' => 2,
            'failed_count' => 0,
            'message_id' => 'msg_123',
        ]);

        BulkSms::create([
            'user_id' => 2,
            'department_id' => 2,
            'sender_id' => 2,
            'message' => 'Important update for regular clients.',
            'recipients' => '1122334455,5566778899',
            'status' => 'failed',
            'error_message' => 'Network issue',
            'scheduled_at' => now()->addHours(2),
            'sent_at' => null,
            'total_recipients' => 2,
            'delivered_count' => 0,
            'failed_count' => 2,
            'message_id' => 'msg_456',
        ]);
    }
}
