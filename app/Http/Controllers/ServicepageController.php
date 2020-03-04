<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catwiseservice;

class ServicepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catwiseservices = Catwiseservice::join('service','catwiseservice.service_id','=','service.service_id')->select('catwiseservice.*','service.title')->orderBy('id','desc');
        $catwiseservices = $catwiseservices->paginate(15);
       return view('admin.servicepage.all',compact('catwiseservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicepage.create');
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

        $obj = new Catwiseservice;
        $obj->service_id=$request->service_id;
        $obj->page_title=$request->page_title;
        $obj->page_img_text=$request->page_img_text;
        $obj->page_img_under_des=$request->page_img_under_des;
        $obj->try_our_service_under_des=$request->try_our_service_under_des;
        $obj->why_cpbd_under_des=$request->why_cpbd_under_des;
        $obj->page_content_des=$request->page_content_des;
        $obj->related_srvc_one=$request->related_srvc_one;
        $obj->related_srvc_two=$request->related_srvc_two;
        $obj->related_srvc_three=$request->related_srvc_three;
        $obj->related_srvc_name=$request->related_srvc_name;
        $obj->related_srvc_des=$request->related_srvc_des;  
        $obj->publication_status=$request->publication_status;  

        if ($request->hasFile('page_img')) {
            $files=$request->file('page_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->page_img=$picture;
        }
        if ($request->hasFile('page_img_side_img')) {
            $files=$request->file('page_img_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->page_img_side_img=$picture;
        }
        if ($request->hasFile('our_wrk_actn_img_one')) {
            $files=$request->file('our_wrk_actn_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->our_wrk_actn_img_one=$picture;
        }
        if ($request->hasFile('our_wrk_actn_img_two')) {
            $files=$request->file('our_wrk_actn_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->our_wrk_actn_img_two=$picture;
        }
        if ($request->hasFile('our_wrk_actn_img_three')) {
            $files=$request->file('our_wrk_actn_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->our_wrk_actn_img_three=$picture;
        } 
        if ($request->hasFile('our_wrk_actn_img_four')) {
            $files=$request->file('our_wrk_actn_img_four');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->our_wrk_actn_img_four=$picture;
        }
        if ($request->hasFile('related_srvc_img')) {
            $files=$request->file('related_srvc_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->related_srvc_img=$picture;
        }

        if ($request->hasFile('page_sample_img_one')) {
            $files=$request->file('page_sample_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->page_sample_img_one=$picture;
        }  

        if ($request->hasFile('page_sample_img_two')) {
            $files=$request->file('page_sample_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->page_sample_img_two=$picture;
        } 

        if ($request->hasFile('page_sample_img_three')) {
            $files=$request->file('page_sample_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $obj->page_sample_img_three=$picture;
        }

        $obj->save();
        return redirect()->back()->with('success', ' service has been save successfully'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $catwiseservice = Catwiseservice::findOrFail($id);
        return view('admin.servicepage.single',compact('catwiseservice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catwiseservice = Catwiseservice::findOrFail($id);
        return view('admin.servicepage.edit',compact('catwiseservice'));
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
        // $input=$request->all();
         // $data=Catwiseservice::where('id', $request->servicepage_id)->first();
        $data=Catwiseservice::findOrFail($id);
       
        $data['service_id'] = $request->service_id;
        $data['page_title'] = $request->page_title;
        $data['page_img_text'] = $request->page_img_text;
        $data['page_img_under_des'] = $request->page_img_under_des;
        $data['try_our_service_under_des'] = $request->try_our_service_under_des;
        $data['why_cpbd_under_des'] = $request->why_cpbd_under_des;
        $data['page_content_des'] = $request->page_content_des;
        $data['related_srvc_one'] = $request->related_srvc_one;
        $data['related_srvc_two'] = $request->related_srvc_two;
        $data['related_srvc_three'] = $request->related_srvc_three;
        $data['related_srvc_name'] = $request->related_srvc_name;
        $data['related_srvc_des'] = $request->related_srvc_des;
        $data['publication_status'] = $request->publication_status;


        if ($request->hasFile('page_img')) {
            $files=$request->file('page_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->page_img=$picture;
        }
        $input['page_img'] = $data->page_img;

        if ($request->hasFile('page_img_side_img')) {
            $files=$request->file('page_img_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->page_img_side_img=$picture;
        }
        $input['page_img_side_img'] = $data->page_img_side_img;

        if ($request->hasFile('our_wrk_actn_img_one')) {
            $files=$request->file('our_wrk_actn_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->our_wrk_actn_img_one=$picture;
        }
        $input['our_wrk_actn_img_one'] = $data->our_wrk_actn_img_one;

        if ($request->hasFile('our_wrk_actn_img_two')) {
            $files=$request->file('our_wrk_actn_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->our_wrk_actn_img_two=$picture;
        }
        $input['our_wrk_actn_img_two'] = $data->our_wrk_actn_img_two;

        if ($request->hasFile('our_wrk_actn_img_three')) {
            $files=$request->file('our_wrk_actn_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->our_wrk_actn_img_three=$picture;
        }
        $input['our_wrk_actn_img_three'] = $data->our_wrk_actn_img_three;

        if ($request->hasFile('our_wrk_actn_img_four')) {
            $files=$request->file('our_wrk_actn_img_four');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->our_wrk_actn_img_four=$picture;
        }
        $input['our_wrk_actn_img_four'] = $data->our_wrk_actn_img_four;

        if ($request->hasFile('related_srvc_img')) {
            $files=$request->file('related_srvc_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->related_srvc_img=$picture;
        }
        $input['related_srvc_img'] = $data->related_srvc_img;

        if ($request->hasFile('page_sample_img_one')) {
            $files=$request->file('page_sample_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->page_sample_img_one=$picture;
        }
        $input['page_sample_img_one'] = $data->page_sample_img_one;

        if ($request->hasFile('page_sample_img_two')) {
            $files=$request->file('page_sample_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->page_sample_img_two=$picture;
        }
        $input['page_sample_img_two'] = $data->page_sample_img_two;

        if ($request->hasFile('page_sample_img_three')) {
            $files=$request->file('page_sample_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/catwiseservice/';
            $files->move($destination_path, $picture); 
            $data->page_sample_img_three=$picture;
        }
        $input['page_sample_img_three'] = $data->page_sample_img_three;

        $data->update($input);
       return redirect('/admin/servicepage')->with('success', ' service has been Update successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Catwiseservice::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', ' Your info has been delete successfully'); 
    }
}
