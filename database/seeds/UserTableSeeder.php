<?php

use Illuminate\Database\Seeder;
use Demo\User;
use Demo\Grade;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'id' => 1210311232,
            'name' => 'poi',
            'email' => '12306@qq.com',
            'password' => Hash::make('12341234')
        ]);

        User::create([
            'id' => 1210311233,
            'name' => 'lalala',
            'email' => '66666@qq.com',

            'password' => Hash::make('12341234')
        ]);

        User::create([
            'id' => 1234567890,
            'name' => 'admin',
            'email' => '675761774@qq.com',
            'password' => Hash::make('admin'),
            'is_admin' => 1
        ]);

    }

}