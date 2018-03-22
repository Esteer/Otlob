@extends('manager.layouts.layout')
@section('title')
Meals control 
@endsection

@section('header')
{!!Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
@endsection


@section('content')
<section class="content-header">
      <h1>
      Meals control
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel2')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{url('/adminpanel2/meals')}}">Meals</a></li>
     
      </ol>
    </section>
  
    <!-- Main content -->
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
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
              <table id="example2" class="table table-bordered table-hover" >
                <thead >
                <tr >
                  <th>#</th>
                  <th>Meals name</th>
                  <th>Meals description</th>
                  <th>Meals quantity</th>
                  <th>size</th>
                  <th>price</th>
                  <th>meal image</th>
                  <th>In Category</th>
                  <th>In Restaurant</th>
                  <th>added in</th>
                  <th>Authentications</th>
                
                </tr>
                </thead>
                <tbody>
                @foreach($meal as $mealinfo)
                <tr>
                  <td>{{$mealinfo->id}}</td>
                  <td>{{$mealinfo->name}}</td>
                  <td>{{$mealinfo->description}}</td>
                  <td>{{$mealinfo->	quantity}}</td>
                  <td>{{$mealinfo->	type}}</td>
                  <td>{{$mealinfo->	price}}</td> 
                 <td> <img src={{asset('/storage/image/'.$mealinfo->image)}} class=" img-thumbnail imageRest"  >
                 </td>
                  <td>{{$mealinfo->c}}</td>
                  <td>{{$mealinfo->r}}</td>
                  <td>{{$mealinfo->created_at}}</td>
                  <td>
                  <a href="{{url('/adminpanel2/meals/'.$mealinfo->id.'/edit')}}" class="btn btn-info">edit</a>
                  
                  <a href="{{url('/adminpanel2/meals/'.$mealinfo->id.'/delete')}}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <tr >
                <th>#</th>
                <th>Meals name</th>
                <th>Meals description</th>
                <th>Meals quantity</th>
                <th>size</th>
                <th>price</th>
                <th>meal image</th>
                <th>In Category</th>
                <th>In Restaurant</th>
                <th>added in</th>
                <th>Authentications</th>
              
              </tr>
              
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
      'autoWidth'   : false
    })
</script>
@endsection
