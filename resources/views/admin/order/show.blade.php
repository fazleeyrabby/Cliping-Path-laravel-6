@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i>  All Order Detailes Information</h1>
      </div>
   </div>
   <div class="btn-group">
      <a class="btn btn-primary btn-lg pull-right" title="Attache File" data-toggle="modal" data-target="#exampleModalCenter" ><i class="fa fa-cloud-upload" aria-hidden="true"></i></a>
   </div>
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Attache File</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form  action="{{ route('order.update',$order->order_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
               <div class="modal-body">
                  <input type="file" class="form-control" name="update_file" accept="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed" required="required">
                  <input type="hidden" value="{{ $order->user_id }}" name="user_id">
                  <input type="hidden" value="{{ $order->order_id }}" name="order_id">
               </div>
               <div class="modal-footer">
                 
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title">Order Infos</h3>
            <div class="tile-body">
               <table class="table table-hover table-bordered" id="sampleTable">
                  <tr>
                     <td><strong>First Name:</strong> {!! $order->first_name !!}</td>
                     <td><strong>Last Name:</strong>&nbsp; {!! $order->last_name !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Email:</strong>&nbsp; {!! $order->email !!}</td>
                     <td><strong>Quantity:</strong>&nbsp; {!! $order->quantity !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Resize Imaze:</strong>&nbsp; {!! $order->resize_image !!}</td>
                     <td><strong>Image Width:</strong>&nbsp; {!! $order->image_width !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Image Height:</strong>&nbsp; {!! $order->image_height !!}</td>
                     <td><strong>Set Margin:</strong>&nbsp; {!! $order->set_margin !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Additional Comment:</strong>&nbsp; {!! $order->additional_comment !!}</td>
                     <td><strong>Created Date:</strong>&nbsp; {!! $order->created_at !!}</td>
                  </tr> <tr>
                     <td><strong>Package Name:</strong>&nbsp; {!! $order_package->pkg_name !!}</td>
                     <td><strong>Amount:</strong>&nbsp; {!! $order->amount !!}</td>
                  </tr>
                  <tr>
                     <td><strong>Order Ststus:</strong>&nbsp; {!! $order->order_status !!}</td>
                     <td></td>
                     
                  </tr>
               </table>
            </div>
            <!-- <div class="tile-footer"><a class="btn btn-primary" href="#">Link</a></div> -->
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 ">
         <div class="tile">
            <h2>Services</h2>
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                     @foreach($services as $service)                 
                     <tr>
                        <th>Service</th>
                        <td>{!! $service->title !!}</td>
                     </tr>
                     @endforeach
                     <!-- <tr>
                        <th>Action</th>
                        <td></td>
                        </tr> -->
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection('content')