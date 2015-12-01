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
    protected $fillable = ['id', 'producer_id', 'title', 'description', 'price', 'imageUrl'];

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
        return $this->title;
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

    public function getImageUrl()
    {
        return $imageUrl->imageUrl;
    }

    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    // Relations
    public function getProducer() 
    {
    	return $this->belongsTo('App\Models\Producer', 'producer_id');
    }

    public function getShoppingItems()
    {
        return $this->hasMany('App\Models\ShoppingItem', 'product_id');
    }

    public function getRatings()
    {
        return $this->hasMany('App\Models\Rating', 'product_id');
    }
}
