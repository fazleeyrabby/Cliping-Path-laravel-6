<html>
    <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
   <title>{{ $gnrlstng->name }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../assets/favicon/{{ $gnrlstng->favicon }}" type="image/x-icon">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/') }}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- summernote -->

    </head>
     <script>
        function check_delete_info(){
           var check = confirm('Are you sure to delete this');
           if(check){
            return true;
           }else{
            return false;
           }
        }
        
    </script>
    <body class="app sidebar-mini">

       <header class="app-header" style="background-color: {{$gnrlstng->color}}"><a style="background-color: {{$gnrlstng->color}}" class="app-header__logo" href="#">{{$gnrlstng->name}}</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
         <?php
            $pending = App\Order::where('status',0)->count();
          ?>
        <!--Notification Menu order-->
        <li class="dropdown"><a class="app-nav__item" title="Order notification" href="#" data-toggle="dropdown" aria-label="Show notifications"><span class="badge badge-danger">{{ $pending }}</span><i class="fa fa-bell-o fa-lg"></i></a> 
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have {{ $pending }} new order notifications.</li>
            <?php
             $pending_orders = App\Order::where('status',0)
                                ->orderBy('order_id','desc')
                                ->take(5) 
                                ->get();
            ?>
            @foreach($pending_orders as $pending_order)
            <div class="app-notification__content">
              <li>
                <a class="app-notification__item" href="{{ route('order.show',$pending_order->order_id) }}">
                  <span class="app-notification__icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                  </span>
                  <div>
                    <p class="app-notification__message">
                      
                        <strong>{{$pending_order->ran_order_id}}</strong>  You have new order
                    </p>
                    <p class="app-notification__meta">
                        <?php
                          $mytime = Carbon\Carbon::parse($pending_order->created_at);
                        ?>
                      {{ $mytime }}</p>
                  </div>
                </a>
              </li>
            </div>
            @endforeach
            <li class="app-notification__footer"><a href="{{ route('order.index') }}">See all notifications.</a></li>
          </ul>
        </li> 
         <!--Notification Menu orderquote-->
         <?php
            $orderquotepending = App\Orderquote::where('status',0)->count();
          ?>
        <li class="dropdown"><a class="app-nav__item" href="#" title="User orderquote notifications" data-toggle="dropdown" aria-label="Show notifications"><span class="badge badge-danger">{{ $orderquotepending }}</span><i class="fa fa-bell-o fa-lg"></i></a> 
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have {{ $orderquotepending }} new order notifications.</li>
            <?php
             $pending_orders_quotes = App\Orderquote::where('status',0)
                                ->orderBy('id','desc')
                                ->take(5) 
                                ->get();
            ?>
            @foreach($pending_orders_quotes as $pending_orders_quote)
            <div class="app-notification__content">
              <li>
                <a class="app-notification__item" href="{{ url('/admin/order-quote') }}">
                  <span class="app-notification__icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                  </span>
                  <div>
                    <p class="app-notification__message">
                      
                        <strong>{{$pending_orders_quote->order_id}}</strong>  You have new order
                    </p>
                    <p class="app-notification__meta">
                        <?php
                          $mytime = Carbon\Carbon::parse($pending_orders_quote->created_at);
                        ?>
                      {{ $mytime }}</p>
                  </div>
                </a>
              </li>
            </div>
            @endforeach
            <li class="app-notification__footer"><a href="{{ url('/admin/order-quote') }}">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           <li><a class="dropdown-item" href="{{ url('admin/change-password') }}"><i class="fa fa-cog fa-lg"></i> Change Password</a></li>
            <li><a class="dropdown-item" href="{{ url('admin/admin-profile') }}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
           </form>
          </li>
          </ul>
        </li>
      </ul>
    </header>
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar" style="background-color: {{ $gnrlstng->navbar_color }}">
      <div class="app-sidebar__user">
         <?php
              $admin = App\Admin::where('id',Auth::user()->id)->first();
          ?>
        <img class="app-sidebar__user-avatar" src="/assets/admin/profile_img/{{ $admin->profile_img }}" alt="User Image" height="60" width="60">
        <div>
          <p class="app-sidebar__user-name">{!! Auth::user()->name !!}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{ url('/admin') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">User</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="{{ url('admin/all-user') }}"><i class="icon fa fa-circle-o"></i>All Users</a></li>
            <li><a class="treeview-item" href="{{ route('service.create') }}"><i class="icon fa fa-circle-o"></i> Verified Users</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('service.index') }}"><i class="icon fa fa-circle-o"></i> Manage</a></li>
            <li><a class="treeview-item" href="{{ route('service.create') }}"><i class="icon fa fa-circle-o"></i> Create</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">SERVICE</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('servicepage.index') }}"><i class="icon fa fa-circle-o"></i> Manage</a></li>
            <li><a class="treeview-item" href="{{ route('servicepage.create') }}"><i class="icon fa fa-circle-o"></i> Create</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="{{ route('order.index') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label"> Order</span></a>
        </li>
        <li><a class="app-menu__item" href="{{ url('/admin/order-quote') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Quote Order</span></a>
        </li>
        <li><a class="app-menu__item" href="{{ url('admin/transection') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Transection</span></a>
        </li>
        <li><a class="app-menu__item" href="{{ route('gnrlstng.create') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">General Setting</span></a>
        </li>
        <li><a class="app-menu__item" href="{{ url('admin/get-in-touch') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Get In Touch</span></a>
        </li>
        <li><a class="app-menu__item" href="{{ url('admin/subscriber') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Subscriber</span></a>
        </li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Package</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('package.index') }}"><i class="icon fa fa-circle-o"></i> Manage</a></li>
            <li><a class="treeview-item" href="{{ route('package.create') }}"><i class="icon fa fa-circle-o"></i> Create</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Pages Fronted</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ url('/admin/about') }}"><i class="icon fa fa-circle-o"></i> About</a></li>
            <li><a class="treeview-item" href="{{ url('/admin/our-work') }}"><i class="icon fa fa-circle-o"></i> Our Work</a></li>
            <li><a class="treeview-item" href="{{ route('blog.create') }}"><i class="icon fa fa-circle-o"></i> Blog</a></li>
            <li><a class="treeview-item" href="{{ url('/admin/term-condition') }}"><i class="icon fa fa-circle-o"></i> Terms & Conditions</a></li>
            <li><a class="treeview-item" href="{{ url('/admin/privacy-policy') }}"><i class="icon fa fa-circle-o"></i>  Privacy Policy</a></li>
            <li><a class="treeview-item" href="{{ url('/admin/pricing') }}"><i class="icon fa fa-circle-o"></i>Pricing</a></li>  
            <li><a class="treeview-item" href="{{ url('/admin/help') }}"><i class="icon fa fa-circle-o"></i>Help</a></li>  
          </ul>
        </li> 
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Frontend Control</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('allstatic.create') }}"><i class="icon fa fa-circle-o"></i>Top Section</a></li>
            <li><a class="treeview-item" href="{{ url('/admin/how-it-work') }}"><i class="icon fa fa-circle-o"></i>How It Work</a></li>
           
            <li><a class="treeview-item" href="{{ url('/admin/img-edit-service-price') }}"><i class="icon fa fa-circle-o"></i>Image-editing Service Pricing</a></li> 
            <li><a class="treeview-item" href="{{ url('/admin/cp-bd') }}"><i class="icon fa fa-circle-o"></i>Clipping Path BD</a></li> 
            <li><a class="treeview-item" href="{{ url('/admin/see-our-wrk') }}"><i class="icon fa fa-circle-o"></i>See Our Work</a></li> 
            <li><a class="treeview-item" href="{{ route('fsthqaie.create') }}"><i class="icon fa fa-circle-o"></i>Fast High Qlty Img Edng</a></li> 
            <li><a class="treeview-item" href="{{ url('/admin/committed-mkng-wld') }}"><i class="icon fa fa-circle-o"></i>Committed making world</a></li> 
            <li><a class="treeview-item" href="{{ url('/admin/cpburoes') }}"><i class="icon fa fa-circle-o"></i>CPB Ur Otsrcd Edtng Sltn</a></li> 
            <li><a class="treeview-item" href="{{ url('/admin/rdolp') }}"><i class="icon fa fa-circle-o"></i>Read our latest product</a></li> 
            <li><a class="treeview-item" href="{{ url('/admin/taqs') }}"><i class="icon fa fa-circle-o"></i>Taqs</a></li> 
          </ul>
        </li>
      </ul>
    </aside>
    @yield('content')	 
        
    <script src="{{ asset('assets/admin/') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('assets/admin/') }}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('assets/admin/') }}/js/plugins/chart.js"></script>
    @yield('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('layouts.message')
    
    <!-- Google analytics script-->
    
    <script type="text/javascript">
        setTimeout(function() {
            $('.alert').fadeOut('fast');
        }, 3000);
    </script>
    <script>

      
    </script>
    </body>
</html>