@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Help page</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/help') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Help::first();
                	$count = 1; 
            	?>
              <!-- fb -->
            	 <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/help/{{ $all->fb }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG(fb)</strong></label>
                  <input class="form-control" name="fb" type="file" placeholder=" ">
                </div> 
                <!-- tweeter -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/help/{{ $all->tweeter }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG(tweeter)</strong></label>
                  <input class="form-control" name="tweeter" type="file" placeholder=" ">
                </div>
                <!-- Pinterest -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/help/{{ $all->pinterest }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG(Pinterest)</strong></label>
                  <input class="form-control" name="pinterest" type="file" placeholder=" ">
                </div>
                <!-- LinkedIn -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/help/{{ $all->linkedin }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG(LinkedIn)</strong></label>
                  <input class="form-control" name="linkedin" type="file" placeholder=" ">
                </div>
                <!-- browser help img -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/help/{{ $all->brows_help_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG(browser help img)</strong></label>
                  <input class="form-control" name="brows_help_img" type="file" placeholder=" ">
                </div>
                <!-- ask beacon img -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/help/{{ $all->ask_beacon_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG(ask beacon img)</strong></label>
                  <input class="form-control" name="ask_beacon_img" type="file" placeholder=" ">
                </div>
                <!-- SM img -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/help/{{ $all->sm_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG(SM img)</strong></label>
                  <input class="form-control" name="sm_img" type="file" placeholder=" ">
                </div>
                <!-- SM img 2 -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/help/{{ $all->sm_img_two }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG(SM img-2)</strong></label>
                  <input class="form-control" name="sm_img_two" type="file" placeholder=" ">
                </div> 

                <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Page Top Title </strong></label><br>
	               	<input type="text" name="page_top_title" value="{{ $all->page_top_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Page Top Sub Title </strong></label><br>
	               	<input type="text" name="pagetop_sub_title" value="{{ $all->pagetop_sub_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Brows Help Des </strong></label><br>
	               	<textarea cols="60" rows="1" name="brows_help_des" class="form-control">{{ $all->brows_help_des }}</textarea>
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-6 control-label"><strong>Ask beacon Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="askbeacon_des" class="form-control">{{ $all->askbeacon_des }}</textarea>
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-6 control-label"><strong>Get in touch Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="gettouch_des" class="form-control">{{ $all->gettouch_des }}</textarea>
                </div>  
                <div class="form-group col-md-4">
	                <label class="col-md-6 control-label"><strong>Sub email Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="sub_email_des" class="form-control">{{ $all->sub_email_des }}</textarea>
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-6 control-label"><strong>Sm Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="sm_des" class="form-control">{{ $all->sm_des }}</textarea>
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-6 control-label"><strong>Sm Description two</strong></label><br>
	               	<textarea cols="60" rows="1" name="sm_des_two" class="form-control">{{ $all->sm_des_two }}</textarea>
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




