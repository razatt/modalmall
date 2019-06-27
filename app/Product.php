<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function category(){
        return $this->belongsTo('App\Category', 'cat');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review', 'pid');
    }

    public function favorite(){
        return $this->hasOne('App\Favorite', 'pid');
    }

    public function isFavorite(){
        return $this->hasOne('App\Favorite', 'pid');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function brands(){
        return $this->hasOne('App\Brand', 'id', 'brand');
    }

}
