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
         <h1><i class="fa fa-th-list"></i>  All Order</h1>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="example">
                     <thead align="center">
                        <tr>
                           <th>Order Id</th>
                           <th>Package Name</th>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        @foreach($orders as $order)
                        <tr>
                           <td>{{ $order->ran_order_id }}</td>
                           <td>{{ $order->pkg_name }}</td>
                           <td>{{ $order->first_name.$order->last_name }}</td>
                           <td>{{ $order->last_name }}</td>
                           <td>{{ $order->email }}</td>
                           <td>
                              <div class="btn-group">
                                 <a class="btn btn-primary" href="{{ route('order.show',$order->order_id) }}"><i class="fa fa-lg fa-plus"></i>
                                 </a>
                                 <a href="../assets/frontend_asset/upfile/{{ $order->attache_zip }}" download="{{ $order->attache_zip }}"><button type="submit" style="" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i></button>
                                 </a>
                                <!--  <a class="btn btn-primary" href="{!! url('order/file-up',$order->order_id) !!}"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                 </a> -->
                                 <a href="{{ route('order.destroy',$order->order_id) }}">
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
                  {!! $orders->links() !!}
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
            $('#example').DataTable();
        } );
    </script>
@endsection