<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder {
    public function run(): void {
        DB::table('books')->insert([
            ['title' => 'Bumi', 'category' => 'Fiksi', 'isbn' => '9786020301123', 'publication_year' => 2014, 'stock' => 10, 'author_id' => 1, 'publisher_id' => 1],
            ['title' => 'Laskar Pelangi', 'category' => 'Novel', 'isbn' => '9789793062792', 'publication_year' => 2005, 'stock' => 5, 'author_id' => 2, 'publisher_id' => 2],
        ]);
    }
}