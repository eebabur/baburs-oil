<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
			'producer_id' => 1,
			'title' => "Perla",
			'description' => "desc",
			'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
			'published' => 1,
		]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Cunda",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Milas",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Gumbet",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Romance",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Resital",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Tuana",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Olivia",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Silva",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);

        DB::table('products')->insert([
            'producer_id' => 1,
            'title' => "Siena",
            'description' => "desc",
            'price' => (rand() % 50 + 1) * (rand() % 10 + 1), 
            'published' => 1,
        ]);
    }
}
