<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::create([
            'user_id' => 1,
            'title' => 'System Update',
            'message' => 'Scheduled maintenance will occur at midnight.',
            'status' => 'unread',
            'created_at' => now(),
        ]);

        Notification::create([
            'user_id' => 2,
            'title' => 'New Feature',
            'message' => 'A new bulk messaging feature is now available.',
            'status' => 'unread',
            'created_at' => now(),
        ]);
    }
}
