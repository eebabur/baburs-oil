<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CustomersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProducersTableSeeder::class);
        $this->call(ShoppingItemsTableSeeder::class);
        $this->call(ShoppingCartsTableSeeder::class);
        Model::reguard();
    }
}
