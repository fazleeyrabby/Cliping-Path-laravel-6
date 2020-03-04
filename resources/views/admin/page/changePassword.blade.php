@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
	<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Change Password</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
   		 <form class="parsley-examples" action="{{route('admin.pass.update')}}" novalidate="" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="emailaddress">New Password</label>
                            <input class="form-control" type="text" name="n_pass"  id="emailaddress" required="" placeholder="Enter New Password" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailaddress">Change Password</label>
                            <input class="form-control" type="text" name="c_pass"  id="emailaddress" required="" placeholder="Enter Confirm Password" >
                        </div>

                    </div>


                    <div class="form-group text-right mb-0">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                            Save Change
                        </button>
                    </div>

                </form>
    </div>
   </div>
</div>
</main>
@endsection