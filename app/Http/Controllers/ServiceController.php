<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('service_id','DESC')->paginate(15);
        return view('admin.service.manage',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $input=$request->all();
        $service=Service::create($input);
        // Session::flash('success','Your info has been added successfully');
        // return redirect()->back();    
        return back()->with('success','Service added successfully'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           // $package=Package::join('category','package.category_id','=','category.category_id')
        //     ->select('Package.*', 'category.category_name')
        //     ->get();

        //     $package = Package::findOrFail($id);
        // return view('admin.package.single',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      
        $service = Service::findOrFail($id);
        return view('admin.service.edit',compact('service'));
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
        $data=Service::findOrFail($id);
        $data->update($input);
        Session::flash('success', 'Your service infos has been updated successfully');
        return redirect('/admin/service/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Service::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your service infos has been deleted successfully');
        return redirect()->back();
    }
}
