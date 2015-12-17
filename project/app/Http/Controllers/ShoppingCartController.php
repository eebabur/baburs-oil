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
use App\Models\ShoppingItem;
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
        $quantity = $request->input('quantity');
        if($quantity < 1)
            return -1;
        $customer = Auth::user();
        $shoppingCart = $customer->ActiveShoppingCart();
        if(!isset($shoppingCart))
        {
            $shoppingCart = ShoppingCart::create();
            $shoppingCart->setCustomer($customer);
            $shoppingItem->setFinalized($finalized);
            $shoppingCart->save();
        }

        $shoppingItems = $shoppingCart->ShoppingItems();
        $shoppingItem = null;
        $productId = $request->input('productId');
        foreach($shoppingItems as $item)
        {
            if($item->Product()->getId() == $productId)
            {
                $shoppingItem = $item;
                break;
            }
        }

        if(!isset($shoppingItem))
        {
            $shoppingItem = ShoppingItem::create();
            $shoppingItem->setQuantity(0);
            $shoppingItem->setProduct(Product::find($request->input('productId')));
            $shoppingItem->setShoppingCart($shoppingCart);
        }
        $shoppingItem->setQuantity($shoppingItem->getQuantity() + $quantity);
        $shoppingItem->save();
            
        return $shoppingItem;
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
