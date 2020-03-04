@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change How it work Section</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/how-it-work') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Howitwork::first();
                $count = 1; 
            	?>
              <!-- fb -->
            	 <div class="form-group col-md-3">
                  <label class="col-md-3 control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/howitwork/{{ $all->fb_img }}" alt="" height="150" width="200">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Change IMG</label>
                  <input class="form-control" name="fb_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-6">
	                <label class="col-md-3 control-label"><strong>Title </strong></label><br>
	               	<input type="text" name="fb_title" value="{{ $all->fb_title }}" class="form-control">
                </div> 
                <!-- desk -->
                <div class="form-group col-md-3">
                  <label class="col-md-3 control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/howitwork/{{ $all->desk_img }}" alt="" height="150" width="200">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Change IMG</label>
                  <input class="form-control" name="desk_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-6">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="desk_title" value="{{ $all->desk_title }}" class="form-control">
                </div>
                <!-- bnf -->
                <div class="form-group col-md-3">
                  <label class="col-md-3 control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/howitwork/{{ $all->bnf_img }}" alt="" height="150" width="200">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Change IMG</label>
                  <input class="form-control" name="bnf_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-6">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="bnf_title" value="{{ $all->bnf_title }}" class="form-control">
                </div>
                <!-- mail -->
                <div class="form-group col-md-3">
                  <label class="col-md-3 control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/howitwork/{{ $all->mail_img }}" alt="" height="150" width="200">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Change IMG</label>
                  <input class="form-control" name="mail_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-6">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="mail_title" value="{{ $all->mail_title }}" class="form-control">
                </div>
                <!-- unknown -->
                <div class="form-group col-md-3">
                  <label class="col-md-3 control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/howitwork/{{ $all->unknown_img }}" alt="" height="150" width="200">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Change IMG</label>
                  <input class="form-control" name="unknown_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-6">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="unknown_title" value="{{ $all->unknown_title }}" class="form-control">
                </div>
                <!-- time -->
                <div class="form-group col-md-3">
                  <label class="col-md-3 control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/howitwork/{{ $all->time_img }}" alt="" height="150" width="200">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Change IMG</label>
                  <input class="form-control" name="time_img" type="file" placeholder=" ">
                </div> 
                <div class="form-group col-md-6">
                  <label class="col-md-3 control-label"><strong>Title </strong></label><br>
                  <input type="text" name="time_title" value="{{ $all->time_title }}" class="form-control">
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




