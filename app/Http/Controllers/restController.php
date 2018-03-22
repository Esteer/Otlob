<?php

namespace App\Http\Controllers;
use App\Resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\User;
use  App\Http\Requests\AddRestRequestAdmin;
use App\Http\Requests;


use DB;
class restController extends Controller
{
    public function index(Resturant $rest,User $user)
    {
        $rest = DB::select('SELECT resturants.* ,users.name as u FROM `resturants`,users WHERE resturants.manager_id=users.id ');
        return view('admin.rest.index',compact('rest'));
    }
   
    public function create(User $user)
    {
        $user=$user->all();
        return view('admin.rest.add',compact('user'));
    }

    protected function store(Request $request,User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'street' => 'required',
            'phone' => 'required',
            'delivary_time' => 'required',
            'image'=>'image|nullable',
            'manager'=>'required',
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
     if($request->has('manager')){
        $name=$request->get('manager');
        $user_id = DB::table('users')->where('name', $name)->value('id');
      }else{
        $user = User::get();
    }
    //$restData = $request->all();
    $restData=new Resturant;
    $restData->name=$request->input('name');
    $restData->manager_id= $user_id;
    $restData->street=$request->input('street');
    $restData->phone=$request->input('phone');
    $restData->delivary_time=$request->input('delivary_time');
    $restData->image =$fileNameStore;
    $restData->save();

//    Resturant::create($restData);
    return redirect('/adminpanel/resturants')->withSuccessMessage('restaurant added successfully');
    
     }

     public function edit($id)
     {  
         $rest=Resturant::find($id);
 
        
       
         return view('admin.rest.edit', ['rest' => $rest]);
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
