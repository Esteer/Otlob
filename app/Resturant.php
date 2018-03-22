<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{ 
    protected $fillable = ['name', 'street', 'phone', 'delivary_time','manager_id', 'created_at', 'updated_at'];
    public function cats()
    {
        return $this->belongsToMany('App\Category')->using('App\Rest_cat');;
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
   
}
