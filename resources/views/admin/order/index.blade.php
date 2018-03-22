@extends('admin.layouts.layout')
@section('title')
Orders control 
@endsection

@section('header')
{!!Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
@endsection


@section('content')
<section class="content-header">
      <h1>
      Categories control
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{url('/adminpanel/orders')}}">Orders</a></li>
     
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
                 
                
                  <th>Order quantity</th>
                  <th>meal name</th>
                  <th>customer name</th>
                  
                 
                
                </tr>
                </thead>
                <tbody>
                @foreach($order as $orderinfo)
                <tr>
                  <td>{{$orderinfo->id}}</td>
               
                  <td>{{$orderinfo->quantity}}</td>
                  <td>{{$orderinfo->m}}</td>
                  <td>{{$orderinfo->u}}</td>
               
                  <td>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>#</th>
               
              
                <th>Order quantity</th>
                <th>meal name</th>
                <th>customer name</th>
                
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
