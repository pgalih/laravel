<?php

use Illuminate\Database\Seeder;
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
        DB::table('users')->delete();

        User::create(array(
            'name'     => 'Kris',
            'username' => 'krismp',
            'email'    => 'kris@hijup.com',
            'password' => Hash::make('password'),
        ));
    }
}
