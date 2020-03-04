@extends('layouts.clientApp')
@section('title', 'Client-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i> Your Transection Infos</h1>
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
	                           <th>Id</th>
	                           <th>Sender No</th>
	                           <th>Trx No</th>
	                           <th>Bank No</th>
	                           <th>Payment Type</th>
	                           <th>Status</th>
	                           <th>Amount</th>
	                        </tr>
	                     </thead>
	                    @if(count($trxs) > 0)
	                    @foreach($trxs as $trx)
		                     @if($trx->payment_type == 'paypal' || $trx->payment_type == 'bkash' || $trx->payment_type == 'rocket' || $trx->payment_type == 'bank')
			                     <tbody align="center">
			                        <tr>
			                           <td>{{ $trx->random_trx_id }}</td>
			                           <td>{{ $trx->sender_number }}</td>
			                           <td>{{ $trx->trx_id }}</td>
			                           <td>{{ $trx->bank_number }}</td>
			                           <td>{{ $trx->payment_type }}</td>
			                           <td>
			                            @if($trx->payment_status == 0)
				                              <p class="text-danger">{!! "Processing" !!}</p>
				                            @else
				                              <p class="text-success">{!! "Success" !!}</p>
				                            @endif
			                           </td>
			                           <td>{{ $trx->amount }}</td>
			                        </tr>
			                     </tbody>
		                    @endif
	                	@endforeach
	                	@else
	                	<tr>
	                		<td colspan="8"><p class="text-center">No Data Available</p></td>
	                	</tr>
	                		
	                	@endif
                  </table>
                  {!! $trxs->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection