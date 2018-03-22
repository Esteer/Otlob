@extends('manager.layouts.layout')
@section('title')
Add Category 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
      Add Category 
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel2')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel2/categories')}}">categories Control</a></li>
        <li class="active"><a href="{{url('/adminpanel2/categories/create')}}"> Add category </a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New Categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            {!! Form::open(['url'=>'/adminpanel2/categories','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
           
                @include('manager.category.form')
                {!! Form::close() !!}
            </div>
         </div>
    </div>
    </div>
</section>
@endsection


@section('footer')

@endsection
