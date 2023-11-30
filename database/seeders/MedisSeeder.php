<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class MedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 50; $i++){
            \DB::table('medis')->insert([
                'Kd_Medis' => $faker->unique()->numberBetween(1, 999999),
                'Nm_Medis' => $faker->word,
                'Tgl_Entry' => $faker->dateTime(),
            ]);
        }
    }
}