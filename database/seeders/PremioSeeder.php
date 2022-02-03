<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PremioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("premios")->insert([
            'anio' => '2008',
            'autor' => 'a saber',
            'comic' => 'pues uno mu guapo',
            'portada' => 'c1.jpg',
            'user_id' => 1,
        ]);
        DB::table("premios")->insert([
            'anio' => '2009',
            'autor' => 'alex',
            'comic' => 'Pelotita Rebotona',
            'portada' => 'c2.jpg',
            'user_id' => 2,
        ]);
        DB::table("premios")->insert([
            'anio' => '2010',
            'autor' => 'isaias',
            'comic' => 'Tablet Mode',
            'portada' => 'c3.jpg',
            'user_id' => 1,
        ]);
    }
}
