<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BarangSeeder extends Seeder
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
            \DB::table('barang')->insert([
                'Kd_Barang' => $faker->unique()->numberBetween(1, 999999),
                'Nm_Barang' => $faker->word,
                'Satuan' => $faker->randomElement(['pack', 'liter', 'dos', 'gram']),
                'Tgl_Kadaluarsa' => $faker->dateTime(),
                'Tipe' => $faker->randomElement(['DN', 'LN']),
                'Tgl_Entry' => $faker->dateTime(),
            ]);
        }
    }
}