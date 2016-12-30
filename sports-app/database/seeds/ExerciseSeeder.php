<?php

use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            'user_id' => '3',
            'title' => "title_test",
            'startTime' => "2015-12-01 16:04",
            'exerciseTime' => 15,
            'calories' => 1520,
            'spot' => "Tian'an men square",
            'description' => "description_test",
            'label' => "Hello#test",
        ]);
    }
}
