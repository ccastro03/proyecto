<?php

use Illuminate\Database\Seeder;

/* Elementos necesarios para la ejecucion */
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user = new User();
        $user->name = 'Secretaria';
        $user->email = 'secre@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
