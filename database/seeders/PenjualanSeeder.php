<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB; 

use Faker\Factory as Faker;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $Kd_Cabang = DB::table('cabang')->pluck('Kd_Cabang')->toArray();
        $Kd_Terapi = DB::table('terapi')->pluck('Kd_Terapi')->toArray();
        $Kd_Medis = DB::table('medis')->pluck('Kd_Medis')->toArray();
        $Kd_Jenis = DB::table('jenis_medis')->pluck('Kd_Jenis')->toArray();
        $Kd_Barang = DB::table('barang')->pluck('Kd_Barang')->toArray();

        for($i = 1; $i <= 100; $i++){
            \DB::table('penjualan')->insert([
                'Kategori' => $faker->word,
                'Nm_Group' => $faker->word,
                'Kd_Cabang' => $faker->randomElement($Kd_Cabang),
                'Tipe' => $faker->randomElement(['konsinyasi', 'grosir', 'satuan']),
                'Tgl_Trans' => $faker->dateTime(),
                'Kd_Terapi' => $faker->randomElement($Kd_Terapi),
                'Kd_Medis' => $faker->randomElement($Kd_Medis),
                'Kd_Jenis' => $faker->randomElement($Kd_Jenis),
                'No_Reg' => $faker->unique()->numberBetween(1, 999999999),
                'Kd_Barang' => $faker->randomElement($Kd_Barang),
                'Nama' => $faker->name,
                'Qty' => $faker->numberBetween(1,20),
                'Total' => $faker->numberBetween(100000, 1000000),
                'Tgl_Entry' => $faker->dateTime(),
            ]);
        }
    }
}