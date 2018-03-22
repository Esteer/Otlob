<?php

namespace App\Http\Controllers;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\Order;
use App\Meal_ord;
use App\Size;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Support\Facades\Mail;
use DB;
class checkoutController extends Controller
{
    public function index()
    {
        return view('checkout');
        
    }
    public function store(Request $request)
    { 
        try {
           /* $charge = Stripe::charges()->create([
                'amount' => Cart::total() / 100,
                'currency' => 'EGP',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                   // 'contents' => $contents,
                    //'quantity' => Cart::instance('default')->count(),
                    //'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);*/
            $order = Order::create([
                'billing_email' => $request->email,
                'billing_name' => $request->name,
                'billing_address' => $request->address,
                'billing_city' => $request->city,
                'billing_province' => $request->province,
                'billing_postalcode' => $request->postalcode,
                'billing_phone' => $request->phone,
                'billing_name_on_card' => $request->name_on_card,
                'billing_subtotal' => $request->billing_subtotal,
                'billing_tax' => $request->tax,
                'billing_total' => $request->total,
                'user_id' => auth()->user() ? auth()->user()->id : null,
                
                 
            ]);
            $ord_id = DB::table('orders')->where('billing_email', $request->email)->value('id');
          //  $meal_id = DB::table('meals')->where('name', $request->meal_name)->value('id');
           
            foreach (Cart::content() as $item) {
                $meal_id = DB::table('meals')
                ->join('size', 'meals.id', '=', 'size.meal_id')
                 ->where('size.id', '=',$item->id)
                ->value('meals.id');
              
               /* $meal_id = DB::select('select meals.id
                from `meals`,`size` where 
              meals.id=size.meal_id 
               and size.id=?',[$item->id]);*/
               
            $order2 = Meal_ord::create([
             
                'quantity' => $item->qty,
                'order_id' => $order->id,
                'meal_id' =>  $meal_id,
               
         
                 
            ]);
            }
            Cart::instance('default')->destroy();
            
 return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');     
    }
    catch (CardErrorException $e) {
         }
    }
}
