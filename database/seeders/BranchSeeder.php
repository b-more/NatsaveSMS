<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Branch::create([
            'name' => 'Lusaka Main',
            'location' => 'Cairo Road, Lusaka',
            'phone' => '0211223344',
            'email' => 'lusaka.main@bank.com',
        ]);

        Branch::create([
            'name' => 'Kitwe Branch',
            'location' => 'President Avenue, Kitwe',
            'phone' => '0212266677',
            'email' => 'kitwe.branch@bank.com',
        ]);

        Branch::create([
            'name' => 'Livingstone Branch',
            'location' => 'Mosi-Oa-Tunya Road, Livingstone',
            'phone' => '0213234567',
            'email' => 'livingstone.branch@bank.com',
        ]);

        Branch::create([
            'name' => 'Ndola Branch',
            'location' => 'Broadway Avenue, Ndola',
            'phone' => '0212300123',
            'email' => 'ndola.branch@bank.com',
        ]);
    }
}
