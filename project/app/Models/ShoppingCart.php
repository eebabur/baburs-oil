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
    protected $fillable = ['id', 'customer_id', 'total', 'finalized'];

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
    public function Customer() 
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id')->first();
    }

    public function ShoppingItems() 
    {
        return $this->hasMany('App\Models\ShoppingItem', 'shopping_cart_id', 'id')->get();
    }

    // Methods
}
