<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GroupContact;

class GroupContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        GroupContact::create([
            'name' => 'VIP Clients',
            'user_id' => 1,
        ]);

        GroupContact::create([
            'name' => 'Regular Clients',
            'user_id' => 2,
        ]);
    }
}
