@extends('welcome')
@section('title', 'street')
@section('extra-css')

<script src="https://js.stripe.com/v3/"></script>

@endsection

@section('content')

    <div class="container">
     <div  class="row">
    
           <div class="col-md-6"  >
           @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
           <h1 class="checkout-heading stylish-heading">Checkout</h1><br>
           <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        @if (auth()->user())
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        @else
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>
                  
                    <h2>Payment Details</h2>

                    <div class="form-group">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                        <input type="hidden" name="billing_subtotal" value=" {{ Cart::instance('default')->subtotal() }}">
                        <input type="hidden" name="tax" value=" {{ Cart::instance('default')->tax() }}">
                        <input type="hidden" name="total" value=" {{ Cart::total() }}">
                       
                    </div>
                    @foreach (Cart::content() as $item)
               
                         <input type="text" name="qty" value="{{ $item->qty }}">
                         <input type="text" name="meal_name" value="{{ $item->name }}">
                       
                       @endforeach
                    <div class="form-group">
                        <label for="card-element">
                          Credit or debit card
                        </label>
                        <div id="card-element">
                          <!-- a Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>

                    <button type="submit" id="complete-order" class="btn btn-info">Complete Order</button>

            </form>
            </div>
            <div class="col-md-6" >
                <br><br><br><br>
            <div class="checkout-table-container">
                <h2>Your Order</h2>

                <table class="table" >
                <thead>
                        <tr>
                           
                            <th>Meal</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th class="column-spacer"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
       
                   <tr>
                   @foreach (Cart::content() as $item)
                  
                       <td>{{ $item->name }}</td>
                       <td>{{ $item->type }}</td>
                       <td>${{ $item->subtotal }}</td>
                       <td>{{ $item->qty }}</td>
                     
            
        </tr>
                       @endforeach
                       <td class="table-image"></td>
            <td></td>
            <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
            <td>
                  
                ${{ Cart::instance('default')->subtotal() }}
            </td>
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
            </div>
            </div>
           
     </div> <!-- end checkout-section -->
    </div>
            @endsection

@section('extraa-js')
    <script>
        (function(){
            // Create a Stripe client
            var stripe = Stripe('pk_test_JKVJPMynL8ckk7ivBxoroTlT');

            // Create an instance of Elements
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };

            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });

            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

              // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;

              var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }

              stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;

                  // Enable the submit button
                  document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });

            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);

              // Submit the form
              form.submit();
            }
        })();
    </script>
@endsection
