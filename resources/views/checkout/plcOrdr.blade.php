@extends('layouts.clientApp')
@section('title', 'client-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Create Order</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
         <li class="breadcrumb-item">Forms</li>
         <li class="breadcrumb-item"><a href="#">Form Components</a></li>
      </ul>
   </div>
   @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif  
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
   <div class="row">
      <div class="col-lg-12">
         <header class="section section_header">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <!-- Heading -->
                     <h1 class="section__heading text-uppercase text-center">
                        <i class="icon-clock"></i> GET YOUR QUOTE IN 45 MINUTES
                     </h1>
                     <!-- Subheading -->
                     <p class="section__excerpt text-center">
                        Fill out the form below with details of your image-editing needs, and we’ll email your quote within 45 minutes.
                     </p>
                     <!--NOTICE-->
                     <div class="alert alert-info" role="alert">
                        Have you previously placed an order similar to the one you need a quote for today? You can skip the quote process and place your order instantly with a template. <a href="https://help.clippingpathindia.com/article/107-how-to-place-a-new-order-based-on-a-previous-order" class="link_on_white_bg" target="_blank">Learn how &gt;</a>
                     </div>
                  </div>
               </div>
               <!-- / .row -->
            </div>
            <!-- / .container -->
         </header>   
         <br>
         <form action="{{ url('/home/checkout') }}" enctype="multipart/form-data" method="POST" id="form" onsubmit="return validateForm();">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="package_id" value="{{ $package->pkg_id }}">
            <input type="hidden" name="amount" value="{{ $package->amount }}">
            <input type="hidden" name="pac_quantity" value="1">
            <input type="hidden" name="item_name" value="{{ $package->pkg_name }}">

            <div class="form-group">
               <div class="row">
                  <div class="col-md-6">
                     <!-- First name -->
                     <div class="form-group">
                        <label for="customer_first_name">First name*</label>
                        <input type="text" name="first_name" id="customer_first_name" value="{{ Auth::user()->name }}" class="form-control" required="required">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <!-- Last name -->
                     <div class="form-group">
                        <label for="customer_last_name">Last name*</label>
                        <input type="text" name="last_name" id="customer_last_name" value="" class="form-control" required="required">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <!-- First name -->
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" value="{{ Auth::user()->email }}" placeholder="Enter email" required="required">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <!-- Last name -->
                     <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="required">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <!-- Services -->
                  <div class="form-group">
                     <label>Choose one or more services*</label>
                     <p class="text-danger d-none" id="select_service">Please select at least one service.</p>
                     <div class="row" id="service_checkboxes">
                        <div class="col-md-6 ">
                           <div class="custom-controls-stacked">
                              @foreach($services as $service)
                              <div class="custom-control custom-checkbox mb-2">
                                 <input type="checkbox" name="service_id[]" id="" value="{{ $service->service_id }}" class="">
                                 <label class="" for="">
                                 {{ $service->title }}
                                 </label>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <!-- Images to quote -->
                  <div class="form-group">
                     <label for="quotation_quantity">How many images do you need a quote for?*</label>
                     <input type="number" name="quantity" id="quotation_quantity" value="" class="form-control" min="1" max="99999">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>
                     Do you need your images resized?*
                     </label>
                     <div class="custom-control custom-radio">
                        <input type="radio" name="resize_image" id="quotation_resize_image_true" value="Yes" class="custom-control-input">
                        <label class="custom-control-label" for="quotation_resize_image_true">Yes</label>
                     </div>
                     <div class="custom-control custom-radio">
                        <input type="radio" name="resize_image" id="quotation_resize_image_false" value="0" class="custom-control-input" >
                        <label class="custom-control-label" for="quotation_resize_image_false">No</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" id="image-size-fields">
               <div class="col-md-6">
                  <!-- Width -->
                  <div class="form-group">
                     <label for="quotation_image_width">Width</label>
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="number" name="image_width" id="quotation_image_width" class="form-control" min="50" max="9999" >
                        <div class="input-group-append">
                           <span class="input-group-text">px</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="quotation_image_height">Height</label>
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input type="number" name="image_height" id="quotation_image_height" class="form-control" min="50" max="9999" >
                        <div class="input-group-append">
                           <span class="input-group-text">px</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="quotation_image_height">Attache ZIP File</label>
                     <div class="mb-2 mr-sm-2 mb-sm-0">
                        <input type="file" name="attache_zip" id="" class="form-control" required="required" accept="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <!-- Extras -->
                  <div class="form-group">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="set_margin" value="Yes" id="quotation_set_margin" class="custom-control-input">
                        <label class="custom-control-label" for="quotation_set_margin">
                        Straighten, crop and set margin (FREE) <i class="icon-info-with-circle" data-toggle="tooltip" data-container="body" title="" data-original-title="If this is selected, we will straighten the image and crop to the subject of the image with a standard margin."></i>
                        </label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <!-- Comments -->
                  <div class="form-group">
                     <label for="quotation_additional_comment">Additional comments (optional)</label>
                     <textarea name="additional_comment" id="quotation_additional_comment" class="form-control" rows="4"></textarea>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <!-- cart -->
                  <div class="col-md-4 order-md-2 mb-4">
                     <h4 class="d-flex justify-c150ent-between align-items-center mb-3">
                        <span class="text-muted">Your Package</span>
                     </h4>
                     <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                           <div>
                              <h6 class="my-0">{{ $package->pkg_name }}</h6>
                              <small class="text-muted">{{ substr($package->description,0,150) }}</small>
                           </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                           <span>Amount </span>
                           <strong>{{ $package->amount }}</strong>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-8 order-md-1">
                     <h5 class="section__heading card-header info-color white-text text-center py-4" style="
                        background-color: #33b5e5 !important; box-shadow: 0 2px 5px 0 rgba(232, 25, 25, 0.16), 0 2px 10px 0 #007bff;padding: .84rem 2.14rem;font-size: 2rem;">
                        <strong style="" class="text-light"><i class="fas fa-user"></i> Payment info</strong>
                     </h5>
                     <div class="d-block my-3">
                        <!-- paypal -->
                        <div class="form-check-inline">
                           <label class="form-check-label" for="radio1">
                           <input type="radio" class="form-check-input" id="radio1" name="payment_type" value="paypal" required="required"><img src="{{ asset('assets/payment/paypal.png') }}" class="img-responsive" height="50px" width="50px">
                           </label>
                        </div>
                        <!-- bkash -->
                        <div class="form-check-inline">
                           <label class="form-check-label" for="radio2">
                           <input type="radio" class="form-check-input payment bkashCheck2" id="radio2" name="payment_type" value="bkash"  required="required"> 
                           <img src="{{ asset('assets/payment/Bkash.jpeg') }}" class="img-responsive bkashCheck2" height="50px" width="50px">
                           </label>
                        </div>
                        <!-- rocket -->
                        <div class="form-check-inline">
                           <label class="form-check-label" for="radio3">
                           <input type="radio" class="form-check-input payment bkashCheck2" id="radio3" name="payment_type" value="rocket" required="required">
                           <img src="{{ asset('assets/payment/rocket.jpg') }}" class="img-responsive" height="50px" width="50px">
                           </label>
                        </div>
                        <!-- bank -->
                        <div class="form-check-inline">
                           <label class="form-check-label" for="radio4">
                           <input type="radio" class="form-check-input payment bankCheck1" id="radio4" name="payment_type" value="bank" required="required">
                           <img src="{{ asset('assets/payment/bank.jpg') }}" class="img-responsive" height="50px" width="50px">
                           </label>
                        </div>
                        <br><br>
                        <!--bkash rocket show collaps-->
                        <div id="rocket" class="collapse card text-light bg-dark bkashrocketdiv">
                           <div class="card-footer text-muted">
                              <p align="justify"> Fillup below form."SEND MONEY" cost will be added with net price.Total amount you need to send us at <b>Tk {{ $package->amount }}</b></p>
                           </div>
                           <div class="card-body bg-light text-info">
                              <label class="" for="debit"> Sender Number</label>
                              <input name="sender_number"  type="number" class="rocnumber">&nbsp;&nbsp;&nbsp;
                              <label class=""> Transaction ID</label>
                              <input name="trx_id" value="" type="text" class="roctrx">
                           </div>
                           <div class="card-footer text-muted">
                              Your personal data will be used to process your order,support your experience throughout this website,and  for other purposes described in yopu <strong>privacy policy</strong>.
                           </div>
                        </div>
                        <!-- bank collaps-->
                        <div id="bank" class="collapse card text-light bg-dark bankDiv">
                           <div class="card-footer text-muted">
                              <p align="justify">Bank Fillup below form.Also note that 5% Bank "SEND MONEY" cost will be added with net price.Total amount you need to send us at <b>Tk {{ $package->amount }}</b></p>
                           </div>
                           <div class="card-body bg-light text-info">
                              <p align="justify">Bank Account Number:<b>5415645641</b></p>
                              <label class="">Bank Received No:</label>
                              <input name="bank_number"  type="text" class="banknumber">
                           </div>
                           <div class="card-footer text-muted">
                              Your personal data will be used to process your order,support your experience throughout this website,and  for other purposes described in yopu <strong>privacy policy</strong>.
                           </div>
                        </div>
                        <br><br>
                        <div class="submit">
                           <button type="submit" id="submitbtn" class="btn btn-primary" >PLACE ORDER</button>
                        </div>
         </form>
         <br>
         <hr class="mb-4">
         <div class="row">
         <div class="col">
         <!-- Submit button -->
         <div class="text-right mt-2">
         Next, you will have the option to upload sample image(s).</p>
         </div>
         </div>
         </div>
         </div>
         </div>
         </div>
         <div class="tile-footer"></div>
         </div>
      </div>
   </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   // hide/show
   $(document).ready(function(){
     // $('.bkashdiv').hide();
     $('.bkashrocketdiv').hide();
     $('.bankDiv').hide();
   
       $('.bkashCheck2').click(function(){
         $('.bkashrocketdiv').show();
         $('.bankDiv').hide();
       })
   
       $('.bankCheck1').click(function(){
         $('.bankDiv').show();
         $('.bkashrocketdiv').hide();
         
       })
   });   
    // validation
      $(document).ready(function(){
        $('#submitbtn').click(function(event) {
          // value atkano as like return value
        // event.preventDefault(); 
         var payment_type = $('.payment:checked').val();
         // console.log(payment_type); check value
         // bkash
         if(payment_type == "bkash") 
         {
          var number = $('.rocnumber').val();
          var trx = $('.roctrx').val();
          if(number == "" && trx == "") {
            alert('Please enter your Bkash/Trx number');
            return false;
          } else if(number == "") {
            alert('Plese enter your Bkash No');
            return false;
          } else if(trx == "") {
            alert('Plese enter your Trx No');
            return false;
          } else {
            return true;
          }
         }
         // rocket
         if(payment_type == "rocket") 
         {
          var number = $('.rocnumber').val();
          var trx = $('.roctrx').val();
          if(number == "" && trx == "") {
            alert('Please enter your Rocket/Trx number');
            return false;
          } else if(number == "") {
            alert('Plese enter your Rocket No');
            return false;
          } else if(trx == "") {
            alert('Plese enter your Trx No');
            return false;
          } else {
            return true;
          }
         }
         // bank
         if(payment_type == "bank") 
         {
          var number = $('.banknumber').val();
          if(number == "") {
            alert('Please enter your Bank receive number');
            return false;
          } else if(number == "") {
            alert('Plese enter your Bkash No');
            return false;
          } else {
            return true;
          }
         }
        });
      });

   
</script>
@endsection