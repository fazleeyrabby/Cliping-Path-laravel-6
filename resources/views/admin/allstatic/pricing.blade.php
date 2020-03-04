@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Pricing</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/pricing') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Pricing::first();
                $count = 1; 
            	?>
              <!-- Clipping path -->
            	 <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/pricing/{{ $all->cp_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="cp_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-3 control-label"><strong>Title </strong></label><br>
	               	<input type="text" name="cp_title" value="{{ $all->cp_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-3 control-label"><strong>Sub Title </strong></label><br>
	               	<input type="text" name="cp_sub_title" value="{{ $all->cp_sub_title }}" class="form-control">
                </div> 
                <!-- Drop Shadow -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/pricing/{{ $all->ds_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="ds_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="ds_title" value="{{ $all->ds_title }}" class="form-control">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Sub Title </strong></label><br>
                  <input type="text" name="ds_sub_title" value="{{ $all->ds_sub_title }}" class="form-control">
                </div>
                <!-- Ghost mannequin -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/pricing/{{ $all->gm_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG</strong></label>
                  <input class="form-control" name="gm_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="gm_title" value="{{ $all->gm_title }}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label class="col-md-3 control-label"><strong>Sub Title </strong></label><br>
                  <input type="text" name="gm_sub_title" value="{{ $all->gm_sub_title }}" class="form-control">
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




