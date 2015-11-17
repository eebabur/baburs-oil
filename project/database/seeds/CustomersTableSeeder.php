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

    	for ($x = 0; $x <= 10; $x++) {
    		DB::table('customers')->insert([
    			'name' => "name".str_random(10),
    			'email' => "email".str_random(10).'@gmail.com',
    			'phone' => "+90505".str_random(7),
    			'address' => "adres".str_random(20), 
    			'password' => bcrypt('secret'),
    			'remember_token' => "token",
    		]);
    	}
    }
}
