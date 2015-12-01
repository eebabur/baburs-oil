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
use App\Models\ShoppingCart;

class MainController extends Controller
{
    public function loadProductsView(Request $request)
    {
        $products = Product::all();
        return response()->view('products', ['products' => $products]);
    }

    public function loadProductDetailsView(Request $request)
    {
        $productId = $request->input('productId');
        $product = Product::find($productId);
        return response()->view('productDetailView', ['product' => $product]);
    }

    public function loadShoppingCartView(Request $request)
    {
        $customerId = $request->input('customerId');
        $shoppingCart = ShoppingCart::find($customerId);
        return response()->view('shoppingCartView', ['shoppingCart' => $shoppingCart]);
    }

    /*public function loadProducersWithProducts()
    {
        $producers = Producer::all();

        foreach ($producers as $producer) 
        {
            Log::info($producer->getName());
            $products = $producer->getProducts()->get();

            foreach ($products as $product) 
            {
                Log::info($producer->getName() . " - " . $product->getTitle());
            }
        }
    }*/
    /*
    public function getProducts()
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
    
    }
    */
}
