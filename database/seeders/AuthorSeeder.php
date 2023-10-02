<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $authors=[
        ['name' => 'Robindronath Thakur', 'status' => 1],
        ['name' => 'Kazi Nuzrul Islam', 'status' => 1],
       ]; 

       foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
