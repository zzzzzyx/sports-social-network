<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Exercise::class,1000)->make();
        $faker = Faker\Factory::create("en_US");
        for ($i = 0; $i < 1300; $i++) {

            DB::table('exercises')->insert([
                'user_id' => '16',
                'title' => $faker->sentence,
                'startTime' => $faker->dateTime,
                'exerciseTime' => $faker->numberBetween(20,87),
                'calories' => $faker->numberBetween(1000,5000),
                'spot' => $faker->streetName,
                'description' => $faker->sentence,
                'label' => $faker->colorName."#".$faker->colorName,
            ]);
        }
    }
}
