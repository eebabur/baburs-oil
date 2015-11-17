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

    public function product() 
    {
    	return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
