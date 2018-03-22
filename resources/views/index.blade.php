<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  
<meta name="viewport" content="width=device-width, initial-scale=1">

@extends('welcome')

@section('home')

<div class="container-fluid" >
<div class"row" >

<div class="home"  style="width:1225px; height:550px; margin-left:-14px; background-image:url('images/open-24-hours.jpg');">
 
</div>
<div class="fh5co-overlay" style=" position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height:608px; 
  background: rgba(0, 0, 0, 0.3);
  z-index: 1;">
</div>
<div class="fh5co-text" style=" position: absolute;
  z-index: 3;
  width: 100%;
  top: 60%;
  right: 5%;
  
  margin-top: -100px;
  text-align: right;">
 
 <h1 class="to-animate fadeInUp animated" style=" margin: 0;
   font-size:  2.6rem;
  color: white;">Junk-free & clean food</h1><br>
        <h2 class="to-animate fadeInUp animated" style=" margin: 0;
   font-size: 30px;
  color: white;"> delivered in <span style="font-size: 3rem;
  background-size: contain;
    background-repeat: no-repeat;
    background-position: 0 93%;
      background-image: url(images/scratch-line.png);">60</span> minutes</h2>
  
</div>
</div>
<div class" row"  >
        
    <center><h1  style="font-size:40px;"  >You can search by</h1></center>
    <div class="col-md-4" >
    {!! Form::open(['action'=>'UResturantController@show','method'=>'POST']) !!}
    {{Form::submit('  resturant Name ',['class'=>"btn btn-primary btn-lg indexForm"])}}
    
    <select name="name" class="selectpicker indexForm" data-style="btn-info" multiple data-max-options="3" data-live-search="true" style="font-size:30px;padding-top:20px;">
            <optgroup label="resturant" >
                      @foreach($rests as $rest)
                 <option value="{{$rest->id}}">{{$rest->name}}</option>
                 @endforeach   
            </optgroup>
          </select>
        {!! Form::close() !!}
        </div>
        <div class="col-md-4" style="float:left;">
                {{ Html::image('images/Cartoon Chef.jpg','',array('class' => 'imgHome '))}}
    </div>
        <div class="col-md-4" style="float:right; ">
                {!! Form::open(['action'=>'UResturantController@showStreet','method'=>'POST']) !!}
                {{Form::submit('street Name',['class'=>"btn btn-primary btn-lg  "])}}<br>
                
                <select name="name" class="selectpicker" data-style="btn-info" multiple data-max-options="3" data-live-search="true" style="font-size:20px;padding-top:20px;">
                        <optgroup label="resturant">
                                  @foreach($restStreet as $street)
                             <option value="{{$street->street}}">{{$street->street}}</option>
                             @endforeach  
                        </optgroup>
                      </select>
                     {!! Form::close() !!}
                    </div>
</div>

</div>

<div class="jj" style="background-color:#569ec1; width:1240px; margin-left:-14px;">
        <br>
     <center> <h1 style="color:white">How It Works</h1></center>
     <center><img src="images/r1.png">
     <img src="images/r2.png">
     <img src="images/r3.png"></center>
    </div>

@endsection