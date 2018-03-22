@extends('admin.layouts.layout')
@section('title')
Edit user
{{$user->name}} 
@endsection

@section('header')

@endsection


@section('content')
<section class="content-header">
      <h1>
    Edit user
{{$user->name}} 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="{{url('/adminpanel/users')}}">users Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/users/'.$user->id.'/edit')}}"> edit user </a></li>
      </ol>
    </section>

    <section class="content">
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
       
    
            {!! Form::model($user, ['method' => 'patch','route'=>['user.update',$user->id]]) !!}
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            
                                        <label for="name" class="col-md-4 control-label">Name</label>
            
                                        <div class="col-md-6">
                                        {!!Form::text('name',null,['class'=>'form-control'])!!}
                                          
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br>
                                    <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Is admin</label>
                                      <div class="col-md-6">
                                        {!!Form::select('admin',['0'=>'user','1'=>'admin'],['class'=>'form-control'])!!}
                                          
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                   
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            
                                        <div class="col-md-6">
                                        {!!Form::text('email',null,['class'=>'form-control'])!!}
                                           
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                          Update
                                </button>
                            </div>
                        </div>
                {!! Form::close() !!}

                
       
             
            </div>
         </div>
    </div>
    </div>
</section>

<section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Change password of user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
       
            {!! Form::open( ['method' => 'post','url'=>['adminpanel/user/changepassword/']]) !!}
            <input  type="hidden" value="{{$user->id}}" name="user_id" >

            <div class="col-md-8">
                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                             change password
                                </button>
                            </div>
                        </div>
                          
                {!!Form::close()!!}
                
                
       
             
            </div>
         </div>
    </div>
    </div>
</section>
                            
@endsection


@section('footer')

@endsection
