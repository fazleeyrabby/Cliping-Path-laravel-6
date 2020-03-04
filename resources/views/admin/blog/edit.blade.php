@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Edit Blog</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
      <div class="row">
         <div class="col-lg-6">
          
            	 {!! Form::open(['route' =>[ 'blog.update',$blog->id],'class'=>'form-horizontal','method'=>'PUT','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input class="form-control" name="name" id="" value="{{ $blog->name }}" type="text"  placeholder="Enter blog Name" >
            </div>
             <div class="form-group">
               <label >Blog Title</label>
               <input class="form-control" name="blog_title" value="{{ $blog->blog_title }}" id="" type="text"  placeholder="Enter blog title" >
            </div>
            <div class="form-group">
               <label >Img</label>
               <input class="form-control" name="blog_img" id="" type="file"  placeholder="" >
            </div>
            <div class="form-group">
               <label>Description</label><br>
               <textarea rows="8" cols="108" name="description" >{{ $blog->description }}</textarea>
            </div>
            
            <div class="form-group">
               <label for="">Publication Status</label>
               <select class="form-control" name="publication_status" required="required">
                  <option>===Please Select===</option>
                   <option value="1" <?php if($blog->publication_status == 1) echo "selected";?>>Published</option>
                  <option value="0" <?php if($blog->publication_status == 0) echo "selected";?>>Unpublished</option>
               </select>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
         {!! Form::close() !!}
         </div>
      </div>
   </div>
</main>
@endsection