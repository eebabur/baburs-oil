<?php

use Illuminate\Database\Seeder;

class ShoppingItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($x = 0; $x <= 10; $x++) {
    		DB::table('shopping_items')->insert([
    			'product_id' => $x+1,
    			'shopping_cart_id' => rand(0, 10),
    			'quantity' => rand(0,50),
    		]);
    	}
    }
}
