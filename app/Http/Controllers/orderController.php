<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class orderController extends Controller
{
    public function index()
    {
      
        $order = DB::select('SELECT orders.id,meal_ord.quantity,meals.name as m,users.name as u
         from orders,meal_ord,meals,users  WHERE meals.id=meal_ord.meal_id 
         and meal_ord.order_id=orders.id and orders.user_id=users.id');
        
        return view('admin.order.index',compact('order'));
    }
}
