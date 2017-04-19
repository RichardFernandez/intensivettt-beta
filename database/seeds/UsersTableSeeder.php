<?php

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
        DB::table('users')->insert([
                'name' => 'Richard',
                'email' => 'mako_238@hotmail.com'

        	]);

        //factory(Intensivettt\User::class, 10)->create();
    }
}
