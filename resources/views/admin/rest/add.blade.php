@extends('admin.layouts.layout')
@section('title')
Add Resturant 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
      Add Resturant 
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel/resturants')}}">Resturants Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/resturants/create')}}"> Add Resturant </a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New Resturant</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            {!! Form::open(['url'=>'/adminpanel/resturants','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
           
                @include('admin.rest.form')
                {!! Form::close() !!}
            </div>
         </div>
    </div>
    </div>
</section>
@endsection


@section('footer')

@endsection
