<?php

use Illuminate\Database\Seeder;

class ShoppingCartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($x = 0; $x <= 10; $x++) {
    		DB::table('shopping_carts')->insert([
    			'customer_id' => $x+25,
    			'total' => rand(),
    		]);
    	}
    }
}
