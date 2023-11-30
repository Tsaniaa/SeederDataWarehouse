<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 100; $i++){
            \DB::table('pasien')->insert([
                'Kd_Pasien' => $faker->unique()->numberBetween(1, 999999),
                'Nm_Pasien' => $faker->name,
                'Tgl_Lahir' => $faker->date($format='Y-m-d', $max='now'),
            ]);
        }
    }
}