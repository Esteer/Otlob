
 {!! Form::open(['url'=>'adminpanel.categories','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
 {{ csrf_field() }}
 <div class="col-md-4">
  <label for="name" >category name</label>
  </div>
  <div class="col-md-8">
 <input type="name" name="name" class="form-control" required>

 </div>
 
 <br><br>

 
 <div class="col-md-4">

 {{  Form::label('image', 'category image')}}
 </div>
 <div class="col-md-4">

 {!! Form::file('image', array('class' => 'form-control')) !!}
    </div><br><br>
  <div class="form-group">
     <div class="col-md-6 col-md-offset-4">
      <button type="submit" class="btn btn-primary">
            Add New category
      </button>
    </div>
</div>
{!! Form::close() !!}