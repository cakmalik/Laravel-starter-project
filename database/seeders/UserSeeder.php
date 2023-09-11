<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use function PHPSTORM_META\map;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert(
            [
                [
                    'name' => 'superadmin',
                    'guard_name' => 'web',
                ],
                [
                    'name' => 'admin',
                    'guard_name' => 'web',
                ],

            ]
        );

        User::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@betech.id',
            'password' => Hash::make(123),
        ])->assignRole('superadmin');

        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@betech.id',
            'password' => Hash::make(123),
        ])->assignRole('admin');


        \App\Models\User::factory(100)->create();
    }
}
