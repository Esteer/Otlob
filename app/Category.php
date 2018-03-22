<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name', 'updated_at'];
    public function rests()
    {
        return $this->belongsToMany('App\Resturant')->using('App\Rest_cat');
    }
    public function meals()
    {
        return $this->hasMany('App\Meal');
    }
}
