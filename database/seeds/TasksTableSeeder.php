<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 100) as $index)
        {
            DB::table('tasks')->insert([
                'user_id' => rand(1,10),
                'body' => str_random(10).'-string-'.str_random(5),
            ]);
        }

    }
}
