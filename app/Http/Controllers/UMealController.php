<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \Cart as Cart;
use Validator;
use App\Meal;
use App\Size;
use DB;
class UMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meals = DB::table('meals')
        ->join('size', 'meals.id', '=', 'size.meal_id')
         ->where('meals.Cat_id', '=', $id)
        ->select('meals.*','size.type','size.price','size.id as sid','meals.cat_id')->distinct()
         ->paginate(10);

        /* $catename = DB::select('SELECT DISTINCT resturants.id,categories.name FROM
          `categories`,`Meals`,`resturants`,`rest_cat`
         WHERE resturants.id=rest_cat.rest_id
         and rest_cat.cat_id= categories.id
         and  categories.id=meals.cat_id
         and meals.Cat_id = ?',[$id]);*/

      /*  $size = DB::table('meals')
        ->join('size', 'meals.id', '=', 'size.meal_id')
        ->where('Cat_id', '=', $id)
        ->select('size.id','size.price','size.type','size.meal_id','meals.name')
         ->paginate(10);*/

        
   return view('meals.show', ['meals'=>$meals]);
  
    }
    public function store(Request $request)
    {
   
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
           
            return $cartItem->id === $request->id;
        });
     
        if (!$duplicates->isEmpty()) {
            return back()->withSuccessMessage('Item is already in your cart!');
        }

        Cart::add($request->id, $request->name,$request->type, 1, $request->price)->associate('App\Size');
        return back()->withSuccessMessage('Item was added to your cart!');
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
         }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id2)
    {
        Cart::remove($id2);
        return back()->withSuccessMessage('Item has been removed!');
    }
}
