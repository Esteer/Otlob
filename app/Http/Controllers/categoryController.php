<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use App\Http\Requests;

class categoryController extends Controller
{
    public function index(Category $cate)
    {
        $cate=$cate->all();
        return view('admin.category.index',compact('cate'));
    }
    public function create()
    {
        
        return view('admin.category.add');
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
 
     return redirect('/adminpanel/categories')->withSuccessMessage('category added successfully');
     
      }

      public function edit($id)
      {  
          $cate=Category::find($id);
  
          // dd($user);
        
          return view('admin.category.edit', ['cate' => $cate]);
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
