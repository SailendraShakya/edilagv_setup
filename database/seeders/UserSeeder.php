<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@kotuko.it',
            'phone' => '9841398441',
            'status' => User::ACTIVE,
            'dob' => '1986-01-15',
            'password' => bcrypt('admin123'),
        ];

        $accountant = [
            'first_name' => 'account',
            'last_name' => 'account',
            'email' => 'account@kotuko.it',
            'phone' => '9841398441',
            'status' => User::ACTIVE,
            'dob' => '1986-01-15',
            'password' => bcrypt('admin123'),
        ];

        $inactiveUser = [
            'first_name' => 'account',
            'last_name' => 'account',
            'email' => 'inactive@kotuko.it',
            'phone' => '9841398441',
            'status' => User::INACTIVE,
            'dob' => '1986-01-15',
            'password' => bcrypt('admin123'),
        ];

        $adminUser = User::create($user);
        $accountingUser = User::create($accountant);
        $inactiveUser = User::create($inactiveUser);

        $adminUser->assignRole(User::ADMIN);
        $accountingUser->assignRole(User::ACCOUNTING);
        $inactiveUser->assignRole(User::FOREMAN);
    }
}
