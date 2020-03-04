@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')

<!-- summernote for text editor -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">

	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change About Information</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('/admin/about') }}" class="row" method="post" enctype="multipart/form-data">
            	@csrf
            	<?php
            		$all = App\About::first();
                	$count = 1; 
            	?>
                <!-- bnb -->
            	 <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->page_top_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (page top img)</strong></label>
                  <input class="form-control" name="page_top_img" type="file" placeholder=" ">
                </div>  
                 <!-- clock -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_two_img_one }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-2 img-1)</strong></label>
                  <input class="form-control" name="sec_two_img_one" type="file" placeholder=" ">
                </div> 
                <!-- desk -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_two_img_two }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-2 img-2)</strong></label>
                  <input class="form-control" name="sec_two_img_two" type="file" placeholder=" ">
                </div>  
                   <!-- fb -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_two_img_three }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-2 img-3)</strong></label>
                  <input class="form-control" name="sec_two_img_three" type="file" placeholder=" ">
                </div>  
                 <!-- mail -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_three_img_one }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-3 img-1)</strong></label>
                  <input class="form-control" name="sec_three_img_one" type="file" placeholder=" ">
                </div>  
                  <!-- pen -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_three_img_two }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-3 img-2)</strong></label>
                  <input class="form-control" name="sec_three_img_two" type="file" placeholder=" ">
                </div> 
                 <!-- polo-shirt -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_three_img_three }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-3 img-3)</strong></label>
                  <input class="form-control" name="sec_three_img_three" type="file" placeholder=" ">
                </div>  
                <!-- sun -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_five_img }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (sec-5 img)</strong></label>
                  <input class="form-control" name="sec_five_img" type="file" placeholder=" ">
                </div>  
                <!-- teddy-bear -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_six_img_one }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-1)</strong></label>
                  <input class="form-control" name="sec_six_img_one" type="file" placeholder=" ">
                </div> 
                <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_six_img_two }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-2)</strong></label>
                  <input class="form-control" name="sec_six_img_two" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_six_img_three }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-3)</strong></label>
                  <input class="form-control" name="sec_six_img_three" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_six_img_four }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-4)</strong></label>
                  <input class="form-control" name="sec_six_img_four" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_six_img_five }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-5)</strong></label>
                  <input class="form-control" name="sec_six_img_five" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_six_img_six }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-6)</strong></label>
                  <input class="form-control" name="sec_six_img_six" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_six_img_seven }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-7)</strong></label>
                  <input class="form-control" name="sec_six_img_seven" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->sec_six_img_eight }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change WORK WITH(sec-6 img-8)</strong></label>
                  <input class="form-control" name="sec_six_img_eight" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->location_img_one }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (Location img-1)</strong></label>
                  <input class="form-control" name="location_img_one" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->location_img_two }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (Location img-2)</strong></label>
                  <input class="form-control" name="location_img_two" type="file" placeholder=" ">
                </div>  <!-- tnd -->
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
                  <img src="/assets/admin/images/about/{{ $all->location_img_three }}" alt="" height="100" width="100">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Change IMG (Location img-3)</strong></label>
                  <input class="form-control" name="location_img_three" type="file" placeholder=" ">
	                </div>  <!-- tnd -->
	                <div class="form-group col-md-2">
	                  <label class="control-label"><strong>{{ $count++ }}.Present IMG</strong></label>
	                  <img src="/assets/admin/images/about/{{ $all->location_img_four }}" alt="" height="100" width="100">
	                </div>
	                <div class="form-group col-md-2">
	                  <label class="control-label"><strong>Change IMG (Location img-5)</strong></label>
	                  <input class="form-control" name="location_img_five" type="file" placeholder=" ">
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
		                <label class="col-md-3 control-label"><strong>Sctn-2 Title </strong></label><br>
		               	<input type="text" name="sec_two_title" value="{{ $all->sec_two_title }}" class="form-control">
                	</div>
                	<div class="form-group col-md-4">
		                <label class="col-md-6 control-label"><strong>Sctn-2 Sub Title-1 </strong></label><br>
		               	<input type="text" name="sec_two_sub_title_one" value="{{ $all->sec_two_sub_title_one }}" class="form-control">
                	</div> 
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-2 Sub Description-1 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_two_sub_des_one" class="form-control">{{ $all->sec_two_sub_des_one }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-6 control-label"><strong>Sctn-2 Sub Title-2 </strong></label><br>
		               	<input type="text" name="sec_two_sub_title_two" value="{{ $all->sec_two_sub_title_two }}" class="form-control">
                	</div> 
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-2 Sub Description-2 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_two_sub_des_two" class="form-control">{{ $all->sec_two_sub_des_two }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-6 control-label"><strong>Sctn-2 Sub Title-3 </strong></label><br>
		               	<input type="text" name="sec_two_sub_title_three" value="{{ $all->sec_two_sub_title_three }}" class="form-control">
                	</div> 
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-2 Sub Description-3 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_two_sub_des_three" class="form-control">{{ $all->sec_two_sub_des_three }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-3  Description-1 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_three_des_one" id="sec_one" class="form-control">{{ $all->sec_three_des_one }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-3  Description-2 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_three_des_two" id="sec_two" class="form-control">{{ $all->sec_three_des_two }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-3  Description-3 </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_three_des_three" id="sec_three" class="form-control">{{ $all->sec_three_des_three }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Sctn-5  Description </strong></label><br>
		               	<textarea cols="60" rows="1" name="sec_five_des" id="sec_five" class="form-control">{{ $all->sec_five_des }}</textarea>
	                </div>
	                <div class="form-group col-md-4">
		                <label class="col-md-12 control-label"><strong>Location Description </strong></label><br>
		               	<textarea cols="60" rows="1" name="location_des" class="form-control">{{ $all->location_des }}</textarea>
	                </div> 
	                <div class="form-group col-md-4">
		                <label class="col-md-6 control-label"><strong>Location img Title-1 </strong></label><br>
		               	<input type="text" name="location_img_title_one" value="{{ $all->location_img_title_one }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-6 control-label"><strong>Location img Title-2 </strong></label><br>
		               	<input type="text" name="location_img_title_two" value="{{ $all->location_img_title_two }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-6 control-label"><strong>Location img Title-3 </strong></label><br>
		               	<input type="text" name="location_img_title_three" value="{{ $all->location_img_title_three }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-6 control-label"><strong>Location img Title-4 </strong></label><br>
		               	<input type="text" name="location_img_title_four" value="{{ $all->location_img_title_four }}" class="form-control">
                	</div><div class="form-group col-md-4">
		                <label class="col-md-6 control-label"><strong>Location img Title-5 </strong></label><br>
		               	<input type="text" name="location_img_title_five" value="{{ $all->location_img_title_five }}" class="form-control">
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




