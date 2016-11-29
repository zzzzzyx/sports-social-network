<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'Li ming',
            'email'=>'test1@nova.com',
            'phone'  => '18633333333',
            'qq'=> '2998566632',
            'signature' => 'I love python.',
            'clout'  => 'user',
            'image'  => 222,
            'password'  => '111111',
         ]);
//        factory('App\User', 50)->create();

    }
}
