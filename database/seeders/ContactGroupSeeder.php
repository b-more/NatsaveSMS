<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactGroup;

class ContactGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        ContactGroup::create([
            'name' => 'VIP Clients',
            'description' => 'High-value clients for exclusive notifications.'
        ]);

        ContactGroup::create([
            'name' => 'Regular Customers',
            'description' => 'General notifications for regular',
        ]);

        ContactGroup::create([
            'name' => 'Marketing Campaigns',
            'description' => 'Contacts for marketing and promotional campaigns.'
        ]);

        ContactGroup::create([
            'name' => 'Internal Staff',
            'description' => 'Group for sending internal announcements and updates.'
        ]);
    }
}
