@extends('layouts.frontendLayout')
@section('title','')
@section('content')
<?php
 $servicepage = App\Catwiseservice::first();
?>
  <div class="page-header">
    <div class="page-width">
        <h1 class="page-title">OUR IMAGE-EDITING SERVICES</h1>
    </div>
  </div>
<div class="sec2-services">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <?php
                  $services = App\Catwiseservice::where('publication_status','1')->get();
                ?>
                 @foreach($services as $service)
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 service-body">
                    
                    <div class="icon-wrapper">
                        <img src="{{ asset('/assets/admin/images/catwiseservice/') }}/{{ $service->page_img }}" alt="">
                    </div>
                    <div class="block-content text-center">
                        <h2>{{ $service->page_title }}</h2>
                          <p style="text-align: justify;">{!! substr($service->page_img_text,0,200) !!}</p>
                       <a href="{{ url('/service-page',$service->service_id) }}"> <p><button class="btn btn-primary">Learn More</button></p></a>
                    </div>
                    
                </div>
                 @endforeach
            </div>
        </div>
        <hr>
    </div>
</div>
  <!---section -- 3 get your quote free now-->
  @include('layouts.freequote');
  <!--section - 13-->
<section class="sec13">
    @include('layouts.frontendFooterTop')
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.menu-toggle').click(function(){
      $('.navbar').toggleClass('active');
    });
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endsection 