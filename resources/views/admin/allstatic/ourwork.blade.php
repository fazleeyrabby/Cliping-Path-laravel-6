@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')

<!-- summernote for text editor -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">

	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Our Work Information</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/our-work') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\Ourwork::first();
                	$count = 1; 
            	?>
                <!-- bnb -->
            	 <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->page_top_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (page top img)</strong></label>
                  <input class="form-control" name="page_top_img" type="file" placeholder=" ">
                </div>  
                 <!-- clock -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_three_img_one }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-2 img-1)</strong></label>
                  <input class="form-control" name="sec_three_img_one" type="file" placeholder=" ">
                </div> 
                <!-- desk -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_three_img_two }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-2 img-2)</strong></label>
                  <input class="form-control" name="sec_three_img_two" type="file" placeholder=" ">
                </div>  
                   <!-- fb -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_three_img_three }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-2 img-3)</strong></label>
                  <input class="form-control" name="sec_three_img_three" type="file" placeholder=" ">
                </div>  
                 <!-- mail -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_three_img_four }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-3 img-1)</strong></label>
                  <input class="form-control" name="sec_three_img_four" type="file" placeholder=" ">
                </div>  
                  <!-- pen -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_three_img_five }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-3 img-2)</strong></label>
                  <input class="form-control" name="sec_three_img_five" type="file" placeholder=" ">
                </div> 
                 <!-- polo-shirt -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_three_img_six }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-3 img-3)</strong></label>
                  <input class="form-control" name="sec_three_img_six" type="file" placeholder=" ">
                </div>  
                <!-- sun -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_three_img_seven }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-5 img)</strong></label>
                  <input class="form-control" name="sec_three_img_seven" type="file" placeholder=" ">
                </div>  
                <!-- teddy-bear -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_three_img_eight }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-1)</strong></label>
                  <input class="form-control" name="sec_three_img_eight" type="file" placeholder=" ">
                </div> 
                <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_six_img_one }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-2)</strong></label>
                  <input class="form-control" name="sec_six_img_one" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_six_img_two }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-3)</strong></label>
                  <input class="form-control" name="sec_six_img_two" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/ourwork/{{ $all->sec_six_img_three }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-4)</strong></label>
                  <input class="form-control" name="sec_six_img_three" type="file" placeholder=" ">
                </div> 
	                <div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Page Top Title </strong></label><br>
		               	<input type="text" name="page_top_title" value="{{ $all->page_top_title }}" class="form-control">
                	</div> 
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong> Page Top Description </strong></label><br>
		               	<textarea cols="60" rows="1" name="page_top_des" class="form-control">{{ $all->page_top_des }}</textarea>
	                </div> 
	                <div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-1 </strong></label><br>
		               	<input type="text" name="sec_two_title_one" value="{{ $all->sec_two_title_one }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-2 </strong></label><br>
		               	<input type="text" name="sec_two_title_two" value="{{ $all->sec_two_title_two }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-3 </strong></label><br>
		               	<input type="text" name="sec_two_title_three" value="{{ $all->sec_two_title_three }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-4 </strong></label><br>
		               	<input type="text" name="sec_two_title_four" value="{{ $all->sec_two_title_four }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-5 </strong></label><br>
		               	<input type="text" name="sec_two_title_five" value="{{ $all->sec_two_title_five }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-6 </strong></label><br>
		               	<input type="text" name="sec_two_title_six" value="{{ $all->sec_two_title_six }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-7 </strong></label><br>
		               	<input type="text" name="sec_two_title_seven" value="{{ $all->sec_two_title_seven }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-8 </strong></label><br>
		               	<input type="text" name="sec_two_title_eight" value="{{ $all->sec_two_title_eight }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-9 </strong></label><br>
		               	<input type="text" name="sec_two_title_nine" value="{{ $all->sec_two_title_nine }}" class="form-control">
                	</div>
                	<div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title-10 </strong></label><br>
		               	<input type="text" name="sec_two_title_ten" value="{{ $all->sec_two_title_ten }}" class="form-control">
                	</div>
                	<div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-6 Title-1 </strong></label><br>
		               	<input type="text" name="sec_six_title_one" value="{{ $all->sec_six_title_one }}" class="form-control">
                	</div>
                	<div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-6 Title-2 </strong></label><br>
		               	<input type="text" name="sec_six_title_two" value="{{ $all->sec_six_title_two }}" class="form-control">
                	</div>
                	<div class="form-group col-md-4">
		                <label class="col-md-3 control-label"><strong>Sctn-6 Title-3 </strong></label><br>
		               	<input type="text" name="sec_six_title_three" value="{{ $all->sec_six_title_three }}" class="form-control">
                	</div>
                	<div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-6 Description-1 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_six_des_one" class="form-control">{{ $all->sec_six_des_one }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-6 Description-2 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_six_des_two" class="form-control">{{ $all->sec_six_des_two }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-6 Description-3 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_six_des_three" class="form-control">{{ $all->sec_six_des_three }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-5 Description </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_five_des" class="form-control">{{ $all->sec_five_des }}</textarea>
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
        $('#sec_one').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });


$('#sec_two').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });

$('#sec_three').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
$('#sec_five').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });

      })
    </script>

    @endsection




