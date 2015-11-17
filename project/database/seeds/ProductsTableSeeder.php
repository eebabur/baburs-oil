<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($x = 0; $x <= 10; $x++) {
    		DB::table('products')->insert([
    			'producer_id' => $x+5,
    			'title' => "title ".str_random(10),
    			'description' => "desc ".str_random(10),
    			'price' => rand(), 
    			'published' => 0,
    		]);
    	}
    }
}
