<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fsthqaie;
use File;

class FsthqaieController extends Controller
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
        return view('admin.fsthqaie.fsthqaie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $input = $request->all();

        $obj = new Fsthqaie;
        $obj->category=$request->category;
        $obj->description=$request->description;
        // image
        if ($request->hasFile('image')) {
            $files=$request->file('image');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/fsthqaie';
            $files->move($destination_path, $picture); 
            $obj->image=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' FAST, HIGH-QUALITY AND AFFORDABLE IMAGE-EDITING.... has been save successfully');
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
        $fsthqaie = Fsthqaie::findOrFail($id);
        return view('admin.fsthqaie.edit',compact('fsthqaie'));
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
         // return $input = $request->all();
        $input=$request->all();
        $data=Fsthqaie::findOrFail($id);
        $data->category=$request->category;
        $data->description=$request->description;

        if ($request->hasFile('image')) {
            $files=$request->file('image');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/fsthqaie/';
            $files->move($destination_path, $picture); 
            $data->image=$picture;
        }
        $input['image'] = $data->image;
        $data->update($input);
        return redirect('admin/fsthqaie/create')->with('success', 'Your info has been updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Fsthqaie::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success','Your infos has been deleted successfully');
    }
}
