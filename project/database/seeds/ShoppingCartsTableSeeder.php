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
        DB::table('shopping_carts')->insert([
			'customer_id' => 1,
			'finalized' => 'false',
		]);
    }
}
