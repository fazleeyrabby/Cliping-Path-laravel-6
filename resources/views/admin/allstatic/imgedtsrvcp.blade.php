@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Image-editing Service Pricing</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/img-edit-service-price') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Iespricing::first();
                	$count = 1; 
            	?>
              <!-- dolar -->
            	 <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/imgeditservice/{{ $all->dlr_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="dlr_img" type="file" placeholder=" ">
                </div> 
                <!-- paypal -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/imgeditservice/{{ $all->paypal_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="paypal_img" type="file" placeholder=" ">
                </div>
                <!-- bank -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/imgeditservice/{{ $all->bank_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="bank_img" type="file" placeholder=" ">
                </div>
                <!-- bkash -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/imgeditservice/{{ $all->bkash_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="bkash_img" type="file" placeholder=" ">
                </div>
                <!-- rocket -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/imgeditservice/{{ $all->rocket_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="rocket_img" type="file" placeholder=" ">
                </div> 

                <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Page Top Title </strong></label><br>
	               	<input type="text" name="tp_title" value="{{ $all->tp_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Page Top Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="page_top_des" class="form-control">{{ $all->page_top_des }}</textarea>
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-6 control-label"><strong>Edit Credit Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="ec_des" class="form-control">{{ $all->ec_des }}</textarea>
                </div> 

                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>WHY USE EDIT CREDITS (change) </strong></label><br>
                  <input type="text" name="ec_title" value="{{ $all->ec_title }}" class="form-control">
                </div> 
                <!-- Save Time -->
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Save Time (change) </strong></label><br>
                  <input type="text" name="save_time" value="{{ $all->save_time }}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Save Time Description (change) </strong></label><br>
                  <textarea cols="60" rows="1" name="std_des" class="form-control">{{ $all->std_des }}</textarea>
                </div>
                <!-- BUSINESS FRIENDLY -->
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Business Friendly (change) </strong></label><br>
                  <input type="text" name="business_friendly" value="{{ $all->business_friendly }}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Business Friendly Des (change) </strong></label><br>
                  <textarea cols="60" rows="1" name="business_friendly_des" class="form-control">{{ $all->business_friendly_des }}</textarea>
                </div>
                <!-- SAVE MONEY -->
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Save money (change) </strong></label><br>
                  <input type="text" name="save_money" value="{{ $all->save_money }}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Save money Description (change) </strong></label><br>
                  <textarea cols="60" rows="1" name="save_money_des" class="form-control">{{ $all->save_money_des }}</textarea>
                </div>
                <!-- VALID FOR 1 YEAR -->
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Valid For (change) </strong></label><br>
                  <input type="text" name="valid_for" value="{{ $all->valid_for }}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Valid For Description (change) </strong></label><br>
                  <textarea cols="60" rows="1" name="valid_for_des" class="form-control">{{ $all->valid_for_des }}</textarea>
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-6 control-label"><strong>Pay as you go description</strong></label><br>
                  <textarea cols="60" rows="1" name="pay_as_go_des" class="form-control">{{ $all->pay_as_go_des }}</textarea>
                </div>
                <!-- btn -->
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="submit"></i>Save Change</button>
                </div>
              </form>
            </div>
          </div>
        </div>
   </div>
</main>
@endsection




