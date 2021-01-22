<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionToRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::findByName('admin');

        $adminRole->givePermissionTo(['admin access', 'admin edit cv']);
    }
}
