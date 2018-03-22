<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['type', 'price', 'meal_id','created_at', 'updated_at'];
    
    public function meals()
    {
        return $this->belongsTo('App\Meal');
    }
}
