@extends('welcome')
@section('title', 'street')
@section('street')
 
 
<div class="row restCon" >
 @foreach($resturants as $rest)

 <div class="col-md-3">
        <center><h3 id="h1" class=" headfont" style="border-raduis:20px;" >{{$rest->name}}</h3></center> 
   <img src={{asset('/storage/image/'.$rest->image)}} class=" img-thumbnail " style="width:300px;height:250px"  ><br>
    <br>
  
                <h3 id="h1"><strong>phone:</strong>{{$rest->phone}}</h3>
                <br>
                <a href= "categories.show/{{$rest->id}}" class="btn btn-xs btn-block btn-info pull-right">show category</a>
              
        </div>
        
        {{--       <h1 id="h1" class="local">street:{{$rest->street}}</h1>
        <h1 id="h1" class="local">phone:</h1><h1>{{$rest->phone}}</h1>
  --}}
    

 @endforeach
</div> 
 @endsection