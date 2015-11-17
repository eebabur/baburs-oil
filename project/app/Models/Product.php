<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'producer_id', 'title', 'description', 'price'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function producer() 
    {
    	return $this->belongsTo('App\Models\Producer', 'producer_id');
    }

    public function shoppingItems()
    {
        return $this->hasMany('App\Models\ShoppingItem', 'product_id');
    }
}
