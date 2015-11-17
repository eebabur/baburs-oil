<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;

use App\Models\Customer;
use App\Models\Producer;
use App\Models\Product;
use App\Models\ShoppingItem;
use App\Models\ShoppingCart;

class MainController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	foreach ($products as $product) 
    	{
    		Log::debug($product->title);
    	}
    	
    	/*
        $mShoppingCart = ShoppingCart::find(1);
        foreach($mShoppingCart->shoppingItems()->get() as $shoppingItem)
        {
            Log::info($shoppingItem->product()->first()->title);
        }
        */
		/*
        $mProduct = Product::find(1);

        foreach($mProduct->shoppingItems()->get() as $shoppingItem)
        {
        	Log::info($shoppingItem->id);
        }
        */
    }
}
