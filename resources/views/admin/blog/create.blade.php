@extends('layouts.adminApp')
@section('title', 'Admin-Dashboard')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Create Blog</h1>
      </div>
   </div>
 <!-- resource data -->
  <?php
    $blogs = App\Blog::get();
  ?>
  <div class="row">
      <div class="col-md-12">
         <div class="tile">
            <div class="tile-body">
               <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                     <thead align="center">
                        <tr>
                           <th>Name</th>
                           <th>Blog Title</th>
                           <th>Description</th>
                           <th>Image</th>
                           <th>Publication Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                      @foreach($blogs as $blog)
                        <tr>
                           <td style="text-align: justify;">{!! $blog->name !!}</td>
                           <td style="text-align: justify;">{!! $blog->blog_title !!}</td>
                           <td style="text-align: justify;">{!! $blog->description !!}</td>
                           <td>
                            <img src="/assets/admin/images/blog/{{ $blog->blog_img }}" class="img-responsive" height="100" width="100">
                          </td>
                           <td>
                            @if($blog->publication_status == 0)
                              Unpublished
                            @elseif($blog->publication_status == 1)
                              Published
                            @endif
                           </td>
                           
                           <td>
                              <div class="btn-group">
                                <a class="btn btn-primary" href="{!! route('blog.edit',$blog->id) !!}"><i class="fa fa-lg fa-edit"></i>
                                </a>
                                <a href="{!! route('blog.destroy',$blog->id) !!}">
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

   <div class="row">
   <div class="col-md-12">
   <div class="tile">
      <div class="row">
         <div class="col-lg-6">
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            	@csrf
            <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input class="form-control" name="name" id="" type="text"  placeholder="Enter blog Name" required="required">
            </div>
             <div class="form-group">
               <label >Blog Title</label>
               <input class="form-control" name="blog_title" id="" type="text"  placeholder="Enter blog title" required="required">
            </div>
             <div class="form-group">
               <label >Img</label>
               <input class="form-control" name="blog_img" id="" type="file"  placeholder="" required="required">
            </div>
            <div class="form-group">
               <label>Description</label><br>
               <textarea rows="8" cols="108" name="description" required="required"></textarea>
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