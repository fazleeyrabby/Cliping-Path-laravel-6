@extends('layouts.frontendLayout')
@section('title','')
@section('content')
<?php
  $about = App\About::first();
?>
<div class="page-header block-link text-center">
    <div class="page-width">
        <h1 class="page-title">{{ $about->page_top_title }}</h1>
        <h3 style="text-align: justify;">{{ $about->page_top_des }}</h3>
    </div>
</div>
<div class="about-img-heading">
    <div class="page-width">
        <div class="content">
            <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->page_top_img }}" alt="">
        </div>
    </div>
</div>
<div class="all-clipping-path mt-8">
    <div class="page-width">
        <div class="content">
            <div class="content-header">
                <h2 class="content-title">{{ $about->sec_two_title }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 pb-2">
                    <div class="all-clipping-path-img">
                        <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_two_img_one }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 pb-2">
                    <div class="all-clipping-heading">
                        <h2>{{ $about->sec_two_sub_title_one }}</h2>
                        <p>{{ $about->sec_two_sub_des_one }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pb-2">
                    <div class="all-clipping-path-img">
                        <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_two_img_two }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 pb-2">
                    <div class="all-clipping-heading">
                       <h2>{{ $about->sec_two_sub_title_two }}</h2>
                        <p>{{ $about->sec_two_sub_des_two }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pb-2">
                    <div class="all-clipping-path-img">
                        <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_two_img_three }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 pb-2">
                    <div class="all-clipping-heading">
                        <h2>{{ $about->sec_two_sub_title_three }}</h2>
                        <p>{{ $about->sec_two_sub_des_three }}</p>
                    </div>
                </div>
                <div class="col-12">
                    <a href="about" class="btn btn-warning get">LOAD MORE</a>
                  </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="how-we-started">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="how-we-started-heading">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p style="text-align: justify;">{!! $about->sec_three_des_one !!}</p>
                    </div> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="how-we-started-img">
                        <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_three_img_one }}" alt="">
                    </div>
                </div>
                <div class="col">
                    <a href="about" class="btn btn-warning get">LOAD MORE</a>
                </div>
                <hr>
            </div>
        </div>
        <hr>
    </div>
</div>


<div class="how-we-started">
  <div class="page-width">
      <div class="content">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="how-we-started-img">
                  <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_three_img_two }}" alt="">
              </div>
          </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="how-we-started-heading">
                        <p style="text-align: justify;">{!! $about->sec_three_des_two !!}</p>
                  </div>
              </div>
             
              <hr>
          </div>
      </div>
      <hr>
  </div>
</div>

<div class="how-we-started">
  <div class="page-width">
      <div class="content">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="how-we-started-heading">
                        <p style="text-align: justify;">{!! $about->sec_three_des_three !!}</p>
                      <div class="col">
                        <a href="about" class="btn btn-warning get">LOAD MORE</a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="how-we-started-img">
                      <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_three_img_three }}" alt="">
                  </div>
              </div>
              
              <hr>
          </div>
      </div>
      <hr>
  </div>
</div>

   <!---section -- 3 get your quote free now-->
  @include('layouts.freequote');

      <div class="how-we-started">
        <div class="page-width">
          <hr>
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="how-we-started-heading">
                        <p style="text-align: justify;">{!! $about->sec_five_des !!}</p>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="how-we-started-img">
                            <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_five_img }}" alt="">
                        </div>
                    </div>
                    
                    <hr>
                </div>
            </div>
            <hr>
        </div>
      </div>

      <div class="who-we-work-with">
        <div class="page-width">
          <div class="content">
            <div class="content-header">
              <h2 class="content-title">WHO WE WORK WITH</h2>
            </div>
            <div class="company-logo">
              <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_six_img_one }}" alt="">
              <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_six_img_two }}" alt="">
              <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_six_img_three }}" alt="">
              <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_six_img_four }}" alt="">
              <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_six_img_five }}" alt="">
              <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_six_img_six }}" alt="">
              <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_six_img_seven }}" alt="">
              <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->sec_six_img_eight }}" alt="">
            </div>
          </div>
          <hr>
        </div>
      </div>

      <div class="location">
        <div class="page-width">
          <div class="content">
            <div class="content-header">
              <h2 class="content-title">Location</h2>
              <p>{!! $about->location_des !!}</p>
            </div>

            <div class="address text-center">
              <div class="address-box">
                <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->location_img_one }}" alt="">
                <p>{{ $about->location_img_title_one }}</p>
              </div>
              <div class="address-box">
                <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->location_img_two }}" alt="">
                <p>{{ $about->location_img_title_two }}</p>
              </div>
              <div class="address-box">
                <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->location_img_three }}" alt="">
                <p>{{ $about->location_img_title_three }}</p>
              </div>
              <div class="address-box">
                <img src="{{ asset('assets/admin/images/about/') }}/{{ $about->location_img_four }}" alt="">
                <p>{{ $about->location_img_title_four }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--section - 13-->
 <section class="sec13">
    @include('layouts.frontendFooterTop')
  </section>

@endsection
