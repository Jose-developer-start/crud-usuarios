<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profession')->insert([
            'name' => 'Front-end developer'
        ]);
        DB::table('profession')->insert([
            'name' => 'Back-end developer'
        ]);
        DB::table('profession')->insert([
            'name' => 'UI developer'
        ]);
        DB::table('profession')->insert([
            'name' => 'Administrador de base datos'
        ]);
        DB::table('profession')->insert([
            'name' => 'Diseñador web'
        ]);
        DB::table('profession')->insert([
            'name' => 'UI designer'
        ]);
        DB::table('profession')->insert([
            'name' => 'Full stack'
        ]);
        DB::table('profession')->insert([
            'name' => 'Marketing digital'
        ]);
        DB::table('profession')->insert([
            'name' => 'UI experiencias de usuaios'
        ]);
        DB::table('profession')->insert([
            'name' => 'UI X'
        ]);
    }
}
