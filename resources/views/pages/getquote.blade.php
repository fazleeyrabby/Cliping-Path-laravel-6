@extends('layouts.frontendLayout')
@section('title','')
@section('content')
  <div class="page-header">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <div class="col">
                    <div class="section_heading text-center text-uppercase">
                        <h1>GET YOUR QUOTE IN 45 MINUTES</h1>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit omnis at illo quasi ad vero earum aliquid ullam explicabo, incidunt saepe adipisci, possimus esse molestiae?</p>
                    <div class="alert alert-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cumque aut magnam, repudiandae soluta voluptas mollitia velit ex ullam labore earum corporis voluptates. Eveniet quia ipsa corrupti accusantium quidem rem? <a href="">Learn How ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form method="post" action="{{ url('/user-free-quote-order') }}">
    @csrf
   
   
<div class="quote-form">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputFirstName">First Name *</label>
                        <input type="text" class="form-control" name="first_name" id="exampleInputFirstName" placeholder="First Name" required="required">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputLastName">Last Name *</label>
                        <input type="text" class="form-control" name="last_name" id="exampleInputLastName" placeholder="Last Name" required="required">
                      </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmailAddress">Email Address *</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmailAddress" placeholder="Enter Your Email Address" required="required">
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="choose-services">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <h3>Choose one or more services*</h3>
                        <div class="row">
                            <?php
                                $services = App\Service::where('publication_status',1)->orderBy('service_id','desc')->take(5)->get();

                                $services_anthers = App\Service::where('publication_status',1)->orderBy('service_id','desc')->offset(5)->take(5)->get();
                            ?>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                @foreach($services as $service)
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" {{$service->service_id == $se ? 'checked' : ''}}  name="service[]" id="" value="{{ $service->title }}">
                                    <label for="custom-control-input">{{ $service->title}}</label><i class="fa fa-info-circle"></i>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 @foreach($services_anthers as $services_anther)
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" {{$services_anther->service_id == $se ? 'checked' : ''}}  name="service_id[]" id="" value="{{ $services_anther->service_id }}"><label for="custom-control-input">{{ $services_anther->title}}</label><i class="fa fa-info-circle"></i>
                                </div>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="how-many1">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" name="set_margin" value="yes"><label for="custom-control-lable">Straighten, crop and set margin (FREE)</label><i class="fa fa-info-circle fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="how-many">
    <div class="page-width">
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">How many images do you need a quote for?*</label>
                        <input type="number" value="{{$qty}}" class="form-control" name="qty" id="exampleInputQuantity" aria-describedby="emailHelp">
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3>Do you need your images resized?*</h3>
                    <div class="form-check">
                      <div class="form-check-input" >
                        <input type="radio" name="img_resize" value="yes">
                      </div>
                      <div class="form-check-label">
                        <label for="Yes">Yes</label>
                      </div>
                      </div>
                      <div class="form-check">
                        <div class="form-check-input">
                          <input type="radio"name="img_resize" value="no">
                        </div>
                        <div class="form-check-label">
                          <label for="No">No</label>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="how-many2">
  <div class="page-width">
      <div class="content">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="message">Additional comments (optional):</label>
                    <textarea class="form-control" rows="5" id="message" name="comment"></textarea>
                  </div>
            </div>
        </div>
        <div class="btn-last">
            <button class="btn btn-warning btn-md" type="submit">Get Your Quote</button>
        </div>
      </div>
      </form>
  </div>
</div>
@endsection