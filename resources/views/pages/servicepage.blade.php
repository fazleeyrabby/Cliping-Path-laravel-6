@extends('layouts.frontendLayout')
@section('title','')
@section('content')
      <div class="page-header">
        <div class="page-width">
            <h1 class="page-title">{{ $catwiseservice->page_title }} </h1>
        </div>
    </div>
    <div class="head-img">
        <div class="page-width">
            <div class="content">
                <figure><img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->page_img }}" alt=""></figure>
                <figcaption class="figcaption">
                    <p style="text-align: justify;">{!! $catwiseservice->page_img_text !!}</p>
                    <a href="{{ url('/getquote') }}"><p><button class="btn btn-primary">GET YOUR QUOTE</button></p></a>
                </figcaption>
                <div class="mobile-view text-center">
                  <p style="text-align: justify;">{!! $catwiseservice->page_img_text !!}</p>
                    <a href="{{ url('/getquote') }}"><p><button class="btn btn-primary">GET YOUR QUOTE</button></p></a>
                </div>
            </div>
        </div>
    </div>

<hr>
    <section class="clipping-path-service1 text-center">
        <div class="page-width">
            <div class="content">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="content-block">
                            <div>
                                <p style="text-align: justify;">{!! $catwiseservice->page_img_under_des !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="clipping-path-img">
                            <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->page_img_side_img }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
<hr>

<section class="sec12">
    <div class="page-width">
      <div class="content">
        <div class="content-header">
          <h2 class="content-title">
            OUR WORK IN ACTION
          </h2>
        </div>
  
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
          <div class="twenty">
            <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->our_wrk_actn_img_one }}" alt="" height="300" width="500">
            <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->our_wrk_actn_img_two }}" alt="" height="300" width="500">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="twenty">
            <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->our_wrk_actn_img_three }}" alt="" height="300" width="500">
            <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->our_wrk_actn_img_four }}" alt="" height="300" width="500">
          </div>
        </div>
        </div>
      </div>
      <hr>
    </div>
</section>
<section class="try-free">
    <div class="page-width">
        <div class="content">
            <div class="row d-flex align-items-center text-center">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>Try our services for free first</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <button class="btn btn-warning">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section-- 11 quote-->
<section class="sec11">
  <div class="page-width">
    <div class="content">
      <div class="content-context text-center">
        <blockquote>
          {!! $catwiseservice->try_our_service_under_des !!}
        </blockquote>
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
<!--section-- 11 quote-->
<section class="sec11">
  <div class="page-width">
    <hr>
    <div class="content">
      <div class="content-context text-center">
        <blockquote>
          <q>Excellent, their clipping is absolutely perfect. Happy with results and customer service!</q><br>
        </blockquote>
      </div>
    </div>
    <hr>
  </div>
</section>
<!--clipping path srvices area-->
<section class="clipping-path-service-body">
  <div class="page-width">
    <div class="content">
        <p>{!! $catwiseservice->page_content_des !!}</p> 
    </div>
  </div>
</section>
<section class="clipping-path-service-body">
  <div class="page-width">
    <div class="content">
      <div class="content-header">
        <h2 class="content-title">Sample Image</h2>
      </div>
      <div class="row" style="margin-bottom: 70px;">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->page_sample_img_one }}" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->page_sample_img_two }}" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->page_sample_img_three }}" alt="">
        </div>
      </div>
    </div>
  </div>
  </section>
<!---realated service area-->
<section class="related-service">
  <div class="page-width">
    <div class="content">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="content-header">
            <h2 class="content-title">{!! $catwiseservice->rltd_srv_title !!}</h2>
          </div>
          <ul class="related-services-tabs">
            <li><a href="">{!! $catwiseservice->related_srvc_one !!}</a></li>
            <li><a href="">{!! $catwiseservice->related_srvc_two !!}</a></li>
            <li><a href="">{!! $catwiseservice->related_srvc_three !!}</a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="related-service-tab-content text-left">
            <img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->related_srvc_img }}" alt="">
            <div class="tab-text">
              <h4>Image masking</h4>
              <p>{!! $catwiseservice->related_srvc_des !!}</p>
              <a href="" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
</section>
<!-- </div> -->
<!--section - 13-->
 <section class="sec13">
    @include('layouts.frontendFooterTop')
  </section>
@endsection