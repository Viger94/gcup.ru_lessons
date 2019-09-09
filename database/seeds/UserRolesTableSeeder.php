<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new UserRole();
        $role->name = 'Администратор';
        $role->slug = 'admin';
        $role->save();
        unset($role);

        $role = new UserRole();
        $role->name = 'Пользователь';
        $role->slug = 'user';
        $role->save();
        unset($role);
    }
}
