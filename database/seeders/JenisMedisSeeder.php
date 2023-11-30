<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class JenisMedisSeeder extends Seeder
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
            \DB::table('jenis_medis')->insert([
                'Kd_Jenis' => $faker->unique()->numberBetween(1, 999999),
                'Nm_Jenis' => $faker->word,
                'Tgl_Entry' => $faker->dateTime(),
            ]);
        }
    }
}