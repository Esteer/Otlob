@extends('admin.layouts.layout')
@section('title')
Add user 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
      Add user 
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel/users')}}">users Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/users/create')}}"> Add user </a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form class="form-horizontal" method="POST" action="{{ url('/adminpanel/users') }}">
                @include('admin.user.form')
                </form>
            </div>
         </div>
    </div>
    </div>
</section>
@endsection


@section('footer')

@endsection
