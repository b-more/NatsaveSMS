<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\User;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Contacts::create([
            'name' => 'Alice Mwansa',
            'phone_number' => '0977123456',
            'email' => 'alice.mwansa@example.com',
            'contact_group_id' => 1,
            'created_by' => 1,
        ]);

        Contacts::create([
            'name' => 'John Zulu',
            'phone_number' => '0967123456',
            'email' => 'john.zulu@example.com',
            'contact_group_id' => 2,
            'created_by' => 2,
        ]);

        Contacts::create([
            'name' => 'Linda Phiri',
            'phone_number' => '0957123456',
            'email' => 'linda.phiri@example.com',
            'contact_group_id' => 1,
            'created_by' => 1,
        ]);

        Contacts::create([
            'name' => 'Michael Banda',
            'phone_number' => '0978234567',
            'email' => 'michael.banda@example.com',
            'contact_group_id' => 2,
            'created_by' => 2,
        ]);

        Contacts::create([
            'name' => 'Nchimunya Mulenga',
            'phone_number' => '0968234567',
            'email' => 'nchimunya.mulenga@example.com',
            'contact_group_id' => 1,
            'created_by' => 1,
        ]);
    }
}
