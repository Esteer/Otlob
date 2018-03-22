<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use DB;

class ContactUSController extends Controller
{

    public function index(Request $request)
    {
        
       $contact = ContactUS::orderBy('id','DESC')->paginate(100);
       return view('admin.contact',compact('contact'))
       
                   ->with('i', ($request->input('page', 1) - 1) * 5);


    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('contactUS');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        	]);


        ContactUS::create($request->all());


        return back()->with('success', 'Thanks for contacting us!');
    }

    public function destroy($id)
    {
        DB::table("contactus")->where('id',$id)->delete();
        
               return redirect()->route('contact.index')
        
                               ->with('success','Contact deleted successfully');
    }
}