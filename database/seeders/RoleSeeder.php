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
        Role::create(['name' => 'Администратор']);
        Role::create(['name' => 'Клиент']);
        Role::create(['name' => 'Регистратор']);
        Role::create(['name' => 'Врач']);
        Role::create(['name' => 'Менеджер']);
        Role::create(['name' => 'Директор']);
    }
}
