@extends('admin.layouts.layout')
@section('title')
Edit categories
{{$cate->name}} 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
    Edit categories
{{$cate->name}} 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel/categories')}}">categories Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/categories/'.$cate->id.'/edit')}}"> Edit category </a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
       
            {!! Form::model($cate, ['method' => 'patch','url'=>['/adminpanel/categories',$cate->id],'enctype'=>'multipart/form-data']) !!}
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
  <label for="name" >category name</label>
  </div>
  <div class="col-md-8">
 <input type="name" name="name" class="form-control" value="{{$cate->name }}">

 </div>
 </div>
 
 <div class="col-md-4">
 <label for="image" >category image</label>
 </div>
 <div class="col-md-4">
    {!! Form::file('image', array('class' => 'form-control')) !!}
     
    </div><br><br>
  <div class="form-group">
     <div class="col-md-6 col-md-offset-4">
      <button type="submit" class="btn btn-primary">
           update category
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
