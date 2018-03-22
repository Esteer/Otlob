@extends('manager.layouts.layout')
@section('title')
Add Meal 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
      Add Meal 
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel2')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel2/meals')}}">Meal Control</a></li>
        <li class="active"><a href="{{url('/adminpanel2/meals/create')}}"> Add Meal </a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New Meals</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            {!! Form::open(['url'=>'/adminpanel2/meals','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
           
                @include('manager.meal.form')
                {!! Form::close() !!}
            </div>
         </div>
    </div>
    </div>
</section>
@endsection


@section('footer')

@endsection
