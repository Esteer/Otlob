<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Meal;
use App\Size;
use App\Category;
use View;
use DB;
class mealController extends Controller
{
    public function index(Meal $meal,Category $cate,Request $request)
    {
       // $meal=$meal->all();
        
        /*$cate = DB::table('categories')
        ->join('meals', 'meals.cat_id', '=', 'categories.id')
        ->select('categories.name')
        ->get();*/
        $meal = DB::select('select distinct meals.*,size.type,size.price,categories.name as c,resturants.name as r 
         from `meals`, `categories`,`resturants`,`rest_cat`,`size` where 
         meals.cat_id=categories.id
        and  resturants.id=rest_cat.rest_id 
        and  categories.id=rest_cat.cat_id 
        and meals.id=size.meal_id ');
        return view('admin.meal.index',compact('meal'));
        
    }

    public function create(Category $cate)
    {
        $cate=$cate->all();
        return view('admin.meal.add',compact('cate'));
    }

    protected function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description'=>'required',
            'quantity'=>'required',
            'type'=>'required',
            'price'=>'required',
            'image'=>'image|nullable',
            'cat_name'=>'required',
           
            
            
    ]); 
    if($request->has('cat_name')){
        $name=$request->get('cat_name');
        $cate_id = DB::table('categories')->where('name', $name)->value('id');
      }else{
        $cate = category::get();
    }

   

    if($request->hasFile('image')){
     $filenameWithExtension=$request->file('image')
        ->getClientOriginalName();
        $fileName=pathinfo( $filenameWithExtension,PATHINFO_FILENAME);
        $extension =$request->file('image')->getClientOriginalExtension();
        $fileNameStore=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image')->storeAs('public/image', $fileNameStore);
    }
    else{
        $fileNameStore='no_image.jpg';
     }
     $restData=new Meal;
     $restData->name=$request->input('name');
     $restData->description=$request->input('description');
     $restData->quantity=$request->input('quantity');
     $restData->image =$fileNameStore;
     $restData->cat_id=$cate_id;
     $restData->save();


  if($request->has('type')){
        $size=$request->get('type');
      }

      $name= $request->input('name');
      $meal_id = DB::table('meals')->where('name', $name)->value('id');
     $price= $request->input('price');
     /*$mealsize=new Size;
     $mealsize->type=$size;
     $mealsize->price=$request->input('price');
     $mealsize->meal_id=$meal_id;
     $mealsize->save();*/
     $meal = DB::insert('insert into size (`type`, `price`, `meal_id`)
     values(?, ?, ?)',[$size,$price, $meal_id]);
     
     return redirect('/adminpanel/meals')->withSuccessMessage('Meals added successfully');
     
      }

      public function edit($id)
      {  
          $meal=Meal::find($id);
  
          // dd($user);
        
          return view('admin.meal.edit', ['meal' => $meal]);
      }

      public function update($id,Request $request)
      {  
          $updatedmeal=Meal::find($id);
          $updatedcate=Category::find($id);
          if($request->hasFile('image')){
            $filenameWithExtension=$request->file('image')
               ->getClientOriginalName();
               $fileName=pathinfo( $filenameWithExtension,PATHINFO_FILENAME);
               $extension =$request->file('image')->getClientOriginalExtension();
               $fileNameStore=$fileName.'_'.time().'.'.$extension;
               $path=$request->file('image')->storeAs('public/image', $fileNameStore);
           }
           else{
               $fileNameStore='no_image.jpg';
            }
            $updatedmeal->image =$fileNameStore;
          $updatedmeal->fill($request->all())->save();
         // dd( $updatedrest);
          return Redirect::back()->withSuccessMessage('Meal updated successfully');
      }
      public function destroy($id,Meal $meal)
      {
         $meal->find($id)->delete();
       return Redirect::back()->withSuccessMessage('Meal deleted successfully');
      }
}
