<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tipo = [
            ['id' => '0', 'desc' => '20'],
            ['id' => '1', 'desc' => '40'],
        ];

        DB::table('container')->insert($tipo);
    }
}
