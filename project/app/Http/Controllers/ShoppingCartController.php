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

class ShoppingCartController extends Controller
{
    public function __construct()
    {
        Log::info("ShoppingCartController is created successfully.");
    }

    public function addShoppingItem(Request $request)
    {
        // Get all shopping carts of logged in user
        // Check if user has an open shopping cart
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
