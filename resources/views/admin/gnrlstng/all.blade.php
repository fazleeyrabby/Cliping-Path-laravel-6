@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
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
                           <th>Id</th>
                           <th>Title</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        @foreach($gnrlstngs as $gnrlstng)
                        <tr>
                           <td>{{ $gnrlstng->id }}</td>
                           <td>{{ $gnrlstng->title }}</td>
                           <td>
                              @if($gnrlstng->status == 0)
                              Unpublished
                              @elseif($gnrlstng->status == 1)
                              Published
                              @endif
                           </td>
                           <td>
                              <div class="btn-group">
                                 <a class="btn btn-primary" href="{{ route('gnrlstng.edit',$gnrlstng->id) }}"><i class="fa fa-lg fa-edit"></i>
                                 </a>&nbsp;
                                 <!-- <a href=""> -->
                                 <!-- </a> -->
                              </div>
                              <form method="post" action="{!! route('gnrlstng.destroy',$gnrlstng->id) !!}">
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
                  {!! $gnrlstngs->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection