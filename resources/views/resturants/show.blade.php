@extends('welcome')
@section('title', 'categories')
@section('resturant')
 
 

 


       @foreach($resturants as $rest)
       <h1 id="h1" class=" restName">{{$rest->name}}</h1>
         <div class="container"> 
        <div class="row"> 
        <div class="col-md-2"></div>
      <div class="col-md-8 "  >
      <center>
        <img src={{asset('/storage/image/'. $rest->image)}} class=" img-thumbnail " style="width:500px;height:500px;border-raduis:20px;"  >
        
        <table class="table">
                <tr>
                        <th scope="row"><h1 id="h1" class="local" ><strong>street:</strong></h1></th>
                        <td><h1 id="h1" class="local">{{$rest->street}}</h1></td>
                        
                </tr>
                <tr>
                        <th scope="row"><h1 id="h1" class="local"><strong>phone:</strong></h1></th>
                        <td><h1 id="h1" class="local">{{$rest->phone}}</h1></td>
                </tr>
            </table>
          {{--    {!! Form::open(['action'=>'UCategoriesController@show','method'=>'get']) !!}
            {{Form::submit('show category',['class'=>"btn btn-primary btn-lg  "])}}
            {!! Form::close() !!}
             --}}

             <a href="categories.show/{{$rest->id}}" class="btn btn-info btn-lg">show categories</a>
            </center>
             @endforeach
        </div>
        <div class="col-md-2"></div>
        </div>
        </div>  
   
@endsection