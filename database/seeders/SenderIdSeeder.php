<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SenderId;

class SenderIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Sender::create([
            'sender_id' => 'BankNotify',
            //'is_whitelisted' => 1,
        ]);

        Sender::create([
            'sender_id' => 'NatsaveBank',
            //'is_whitelisted' => 1,
        ]);

        Sender::create([
            'sender_id' => 'CustomerCare',
            //'is_whitelisted' => 1,
        ]);

        Sender::create([
            'sender_id' => 'AlertZambia',
            //'is_whitelisted' => 1,
        ]);
    }
}
