<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   

        $roles = [
            [
                'id'    => 1,
                'title' => 'Администратор',
            ],
            [
                'id'    => 2,
                'title' => 'Клиент',
            ],
            [
                'id'    => 3,
                'title' => 'Регистратор',
            ],
            [
                'id'    => 4,
                'title' => 'Врач',
            ],
            [
                'id'    => 5,
                'title' => 'Менеджер',
            ],
            [
                'id'    => 6,
                'title' => 'Директор',
            ],

        ];

        Role::insert($roles);
    }
}
