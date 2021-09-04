<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 4
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 5
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 6
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 7
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 8
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 9
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose'),
            'profession_id' => 10
        ]);
    }
}
