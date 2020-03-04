@extends('layouts.adminApp')
@section('title', 'Client-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Your Profile Update</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
   		<form class="parsley-examples" action="{{route('admin.profile.update')}}" novalidate="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="emailaddress">First Name</label>
                            <input class="form-control" type="text" name="first_name" value="{{ $admin->first_name }}" id="emailaddress" required="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailaddress">Last Name</label>
                            <input class="form-control" type="text" name="last_name" value="{{ $admin->last_name }}" id="emailaddress" required="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailaddress">Nick Name</label>
                            <input class="form-control" type="text" name="name" value="{{ $admin->name }}" id="emailaddress" required="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailaddress">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ $admin->email }}" id="emailaddress" required="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailaddress">Address </label>
                            <input class="form-control" type="text" name="address" value="{{ $admin->address }}" id="emailaddress" required="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailaddress">Profile IMG</label>
                            <input class="form-control" type="file" name="profile_img" required="">   
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailaddress">Phone</label>
                            <input class="form-control" type="text" name="phone" value="{{ $admin->phone }}" id="emailaddress" required="" >
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