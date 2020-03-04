@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
@endsection

<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i>  All Transection Infos</h1>
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
                           <th>Transection Id</th>
                           <th>Sender No</th>
                           <th>Trx No</th>
                           <th>Bank No</th>
                           <th>Payment Type</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                       @foreach($transections as $trans)
                        <tr>
                           <td>{{ $trans->random_trx_id }}</td>
                           <td>{{ $trans->sender_number }}</td>
                           <td>{{ $trans->trx_id }}</td>
                           <td>{{ $trans->bank_number }}</td>
                           <td>{{ $trans->payment_type }}</td>
                           <td>{{ $trans->amount }}</td>
                           <td>
                            @if($trans->payment_status == 0)
                              <p class="text-danger">{!! "Processing" !!}</p>
                            @else
                              <p class="text-success">{!! "Success" !!}</p>
                            @endif
                          </td>
                           <td>
                           		<div class="btn-group">
                              @if($trans->payment_status == 0)
                                  <a class="btn btn-danger" href="{{ url('admin/trx-pay-status-active',$trans->id) }}" title="Payment Success"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                  </a>
                              @else
                                  <a class="btn btn-success" href="{{ url('admin/trx-pay-status-unactive',$trans->id) }}" title="Processing"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                              @endif
                            		<a href="{{ url('admin/trx-destroy',$trans->id) }}">
                              			<input type="hidden" name="_method" value="DELETE">
                              			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                              			<button type="submit" class="btn btn-sm bg-danger" onclick=" return check_delete_info();"/>
                              			<i class="" aria-hidden="true"></i> Delete
                              	</a>
                        		</div>
                           </td>
                        </tr>
                         @endforeach
                     </tbody>
                  </table>
                   {!! $transections->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection
@section('js')

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable();
        } );
    </script>
@endsection