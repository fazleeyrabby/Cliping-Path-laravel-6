<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Topsec;
Use App\Orderquote;
Use App\Service;
Use App\Catwiseservice;
use Str;
use Mail;
use Auth;
use App\Admin;
class FrontendController extends Controller
{   
    
    public function services()
    {
    	return view('pages.services');
    } 
    public function single_service_page($id)
    {
        $catwiseservice = Catwiseservice::where('service_id',$id)->first();
        return view('pages.servicepage',compact('catwiseservice'));
    }
    public function price()
    {
    	return view('pages.price');
    }

    public function help()
    {
    	return view('pages.help');
    } 

    public function about()
    {
        return view('pages.about');
    }

    public function get_quote(Request $request)
    {
        $se = $request->service_id;
        $qty = $request->qnty;
    	return view('pages.getquote',compact('se','qty'));
    }

    public function get_free_quote(Request $request)
    {
        $obj = new Orderquote;
        $obj->quantity=$request->quantity;
        $obj->service_id=$request->service_id;
        $obj->email=$request->email;
        $obj->order_id = Str::random(10);
        $obj->save();
        return redirect()->back()->with('success', 'Your free quote sent successfully');

    }

    public function user_free_quote_order(Request $request)
    {  
            
        $data = [
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'service' => $request->service,
                    'set_margin' => $request->set_margin,
                    'qty' => $request->qty,
                    'img_resize' => $request->img_resize,
                    'comment' => $request->comment,
                ];

        // Mail sent user
        Mail::send('mail.quotemail', $data, function($message) use ($data) {
                    $message->from('fazleyrabbicse@gmail.com', 'Clipping Path');
                    $message->subject('Your quote request has been received');
                    $message->to($data['email']);
        }); 

        // admin
        $admin = Admin::first();
        $data['admin_email'] = $admin->email;
        Mail::send('mail.quotemail', $data, function($message) use ($data) {
                    $message->from('fazleyrabbicse@gmail.com', 'Clipping Path');
                    $message->subject('Your quote request has been received');
                    $message->to($data['admin_email']);
        });

        return redirect()->back()->with('success', 'Your free quote sent successfully');

    }



    public function term_condition()
    {
        return view('pages.trmcndtn');
    }

    public function privacy_policy()
    {
        return view('pages.privacypolicy');
    }

    public function blog()
    {
        return view('pages.blog');
    }

   

}
