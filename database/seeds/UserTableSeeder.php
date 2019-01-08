<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Kamil Bartczak',
            'email' => 'user@user.pl',
            'password' => Hash::make('user'),
        ]);
    }

}