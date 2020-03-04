@extends('layouts.admin_index')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i>  Single File Detailes</h1>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                     <tr>
	                  <th>ID</th>
	                  <td>{!! $attachefile->id !!}</td>
	               </tr>
	               <tr>
	                  <th>Description</th>
	                  <td>{!! $attachefile->description !!}</td>
	               </tr>
	               <tr>
	                  <th>Image</th>
	                  <td>
	                     @for($i=0;$i<count($img_data);$i++)
	                     <img src="{{asset('assets/frontend_asset/attache_files/')}}/{{$img_data[$i]}}" height="100" width="150">
	                     @endfor
	                  </td>
	               </tr>
                  <tr>
                     <th>Action</th>
                     <td>
                       <div class="btn-group">
                            <a class="btn btn-primary" href="{!! url('download-zip',$attachefile->id) !!}"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            <a class="btn btn-primary" href=""><i class="fa fa-cloud-upload" aria-hidden="true"></i></a>
                        </div>
                     </td>
                  </tr>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection('content')