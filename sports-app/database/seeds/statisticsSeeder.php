<?php

use Illuminate\Database\Seeder;

class statisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
            'user_id' => '2',
            'exercise_hour' => 4860,
            'overall_exercise_day' => 39,
            'continuous_exercise_day' => 22,
            'calories' => 15220,
            'grade' => 2,
        ]);
    }
}
