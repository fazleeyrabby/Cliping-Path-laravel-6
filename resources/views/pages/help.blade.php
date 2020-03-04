@extends('layouts.frontendLayout')
@section('title','')
@section('content')

<?php
  $help = App\Help::first();
?>
  <div class="help-page-header text-center">
    <div class="page-width">
        <div class="content">
            <div class="content-header">
                <h2 class="content-title">{{ $help->page_top_title }}</h2>
            </div>
            <p>{{ $help->pagetop_sub_title }}</p>
        </div>
    </div>
</div>

<div class="help-page-body">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="img-group">
                        <img src="{{ asset('assets/admin/images/help/') }}/{{ $help->brows_help_img }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="group-body text-center">
                        <p>{{ $help->brows_help_des }}</p>
                        <button class="btn btn-warning btn-lg btn-sec">Brows the help section</button>
                    </div>
                </div>
            </div>
                <hr>
             <div class="row pt-5 second-row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="group-body text-center">
                        <p>{{ $help->askbeacon_des }}</p>
                        <button class="btn btn-warning btn-sec">Ask Beacon a question</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="img-group">
                        <img src="{{ asset('assets/admin/images/help/') }}/{{ $help->ask_beacon_img }}" alt="">
                    </div>
                </div>
             </div>
            
        </div>
        <hr>
    </div>
</div>

<!--get  in touch-->
<div class="get-in-touch">
    <div class="page-width">
        <div class="content">
            <div class="content-header">
                <h2 class="content-title">Get in touch</h2>
                <p>{{ $help->gettouch_des }}</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <form method="post" action="{{ url('/get-in-touch') }}">
              @csrf
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputFirstName">First Name *</label>
                        <input type="text" class="form-control" name="first_name" id="exampleInputFirstName" placeholder="First Name" required="required">
                      </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputLastName">Last Name *</label>
                        <input type="text" class="form-control" name="last_name" id="exampleInputLastName" placeholder="Last Name" required="required">
                      </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmailAddress">Email Address *</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmailAddress" placeholder="Enter Your Email Address" required="required">
                      </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" name="comment" rows="5" id="message"></textarea>
                      </div>
                      
                </div>
                <button type="submit" class="btn btn-warning btn-md">Submit</button>
            </div>
            </form>
        </div>
        <hr>
    </div>
</div>

<div class="subscribe-email">
    <div class="page-width">
       <form method="post" action="{{ url('/subscribe') }}">
              @csrf
        <div class="content">
            <div class="content-header">
                <h2 class="content-title">SUBSCRIBE TO OUR EMAIL LIST</h2>
                <p>{{ $help->sub_email_des }}</p>
            </div>
            <div class="email-sec text-center">
                <div class="form-group">
                    <label for="exampleInputEmailAddress">Email Address *</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmailAddress" placeholder="Enter Your Email Address" required="required">
                  </div>
                  <button type="submit" class="btn btn-warning btn-md">Get In Touch</button>
            </div>
        </div>
      </form>
        <hr>
    </div>
</div>

<div class="social-media">
 <div class="page-width">
     <div class="content">
        <div class="social-media-header">
            <h2>CONNECT WITH US ON SOCIAL MEDIA</h2>
        </div>
        <div class="social-img">
          <div class="row" style="width: 100%;">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="social-img-body" >
            <div class="social-img-box">
               <a href="{{ $gnrlstng->facebook }}"> <img src="{{ asset('assets/admin/images/help/') }}/{{ $help->fb }}" alt="facebook"></a>      
            </div>
            <div class="social-title">
              <h3>Facebook</h3>
            </div>            
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="social-img-body">
            <div class="social-img-box">
                <a href="{{ $gnrlstng->tweeter }}"><img src="{{ asset('assets/admin/images/help/') }}/{{ $help->tweeter }}" alt="facebook"> </a>     
            </div>
            <div class="social-title">
              <h3>Twitter</h3>
            </div>            
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="social-img-body">
            <div class="social-img-box">
               <a href="{{ $gnrlstng->google_plus }}"> <img src="{{ asset('assets/admin/images/help/') }}/{{ $help->pinterest }}" alt="facebook"></a>   
            </div>
            <div class="social-title">
              <h3>Pinterest</h3>
            </div>            
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="social-img-body">
            <div class="social-img-box">
                 <a href="{{ $gnrlstng->linkin }}"><img src="{{ asset('assets/admin/images/help/') }}/{{ $help->linkedin }}" alt="facebook"></a>  
            </div>
            <div class="social-title">
              <h3>LinkedIn</h3>
            </div>            
          </div>
        </div>
      </div>
        </div>
     </div>
     <hr>
 </div>
</div>

<div class="help-page-body">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="img-group">
                        <img src="{{ asset('assets/admin/images/help/') }}/{{ $help->sm_img }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="group-body text-center">
                        <p>{{ $help->sm_des }}</p>
                        <button class="btn btn-warning btn-sec">Learn More</button>
                    </div>
                </div>
            </div>
              <hr>
             <div class="row pt-5 second-row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="group-body text-center">
                        <p>{{ $help->sm_des_two }}</p>
                        <button class="btn btn-warning btn-sec">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="img-group">
                        <img src="{{ asset('assets/admin/images/help/') }}/{{ $help->sm_img_two }}" alt="">
                    </div>
                </div>
             </div>
            
        </div>
        <hr>
    </div>
</div>
    <!---section -- 3-->
  <section class="sec3">
    <div class="page-width">
      <div class="content">
        <div class="content-header">
          <h2 class="content-title">Get your free quote now</h2>
          <div class="content-text">
            <p>Fill out this form, and we’ll get back to you in 45 minutes or less with your customized quote.</p>
          </div>
        </div>
      </div>
      <form method="post" action="{{ url('/get-free-quote/') }}" >
        @csrf
      <div class="row text-center">

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="form-group">
              <label for="exampleInputEmail1">Quantity...</label>
              <input type="number" name="quantity" class="form-control" id="exampleInputQuantity" aria-describedby="emailHelp" required="required">
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <?php
            $services = App\Service::where('publication_status',1)->orderBy('service_id','DESC')->get();
          ?>
            <div class="form-group">
              <label for="exampleFormControlSelect1">select a Service *</label>
              <select class="form-control" id="exampleFormControlSelect1" name="service_id" required="required">
                 @foreach($services as $service)
                <option value="{{ $service->service_id }}">{{ $service->title }}</option>
                 @endforeach
              </select>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="required">
            </div>
        </div>
        <div class="col">
        <button class="btn btn-warning get" type="submit">GET YOU QUOTE</button>
      </div>
    </div>
    </form>
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
