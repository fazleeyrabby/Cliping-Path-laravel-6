@extends('layouts.admin_index')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i>  All user file info</h1>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Title</th>
                           <th>Description</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                       @foreach($fileinfoes as $fileinfo)
                        <tr>
                         
                           <td>{{ $fileinfo->id }}</td>
                           <td>{{ $fileinfo->title }}</td>
                           <td>{{ $fileinfo->description }}</td>
                           <td>
                                <div class="btn-group">
                                  <a class="btn btn-primary" href="{!! url('admin/attache/show',$fileinfo->id) !!}"><i class="fa fa-lg fa-plus"></i></a>
                                  <a class="btn btn-primary" href="{!! url('admin/attache/edit',$fileinfo->id) !!}"><i class="fa fa-lg fa-edit"></i></a>
                                  <a class="btn btn-primary" href="{!! url('attache/destroy',$fileinfo->id)!!}"><i class="fa fa-lg fa-trash"></i></a>
                                </div>

                           </td>
                          
                        </tr>
                         @endforeach
                     </tbody>

                  </table>
                   {!! $fileinfoes->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
 
{!! $fileinfoes->links() !!}
@endsection