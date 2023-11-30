<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DokterSeeder extends Seeder
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
            \DB::table('dokter')->insert([
                'Kd_Dokter' => $faker->unique()->numberBetween(1, 999999),
                'Nm_Dokter' => $faker->name,
            ]);
        }
    }
}