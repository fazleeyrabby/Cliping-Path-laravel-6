<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:	" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
   <!-- <title>@yield('title')</title> -->
   <title>{{ $gnrlstng->name }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../assets/favicon/{{ $gnrlstng->favicon }}" type="image/x-icon">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend_asset/') }}/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style type="text/css">
      #paypalDiv {
        display: none;
      }
      #bkashDiv {
        width: 100%;
        padding: 10px 0;
        text-align: center;
        background-color: lightblue;
        margin-top: 8px;
        display: none;
      }
      #rocketDiv {
        width: 100%;
        padding: 10px 0;
        text-align: center;
        background-color: lightblue;
        margin-top: 8px;
        display: none;
      } 
      #bankhDiv {
        width: 100%;
        padding: 10px 0;
        text-align: center;
        background-color: lightblue;
        margin-top: 8px;
        display: none;
      }
    </style>
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
    <!-- Navbar-->
    <header class="app-header" style="background-color: {{$gnrlstng->color}}"><a class="app-header__logo" href="#" style="background-color: {{ $gnrlstng->color  }}">{{$gnrlstng->name}}</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
         <?php
            $pending = App\Order::where('status',0)->count();
          ?>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><span class="badge badge-danger">{{ $pending }}</span><i class="fa fa-bell-o fa-lg"></i></a>
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
                          // $date = \Carbon\Carbon::now();
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
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="{{ url('home/chng-pass') }}"><i class="fa fa-cog fa-lg"></i> Change Password</a></li>
            <li><a class="dropdown-item" href="{{ url('home/user-profile') }}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
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
    <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    	<aside class="app-sidebar" style="background-color: {{ $gnrlstng->navbar_color }}">
	      <div class="app-sidebar__user">
          <?php
              $user = App\User::where('id',Auth::user()->id)->first();
          ?>
          <img class="app-sidebar__user-avatar" src="/assets/frontend_asset/profile_img/{{ $user->profile_img }}" alt="User Image" class="img-responsive" height="60" width="60">
	        <div>
	          <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
	        </div>
	      </div>
	      <ul class="app-menu">
	        <li><a class="app-menu__item" href="{{ url('/home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
	        <li><a class="app-menu__item" href="{{ url('home/order-history')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">My Order History</span></a></li>
          <li><a class="app-menu__item" href="{{ route('order.create')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Start A New Order</span></a></li>

          <li><a class="app-menu__item" href="{{ url('home/trx-history')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Transection History</span></a></li>
          
	        <li><a class="app-menu__item" href="{{ url('home/download-file/') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Download File</span></a></li>
	      </ul>
	    </aside>
    
    <!-- content -->
    @yield('content')
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('assets/frontend_asset/') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets/frontend_asset/') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/frontend_asset/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/frontend_asset/') }}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('assets/frontend_asset/') }}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('assets/frontend_asset/') }}/js/plugins/chart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('layouts.message')
    @yield('js')

    <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
    <script type="text/javascript">
        setTimeout(function() {
            $('.alert').fadeOut('fast');
        }, 3000);
    </script>
     <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      function paypalFunction() {
        var x = document.getElementById("paypalDiv");
          if (window.getComputedStyle(x).display === "none") {
            x.style.display = "block";
          }else{
            x.style.display = "none";
          }
      }   
      function bkashFunction() {
          var x = document.getElementById("bkashDiv");
          if (window.getComputedStyle(x).display === "none") {
            x.style.display = "block";
          }else{
            x.style.display = "none";
          }
        } 
      function rocketFunction() {
        var x = document.getElementById("rocketDiv");
          if (window.getComputedStyle(x).display === "none") {
            x.style.display = "block";
          }else{
            x.style.display = "none";
          }
      }  
      function bankFunction() {
        var x = document.getElementById("bankhDiv");
          if (window.getComputedStyle(x).display === "none") {
            x.style.display = "block";
          }else{
            x.style.display = "none";
          }
      }  
      
    </script>
   

  </body>
</html>