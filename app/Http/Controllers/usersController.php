<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use  App\Http\Requests\AddUserRequestAdmin;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
class usersController extends Controller
{
    //
    public function index(User $user)
    {
        $user=$user->all();
        return view('admin.user.index',compact('user'));
    }
    public function create()
    {
        //
        return view('admin.user.add');
    }
    protected function store(AddUserRequestAdmin $request,User $user )
    {
         $user::create([
            'name' => $request->name,
            'admin' => $request->admin,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/adminpanel/users')->withSuccessMessage('user added successfully');
    }

    public function edit($id)
    {  
        $user=User::find($id);

        // dd($user);
      
        return view('admin.user.edit', ['user' => $user]);
    }

    public function update($id,Request $request)
    {  
        $updateduser=User::find($id);
        $updateduser->fill($request->all())->save();
       
        return Redirect::back()->withSuccessMessage('user updated successfully');
    }

    public function updatepassword(User $user,Request $request)
    {
        $userupdate = $user->find($request->user_id);
       // dd($userupdate);
        $password=bcrypt($request->password);
        $userupdate->fill(['password'=>$password])->save();
        return Redirect::back()->withSuccessMessage('password changed successfully');
    }

    public function destroy($id,User $user)
    {
     $user->find($id)->delete();
     return Redirect::back()->withSuccessMessage('user deleted successfully');
    }
}
