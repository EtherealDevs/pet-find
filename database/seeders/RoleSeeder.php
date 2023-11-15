<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = Role::create(['name' => 'admin']);
       $role2 = Role::create(['name' => 'writer']);

       Permission::create(['name' => 'admin'])->syncRoles([$role1]);
       Permission::create(['name' => 'writer'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.index'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.vaccines.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.vaccines.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.vaccines.create'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.vaccines.destroy'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.tags.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.tags.create'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.tags.destroy'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.posts.index'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.posts.create'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.posts.destroy'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.pets.index'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.pets.create'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.pets.edit'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.pets.destroy'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.pettypes.index'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.pettypes.create'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.pettypes.edit'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.pettypes.destroy'])->syncRoles([$role1]);

    }
}
