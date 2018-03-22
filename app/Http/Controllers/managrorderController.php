<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
class managrorderController extends Controller
{
    public function index()
    {
      
        $order = DB::select('SELECT orders.id,meal_ord.quantity,meals.name as m,users.name as u
         from resturants,rest_cat,categories,orders,meal_ord,meals,users 
          WHERE resturants.id=rest_cat.rest_id 
          and  categories.id=rest_cat.cat_id 
          and meals.id=meal_ord.meal_id 
          and meal_ord.order_id=orders.id 
          and orders.user_id=users.id
          and resturants.manager_id=users.id
          and resturants.manager_id =? ',[Auth::user()->id]);
        
        return view('manager.order.index',compact('order'));
    }
    
   
}
