 

{{--users--}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>users control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel/users/create')}}"><i class="fa fa-circle-o"></i>Add user</a></li>
            <li><a href="{{url('/adminpanel/users')}}"><i class="fa fa-circle-o"></i> All users</a></li>
          </ul>
        </li>

 {{--restourants--}}


 <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-cutlery"></i> <span>Restaurants control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel/resturants/create')}}"><i class="fa fa-circle-o"></i>Add Restaurant</a></li>
            <li><a href="{{url('/adminpanel/resturants')}}"><i class="fa fa-circle-o"></i> All Restaurant</a></li>
          </ul>
        </li>
{{--category--}}

{{--<li class="treeview">
          <a href="#">
          <i class="glyphicon glyphicon-th-list"></i> <span>Categories control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel/categories/create')}}"><i class="fa fa-circle-o"></i>Add Categories</a></li>
            <li><a href="{{url('/adminpanel/categories')}}"><i class="fa fa-circle-o"></i> All Categories</a></li>
          </ul>
        </li>--}}

        {{--rest-cate--}}

{{--<li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-th-list"></i><span>Resturant&categorycontrol</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel/resturantcategory/create')}}"><i class="fa fa-circle-o"></i>Add category for resturnat</a></li>
            <li><a href="{{url('/adminpanel/resturantcategory')}}"><i class="fa fa-circle-o"></i> All categories of resturant</a></li>
          </ul>
        </li>--}}

 {{--meal--}}

{{--<li class="treeview">
          <a href="#">
          <span  class="glyphicon glyphicon-cutlery"></span>
         </i> <span>Meal control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel/meals/create')}}"><i class="fa fa-circle-o"></i>Add Meal</a></li>
            <li><a href="{{url('/adminpanel/meals')}}"><i class="fa fa-circle-o"></i> All Meals</a></li>
          </ul>
        </li>--}}

        {{--order--}}

{{--<li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-th-list"></i> <span>Orders control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="{{url('/adminpanel/orders')}}"><i class="fa fa-circle-o"></i> All Orders</a></li>
          </ul>
        </li>--}}
        {{--contact--}}
        <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>contact control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/adminpanel/contact')}}"><i class="fa fa-circle-o"></i> All Messages</a></li>
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