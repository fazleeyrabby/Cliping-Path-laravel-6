@extends('layouts.clientApp')
@section('title', 'Admin-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i>  All Order</h1>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                     <thead align="center">
                        <tr>
                           <th>Order Id</th>
                           <th>Package Name</th>
                           <th>Currency</th>
                           <th>Amount</th>
                           <th>Status</th>
                          
                        </tr>
                     </thead>
                     <tbody align="center">
                        @foreach($orders as $order)
                        <tr>
                           <td>{{ $order->ran_order_id }}</td>
                           <td>{{ $order->pkg_name }}</td>
                           <td>{{ $order->currency }}</td>
                           <td>{{ $order->amount }}</td>
                           <td>
                              @if($order->order_status == 0)
                                 <p class="text-danger">{!! "Processing" !!}</p>
                              @else
                                 <p class="text-success">{!! "success" !!}</p>
                              @endif
                           </td>
                           
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {!! $orders->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection