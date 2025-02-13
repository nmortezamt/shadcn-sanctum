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
        $users = ([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('UnicornsAreSweet'),
            ],[
                'name' => 'client',
                'email' => 'client@client.com',
                'password' => Hash::make('UnicornsAreSweet'),
            ],[
                'name' => 'staff',
                'email' => 'staff@staff.com',
                'password' => Hash::make('UnicornsAreSweet'),
            ],[
                'name' => 'Default',
                'email' => 'default@default.com',
                'password' => Hash::make('UnicornsAreSweet'),
            ],
        ]);
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
