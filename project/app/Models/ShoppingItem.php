<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingItem extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shopping_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'product_id', 'shopping_cart_id', 'quantity'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    // Getter and setter methods
    // Getter and setter methods
    public function getId()
    {
        return $this->id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setProduct(Product $product)
    {
        $this->product_id = $product->getId();
    }

    public function setShoppingCart(ShoppingCart $shopping_cart)
    {
        $this->shopping_cart_id = $shopping_cart->getId();
    }

    // Relations
    public function Product() 
    {
    	return $this->belongsTo('App\Models\Product', 'product_id', 'id')->first();
    }

    public function ShoppingCart()
    {
        return $this->belongsTo('App\Models\ShoppingCart', 'shopping_cart_id', 'id')->first();
    }
}
