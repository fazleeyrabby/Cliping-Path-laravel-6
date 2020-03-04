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
         <h1><i class="fa fa-th-list"></i>  All User Infos</h1>
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
                           <th>Email</th>
                           <th>Company</th>
                           <th>Country</th>
                           <th>Address</th>
                           <th>phone</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                       @foreach($users as $user)
                        <tr>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                           <td>{{ $user->company }}</td>
                           <td>{{ $user->country }}</td>
                           <td>{{ $user->address }}</td>
                           <td>{{ $user->phone }}</td>
                           <td>
                           		<div class="btn-group">
                            		<a class="btn btn-primary" href="{{ route('user.show',$user->id) }}"><i class="fa fa-lg fa-plus"></i>
                            		</a>
                            		<a href="{{ route('user.destroy',$user->id) }}">
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
                   {!! $users->links() !!}
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