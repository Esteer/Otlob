 
 {{--restourants--}}


 <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-cutlery"></i> <span>Restaurant control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  class="active"><a href="{{url('/adminpanel2/resturants')}}"><i class="fa fa-circle-o"></i> All Restaurant</a></li>
          </ul>
        </li>
{{--category--}}

<li class="treeview">
          <a href="#">
          <i class="glyphicon glyphicon-th-list"></i> <span>Categories control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel2/categories/create')}}"><i class="fa fa-circle-o"></i>Add Categories</a></li>
            <li><a href="{{url('/adminpanel2/categories')}}"><i class="fa fa-circle-o"></i> All Categories</a></li>
          </ul>
        </li>

        {{--rest-cate--}}

<li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-th-list"></i><span>Resturant&categorycontrol</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel2/resturantcategory/create')}}"><i class="fa fa-circle-o"></i>Add category for resturnat</a></li>
            <li><a href="{{url('/adminpanel2/resturantcategory')}}"><i class="fa fa-circle-o"></i> All categories of resturant</a></li>
          </ul>
        </li>

 {{--meal--}}

<li class="treeview">
          <a href="#">
          <span  class="glyphicon glyphicon-cutlery"></span>
         </i> <span>Meal control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel2/meals/create')}}"><i class="fa fa-circle-o"></i>Add Meal</a></li>
            <li><a href="{{url('/adminpanel2/meals')}}"><i class="fa fa-circle-o"></i> All Meals</a></li>
          </ul>
        </li>

        {{--order--}}

<li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-th-list"></i> <span>Orders control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="{{url('/adminpanel2/orders')}}"><i class="fa fa-circle-o"></i> All Orders</a></li>
          </ul>
        </li>
        {{--website--}}
        <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>otlob website</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/home')}}"><i class="fa fa-circle-o"></i> otlob</a></li>
            </ul>
          </li>