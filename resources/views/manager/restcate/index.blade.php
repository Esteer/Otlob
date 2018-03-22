@extends('manager.layouts.layout')
@section('title')
Resturants&categories control 
@endsection

@section('header')
{!!Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
@endsection


@section('content')
<section class="content-header">
      <h1>
      Resturants&categories control
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel2')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{url('/adminpanel2/resturantcategory')}}">Resturants&categories</a></li>
     
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th>Resturant</th>
                  <th>Has category</th>
                 
                  <th>Authentications</th>
                
                </tr>
                </thead>
                <tbody>
                @foreach($rc as $rcinfo)
                <tr>
                  <td>{{$rcinfo->r}}</td>
                  <td>{{$rcinfo->c}}</td>
                  
                 
                  <td>
                   <a href="{{url('/adminpanel2/resturantcategory/'.$rcinfo->ri.'/restcate/'.$rcinfo->ci.'/delete')}}" class="btn btn-danger">Delete</a>
                 
                </td> 
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>Resturant</th>
                <th>Has category</th>
               
                <th>Authentications</th>
              </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@endsection


@section('footer')
{!!Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
{!!Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}
<script type="text/javascript">
     $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
</script>
@endsection
