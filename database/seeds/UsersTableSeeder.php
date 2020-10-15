<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

	static $users = [
        'Bento',
        'Bernado',
        'Cicero',
        'Davi',
        'Helton',
        'Lucio',
        'Mauricio',
        'Nair',
        'Osnir',
        'Rildo',
        'Tonio'
    ];

    static $emails = [
        'calditos1988@outlook.com',
        'rmoreira787@gmail.com'
    ];

    static $passwords = [
         '1234',
         '123'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$users as $user) {
            DB::table('users')->insert([
                'name' => $user,
            ]);
        }


        foreach (self::$emails as $email) {
            DB::table('users')->insert([
                'email' => $email,
            ]);
        }

        foreach (self::$passwords as $password) {
            DB::table('users')->insert([
                'password' => $password,
            ]);
        }
    }
}
