<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
           
            [  'role_id' => 1, 'name' => 'admin', 'email' => 'admin@gmail.com', 'phone' => '01455934809' ,'password' => Hash::make('admin') ],
            
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
