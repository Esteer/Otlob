
@extends('welcome')
@section('title', 'street')
@section('meals')

<div class="container">
</br>
   

    <div class="row restCon" style="margin-left:10px">
 
    <div class="col-sm-7">
      <div class="row" style="border: 2px solid #cccccc; 
  -moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px #ccc;">
        <div class="col-sm-4">
        <br>
        @foreach( $meals as $mealinfo)
        <img   src="{{ asset('/storage/image/'.$mealinfo->image) }}" class="img-rounded" style="width:180px;height:180px" >
        <br><br>
        @endforeach
         
        </div>
        <div class="col-sm-4" >
        @foreach( $meals as $mealinfo)<br><br><br><br>
        <h3 id="h3" class="headfont"> {{$mealinfo->name}}</h3> <br>
        <h5 id="h3" > {{$mealinfo->description}}</h5><br><br><br>
          @endforeach
          <br><br>  <br><br>  <br>
        </div>
        <div class="col-sm-4" >
     
        @foreach( $meals as $mealinfo)
    
        {{ Form::open(['url' => 'meals/show/'.$mealinfo->cat_id,'method'=>'post']) }}
       
         {!! csrf_field() !!}
          <h5> 
   
          <input type="hidden" name="id" value="{{ $mealinfo->sid }}">
        
         <input type="hidden" name="name" value="{{ $mealinfo->name }}">
         <input type="hidden" name="type" value="{{ $mealinfo->type }}">
         <input type="hidden" name="price" value="{{ $mealinfo->price }}">
       
         <br>  <br>  <br>  <br>  <br>  <br>  <br> 
         {{ $mealinfo->type }}&nbsp;&nbsp;&nbsp;{{ $mealinfo->price }}EGP
         <button type="submit" class="btn btn-info">add</button><hr><br><br>
      
    
        </h5> 
        {{ Form::close() }}
        @endforeach
        <br>  <br>
  
        </div>
      </div>
    </div>
  
    <div class="col-sm-4" style=" margin-left:10px">
        <br>  <br>
     <div style="border: 2px solid #cccccc; width:400px">
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
@if (sizeof(Cart::content()) > 0)
<table class="table" >
<thead>
        <tr>
        <th>image</th>
            <th>Meal</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Price</th>
            <th class="column-spacer"></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach (Cart::content() as $item)
        <tr>
      
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>
                <select class="quantity" data-id="{{ $item->rowId }}">
                    <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                    <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                    <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                    <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                    <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                </select>
            </td>
            <td>${{ $item->subtotal }}</td>
            <td>
            @foreach( $meals as $mealinfo)
            <form action="{{ url('/meals/show/. $mealinfo->cat_id',[$item->rowId]) }}" method="get" class="side-by-side">
            {!! csrf_field() !!}
            @endforeach
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-danger btn-sm" value="Remove">
        </form>
       
          </td>
        </tr>
        @endforeach
        <tr>
            <td class="table-image"></td>
            <td></td>
            <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
            <td>${{ Cart::instance('default')->subtotal() }}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="table-image"></td>
            <td></td>
            <td class="small-caps table-bg" style="text-align: right">Tax</td>
            <td>${{ Cart::instance('default')->tax() }}</td>
            <td></td>
            <td></td>
        </tr>
        <tr class="border-bottom">
            <td class="table-image"></td>
            <td style="padding: 40px;"></td>
            <td class="small-caps table-bg" style="text-align: right">Your Total</td>
            <td class="table-bg">${{ Cart::total() }}</td>
            <td class="column-spacer"></td>
            <td></td>
        </tr>

        </tbody>
    </table>
    <div style="text-align: right">
          <a href="{{ url('/checkout') }}" class="btn btn-primary btn-lg" >Checkout</a> &nbsp; &nbsp; &nbsp;
    </div>
    <br>
    @else
   
    <center>{{ Html::image('images/cart.png','',array('class' => 'imgHome '))}}
<h3 style="color:#cccccc; font-size: 1.5em; font-family: 'Montserrat-Light', sans-serif;">You have no items in your shopping cart</h3>
</center>
@endif 
    </div>
    </div>
  </div>
  </div>  
  <br><br>   
@endsection
    @section('extra-js')
       
    <script>
        (function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function() {
                console.log('sucsess');
                var id = $(this).attr('data-id')
                console.log(id);
                $.ajax({
                  type: "patch",
                  url: '{{ url("/meals/show") }}' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    
                    window.location.href = '{{ URL::previous() }}';
                  }
                });

            });

        })();

    </script>
  
@endsection
