<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $roles = [
            [ 'title' => 'Moderator', 'slug' => 'Moderator', 'status' => 1 ],
            [ 'title' => 'Editor', 'slug' => 'Editor', 'status' => 1 ],
            [ 'title' => 'Member', 'slug' => 'Member', 'status' => 1 ],
           
            
            
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
