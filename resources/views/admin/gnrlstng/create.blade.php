@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
   <!-- summernote for text editor -->
   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
    


	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Create General Setting</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">

         <div class="col-lg-6">
            <form action="{{ route('gnrlstng.store') }}" method="post" enctype="multipart/form-data">
            	@csrf
            <div class="form-group">
               <label for="exampleInputEmail1" class="col-md-3 control-label"><strong>Website Name</strong> </label>
               <input class="form-control" name="name" id="" value="{{ $gnrlstng->name }}" type="text"  placeholder="Enter Package Name">
            </div>
            <div class="form-group">
             <label class="col-md-3 control-label"><strong>Website Logo</strong></label>
                 <img src="../../assets/logo/{{ $gnrlstng->logo }}" alt="" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Logo</strong></label><br>
               <input type="file" name="logo" class="form-control">
               <b style="color:red; margin-top:10px; font-weight: bold; float: right;margin-right: 10px">Image Must be PNG &amp; Resize: 225x60</b>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"><strong>Website Favicon</strong></label>
                   <img src="../../assets/favicon/{{ $gnrlstng->favicon }}" alt="" >
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Change Favicon</strong></label><br>
               <input type="file" name="favicon" class="form-control">
               <b style="color:red; margin-top:10px; font-weight: bold; float: right;margin-right: 10px">Image Must be PNG &amp; Resize: 60x60</b>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Color</strong></label><br>
               <input type="color" name="color" value="{{ $gnrlstng->color }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Dasdboard Navigation Bar Color</strong></label><br>
               <input type="color" name="navbar_color" value="{{ $gnrlstng->navbar_color }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Header Background Color</strong></label><br>
               <input type="color" name="header_color" value="{{ $gnrlstng->header_color }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Footer Background Color</strong></label><br>
               <input type="color" name="footer_color" value="{{ $gnrlstng->footer_color }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Address</strong></label><br>
               <input type="text" name="address" value="{{ $gnrlstng->address }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Mobile</strong></label><br>
               <input type="contact" name="mobile" value="{{ $gnrlstng->mobile }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Email</strong></label><br>
               <input type="email" name="email" value="{{ $gnrlstng->email }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Base Currency</strong></label><br>
               <input type="text" name="currency" value="{{ $gnrlstng->currency }}" class="form-control">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Top text</strong></label><br>
               <textarea id="summernote" cols="6" rows="6" value="" class="form-control" name="top_text">{{ $gnrlstng->top_text }}</textarea>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Facebook</strong></label>
                 <input class="form-control input-lg" name="facebook" value="{{ $gnrlstng->facebook }}"  type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Tweeter</strong></label>
                 <input class="form-control input-lg" name="tweeter" value="{{ $gnrlstng->tweeter }}" type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Google Plus</strong></label>
                 <input class="form-control input-lg" name="google_plus" value="{{ $gnrlstng->google_plus }}" type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Linkin</strong></label>
                 <input class="form-control input-lg" name="linkin" value="{{ $gnrlstng->linkin }}" type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Youtube</strong></label>
                 <input class="form-control input-lg" name="youtube" value="{{ $gnrlstng->youtube }}" type="text">
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Footer text</strong></label><br>
               <textarea id="summernote_footer" class="form-control" name="footer_text">{{ $gnrlstng->footer_text }}</textarea>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"><strong>Footer Bootom Text</strong></label>
               <textarea id="summernote_footer_bottom" name="fotr_btm_txt"  placeholder="Cliping Path © All copyright Reserved.">{{ $gnrlstng->fotr_btm_txt }}</textarea>
            </div>
             <div class="form-group">
            <button class="btn btn-primary form-control" type="submit">Save Change</button>
            </div>
        </form>
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
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });


$('#summernote_footer').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });

$('#summernote_footer_bottom').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });

      })
    </script>

    @endsection



