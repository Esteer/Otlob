<?php

namespace App\Http\Controllers;
use App\Resturant;
use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class managerrestController extends Controller
{
    public function index(Resturant $rest,User $user)
    {
        $rest = DB::select('SELECT resturants.* FROM `resturants` WHERE resturants.manager_id=?',[Auth::user()->id]);
        return view('manager.rest.index',compact('rest'));
    }
   
    public function edit($id)
    {  
        $rest=Resturant::find($id);

       
      
        return view('manager.rest.edit', ['rest' => $rest]);
    }

    public function update($id,Request $request)
    {  
        $updatedrest=Resturant::find($id);
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
           $updatedrest->image =$fileNameStore;
        $updatedrest->fill($request->all())->save();
       // dd( $updatedrest);
        return Redirect::back()->withSuccessMessage('restaurant updated successfully');
    }

    public function destroy($id,Resturant $rest)
    {
       $rest->find($id)->delete();
     return Redirect::back()->withSuccessMessage('restaurant deleted successfully');
    }
}
