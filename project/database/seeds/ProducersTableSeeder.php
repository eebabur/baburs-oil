<?php

use Illuminate\Database\Seeder;

class ProducersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producers')->insert([
			'name' => "Ahmet",
			'phone' => "05056751234",
			'address' => "Cunda",
		]);

		DB::table('producers')->insert([
			'name' => "Mehmet",
			'phone' => "05056756789",
			'address' => "Ayvalik",
		]);

		DB::table('producers')->insert([
			'name' => "Hasan",
			'phone' => "05456751234",
			'address' => "Edremit",
		]);

		DB::table('producers')->insert([
			'name' => "Huseyin",
			'phone' => "05326751223",
			'address' => "Alacati",
		]);
    }
}
