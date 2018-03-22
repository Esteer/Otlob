<?php

namespace App;

//use Illuminate\Database\Eloquent\Pivot;
use Illuminate\Database\Eloquent\Relations\Pivot;
class Rest_cat extends Pivot
{
    //
     protected $fillable = ['rest_id', 'cat_id', 'created_at', 'updated_at'];
   
}
