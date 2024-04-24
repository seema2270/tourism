<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $admin = new User();
        $admin->name = "Admin";
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('password');
        $admin->role = 'admin';
        $admin->save();

        $user = new User();
        $user->name = "User";
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('password');
        $user->role = 'user';
        $user->save();
    }
}
