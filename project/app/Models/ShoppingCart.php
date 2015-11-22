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

    // Getter and setter methods
    public function getId()
    {
        return $this->id;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    // Relations
    public function getCustomer() 
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    public function getShoppingItems() 
    {
        return $this->hasMany('App\Models\ShoppingItem', 'shopping_cart_id');
    }

    // Methods
}
