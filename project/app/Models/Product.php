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

    // Getter and setter methods
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->name;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Relations
    public function producer() 
    {
    	return $this->belongsTo('App\Models\Producer', 'producer_id');
    }

    public function shoppingItems()
    {
        return $this->hasMany('App\Models\ShoppingItem', 'product_id');
    }
}
