<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder {
    public function run(): void {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye', 'bio' => 'Penulis Indonesia', 'birth_date' => '1979-05-21'],
            ['name' => 'Andrea Hirata', 'bio' => 'Penulis Laskar Pelangi', 'birth_date' => '1967-10-24'],
        ]);
    }
}