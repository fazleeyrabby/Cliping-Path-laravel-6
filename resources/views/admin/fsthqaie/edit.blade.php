@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
		<div class="row">
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	{!! Form::open(['route' =>[ 'fsthqaie.update',$fsthqaie->id],'class'=>'form-horizontal','method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                <div class="form-group col-md-6">
	                <label class="col-md-3 control-label"><strong>Category </strong></label><br>
	               	<textarea id="" cols="" rows="" class="form-control" name="category">{{ $fsthqaie->category }}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-3 control-label"><strong></strong></label><br>
                  <textarea id="" class="form-control" name="description">{{ $fsthqaie->description }}</textarea>
                </div> 
                <div class="form-group col-md-6">
                  <label class="control-label">Image</label>
                  <input class="form-control" name="image" type="file" >
                </div> 
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="submit"></i>Update</button>
                </div>
               {!! Form::close() !!}
            </div>
          </div>
        </div>
   </div>
   </div>
	</main>
@endsection