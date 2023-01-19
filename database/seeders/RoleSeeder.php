<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: RoleSeeder.php
 * User: ${USER}
 * Date: 18.${MONTH_NAME_FULL}.2023
 * Time: 7:10
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'writer']);
        Role::create(['name' => 'user']);
    }
}
