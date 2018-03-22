@extends('admin.layouts.layout')
@section('title')
Resturants control 
@endsection

@section('header')
{!!Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
@endsection


@section('content')
<section class="content-header">
      <h1>
      Resturants control
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{url('/adminpanel/resturants')}}">Resturants</a></li>
     
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
                  <th>#</th>
                  <th>Resturant name</th>
                  <th>Resturant Manager</th>
                  <th>Resturant street</th>
                  <th>Resturant phone</th>
                  <th>Resturant delivary_time</th>
                  <th>Resturant image</th>
                  <th>added in</th>
                  <th>Authentications</th>
                
                </tr>
                </thead>
                <tbody>
                @foreach($rest as $restinfo)
                <tr>
                  <td>{{$restinfo->id}}</td>
                  <td>{{$restinfo->name}}</td>
                  <td>{{$restinfo->u}}</td>
                  <td>{{$restinfo->street}}</td>
                  <td>{{$restinfo->phone}}</td>
                  <td>{{$restinfo->delivary_time}}</td>
                 
                  <td> <img   src={{ asset('/storage/image/'.$restinfo->image) }} class="img-rounded" style="width:90px;height:90px;"  ></td>
                 <td>{{$restinfo->created_at}}</td>
                  <td>
                  <a href="{{url('/adminpanel/resturants/'.$restinfo->id.'/edit')}}" class="btn btn-primary">edit</a>
                  
                  <a href="{{url('/adminpanel/resturants/'.$restinfo->id.'/delete')}}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>#</th>
                <th>Resturant name</th>
                <th>Resturant Manager</th>
                <th>Resturant street</th>
                <th>Resturant phone</th>
                <th>Resturant delivary_time</th>
                <th>Resturant image</th>
                <th>added in</th>
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
