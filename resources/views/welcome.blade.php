@extends('layouts.frontendLayout')
@section('title','')
@section('content')
        <!---section -- 1-->
         <?php
          $topsec = App\Topsec::first();
        ?>
  <section class="sec1" style="background:{{$topsec->color}}">
      <div class="container">
      <div class="page-width">
       
      <div class="sec1-img">
        <img src="/assets/admin/images/{{ $topsec->image }}" alt="">
      </div>
      <div class="sec1-text">
        <div class="sec1-heading">
          <h2>{!! $topsec->top_title !!}</h2>
        </div>
        <div class="sec1-paragraph">
          <p style="text-align: justify;">{!! substr($topsec->sub_title,0,230) !!}</p>
        </div>
        <div class="sec1-btn">
          <a href="" class="btn btn-lg btn-warning">Start Free trial</a>
        </div>
      </div>
    </div>
    </div>
  </section>
<!---section -- 2 howo it work-->
  @include('layouts.howitwrk');
   <!---section -- 3 get your quote free now-->
  @include('layouts.freequote');
  <!-- why cp bd -->
  @include('layouts.wcpbd');
  <!--section-- 7 -->
    <section class="sec7">
      <div class="page-width">
        <div class="content">
          <div class="content-header">
            <h2 class="content-title">See our Work</h2>
            <?php 
              $seeurrk = App\Seeurrk::first();
            ?>
            <div class="content-text"><p>{{ $seeurrk->dscrptn }}</p></div>
          </div>
              
    <div class="swiper-container">
        <div class="swiper-wrapper">
    
          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->bnb_img }}" alt=""></div>
          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->clock_img }}" alt=""></div>

          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->desk_img }}" alt=""></div>

          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->fb_img }}" alt=""></div>

          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->mail_img }}" alt=""></div>

          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->pen_img }}" alt=""></div>

          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->polo_img }}" alt=""></div>

          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->sun_img }}" alt=""></div>

          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->teddy_img }}" alt=""></div>

          <div class="swiper-slide"><img class="swiperimg" src="/assets/admin/images/seeurrk/{{ $seeurrk->tnd_img }}" alt=""></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

      <div class="quotebtn">
        <a href="{{ url('/see-our-work') }}"><button class="button button4 d-flex justify-content-center">SEE MORE</button></a>
      </div>
    </div> 
  </div>
  </section>
  <hr>
  <!--section -- 8-->
  <section class="sec8 text-center">
    <div class="page-width">
      <div class="content">
        <div class="content-header">
          <h2 class="content-title">Fast, high-quality and affordable image-editing <br> services for ecommerce and product photography </h2>
        </div>
        <?php 
          $fsthqaies = App\Fsthqaie::orderBy('id','DESC')->get()->random(1);
        ?>
        <div class="row">
          @foreach($fsthqaies as $fsthqaie)
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="box">
            <h2><a href="">{!! $fsthqaie->category !!}</a></h2>
            <p style="text-align: justify;">{!! $fsthqaie->description !!}</p>
          </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="box">
            <img src="{{ asset('/assets/admin/images/fsthqaie/') }}/{{ $fsthqaie->image }}" 
            alt="">
          </div>
          </div>
          @endforeach
        </div>
        <div class="quotebtn">
          <a href="{{ url('fast-high-quality') }}"><button class="button button4 d-flex justify-content-center">SEE MORE</button></a>
        </div>
      </div>
    </div>
  </section>

  <hr>
 <!---section -- 9-->
 <section class="sec9 text-center">
  <div class="page-width">
    <div class="content">
      <div class="row">
        <?php 
          $cmtdmw = App\Cmtdmw::first();
        ?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sec9-body">
          <h2>{!! $cmtdmw->title !!}</h2>
          <p style="text-align: justify;">{!! $cmtdmw->description !!}</p>
          <p>
            <a href="" class="btn btn-warning btn-lg">LEARN MORE</a>
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sec9-img">
          <img src="{{ asset('/assets/admin/images/committedmkngwld/') }}/{{ $cmtdmw->image }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<!---section -- 10-->
 <?php 
    $cpburoes = App\Cpburoes::first();      
  ?>
<section class="sec10">
  <div class="page-width">
    <div class="content">
      <h2 class="content-title">{!! $cpburoes->title !!}</h2>
      <div class="content-context">
        <p style="text-align: justify;">{!! $cpburoes->desone !!}</p>
      </div>
    </div>
  </div>
</section>
<hr>
<!--section-- 11-->
<section class="sec11">
  <div class="page-width">
    <div class="content">
      <div class="content-context text-center">
        <blockquote>
          <q style="text-align: justify;">{!! $cpburoes->destwo !!}</q>
          <!-- <cite></cite> -->
        </blockquote>
      </div>
    </div>
  </div>
</section>
<hr>
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
          <p class="blog-handle"><a href="{{ url('/') }}">{!! $rdolp->bnb_title !!}</a> </p>
          <img src="{{ asset('/assets/admin/images/rdolp/') }}/{{ $rdolp->bnb_img }}" alt="">
          <h3> <a href="">{!! $rdolp->bnb_des !!}</a></h3>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sec12-body">
          <p class="blog-handle"><a href="{{ url('/') }}">{!! $rdolp->desk_title !!}</a> </p>
          <img src="{{ asset('/assets/admin/images/rdolp/') }}/{{ $rdolp->desk_img }}" alt="">
          <h3> <a href="">{!! $rdolp->taddy_title !!}</a></h3>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sec12-body">
          <p class="blog-handle"><a href="{{ url('/') }}">{!! $rdolp->title !!}</a> </p>
          <img src="{{ asset('/assets/admin/images/rdolp/') }}/{{ $rdolp->taddy_img }}" alt="">
          <h3> <a href="">{!! $rdolp->taddy_des !!}</a></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<section class="sec13">
  @include('layouts.frontendFooterTop')
</section>

@endsection