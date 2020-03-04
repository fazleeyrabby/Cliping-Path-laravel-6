@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
   <!-- summernote for text editor -->
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
   

	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Committed to making the world a better place</h1>
      </div>
   </div>
  <!-- resource data -->
  <?php
   $cmtdmw = App\Cmtdmw::first();
  ?>
   <!-- insert data -->
   <div class="row">
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ url('admin/committed-mkng-wld') }}" class="row" method="post" enctype="multipart/form-data">
            	   @csrf
                <div class="form-group col-md-6">
	                <label class="col-md-3 control-label"><strong>Title </strong></label><br>
	               	<textarea id="summernote" cols="6" rows="6" class="form-control" name="title">{{ $cmtdmw->title }}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-3 control-label"><strong>Description</strong></label><br>
                  <textarea id="summernote_description" class="form-control" name="description">{{ $cmtdmw->description }}</textarea>
                </div> 
                <div class="form-group col-md-6">
                  <label class="control-label">Present Image</label>
                  <img src="/assets/admin/images/committedmkngwld/{{ $cmtdmw->image }}" height="150" width="150">
                </div> 
                <div class="form-group col-md-6">
                  <label class="control-label">Image</label>
                  <input class="form-control" name="image" type="file" placeholder="Enter your Sub title">
                </div> 
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="submit"></i>Change</button>
                </div>
              </form>
            </div>
          </div>
        </div>
   </div>
   </div>
</main>
<script>
   
</script>
@endsection
@section('js')


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#summernote').summernote({
        placeholder: 'Title Name',
        tabsize: 2,
        height: 100
      });


$('#summernote_footer').summernote({
        placeholder: ' Title Name',
        tabsize: 2,
        height: 100
      });

$('#summernote_footer_bottom').summernote({
        placeholder: ' Name',
        tabsize: 2,
        height: 100
      });
$('#summernote_description').summernote({
        placeholder: ' Description',
        tabsize: 2,
        height: 100
      });

      })
    </script>

    @endsection