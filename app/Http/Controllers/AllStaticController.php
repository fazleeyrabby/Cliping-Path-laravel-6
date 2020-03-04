<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topsec;
use Auth;

class AllStaticController extends Controller
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
        $topsec = Topsec::first();
        return view('admin.allStatic.topSection',compact('topsec'));
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
        $obj = Topsec::first();
        $obj->top_title=$request->top_title;
        $obj->sub_title=$request->sub_title;
        $obj->color=$request->color;
        // image
        if ($request->hasFile('image')) {
            $files=$request->file('image');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/';
            $files->move($destination_path, $picture); 
            $obj->image=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' Top Section has been Updated successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
