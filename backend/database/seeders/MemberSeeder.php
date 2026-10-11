<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder {
    public function run(): void {
        DB::table('members')->insert([
            ['name' => 'Ali', 'email' => 'ali@mail.com', 'phone' => '081234567', 'address' => 'Jl. Merdeka No. 10'],
            ['name' => 'Budi', 'email' => 'budi@mail.com', 'phone' => '081987654', 'address' => 'Jl. Sudirman No. 25'],
        ]);
    }
}