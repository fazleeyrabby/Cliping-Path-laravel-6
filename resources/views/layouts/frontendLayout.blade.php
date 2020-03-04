<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/frontend_asset/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend_asset/') }}/css/swiper.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="{{ asset('assets/frontend_asset/') }}/css/twentytwenty.css">
	<link rel="stylesheet" href="{{ asset('assets/frontend_asset/') }}/css/style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets/frontend_asset/js/swiper.min.js') }}"></script>
    <title>{{ $gnrlstng->name }}</title>
     <link rel="icon" href="../../assets/favicon/{{ $gnrlstng->favicon }}" type="image/x-icon">
	</head>
<body>
<header class="nav-area" style="background-color: {{$gnrlstng->header_color}}">
    <div class="logo">Galaxy Global IT</div>
    <div class="navbar">
      <ul>
        <li><a href="{{ url('/') }}">How it works</a></li>
        <li class="sub-menu"><a href="{{ url('services') }}">Services</a>
          <?php
            $services = App\Service::where('publication_status','1')->get();
          ?>
          <ul>
            @foreach($services as $service)
               <li><a href="{{ url('/service-page',$service->service_id) }}">{{ $service->title }}</a></li>
            @endforeach
          </ul>
          </li>
        <li><a href="{{ url('price') }}">Pricing</a></li>
      
        <li class="sub-menu"><a href="">Account</a>
          @if (Route::has('login'))
          <ul>
            @auth
              <li><a href="{{ url('/home') }}">Home</a></li>
            @else
              <li><a href="{{ route('login') }}">Login</a></li>
              @if (Route::has('register'))
                  <li><a href="{{ route('register') }}">Register</a></li>
              @endif
            @endauth
          </ul>
          @endif
        </li>
        <li><a href="{{ url('/help') }}">Help</a></li>
        <li><a href="{{ url('/getquote') }}">Get quote</a></li>
      </ul>
    </div>
    <div class="menu-toggle"><i class="fa fa-bars"></i></div>
  </header>

   @yield('content')

<!---section - 14  	footer-->

<section class="sec14">
  <footer style="background-color: {{$gnrlstng->footer_color}}">
    <div class="page-width">
      <div class="menus">
        <div class="menu menu-get-started">
          <h4>Get Started</h4>
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/getquote') }}">Get quote</a></li>
            <li><a href="{{ url('/login') }}">Log in</a></li>
            <li><a href="{{ url('/register') }}">Sign up</a></li>
          </ul>
        </div>
        <div class="menu menu-company">
          <h4>Company</h4>
          <ul>
            <li><a href="{{ url('about') }}">About</a></li>
            <li><a href="{{ url('price') }}">Pricing</a></li>
            <li><a href="{{ url('help') }}">Help</a></li>
          </ul>
        </div>
        <div class="menu menu-information">
          <h4>Information</h4>
          <ul>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
            <li><a href="{{ url('/see-our-work') }}">Testimonials</a></li>
            <li><a href="{{ url('/see-our-work') }}">Samples</a></li>
            <li><a href="{{ url('/see-our-work') }}">Support center</a></li>
          </ul>
        </div>
        <div class="menu menu-services">
          <h4>Services</h4>
          <ul>
            @foreach($services as $service)
               <li><a href="{{ url('/service-page',$service->service_id) }}">{{ $service->title }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="legal">
      <div class="page-width">
        <div class="links">
          <a href="{{ url('term-condition') }}">Terms & Conditions</a>
          <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
          <p>{!! $gnrlstng->fotr_btm_txt !!}</p>
        </div>
      </div>
    </div>
  </footer>
</section>
<div class="social-icon">
  <ul>
    <li><a href="{{ $gnrlstng->facebook }}"><img src="{{ asset('assets/frontend_asset/') }}/svg/iconfinder_3_939757.svg" alt=""></a></li>
    <li><a href="{{ $gnrlstng->google_plus }}"><img src="{{ asset('assets/frontend_asset/') }}/svg/pinterestsquare.svg" alt=""></a></li>
    <li><a href="{{ $gnrlstng->tweeter }}"><img src="{{ asset('assets/frontend_asset/') }}/svg/iconfinder_4_939755.svg" alt=""></a></li>
  </ul>
</div>
<div class="reward-program">
  <a href="{{ url('/') }}" class="btn btn-warning">Reward Program</a>
</div>
<div class="get-qut">
  <a href="{{ url('/getquote') }}" class="btn">Get Your Quote</a>
</div>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        slidesPerView: 3,
        centeredSlides: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
          
        },
      });
    </script>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="{{ asset('assets/frontend_asset/') }}/js/jquery.event.move.js"></script>
      <script src="{{ asset('assets/frontend_asset/') }}/js/jquery.twentytwenty.js"></script>
       @yield('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('layouts.message')
    
      <script type="text/javascript">
        $(document).ready(function(){
    
          $('.menu-toggle').click(function(){
            $('.navbar').toggleClass('active');
          })
          $('ul li').click(function(){
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
          })
        })
        </script>
        <script type="text/javascript">
          var zero = 0;
          $(document).ready(function(){
              $(window).on('scroll',function(){
                  $('.nav-area').toggleClass('hide',$(window).scrollTop() > zero);
                  zero = $(window).scrollTop();
              })
          })
        </script>
      <script>
      $(document).ready(function(){
  $('.twenty').twentytwenty({
      before_label: 'January 2017', // Set a custom before label
     after_label: 'March 2017'
  });
});
  </script>
</body>
</html>