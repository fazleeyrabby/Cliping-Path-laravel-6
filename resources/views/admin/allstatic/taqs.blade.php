@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Taqs</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/taqs') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Taqs::first();
                $count = 1; 
            	?>
              <!-- taqs -->
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_one" value="{{ $all->taqs_one }}" class="form-control">
                </div> 
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_two" value="{{ $all->taqs_two }}" class="form-control">
                </div> 
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_three" value="{{ $all->taqs_three }}" class="form-control">
                </div> 
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_four" value="{{ $all->taqs_four }}" class="form-control">
                </div> 
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_five" value="{{ $all->taqs_five }}" class="form-control">
                </div> 
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_six" value="{{ $all->taqs_six }}" class="form-control">
                </div> 
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_seven" value="{{ $all->taqs_seven }}" class="form-control">
                </div>  
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_eight" value="{{ $all->taqs_eight }}" class="form-control">
                </div>  
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_nine" value="{{ $all->taqs_nine }}" class="form-control">
                </div>  
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_ten" value="{{ $all->taqs_ten }}" class="form-control">
                </div>  
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_eleven" value="{{ $all->taqs_eleven }}" class="form-control">
                </div>  
                <div class="form-group col-md-2">
	                <label class="col-md-2 control-label"><strong>{{ $count++ }}.Taqs </strong></label><br>
	               	<input type="text" name="taqs_twelve" value="{{ $all->taqs_twelve }}" class="form-control">
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




