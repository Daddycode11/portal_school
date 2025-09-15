<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'student_number' => 'administrator',
                'major' => 'admin',
                'sex' => 'F',
                'course' => 'admin',
                'year' => 'admin',
                'password' => Hash::make('Admin@123'), // ✅ stronger password
                'user_role' => 'admin',
            ],
            [
                'name' => 'Santos, Juan Miguel',
                'student_number' => '15-SC-2264',
                'major' => 'SC_BSIT',
                'sex' => 'M',
                'course' => 'CHMBAC',
                'year' => 'THIRD YEAR',
                'password' => Hash::make('Client@123'),
                'user_role' => 'client',
            ],
            [
                'name' => 'Reyes, Maria Clara Dela Cruz',
                'student_number' => '15-SC-2121',
                'major' => 'SC_BSIT',
                'sex' => 'F',
                'course' => 'CHMBAC',
                'year' => 'THIRD YEAR',
                'password' => Hash::make('Client@123'),
                'user_role' => 'client',
            ],
            // 👉 Repeat for the rest of your clients with Hash::make('Client@123')
        ];

        foreach ($users as $userData) {
            User::updateOrCreate(
                ['student_number' => $userData['student_number']], // avoids duplicates
                $userData
            );
        }
    }
}
