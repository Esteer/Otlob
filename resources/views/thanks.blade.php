@extends('welcome')
@section('title', 'street')
@section('content1')

   <div class="thank-you-section">
       <br> <br> <br>
      <center> <h1>Thank you for <br> Your Order!</h1></center>
      <center> <p style="font-size:20px">A confirmation email was sent</p>
       <div class="spacer"></div>
       <div>
           <a style="font-size:15px; text-decoration:none;"href="{{ url('/home') }}" class="button">Home Page</a>
       </div>
       <br> <br> <br>
</center>
   </div>




@endsection
