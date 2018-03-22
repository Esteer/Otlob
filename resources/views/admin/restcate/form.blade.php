
 {!! Form::open(['url'=>'adminpanel.resturantcategory','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
 {{ csrf_field() }}
 
 <div class="col-md-4">
  <label for="name" >resturant name</label>
  </div>
  <div class="col-md-8">
  <select class="form-control" name="rname" id="lastname" data-parsley-required="true">
          @foreach ($rest as $restinfo) 
          {
            <option value="{{ $restinfo->name }}">{{ $restinfo->name }}</option>
          }
          @endforeach
        </select>

 </div>
 
 <br><br>

 <div class="col-md-4">
  <label for="name" >category name</label>
  </div>
  <div class="col-md-8">
  <select class="form-control" name="cname" id="lastname" data-parsley-required="true">
          @foreach ($cate as $cateinfo) 
          {
            <option value="{{ $cateinfo->name }}">{{ $cateinfo->name }}</option>
          }
          @endforeach
        </select>

 </div>
 
 <br><br>
 
 
  <div class="form-group">
     <div class="col-md-6 col-md-offset-4">
      <button type="submit" class="btn btn-primary">
            Add New category
      </button>
    </div>
</div>
{!! Form::close() !!}