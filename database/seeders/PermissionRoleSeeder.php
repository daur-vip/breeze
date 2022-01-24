<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //admin role
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        //client role
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 3) == 'cli';
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);

        //registrator role
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 3) == 'reg';
        });
        Role::findOrFail(3)->permissions()->sync($user_permissions);

        //doctor role
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 3) == 'doc';
        });
        Role::findOrFail(4)->permissions()->sync($user_permissions);

        //manager role
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 3) == 'man';
        });
        Role::findOrFail(5)->permissions()->sync($user_permissions);
        
        //director role
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 3) == 'dir';
        });
        Role::findOrFail(6)->permissions()->sync($user_permissions);
    }
}
