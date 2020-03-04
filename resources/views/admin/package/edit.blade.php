@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Edit Package</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
      <div class="row">
         <div class="col-lg-6">
            	 {!! Form::open(['route' =>[ 'package.update',$package->pkg_id],'class'=>'form-horizontal','method'=>'PUT']) !!}
            	<!-- @csrf -->
            <div class="form-group">
               <label for="exampleInputEmail1">Title</label>
               <input class="form-control"  type="text" name="pkg_name" value="{{ $package->pkg_name }}" placeholder="Enter Package Name">
            </div>
            <div class="form-group">
               <label>Description</label><br>
               <textarea rows="8" cols="108" name="description" required="required">{{ $package->description }}</textarea>
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Amount</label>
               <input class="form-control"  type="number" name="amount" value="{{ $package->amount }}" placeholder="Enter amount">
            </div>
            <div class="form-group">
               <label for="exampleSelect1">Publication Status</label>
               <select class="form-control" id="" name="publication_status">
               	 <option>--Select Status--</option>
                  <option value="1" <?php if($package->publication_status == 1) echo "selected";?>>Published</option>
                  <option value="0" <?php if($package->publication_status == 0) echo "selected";?>>Unpublished</option>
               </select>
            </div>
            <button class="btn btn-primary" type="submit">Update Package</button>
        {!! Form::close() !!}
         </div>
      </div>
   </div>
</main>
@endsection