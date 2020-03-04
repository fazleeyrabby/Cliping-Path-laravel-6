@extends('layouts.frontendLayout')
@section('title','')
@section('content')
<?php
  $blogs = App\Blog::where('publication_status',1)->get();
?>
<!--section-- 7 -->
    <section class="sec7 blog-carousel">
      <div class="page-width">
        <div class="content">
          <div class="content-header text-center">
            <h2 class="content-title">Ecommerce and Product Photography Blog</h2>
          </div>
              
        <div class="swiper-container">
        <div class="swiper-wrapper">
        @foreach($blogs as $blog)
          <div class="swiper-slide">
           <div class="row text-left">
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <div class="slide-img">
                 <img src="{{ asset('assets/admin/images/blog/') }}/{{ $blog->blog_img }}" alt="">
               </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <a href=""><h2 style="text-align:justify;">{!! substr($blog->blog_title,0,50) !!}</h2></a>
               <p style="text-align:justify;">{!! substr($blog->description,0,200) !!}</p>
               <a href="{{ url('/') }}" class="btn btn-warning">Read More</a>
             </div>
           </div>
          </div>
          @endforeach
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
  </section>

 <!--section 12-->
 <?php 
    $rdolp = App\Rdolp::first();
  ?>
<section class="sec12 text-center">
  <div class="page-width">
    <div class="content">
      <div class="content-header">
        <h2 class="content-title">
          {!! $rdolp->title !!}
        </h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sec12-body">
          <p class="blog-handle"><a href="">{!! $rdolp->bnb_title !!}</a> </p>
          <img src="{{ asset('/assets/admin/images/rdolp/') }}/{{ $rdolp->bnb_img }}" alt="">
          <h3> <a href="">{!! $rdolp->bnb_des !!}</a></h3>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sec12-body">
          <p class="blog-handle"><a href="">{!! $rdolp->desk_title !!}</a> </p>
          <img src="{{ asset('/assets/admin/images/rdolp/') }}/{{ $rdolp->desk_img }}" alt="">
          <h3> <a href="">{!! $rdolp->taddy_title !!}</a></h3>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sec12-body">
          <p class="blog-handle"><a href="">{!! $rdolp->title !!}</a> </p>
          <img src="{{ asset('/assets/admin/images/rdolp/') }}/{{ $rdolp->taddy_img }}" alt="">
          <h3> <a href="">{!! $rdolp->taddy_des !!}</a></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<!--section - 13-->
 <section class="sec13">
    @include('layouts.frontendFooterTop')
  </section>
 
@endsection
@section('js')
  <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        slidesPerView: 1,
        centeredSlides: true,
        autoplay: {
          delay: 3500,
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
@endsection
