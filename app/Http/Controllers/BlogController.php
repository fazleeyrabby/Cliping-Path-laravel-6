<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // return $top_section = $request->all();
        $obj = new Blog;
        $obj->name=$request->name;
        $obj->blog_title=$request->blog_title;
        $obj->description=$request->description;
        $obj->publication_status=$request->publication_status;
        // image
        if ($request->hasFile('blog_img')) {
            $files=$request->file('blog_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/blog/';
            $files->move($destination_path, $picture); 
            $obj->blog_img=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' Blog has been save successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $blog = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $data=Blog::findOrFail($id);
        // $data->category=$request->category;
        // $data->description=$request->description;

        if ($request->hasFile('blog_img')) {
            $files=$request->file('blog_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/blog/';
            $files->move($destination_path, $picture); 
            $data->blog_img=$picture;
        }
        $input['blog_img'] = $data->blog_img;
        $data->update($input);
        return redirect('admin/blog/create')->with('success', 'Your info has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Package::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your Blog infos has been deleted successfully');
        return redirect()->back();
    }
}
