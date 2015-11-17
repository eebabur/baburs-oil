<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shopping_carts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'customer_id', 'total'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function shoppingItems() 
    {
        return $this->hasMany('App\Models\ShoppingItem', 'shopping_cart_id');
    }
}
