<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'admin.view']);

        Permission::create(['name' => 'files.view']);
        Permission::create(['name' => 'files.create']);
        Permission::create(['name' => 'files.delete']);

        Permission::create(['name' => 'articles.view']);
        Permission::create(['name' => 'articles.create']);
        Permission::create(['name' => 'articles.update']);
        Permission::create(['name' => 'articles.delete']);

        Role::create(['name' => 'developer'])->givePermissionTo(Permission::all());

        User::findOrFail(1)->assignRole('developer');
    }
}
