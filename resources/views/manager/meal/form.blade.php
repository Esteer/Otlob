
 {!! Form::open(['url'=>'adminpanel2.meals','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
 {{ csrf_field() }}
 <div class="col-md-4">
  <label for="name" >Meal name</label>
  </div>
  <div class="col-md-8">
 <input type="text" name="name" class="form-control" required>

 </div>
 
 

 
 <br><br>
 <div class="col-md-4">
    <label for="quantity" >Meal quantity</label>
    </div>

    <div class="col-md-8">
     <input type="number" name="quantity" class="form-control" required>
     </div>
      <br><br>
     <div class="col-md-4">
      <label for="type" >Size</label>
      </div>
     <div class="col-md-8">
    <select class="form-control" name="type"  data-parsley-required="true">
         
            <option value="small">small</option>
            <option value="medium">medium</option>
            <option value="large">large</option>
         
        </select>
    
     </div>
     <br><br>
     <div class="col-md-4">
      <label for="quantity" >Meal price</label>
      </div>
  
      <div class="col-md-8">
       <input type="number" name="price" class="form-control" required>
       </div>
 <br><br>
 <div class="col-md-4">
    <label >IN category</label>
    </div>

    <div class="col-md-8">
    <select class="form-control" name="cat_name" id="lastname" data-parsley-required="true">
          @foreach ($cate as $cateinfo) 
          {
            <option value="{{ $cateinfo->name }}">{{ $cateinfo->name }}</option>
          }
          @endforeach
        </select>
    
     </div>
 <br><br>
 <div class="col-md-4">

 {{  Form::label('image', 'Meal image')}}
 </div>
 <div class="col-md-8">
    
     {!! Form::file('image', array('class' => 'form-control ')) !!}
        </div> 
        
        <div class="col-md-4">
            <label >meal discription</label>
            </div>
            <br><br>
            <div class="col-md-8">
               {{--   <textarea  id="article-ckeditor" name="description" class="form-control">
                </textarea>  --}}
                {{ Form::textarea('description', null, ['class' => 'txtarea',
                'placeholder'=>"Enter meals description",'id'=>'article-ckeditor']) }}
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                     <button type="submit" class="btn btn-primary">
                           Add New Meal
                     </button>
                   </div></div>
        
     {{--     <div>
 <div class="col-md-4"> 
  <label for="description" >Meal description</label>
  </div>
  <div class="col-md-8">
 <textarea  id="article-ckeditor" name="description" class="form-control">
 </textarea>
 </div>
<br><br>
  <div class="form-group">
     <div class="col-md-6 col-md-offset-4">
      <button type="submit" class="btn btn-primary">
            Add New Meal
      </button>
    </div></div>
        </div>  --}}
</div><br><br>

                              
{!! Form::close() !!}

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>