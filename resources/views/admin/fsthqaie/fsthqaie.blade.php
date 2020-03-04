@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change FAST, HIGH-QUALITY AND AFFORDABLE IMAGE-EDITING
          SERVICES FOR ECOMMERCE AND PRODUCT PHOTOGRAPHY</h1>
      </div>
   </div>
  <!-- resource data -->
  <?php
    $fsthqaies = App\Fsthqaie::get();
  ?>
  <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                     <thead align="center">
                        <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Image</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                      @foreach($fsthqaies as $fsthqaie)
                        <tr>
                           <td>{!! $fsthqaie->id !!}</td>
                           <td>{!! $fsthqaie->category !!}</td>
                           <td>{!! $fsthqaie->description !!}</td>
                           <td>
                            <img src="/assets/admin/images/fsthqaie/{{ $fsthqaie->image }}" class="img-responsive" height="100" width="100">
                           
                          </td>
                           <td>
                              <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('fsthqaie.edit',$fsthqaie->id) }}"><i class="fa fa-lg fa-edit"></i>
                                </a>
                                <a href="{{ url('/admin/fsthqaie/destroy',$fsthqaie->id) }}">
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
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- insert data -->
   <div class="row">
   <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              	<form action="{{ route('fsthqaie.store') }}" class="row" method="post" enctype="multipart/form-data">
            	   @csrf
                <div class="form-group col-md-6">
	                <label class="col-md-3 control-label"><strong>Name </strong></label><br>
	               	<textarea id="" cols="" rows="" class="form-control" name="category"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-3 control-label"><strong>Description</strong></label><br>
                  <textarea id="" class="form-control" name="description"></textarea>
                </div> 
                <div class="form-group col-md-6">
                  <label class="control-label">Image</label>
                  <input class="form-control" name="image" type="file" placeholder="Enter your Sub title" required="required">
                </div> 
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" type="submit"></i>Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
   </div>
   </div>
</main>
@endsection

    



