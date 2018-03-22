
 {!! Form::open(['url'=>'adminpanel.resturants','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
 {{ csrf_field() }}

 
 <div class="col-md-4">
  <label for="name" >Resturant name</label>
  </div>
  <div class="col-md-8">
 <input type="name" name="name" class="form-control" required>

 </div>
 
 <br><br>
 <div class="col-md-4">
  <label for="name" >Resturant Manager</label>
  </div>
 <div class="col-md-8">
 
 <select class="form-control" name="manager"  data-parsley-required="true">
      @foreach($user as $userinfo)
          {
          <option value="{{$userinfo->name}}">{{$userinfo->name}}</option>
          }
     @endforeach
  </select>
  </div>
  <br><br>

 <div class="col-md-4">
  <label for="street" >Resturant street</label>
  </div>
  <div class="col-md-8">
 <input type="street" name="street" class="form-control" required>
 </div>
 <br><br>
 <div class="col-md-4">
    <label for="phone" >Resturant phone</label>
    </div>

    <div class="col-md-8">
     <input type="phone" name="phone" class="form-control" required>
     </div>
 <br><br>

 <div class="col-md-4">
  <label for="delivary_time">Resturant Delivary_time</label>
  </div>
 
  <div class="col-md-8">
     <input type="delivary_time" name="delivary_time" class="form-control" required>
     </div>
 <br><br>

 <div class="col-md-4">

 {{  Form::label('image', 'Resturant image')}}
 </div>
 <div class="col-md-4">

 {!! Form::file('image', array('class' => 'form-control')) !!}
    </div><br><br>
  <div class="form-group">
     <div class="col-md-6 col-md-offset-4">
      <button type="submit" class="btn btn-primary">
            Add New Restourant
      </button>
    </div>
</div>
{!! Form::close() !!}