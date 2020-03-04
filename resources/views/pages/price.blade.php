@extends('layouts.frontendLayout')
@section('title','')
@section('content')
  
  <?php
   $iespricing = App\Iespricing::first();
  ?>
<div class="page-header">
    <div class="page-width">
        <h1 class="page-title">{{ $iespricing->tp_title }}</h1>
    </div>
</div>
 
<div class="pricing-subheader">
    <div class="page-width">
        <div class="content">
            <div class="content-text">
                <div style="text-align: justify;">
                   {{ $iespricing->page_top_des }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="calculate-estimate">
    <div class="page-width">
        <div class="content-box">
          <form method="get" action="getquote">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
                  <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12"> -->
                    <h2 >Calculate Your Estimate</h2>
                  <!-- </div> -->
                    
                    <div class="form-group ">
                      <?php
                        $services = App\Service::where('publication_status',1)->orderBy('service_id','DESC')->get();
                      ?>
                        <div class="form-group col-md-12">
                          <label for="exampleFormControlSelect1">select a Service *</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="service_id" required="required">
                             @foreach($services as $service)
                            <option value="{{ $service->service_id }}">{{ $service->title }}</option>
                             @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Quantity *</label>
                        <input type="number" class="form-control" id="exampleInputQuantity" aria-describedby="emailHelp" name="qnty" required="required">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="img-pricing">
                  <img src="{{ asset('assets/admin/images/imgeditservice/') }}/{{ $iespricing->dlr_img }}" alt="">
                  <p>Select a service and a quantity <br> to calculate your estimate.</p>
                </div>
                </div>
               <div class="col-lg-12 col-md-12 col-sm-12.col-xs-12 d-flex justify-content-center"><button type="submit" class="btn btn-primary btn-lg p-4 mt-5 w-40">COMPLETE YOUR QUOTE</button></div>
            </div>
            </form>
        </div>
    </div>
</div>


<!---edit credit-->
<div class="edit-credit text-center">
  <div class="page-width">
    <div class="content">
      <div class="content-header">
        <h2 class="contnt-title">EDIT CREDIT</h2>
        <P style="text-align: justify;">{{ $iespricing->ec_des }}</P>
      </div>

      <div class="row mt-5">
        <?php
          $packages = App\Package::paginate(6);
        ?>
        @foreach($packages as $package)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-5">
            <div class="columns">
              <ul class="price">
                <li class="header" style="background-color:#009B97">{{ $package->pkg_name }}</li>
                <li class="grey" style="background-color: #BEE6E5;"><p style="text-align: justify;">{{ substr($package->description,0,150) }}</p></li>
                <li style="background-color: #E3F4F4;">{{ $package->amount }} <br> Amount</li>
                <li class="grey"><a href="{{url('home/packages/booking',$package->pkg_id)}}" class="button">BUY NOW</a></li>
              </ul>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<!---why use edit credit-->
<div class="why-use-edit-credit text-center">
<div class="page-width">
  <div class="content">
    <div class="content-header">
      <h2 class="header-title">{{  $iespricing->ec_title }}</h2>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>{{  $iespricing->save_time }}</h3>
        <p style="text-align: justify;">{{  $iespricing->std_des }}</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>{{  $iespricing->business_friendly }}</h3>
        <p style="text-align: justify;">{{  $iespricing->business_friendly_des }}</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>{{  $iespricing->save_money }}</h3>
        <p style="text-align: justify;">{{  $iespricing->save_money_des }}</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>{{  $iespricing->valid_for }}</h3>
        <p style="text-align: justify;">{{  $iespricing->valid_for_des }}</p>
    </div>
  </div>
</div>
</div>
</div>
       <!---section -- 3 get your quote-->
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

    <div class="pay-as-you-go text-center">
      <div class="page-width">
        <div class="content">
          <div class="content-header">
            <h2 class="content-title">PAY AS YOU GO</h2>
          </div>
          <p>{{  $iespricing->pay_as_go_des }}</p>
          <div class="card-img">
            <img src="{{ asset('assets/admin/images/imgeditservice/') }}/{{ $iespricing->paypal_img }}" alt="">
            <img src="{{ asset('assets/admin/images/imgeditservice/') }}/{{ $iespricing->bank_img }}" alt="">
            <img src="{{ asset('assets/admin/images/imgeditservice/') }}/{{ $iespricing->bkash_img }}" alt="">
            <img src="{{ asset('assets/admin/images/imgeditservice/') }}/{{ $iespricing->rocket_img }}" alt="">
          </div>
          <h3>ACCEPTED PAYMENT METHODS
          </h3>
        </div>
        <hr>
      </div>
    </div>

    <section class="try-free">
      <div class="page-width">
          <div class="content">
              <div class="row d-flex align-items-center">
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
  <section class="sec13">
    @include('layouts.frontendFooterTop')
  </section>

@endsection