@extends('manager.layouts.layout')
@section('title')
Edit Meals
{{$meal->name}} 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
    Edit Meals
{{$meal->name}} 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel2')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel2/meals')}}">Meals Control</a></li>
        <li class="active"><a href="{{url('/adminpanel2/meals/'.$meal->id.'/edit')}}"> Edit Meals </a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit resturant</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
       
            {!! Form::model($meal, ['method' => 'patch','url'=>['/adminpanel2/meals',$meal->id],'enctype'=>'multipart/form-data']) !!}
            {{ csrf_field() }}
            <section class="content-fluid">
    @if (session()->has('success_message'))
<div class="alert alert-success">
    {{ session()->get('success_message') }}
</div>
@endif
@if (session()->has('error_message'))
<div class="alert alert-danger">
    {{ session()->get('error_message') }}
</div>
@endif
            <div class="col-md-4">
  <label for="name" >Meal name</label>
  </div>
  <div class="col-md-8">
 <input type="name" name="name" class="form-control" value="{{$meal->name }}">

 </div>
 </div>
 
 <div class="col-md-4">
  <label for="street" >Meal Description</label>
  </div>
  <div class="col-md-8">
 <input type="text" name="description" class="form-control" value="{{$meal->description }}">
 </div>
 <br><br>
 <div class="col-md-4">
    <label for="quantity" >Meal quantity</label>
    </div>

    <div class="col-md-8">
     <input type="number" name="quantity" class="form-control" value="{{$meal->quantity }}">
     </div>
 <br><br>


 <div class="col-md-4">
 <label for="image" >Resturant image</label>
 </div>
 <div class="col-md-4">
  {{--    <input type="text" name="image" class="form-control" value="{{$meal->image }}">
    --}}  
    {!! Form::file('image', array('class' => 'form-control')) !!}
  
  </div><br><br>

    <div class="col-md-4">
  <label >IN category</label>
  </div>
 
  <div class="col-md-8">
     <input type="number" name="cat_id" class="form-control" value="{{$meal->cat_id }}" >
     </div>
 <br><br>
  <div class="form-group">
     <div class="col-md-6 col-md-offset-4">
      <button type="submit" class="btn btn-primary">
           update Meal
      </button>
    </div>
</div>
{!! Form::close() !!}
                
       
             
            </div>
         </div>
    </div>
    </div>
</section>


                            
@endsection


@section('footer')

@endsection
