<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: AdminSeeder.php
 * User: ${USER}
 * Date: 18.${MONTH_NAME_FULL}.2023
 * Time: 7:10
 */

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Alexander Guthmann',
            'email' => 'aguthmann83@gmail.com',
            'password' => Hash::make('alex2801'),
        ])->assignRole('writer', 'super_admin');
    }
}
