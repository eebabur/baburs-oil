<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
			'name' => "Ahmet",
			'email' => "ahmet@mail.com",
			'phone' => "05056751234",
			'address' => "Pendik",
		]);

		DB::table('customers')->insert([
			'name' => "Mehmet",
			'email' => "mehmet@mail.com",
			'phone' => "05056755264",
			'address' => "Kadikoy",
		]);

		DB::table('customers')->insert([
			'name' => "Hasan",
			'email' => "hasan@mail.com",
			'phone' => "05056478234",
			'address' => "Besiktas",
		]);

		DB::table('customers')->insert([
			'name' => "Serhat",
			'email' => "serhat@mail.com",
			'phone' => "05054321234",
			'address' => "Sariyer",
		]);

		DB::table('customers')->insert([
			'name' => "Murat",
			'email' => "murat@mail.com",
			'phone' => "05059831234",
			'address' => "Atasehir",
		]);
    }
}
