@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Create Package</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
      <div class="row">
         <div class="col-lg-6">
            <form action="{{ route('package.store') }}" method="post">
            	@csrf
            <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input class="form-control" name="pkg_name" id="" type="text"  placeholder="Enter Package Name" required="required">
            </div>
            <div class="form-group">
               <label>Description</label><br>
               <textarea rows="8" cols="108" name="description" required="required"></textarea>
            </div>
             <div class="form-group">
               <label >Price</label>
               <input class="form-control" name="amount" id="" type="number"  placeholder="Enter Package Price" required="required">
            </div>
            <div class="form-group">
               <label for="">Publication Status</label>
               <select class="form-control" name="publication_status" required="required">
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