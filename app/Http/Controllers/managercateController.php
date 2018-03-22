<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;
class managercateController extends Controller
{
    public function index(Category $cate)
    {
        $cate=DB::select('SELECT  distinct categories.*
        FROM `rest_cat`,`resturants`,`categories`,`users`
         WHERE categories.id=rest_cat.cat_id and resturants.id=rest_cat.rest_id and users.id=resturants.manager_id
       and  resturants.manager_id=?',[Auth::user()->id] );
        return view('manager.category.index',compact('cate'));
    }
    public function create()
    {
        
        return view('manager.category.add');
    }
    protected function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image'=>'image|nullable',
            
    ]); 
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
     $restData=new Category;
     $restData->name=$request->input('name');
     $restData->image =$fileNameStore;
     $restData->save();
 
     return redirect('/adminpanel2/categories')->withSuccessMessage('category added successfully');
     
      }

      public function edit($id)
      {  
          $cate=Category::find($id);
  
          // dd($user);
        
          return view('manager.category.edit', ['cate' => $cate]);
      }
      public function update($id,Request $request)
      {  
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
            $updatedcate->image =$fileNameStore;
          $updatedcate->fill($request->all())->save();
         
          return Redirect::back()->withSuccessMessage('Category updated successfully');
      }

      public function destroy($id,Category $cate)
      {
         $cate->find($id)->delete();
       return Redirect::back()->withSuccessMessage('Category deleted successfully');
      }
}
