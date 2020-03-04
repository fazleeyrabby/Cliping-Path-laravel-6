@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Frontend Top Section</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ route('allstatic.store') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
                <div class="form-group col-md-6">
	                <label class="col-md-3 control-label"><strong>Title </strong></label><br>
	               	<textarea id="" cols="" rows="" class="form-control" name="top_title">{{ $topsec->top_title }}</textarea>
                </div>
                <div class="form-group col-md-6">
                  	<label class="col-md-3 control-label"><strong>Sub Title</strong></label><br>
               		<textarea id="" class="form-control" name="sub_title">{{ $topsec->sub_title }}</textarea>
                </div> 
                <div class="form-group col-md-6">
                  <label class="col-md-6 control-label"><strong>Present IMG</strong></label>
                  <img src="../../assets/admin/images/{{ $topsec->image }}" alt="" height="150" width="200">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Change IMG</label>
                  <input class="form-control" name="image" type="file" placeholder="Enter your Sub title">
                </div> 
                <div class="form-group col-md-6">
                  <label class="col-md-3 control-label"><strong>Background Color</strong></label><br>
               	  <input type="color" name="color" value="{{ $topsec->color }}" class="form-control">
                </div>
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
  



