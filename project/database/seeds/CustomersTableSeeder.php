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
			'password' => '$2y$10$we7AiatTTIwOCjQywVBK1eAQDlVIazzrvQeMtVgn0ZKjcs8IfL/nu',
			'address' => "Pendik",
		]);

		DB::table('customers')->insert([
			'name' => "Mehmet",
			'email' => "mehmet@mail.com",
			'phone' => "05056755264",
			'password' => '$2y$10$we7AiatTTIwOCjQywVBK1eAQDlVIazzrvQeMtVgn0ZKjcs8IfL/nu',
			'address' => "Kadikoy",
		]);

		DB::table('customers')->insert([
			'name' => "Hasan",
			'email' => "hasan@mail.com",
			'phone' => "05056478234",
			'password' => '$2y$10$we7AiatTTIwOCjQywVBK1eAQDlVIazzrvQeMtVgn0ZKjcs8IfL/nu',
			'address' => "Besiktas",
		]);

		DB::table('customers')->insert([
			'name' => "Serhat",
			'email' => "serhat@mail.com",
			'phone' => "05054321234",
			'password' => '$2y$10$we7AiatTTIwOCjQywVBK1eAQDlVIazzrvQeMtVgn0ZKjcs8IfL/nu',
			'address' => "Sariyer",
		]);

		DB::table('customers')->insert([
			'name' => "Murat",
			'email' => "murat@mail.com",
			'phone' => "05059831234",
			'password' => '$2y$10$we7AiatTTIwOCjQywVBK1eAQDlVIazzrvQeMtVgn0ZKjcs8IfL/nu',
			'address' => "Atasehir",
		]);
    }
}
