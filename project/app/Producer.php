<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'producers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'email', 'phone', 'address', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function products()
    {
        return $this->hasMany('product', 'producer_id');
    }
}

