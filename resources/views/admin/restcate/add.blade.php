@extends('admin.layouts.layout')
@section('title')
Add Resturant&category 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
      Add Resturant&category 
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel/resturantcategory')}}">Resturant&category Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/resturantcategory/create')}}"> Add Resturant&category </a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New Resturant&category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            {!! Form::open(['url'=>'/adminpanel/resturantcategory','method'=>'POST']) !!}
           
                @include('admin.restcate.form')
                {!! Form::close() !!}
            </div>
         </div>
    </div>
    </div>
</section>
@endsection


@section('footer')

@endsection
