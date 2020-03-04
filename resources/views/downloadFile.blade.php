@extends('layouts.clientApp')
@section('title', 'Client-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i>  All Download File</h1>
      </div>
   </div>
   @if(Session::has('success'))
   <div class="alert alert-success " role="alert">
      <h2 style="text-align: center;"><b>{{ Session::get('success') }}</b></h2>
   </div>
   @endif
   <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                     <thead align="center">
                        <tr>
                           <th>Order Id</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                     	@foreach($deliveryorders as $deliveryorder)
                     	<?php
                     		$order_data = App\Order::where('order_id',$deliveryorder->order_id)->first();
                     	?>
                        <tr>
                           <td>{{ $deliveryorder->ran_order_id }}</td>
                           <td>
                              <div class="btn-group">
                                 <a href="../assets/admin/updatefile/{{ $deliveryorder->update_file }}" download="{{ $deliveryorder->update_file }}" title="Download File"><button type="submit" style="" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i></button>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
                {!! $deliveryorders->links() !!}
            </div>
         </div>
      </div>
   </div>
</main>
@endsection