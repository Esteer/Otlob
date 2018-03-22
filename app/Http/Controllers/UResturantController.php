<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resturant;
use DB;
class UResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rests = DB::select('select * from resturants '); 
        $restStreet= DB::table('resturants')->distinct()->get(['street']);
        return view('index')->with('rests',$rests)->with('restStreet', $restStreet);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $inputName=$request->input('name');
        $resturants = DB::table('resturants')->select('name', 'street','phone','image','id')->where('id','=',$inputName)->paginate(6);
        return view('resturants.show')->with('resturants',$resturants);
    }

    public function showStreet(Request $request)
    {
        
        $inputName=$request->input('name');
        $resturants = DB::table('resturants')->select('name','phone','id','image')->where('street','=',$inputName)->distinct()->get();
        return view('resturants.showStreet')->with('resturants',$resturants);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
