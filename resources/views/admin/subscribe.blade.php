@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<!-- summernote for text editor -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i> All Mail Subscriber</h1>
      </div>
   </div>
   <div class="btn-group">
      <a class="btn btn-primary btn-lg pull-right" title="Send Mail All Subscriber" data-toggle="modal" data-target="#exampleModalCenter" >Send Mail All</a>
   </div>
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Send News Letter</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="tile">
            <div class="row">

              <div class="col-md-12">
                <form method="POST" action="{{ url('admin/broadcast-mail') }}">
                   @csrf
                   <div class="form-body">
                     <div class="form-group">
                         <label>Subject</label>
                         <input type="text" name="subject" class="form-control input-lg" required="required"  value="">
                     </div>
                     <div class="form-group">
                         <label>Email Message</label>
                         <textarea id="message" class="form-control" name="messages"  required="required" rows="5" ></textarea>
                     </div>
                   </div>
                   <div class="form-actions">
                      <button type="submit" class="submit-btn btn btn-primary btn-lg btn-block login-button">Broadcast Email</button>
                   </div>
                </form>
              </div>
            </div>
          </div>
         </div>
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
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        @foreach($subscribes as $subscribe)
                        <tr>
                           <td>{{ $subscribe->email }}</td>
                           <td>
                              <div class="btn-group">
                                 <a href="{{ url('admin/subscriber-destroy',$subscribe->id) }}">
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
                  {!! $subscribes->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
         $('#message').summernote({
           placeholder: ' Name',
           tabsize: 2,
           height: 100
         });
      })
    </script>
     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable();
        } );
    </script>
@endsection
