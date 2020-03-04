@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change See Our work</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/see-our-wrk') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Seeurrk::first();
                	$count = 1; 
            	?>
              <!-- descriptiopn -->
               <div class="form-group col-md-12">
	                <label class="col-md-3 control-label"><strong>Description </strong></label><br>
	               	<textarea cols="60" rows="3" name="dscrptn" class="form-control">{{ $all->dscrptn }}</textarea>
                </div> 
                <!-- bnb -->
            	 <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->bnb_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="bnb_img" type="file" placeholder=" ">
                </div>  
                 <!-- clock -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->bnb_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="clock_img" type="file" placeholder=" ">
                </div> 
                <!-- desk -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->desk_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="desk_img" type="file" placeholder=" ">
                </div>  
                   <!-- fb -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->fb_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="fb_img" type="file" placeholder=" ">
                </div>  
                 <!-- mail -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->mail_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="mail_img" type="file" placeholder=" ">
                </div>  
                  <!-- pen -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->pen_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="pen_img" type="file" placeholder=" ">
                </div> 
                 <!-- polo-shirt -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->polo_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="polo_img" type="file" placeholder=" ">
                </div>  
                <!-- sun -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->sun_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="sun_img" type="file" placeholder=" ">
                </div>  
                <!-- teddy-bear -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->teddy_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="teddy_img" type="file" placeholder=" ">
                </div> 
                <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/seeurrk/{{ $all->tnd_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="tnd_img" type="file" placeholder=" ">
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




