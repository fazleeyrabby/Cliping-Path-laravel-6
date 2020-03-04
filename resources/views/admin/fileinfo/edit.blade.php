@extends('layouts.admin_index')
@section('content')
		<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Info</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form method="post" action="{{ url('admin/attache/update',$attachefile->id) }}" enctype="multipart/form-data">
              	@csrf
                <div class="form-group">
                  <label class="control-label">Title</label>
                  <input class="form-control" type="text" value="{{ $attachefile->title }}" name="title" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Address</label>
                  <textarea class="form-control"  name="description" rows="4" placeholder="Enter your address">{{$attachefile->description}} </textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Attache File</label>
                  <input type="file" name="atach_file[]"  required="required" multiple>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>

              &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
             </form>
          </div>
        </div>
      </div>
    </main>
@endsection('content')