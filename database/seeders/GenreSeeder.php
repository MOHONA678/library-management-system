<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $genres = [
            
            [ 'title' => 'Fiction', 'slug' => 'fiction', 'status' => 1 ],
            [ 'title' => 'Non-Fiction', 'slug' => 'non-fiction', 'status' => 1 ],
            [ 'title' => 'Mystery/Crime', 'slug' => 'mystery/crime', 'status' => 1 ],
            [ 'title' => 'Science', 'slug' => 'science', 'status' => 1 ],
            [ 'title' => 'History', 'slug' => 'history', 'status' => 1 ],

        ];
        
        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
