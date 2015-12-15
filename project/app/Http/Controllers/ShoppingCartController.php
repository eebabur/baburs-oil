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
use Auth;

class ShoppingCartController extends Controller
{
    public function __construct()
    {
        Log::info("ShoppingCartController is created successfully.");
    }

    public function listShoppingItems()
    {
        $customer = Auth::user();
        $shoppingCart = $customer->ActiveShoppingCart();

        if(isset($shoppingCart))
        {
            return response()->view('shoppingCart', ['shoppingCart' => $shoppingCart]);
        }
        else
        {
            return response()->view('shoppingCart', ['shoppingCart' => []]);
        }
    }

    public function addShoppingItem(Request $request)
    {
        $customer = Auth::user();
        $shoppingCart = $customer->ActiveShoppingCart();
        if(isset($shoppingCart))
        {
            $shoppingItem = ShoppingItem::create();
            $product = Product::find($request->input('productId'));
            $shoppingItem->Product()->associate($product);
        }
        else
        {
            $shoppingCart = ShoppingCart::create();
        }
        return 0;
        
        // Create a shopping cart if there is none
        // Create a shopping item with given product id
        // Add newly created shopping item into the cart
    }

    public function removeShoppingItem(Request $request)
    {
        // Get all shopping carts of logged in user
        // Check if user has an open shopping cart
        // Throw exception if there is none
        // Remove shopping item with given product id
    }

    public function updateShoppingItem(Request $request)
    {
        // Get all shopping carts of logged in user
        // Check if user has an open shopping cart
        // Throw exception if there is none
        // Update shopping item with given product id
    }

}
