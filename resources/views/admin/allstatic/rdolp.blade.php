@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Read our latest product photo tips</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/rdolp') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$rdolp = App\Rdolp::first();
                	$count = 1; 
            	?>
            	<div class="form-group col-md-12">
	                <label class="col-md-3 control-label"><strong>Section Title </strong></label><br>
	               	<textarea cols="60" rows="3" name="title" class="form-control">{{ $rdolp->title }}</textarea>
                </div> 
              <!-- bnb -->
            	 <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/rdolp/{{ $rdolp->bnb_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="bnb_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-3 control-label"><strong>Title </strong></label><br>
	               	<input type="text" name="bnb_title" value="{{ $rdolp->bnb_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-3 control-label"><strong>Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="bnb_des" class="form-control">{{ $rdolp->bnb_des }}</textarea>
                </div> 
                <!-- desk -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/rdolp/{{ $rdolp->desk_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="desk_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="desk_title" value="{{ $rdolp->desk_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Sub Title </strong></label><br>
                  <textarea cols="60" rows="1" name="desk_des" class="form-control">{{ $rdolp->desk_des }}</textarea>
                </div>
                <!-- taddy -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/rdolp/{{ $rdolp->taddy_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="taddy_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="taddy_title" value="{{ $rdolp->taddy_title }}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Sub Title </strong></label><br>
                  <textarea cols="60" rows="1" name="taddy_des" class="form-control">{{ $rdolp->taddy_des }}</textarea>
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




