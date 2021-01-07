<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $sql = public_path('kia.sql');

        //collect contents and pass to DB::unprepared
        DB::unprepared(file_get_contents($sql));
    }
}
