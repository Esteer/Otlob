@extends('admin.layouts.layout')
@section('title')
Edit resturants
{{$rest->name}} 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
    Edit resturants
{{$rest->name}} 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel/resturants')}}">resturants Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/resturants/'.$rest->id.'/edit')}}"> Edit resturant </a></li>
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
       
            {!! Form::model($rest, ['method' => 'patch','url'=>['/adminpanel/resturants',$rest->id],'enctype'=>'multipart/form-data']) !!}
            {{ csrf_field() }}
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
  <label for="name" >Resturant name</label>
  </div>
  <div class="col-md-8">
 <input type="name" name="name" class="form-control" value="{{$rest->name }}">

 </div>
 </div>
 
 <div class="col-md-4">
  <label for="street" >Resturant street</label>
  </div>
  <div class="col-md-8">
 <input type="text" name="street" class="form-control" value="{{$rest->street }}">
 </div>
 <br><br>
 <div class="col-md-4">
    <label for="phone" >Resturant phone</label>
    </div>

    <div class="col-md-8">
     <input type="phone" name="phone" class="form-control" value="{{$rest->phone }}">
     </div>
 <br><br>

 <div class="col-md-4">
  <label for="delivary_time">Resturant Delivary_time</label>
  </div>
 
  <div class="col-md-8">
     <input type="delivary_time" name="delivary_time" class="form-control" value="{{$rest->delivary_time }}" >
     </div>
 <br><br>

 <div class="col-md-4">
 <label for="image" >Resturant image</label>
 </div>
 <div class="col-md-4">
    {!! Form::file('image', array('class' => 'form-control')) !!}
  {{--    <img src={{asset('/storage/image/'.$rest->image)}} class="img-rounded" style="width:150px;height:150px;"  >
    --}}{{--    <input type="text" name="image" class="form-control" value="{{$rest->image }}">
     --}} </div><br><br>
  <div class="form-group">
     <div class="col-md-6 col-md-offset-4">
      <button type="submit" class="btn btn-primary">
           update Resturant
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
