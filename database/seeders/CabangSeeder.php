<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 10; $i++){
            \DB::table('cabang')->insert([
                'Kd_Cabang' => $faker->unique()->numberBetween(1, 999999),
                'Nm_Cabang' => $faker->word,
                'Tgl_Entry' => $faker->dateTime(),
            ]);
        }
    }
}