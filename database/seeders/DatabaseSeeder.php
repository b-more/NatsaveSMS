<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BranchSeeder::class,
            DepartmentSeeder::class,
            UserSeeder::class,
            ContactGroupSeeder::class,
            //ContactSeeder::class,
            //SenderSeeder::class,
            // ApiUserSeeder::class,
            // SmsInboxSeeder::class,
            // SmsOutboxSeeder::class,
            // ScheduledSmsSeeder::class,
            // NotificationSeeder::class,
            // ReportSeeder::class,

        ]);
    }
}
