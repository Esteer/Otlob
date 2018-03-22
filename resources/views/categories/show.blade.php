
@extends('welcome')
@section('title', 'categories')
@section('cate')

<div class="row restCon" >

    @foreach($categories as $cate)
    
    <div class="col-md-4">
         <center>  <h3 id="h1" class=" cateName headfont" >{{$cate->name}}</h3></center>
           <img src={{asset('/storage/image/'.$cate->image)}} class=" img-thumbnail imageRest" style="height:220px" >
           
          <br>
     
         <a href=" {{url('/meals/show/'.$cate->id)}}" class="btn btn-xs btn-info btn-block pull-right btncolor">show meals</a>
                   
           </div>
          
           {{--       <h1 id="h1" class="local">street:{{$rest->street}}</h1>
           <h1 id="h1" class="local">phone:</h1><h1>{{$rest->phone}}</h1>
     --}}
       
   
    @endforeach
@endsection