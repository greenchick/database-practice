<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();

        DB::table('todos')->insert([
          [
            'title' => 'chaged for my interest',
            'created_at' => '1994-02-15 23:59:59',
            'updated_at' => '1994-02-15 23:59:59',
          ],
          [
            'title' => 'Unixオペレーションに慣れる',
            'created_at' => '2015-02-01 00:00:00',
            'updated_at' => '2015-02-01 00:00:00',
          ],
        ]);

    }
}
