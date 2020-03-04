@extends('layouts.frontendLayout')
@section('title','')
@section('content')
<?php
  $ourwork = App\Ourwork::first();
?>
	      <div class="page-header">
        <div class="page-width">
            <h1 class="page-title">{{ $ourwork->page_top_title }}</h1>
        </div>
    </div>
    <div class="head-img">
        <div class="page-width">
            <div class="content">
                <figure><img src="{{ asset('assets/frontend_asset/') }}/img/adult-books-business-coffee-374016.jpg" alt=""></figure>
                <figcaption class="figcaption">
                    <p style="text-align: justify;">{{ $ourwork->page_top_des }}</p>
                    <a href="{{ url('/getquote') }}"><p><button class="btn btn-primary">GET YOUR QUOTE</button></p></a>
                </figcaption>
                <div class="mobile-view text-center">
                   <p style="text-align: justify;">{{ $ourwork->page_top_des }}</p>
                    <a href="{{ url('/getquote') }}"><p><button class="btn btn-primary">GET YOUR QUOTE</button></p></a>
                </div>
            </div>
        </div>
    </div>
<hr>
<div class="service-area">
    <div class="page-width">
        <div class="content">
          <?php
            $services = App\Service::where('publication_status','1')->get();
          ?>
          <ul>
            @foreach($services as $service)
               <li><a href="{{ url('/service-page',$service->service_id) }}">{{ $service->title }}</a></li>
            @endforeach
          </ul>
        </div>
    </div>
</div>

<section class="sec12">
    <div class="page-width">
      <div class="content">
        <div class="content-header">
          <h3 class="content-title">
           Hover one of the services above to see our work.
          </h3>
        </div>
  
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="twenty">
              <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_three_img_one }}" alt="">
              <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_three_img_two }}" alt="">
            </div>
          </div>
  
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="twenty">
              <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_three_img_three }}" alt="">
              <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_three_img_four }}" alt="">
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="twenty">
              <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_three_img_five }}" alt="">
              <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_three_img_six }}" alt="">
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="twenty">
              <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_three_img_seven }}" alt="">
              <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_three_img_eight }}" alt="">
            </div>
          </div>
          </div>
      </div>
      <hr>
    </div>
</section>
   <!---section -- 3 get your quote free now-->
  @include('layouts.freequote');
<!--section-- 11 quote-->
<section class="sec11">
  <div class="page-width">
    <hr>
    <div class="content">
      <div class="content-context text-center">
        <blockquote>
          <q style="text-align: justify;">{!! $ourwork->sec_five_des !!}</q><br>
        </blockquote>
      </div>
    </div>
    <hr>
  </div>
</section>


<div class="edit-work">
    <div class="page-width">
        <div class="content">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="edit-img">
                        <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_six_img_one }}" alt="">
                    </div>
                    <div class="edit-img-body">
                        <h2>{{ $ourwork->sec_six_title_one }}</h2>
                        <p style="text-align: justify;">{{ $ourwork->sec_six_des_one }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="edit-img">
                        <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_six_img_two }}" alt="">
                    </div>
                    <div class="edit-img-body">
                      <h2>{{ $ourwork->sec_six_title_two }}</h2>
                       <p style="text-align: justify;">{{ $ourwork->sec_six_des_two }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="edit-img">
                        <img src="{{ asset('assets/admin/images/ourwork/') }}/{{ $ourwork->sec_six_img_three }}" alt="">
                    </div>
                    <div class="edit-img-body">
                      <h2>{{ $ourwork->sec_six_title_three }}</h2>
                        <p style="text-align: justify;">{{ $ourwork->sec_six_des_three }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!--section - 13-->
<section class="sec13">
    @include('layouts.frontendFooterTop')
  </section>

@endsection