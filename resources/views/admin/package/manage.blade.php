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
         <h1><i class="fa fa-th-list"></i>  All Package Infos</h1>
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
                           <th>Name</th>
                           <th>Description</th>
                           <th>Amount</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        @foreach($packages as $package)
                        <tr>
                           <td>{{ $package->pkg_name }}</td>
                           <td>{{ $package->description }}</td>
                           <td>{{ $package->amount }}</td>
                           <td>
                              @if($package->publication_status == 0)
                              Unpublished
                              @elseif($package->publication_status == 1)
                              Published
                              @endif
                           </td>
                           <td>
                              <div class="btn-group">
                                 <a class="btn btn-primary" href="{{ route('package.edit',$package->pkg_id) }}"><i class="fa fa-lg fa-edit"></i>
                                 </a>&nbsp;
                                 <!-- <a href=""> -->
                                 <!-- </a> -->
                              </div>
                              <form method="post" action="{!! route('package.destroy',$package->pkg_id) !!}">
                                 <input type="hidden" name="_method" value="DELETE">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <button type="submit" class="btn btn-sm bg-danger" onclick=" return check_delete_info();"/>
                                 <i class="" aria-hidden="true"></i> Delete
                              </form>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {!! $packages->links() !!}
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