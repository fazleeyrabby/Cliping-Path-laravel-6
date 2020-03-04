<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File;
use Illuminate\Support\Str;
use App\Orderservice;
use App\Service;
use App\Order;
use App\Deliveryorder;
use App\Package;
use App\Orderquote;
use Session;
use DB;
use Auth;
use Mail;
session_start();



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        Order::where('status',0)->update(['status'=>1]);
        $orders = Order::join('package','order.package_id','=','package.pkg_id')
                        ->select('order.*', 'package.pkg_name')
                        ->orderBy('order_id','DESC')->paginate(15);
        return view('admin.order.manage',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $services = Service::where('service.publication_status',1)
        //                       ->orderBy('service_id','DESC')
        //                       ->get();
        // return view('order.create',compact('services'));

        // $packages = Package::where('publication_status',1)
        //          ->orderBy('pkg_id','DESC')
        //          ->limit(6)
        //          ->get();  
        // return view('order.package',compact('packages')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        // validation
        $request->validate([
            'service_id' => 'required',
        ]);
        // create obj
        $obj = new Order;
        $obj->user_id = $request->user_id;
        $obj->first_name = $request->first_name;
        $obj->last_name = $request->last_name;
        $obj->email = $request->email;
        $obj->quantity = $request->quantity;
        $obj->resize_image = $request->resize_image;
        $obj->image_width = $request->image_width;
        $obj->image_height = $request->image_height;
        $obj->set_margin = $request->set_margin;
        $obj->additional_comment = $request->additional_comment;
        $_SESSION['customer_email'] = Auth::user()->email;

        // attache file
        if ($request->hasFile('attache_zip')) {
            $file = $request->file('attache_zip');
            $filename=$file->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/frontend_asset/upfile/';
            $file->move($destination_path, $picture); 
            $obj->attache_zip = $picture;
        }
        // import array
        $data=array();
        $data['user_id']=$obj->user_id;
        $data['first_name']=$obj->first_name;
        $data['last_name']=$obj->last_name;
        $data['email']=$obj->email;
        $data['quantity']=$obj->quantity;
        $data['resize_image']=$obj->resize_image;
        $data['image_width']=$obj->image_width;
        $data['image_height']=$obj->image_height;
        $data['attache_zip']=$obj->attache_zip;
        $data['set_margin']=$obj->set_margin;
        $data['additional_comment']=$obj->additional_comment;
        $data['ran_order_id'] = $data['user_id'].Str::random(10);
        $data['created_at'] = date("Y/m/d");
        // store session
        Session::put('email',$data['email']);
        Session::put('first_name',$data['first_name']);
        Session::put('last_name',$data['last_name']);
        // store order
        $order_id=DB::table('order')
                        ->insertGetId($data);
        // store orderservice
        $services = $request->service_id;
        foreach ($services as $value) {
           $new_order_service = new Orderservice();
           $new_order_service->order_id = $order_id;
           $new_order_service->service_id = $value;
           $new_order_service->save();
        }
        // Mail sent
        Mail::send('mail.mail', $data, function($message) use ($data) {
                    $message->from('fazleyrabbicse@gmail.com', 'Clipping Path');
                    $message->subject('Your quote request has been received');
                    $message->to($_SESSION['customer_email']);
                });

        // Session::flash('success','Your info has been submitted successfully');
        // return redirect()->back();
        // place-order
        return redirect('/home/place-order'); 
        
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $order = Order::findOrFail($id);
                    
        $services = Orderservice::join('service','orderservice.service_id','=','service.service_id')
                    ->select('orderservice.*', 'service.title')
                    ->where('orderservice.order_id',$id)
                    ->get();

        $order_package = Order::join('package','order.package_id','=','package.pkg_id')
                            ->select('order.*','package.pkg_name')
                            ->where('order.order_id',$id)
                            ->first();  
        return view('admin.order.show',compact('services','order','order_package'));
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
       $obj = new Deliveryorder;
       $obj->order_id = $request->order_id;
       $obj->user_id = $request->user_id;
       if ($request->hasFile('update_file')) {
            $file = $request->file('update_file');
            $filename=$file->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/updatefile/';
            $file->move($destination_path, $picture); 
            $obj->update_file = $picture;
            $obj->save();
            Session::flash('success','Your file has been Updated successfully');
        return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Order::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Your order infos has been deleted successfully');
        return redirect()->back();
    }


    public function order_quote()
    {
        Orderquote::where('status',0)->update(['status'=>1]);
        $orderquotes = Orderquote::join('service','orderquote.service_id','=','service.service_id')
                    ->select('orderquote.*', 'service.title')
                    ->orderBy('orderquote.id','desc')
                    ->paginate(15);
        return view('admin.orderquote.orderquote',compact('orderquotes'));
    } 

    public function order_quote_destroy($id)
    {
        $data=Orderquote::findOrFail($id);
        $data->delete($data);
        Session::flash('success', 'Order Quote infos has been deleted successfully');
        return redirect()->back();
    }
}
