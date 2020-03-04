@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Create Category</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
      <div class="row">
         <div class="col-lg-6">
            <form action="{{ route('service.store') }}" method="post">
            	@csrf
            <div class="form-group">
               <label for="exampleInputEmail1">Title</label>
               <input class="form-control" id="exampleInputEmail1" type="ematextil" aria-describedby="emailHelp" name="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
               <label for="exampleSelect1">Publication Status</label>
               <select class="form-control" id="exampleSelect1" name="publication_status">
                  <option>===Please Select===</option>
                  <option value="1">Published</option>
                  <option value="0">Unpublished</option>
               </select>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
         </div>
      </div>
   </div>
</main>
@endsection