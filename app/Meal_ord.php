<?php

namespace App;

//use Illuminate\Database\Eloquent\pivot;
use Illuminate\Database\Eloquent\Relations\Pivot;
class Meal_ord extends pivot
{
    protected $fillable = [ 'quantity', 'order_id', 'meal_id'];
}
