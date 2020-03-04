@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
<!-- summernote for text editor -->
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">

<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Term & Condition</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/term-condition') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Termcondition::first();
            	?>
          
                <div class="form-group col-md-12">
	                <label class="col-md-4 control-label"><strong>  Title </strong></label><br>
	               	<input type="text" name="title" value="{{ $all->title }}" class="form-control">
                </div> 
                <div class="form-group col-md-12">
	                <label class="col-md-12 control-label"><strong>Content</strong></label><br>
	               	<textarea cols="60" rows="1" name="description" id="desthree" class="form-control">{{ $all->description }}</textarea>
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
@section('js')


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
 

$('#desthree').summernote({
        placeholder: ' Name',
        tabsize: 2,
        height: 100
      });


      })
    </script>

    @endsection




