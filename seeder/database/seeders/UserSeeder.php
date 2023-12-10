<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        User::create([
            'name' => 'Leena',
            'email' => 'leena@gmail.com',
            'password' => Hash::make('12345'),

        ]
    );

        User::create(
            [
                'name' => 'Ahmad',
                'email' => 'ahmad@gmail.com',
                'password' => Hash::make('12345'),

            ]
        );

        User::create(
            [
                'name' => 'salam',
                'email' => 'salam@gmail.com',
                'password' => Hash::make('12345'),

            ]
        );

        User::create(
            [
                'name' => 'mohammad',
                'email' => 'mohammad@gmail.com',
                'password' => Hash::make('12345'),

            ]
        );

        
    }
}
