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
        DB::table('shopping_items')->insert([
			'product_id' => 6,
			'shopping_cart_id' => 1,
			'quantity' => 3,
		]);
    }
}
