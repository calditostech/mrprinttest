<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          "name"     => 'Ricardo Moreira',
          "email"    => 'ricardo@teste.com.br',
          "password" =>  bcrypt('ricardo'),
        ]);
    }
}
