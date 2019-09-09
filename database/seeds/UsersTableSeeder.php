<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'Администратор';
        $user->email = 'admin@lesson.loc';
        $user->role_slug = 'admin';
        $user->password = bcrypt('admin');
        $user->save();
        unset($user);

        $user = new User();
        $user->name = 'Пользователь';
        $user->email = 'user@lesson.loc';
        $user->role_slug = 'user';
        $user->password = bcrypt('user');
        $user->save();
        unset($user);
    }
}
