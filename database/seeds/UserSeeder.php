<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'                => 1,
            'name'              => 'orang1',
            'email'             => 'orang1@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password'          => bcrypt('passorang1'),
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'id'                => 2,
            'name'              => 'orang2',
            'email'             => 'orang2@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password'          => bcrypt('passorang2'),
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),
        ]);
    }
}
