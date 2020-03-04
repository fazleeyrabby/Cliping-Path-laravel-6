@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
<!-- summernote for text editor -->
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">

<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Edit Service</h1>
      </div>
   </div>
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	{!! Form::open(['route' =>['servicepage.update',$catwiseservice->id],'class'=>'form-horizontal','method'=>'PUT','enctype'=>'multipart/form-data']) !!}

                <!-- <input type="hidden" name="servicepage_id" value="{{$catwiseservice->id}}"> -->
            	
            	<div class="col-md-12 col-sm-12 col-xs-12">
		          <?php
		            $services = App\Service::where('publication_status',1)->orderBy('service_id','DESC')->get();
		          ?>
		            <div class="form-group">
		              <label for="exampleFormControlSelect1">select a Service *</label>
		              <select class="form-control" id="exampleFormControlSelect1" name="service_id" >
		              	<option value="" class="align-self-end">=== Please Select Any Service ===</option>
		                 @foreach($services as $service)
		                <option value="{{ $service->service_id }}" {{$service->service_id == $catwiseservice->service_id ? 'selected' : ''}}>{{ $service->title }}</option>
		                 @endforeach
		              </select>
		            </div>
		        </div>
		        <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Page Title </strong></label><br>
	               	<input type="text" name="page_title" value="{{ $catwiseservice->page_title }}" class="form-control" >
                </div> 
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Page IMG</strong></label>
                  <input class="form-control" name="page_img" value="{{ $catwiseservice->page_img }}" type="file" placeholder="" >
                </div> 
                <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Page IMG TEXT </strong></label><br>
	               	<input type="text" name="page_img_text" value="{{ $catwiseservice->page_img_text }}" class="form-control" >
                </div> 
                <div class="form-group col-md-12">
	                <label class="col-md-12 control-label"><strong>Page img under des </strong></label><br>
	               	<textarea cols="60" rows="1" name="page_img_under_des" id="" class="form-control" >{!! $catwiseservice->page_img_under_des !!}</textarea>
                </div> 
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>page img side img</strong></label>
                  <input class="form-control" name="page_img_side_img"  type="file" placeholder=" ">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>our work action img-1</strong></label>
                  <input class="form-control" name="our_wrk_actn_img_one" type="file" placeholder=" " >
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>our work action img-2</strong></label>
                  <input class="form-control" name="our_wrk_actn_img_two" type="file" placeholder=" " >
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>our work action img-3</strong></label>
                  <input class="form-control" name="our_wrk_actn_img_three" type="file" placeholder=" " >
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>our work action img-4</strong></label>
                  <input class="form-control" name="our_wrk_actn_img_four" type="file" placeholder=" " >
                </div>
                 <div class="form-group col-md-12">
	                <label class="col-md-12 control-label"><strong>Try our service under Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="try_our_service_under_des" id="destwo" class="form-control" >{{ $catwiseservice->try_our_service_under_des }}</textarea>
                </div>
                <div class="form-group col-md-12">
	                <label class="col-md-12 control-label"><strong>Why cpbd under Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="why_cpbd_under_des" id="desthree" class="form-control" >{{ $catwiseservice->why_cpbd_under_des }}</textarea>
                </div>
                <div class="form-group col-md-12">
	                <label class="col-md-12 control-label"><strong>Page content Description </strong></label><br>
	               	<textarea cols="60" rows="1" name="page_content_des" id="desfour" class="form-control" >{{ $catwiseservice->page_content_des }}</textarea>
                </div> 
                 <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Related service-1 </strong></label><br>
	               	<input type="text" name="related_srvc_one" 
	               	value="{{ $catwiseservice->related_srvc_one }}" class="form-control" >
                </div>  
                <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Related service-2 </strong></label><br>
	               	<input type="text" name="related_srvc_two" value="{{ $catwiseservice->related_srvc_two }}" class="form-control" >
                </div>  
                <div class="form-group col-md-4">
	                <label class="col-md-4 control-label"><strong> Related service-3 </strong></label><br>
	               	<input type="text" name="related_srvc_three" value="{{ $catwiseservice->related_srvc_three }}" class="form-control" >
                </div> 
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Related service IMG</strong></label>
                  <input class="form-control" value="{{ $catwiseservice->related_srvc_img }}" name="related_srvc_img" type="file" placeholder=" " >
                </div>
                <div class="form-group col-md-4">
	                <label class="col-md-6 control-label"><strong> Related service Name </strong></label><br>
	               	<input type="text" name="related_srvc_name"  value="{{ $catwiseservice->related_srvc_name }}" class="form-control" >
                </div> 
                <div class="form-group col-md-12">
	                <label class="col-md-12 control-label"><strong>Related service Des </strong></label><br>
	               	<textarea cols="60" rows="1" name="related_srvc_des" id="desone" class="form-control" >{{ $catwiseservice->related_srvc_des }}"</textarea>
                </div> 
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Page sample img-1</strong></label>
                  <input class="form-control" name="page_sample_img_one" type="file" placeholder=" " >
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Page sample img-2</strong></label>
                  <input class="form-control" name="page_sample_img_two" type="file" placeholder=" " >
                </div> 
                <div class="form-group col-md-2">
                  <label class="control-label"><strong>Page sample img-3</strong></label>
                  <input class="form-control" name="page_sample_img_three" type="file" placeholder=" " >
                </div>
                <div class="form-group">
	               <label for="exampleSelect1">Publication Status</label>
	               <select class="form-control" id="exampleSelect1" name="publication_status">
	                  <option>===Please Select===</option>
	                  <option value="1" {{$catwiseservice->publication_status == 1 ? 'selected' : ''}}>Published</option>
	                  <option value="0" {{$catwiseservice->publication_status == 0 ? 'selected' : ''}}>Unpublished</option>
	               </select>
	            </div>
                <!-- btn -->
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="submit"></i>Save Change</button>
                </div>
             {!! Form::close() !!}
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
        $('#desone').summernote({
        placeholder: 'Title Name',
        tabsize: 2,
        height: 100
      });


$('#destwo').summernote({
        placeholder: ' Title Name',
        tabsize: 2,
        height: 100
      });

$('#desthree').summernote({
        placeholder: ' Name',
        tabsize: 2,
        height: 100
      });
// 
$('#desfour').summernote({
        placeholder: ' Title Name',
        tabsize: 2,
        height: 100
      });

      })
    </script>

    @endsection




