<?php

namespace App\Http\Controllers;
use App\Rest_cat;
use App\Resturant;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use DB;
class restcateController extends Controller
{
    public function index(Rest_cat  $rc)
    {
      
        $rc = DB::select('SELECT DISTINCT resturants.name as r,categories.name as c ,resturants.id as ri,categories.id as ci
        FROM `rest_cat`,`resturants`,`categories`
         WHERE categories.id=rest_cat.cat_id and resturants.id=rest_cat.rest_id');
        
        return view('admin.restcate.index',compact('rc'));
    }

    public function create(Resturant $rest,Category $cate)
    {
        $rest=$rest->all();
        $cate=$cate->all();
        return view('admin.restcate.add',compact('rest'),compact('cate'));
    }
   
    protected function store(Request $request)
    {
        $rules = array(
            'rest_id'   => 'required',
            'cat_id'  => 'required',
         
        );
        $validator = Validator::make(Input::all(), $rules);
        $rc = new Rest_cat;
        if($request->has('rname')){
            $name=$request->get('rname');
            $rest = DB::table('Resturants')->where('name', $name)->value('id');
          }else{
            $cate = Resturant::get();
        }
        if($request->has('cname')){
            $name=$request->get('cname');
            $cat = DB::table('Categories')->where('name', $name)->value('id');
          }else{
            $cate = Categories::get();
        }

        $rc->rest_id  =  $rest;
        $rc->cat_id   =  $cat;
        $rc->save();
 
     return redirect('/adminpanel/resturantcategory')->withSuccessMessage('added successfully');
     
      }
      public function destroy($id,$id2)
      {
        DB::table('Rest_cat')
        ->where('rest_id', $id)
        ->where('cat_id',$id2)
        ->delete();
           return redirect('/adminpanel/resturantcategory')->withSuccessMessage(' deleted successfully'); 

      }

}
