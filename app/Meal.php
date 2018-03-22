<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['name', 'description', 'quantity', 'cat_id', 'created_at', 'updated_at'];
    public function cats()
    {
        return $this->belongsTo('App\Category');
    }

    public function ords()
    {
        return $this->belongsToMany('App\Order')->using('App\Meal_ord');
    }
    public function sizes()
    {
        return $this->hasMany('App\Size');
    }
}
