<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Gnrlstng;
use DB; 
use Session;
session_start();

class GnrlStngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $gnrlstngs = Gnrlstng::orderBy('id','DESC')->paginate(15);
       return view('admin.gnrlstng.all',compact('gnrlstngs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gnrlstng = Gnrlstng::orderBy('id','DESC')->first();
        return view('admin.gnrlstng.create',compact('gnrlstng'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $data = $request->all();
        $obj = Gnrlstng::first();
        // $obj = new Gnrlstng;

        $obj->name=$request->name;
        $obj->color=$request->color;
        $obj->navbar_color=$request->navbar_color;
        $obj->header_color=$request->header_color;
        $obj->footer_color=$request->footer_color;
        $obj->address=$request->address;
        $obj->mobile=$request->mobile;
        $obj->email=$request->email;
        $obj->currency=$request->currency;
        $obj->top_text=$request->top_text;
        $obj->facebook=$request->facebook;
        $obj->tweeter=$request->tweeter;
        $obj->google_plus=$request->google_plus;
        $obj->linkin=$request->linkin;
        $obj->youtube=$request->youtube;
        $obj->footer_text=$request->footer_text;
        $obj->fotr_btm_txt=$request->fotr_btm_txt;
        // logo
        if ($request->hasFile('logo')) {
            $files=$request->file('logo');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/logo/';
            $files->move($destination_path, $picture); 
            $obj->logo=$picture;
        }
        
        // favicon
        if ($request->hasFile('favicon')) {
            $files=$request->file('favicon');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/favicon/';
            $files->move($destination_path, $picture); 
            $obj->favicon=$picture;    
        }
        $obj->save();
        return redirect()->back()->with('success', ' General setting has been added successfully');
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
        $input=$request->all();
        $data=Gnrlstng::findOrFail($id);
        $data->update($input);
        Session::flash('success', 'Your package has been updated successfully');
        return redirect('admin/package');
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
