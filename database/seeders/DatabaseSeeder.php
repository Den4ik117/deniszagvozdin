<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permission1 = Permission::findOrCreate('dashboard.view');

        $permission2 = Permission::findOrCreate('articles.view');
        $permission3 = Permission::findOrCreate('articles.create');
        $permission4 = Permission::findOrCreate('articles.update');
        $permission5 = Permission::findOrCreate('articles.delete');

        $role1 = Role::findOrCreate('admin');
        $role1->givePermissionTo($permission1);
        $role1->givePermissionTo($permission2);
        $role1->givePermissionTo($permission3);
        $role1->givePermissionTo($permission4);
        $role1->givePermissionTo($permission5);

        User::find(1)->assignRole($role1);
    }
}
