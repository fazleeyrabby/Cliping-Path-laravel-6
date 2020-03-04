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
         <h1><i class="fa fa-th-list"></i>  Quote Order</h1>
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
                           <th>Order id</th>
                           <th>Quantity</th>
                           <th>Service Title</th>
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        @foreach($orderquotes as $orderquote)
                        <tr>
                           <td>{{ $orderquote->order_id }}</td>
                           <td>{{ $orderquote->quantity }}</td>
                           <td>{{ $orderquote->title }}</td>
                           <td>{{ $orderquote->email }}</td>
                           <td>
                              <div class="btn-group">
                                 <a href="{{ url('admin/order-quote-destroy',$orderquote->id) }}">
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
                  {!! $orderquotes->links() !!}
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