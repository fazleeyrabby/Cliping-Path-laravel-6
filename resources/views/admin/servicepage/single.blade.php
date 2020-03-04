@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i>  Single service Infos</h1>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title"> Single service Infos</h3>
            <div class="tile-body">
               <table class="table table-hover table-bordered" id="sampleTable">
                  <tr>
                     <td><strong>Page Title:</strong> {!! $catwiseservice->page_title !!}</td>
                     <td><strong>Page Img TExt:</strong>&nbsp; {!! $catwiseservice->page_img_text !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Page img under des:</strong>&nbsp; {!! $catwiseservice->page_img_under_des !!}</td>
                     <td><strong>Try our service under des:</strong>&nbsp; {!! $catwiseservice->try_our_service_under_des !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Why cpbd under des:</strong>&nbsp; {!! $catwiseservice->why_cpbd_under_des !!}</td>
                     <td><strong>Page content des:</strong>&nbsp; {!! $catwiseservice->page_content_des !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Related srvc one:</strong>&nbsp;
                     {!! $catwiseservice->related_srvc_one !!}
                  </td>
                     <td><strong>Related srvc two:</strong>&nbsp; {!! $catwiseservice->related_srvc_two !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Related srvc three:</strong>&nbsp; {!! $catwiseservice->related_srvc_three !!}</td>
                     <td><strong>Related srvc name:</strong>&nbsp; {!! $catwiseservice->related_srvc_name !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Page img:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->page_img }}" height="120" width="120">
                     </td>
                      <td><strong>Page img side img:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->page_img_side_img }}" height="120" width="120">
                     </td>
                  </tr> 
                  <tr>
                     <td><strong>Our work action img-1:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->our_wrk_actn_img_one }}" height="120" width="120"> 
                  	</td>
                     <td>
                     	<strong>Our work action img-2:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->our_wrk_actn_img_two }}" height="120" width="120">
                     </td>
                     
                  </tr> 
                  <tr>
                   
                     <td><strong>Our work action img-3:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->our_wrk_actn_img_three }}" height="120" width="120"></td>
                     	<td><strong>Our work action img-4:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->our_wrk_actn_img_four }}" height="120" width="120">
                     <td>
                  </tr> 
                 
                  <tr>
                     <td><strong>Related service IMG:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->related_srvc_img }}" height="120" width="120">
                      </td>
                     	
                     <td><strong>Page sample img-1:</strong>&nbsp; <img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->page_sample_img_one }}" height="120" width="120"></td>
                     
                  </tr> 
                  <tr>
                     <td><strong>Page sample img-2:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->page_sample_img_two }}" height="120" width="120">
                     </td>
                      <td><strong>Page sample img-3:</strong>&nbsp;
                     	<img src="{{ asset('assets/admin/images/catwiseservice') }}/{{ $catwiseservice->page_sample_img_three }}" height="120" width="120">
                     </td>
                  </tr> 
                  <tr>
                     <td><strong>Order Ststus:</strong>&nbsp; 
                     	  @if($catwiseservice->publication_status == 0)
                              	Unpublished
                              @elseif($catwiseservice->publication_status == 1)
                              	Published
                              @endif
                     </td>
                     <td></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection('content')