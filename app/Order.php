<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [ 'billing_email', 'billing_name', 'billing_address', 'billing_city',
    'billing_province', 'billing_postalcode', 'billing_phone', 'billing_name_on_card','billing_subtotal','billing_tax',
    'billing_total','user_id',
];
    
    public function meals()
    {
        return $this->belongsToMany('App\Meal')->using('App\Meal_ord');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
