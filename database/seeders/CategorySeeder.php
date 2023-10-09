<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categorys = [

            [ 'title' => 'Fiction Subgenres', 'slug' => 'Fiction Subgenres', 'status' => 1 ],
            [ 'title' => 'Non-Fiction Categories', 'slug' => 'Non-Fiction Categories', 'status' => 1 ],
            [ 'title' => 'Mystery/Crime Categories', 'slug' => 'Mystery/Crime Categories', 'status' => 1 ],
            
            
        ];

        foreach ($categorys as $category) {
            category::create($category);
        }
    }
}
