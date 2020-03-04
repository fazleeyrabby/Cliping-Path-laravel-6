@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Clipping Path in BD</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/cp-bd') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Clpngpbd::first();
                	$count = 1; 
            	?>
              <!-- Quality -->
            	 <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/cpbd/{{ $all->qlty_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="qlty_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-3 control-label"><strong>Title </strong></label><br>
	               	<input type="text" name="qlty_title" value="{{ $all->qlty_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-3 control-label"><strong>Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="qlty_des" class="form-control">{{ $all->qlty_des }}</textarea>
                </div> 
                <!-- Price -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/cpbd/{{ $all->price_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="price_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="price_title" value="{{ $all->price_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Sub Title </strong></label><br>
                  
                  <textarea cols="60" rows="1" name="price_des" class="form-control">{{ $all->price_des }}</textarea>
                </div>
                <!-- Time -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/cpbd/{{ $all->time_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="time_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="time_title" value="{{ $all->time_title }}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Sub Title </strong></label><br>
                  <textarea cols="60" rows="1" name="time_des" class="form-control">{{ $all->time_des }}</textarea>
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




