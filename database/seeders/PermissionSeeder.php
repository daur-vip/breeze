<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_access',
            ],
            [
                'id'    => 1,
                'title' => 'user_access',
            ],
            [
                'id'    => 1,
                'title' => 'user_access',
            ],
      
            [
                'id'    => 3,
                'title' => 'edit_schedule_access',
            ],
            [
                'id'    => 4,
                'title' => 'appointment_access',
            ],
            [
                'id'    => 5,
                'title' => 'read_recipe_access',
            ],
            [
                'id'    => 2,
                'title' => 'task_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
