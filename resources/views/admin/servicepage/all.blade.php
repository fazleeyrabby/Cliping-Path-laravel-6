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
         <h1><i class="fa fa-th-list"></i>  All Services</h1>
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
                           <th>Service Name</th>
                           <th>Service Page Title</th>
                           <th>Page IMG</th>
                           <th>Publication Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        @foreach($catwiseservices as $catwiseservice)
                        <tr>
                           <td>{{ $catwiseservice->title }}</td>
                           <td>{{ $catwiseservice->page_title }}</td>
                           <td>
                           	<img src="{{ asset('assets/admin/images/catwiseservice/') }}/{{ $catwiseservice->page_img }}" height="120" width="120"> 
                           </td>
                           	<td>
                              @if($catwiseservice->publication_status == 0)
                              	Unpublished
                              @elseif($catwiseservice->publication_status == 1)
                              	Published
                              @endif
                           </td>
                           <td>
                              <div class="btn-group">
                                 <a class="btn btn-primary" href="{{ route('servicepage.show',$catwiseservice->id) }}"><i class="fa fa-lg fa-plus"></i>
                                 </a>
                                 <a class="btn btn-primary" href="{{ route('servicepage.edit',$catwiseservice->id) }}"><i class="fa fa-lg fa-edit"></i>
                            		</a>
                                 <a href="{{ url('admin/servicepage/destroy',$catwiseservice->id) }}">
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
                  {!! $catwiseservices->links() !!}
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