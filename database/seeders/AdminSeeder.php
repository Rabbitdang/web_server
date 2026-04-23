<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo user admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('123456'),
            ]
        );

        // Đảm bảo role admin tồn tại
        $role = Role::firstOrCreate(['name' => 'admin']);

        // Gán role admin
        $admin->assignRole($role);
    }
}