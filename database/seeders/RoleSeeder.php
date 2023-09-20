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
           
            [ 'title' => 'Administrator', 'slug' => 'administrator', 'status' => 1 ],
            [ 'title' => 'Admin', 'slug' => 'admin', 'status' => 1 ],
            [ 'title' => 'Moderator', 'slug' => 'moderator', 'status' => 1 ],
            
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
