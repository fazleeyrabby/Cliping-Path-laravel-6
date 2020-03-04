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
use Session;
use DB;
use Auth;
use Mail;
session_start();

class CheckoutController extends Controller
{
   public function create(){
   	 $packages = Package::where('publication_status',1)
                 ->orderBy('pkg_id','DESC')
                 ->limit(6)
                 ->get();  
        return view('order.package',compact('packages')); 
   }


   public function bookingPackage($id){
 
   		$services = Service::where('service.publication_status',1)
                              ->orderBy('service_id','DESC')
                              ->get();
      $package = Package::find($id);                
      $user_id = Auth::user()->id;
      return view('checkout.plcOrdr',compact('services','package'));
   }

   public function checkout(Request $request){
     		// return $data = $request->all(); 

        // validation
        $request->validate([
          'service_id' => 'required',
        ]);

        $_SESSION['sender_number'] = $request->sender_number;
        $_SESSION['trx_id'] = $request->trx_id;
        $_SESSION['bank_number'] = $request->bank_number;
        $_SESSION['amount'] = $request->amount;
        $_SESSION['payment_type'] = $request->payment_type;
        $_SESSION['first_name'] = $request->first_name;
        $_SESSION['last_name'] = $request->last_name;
        $_SESSION['quantity'] = $request->pac_quantity;
        $_SESSION['address'] = $request->address;
        $_SESSION['item_name'] = $request->item_name;
       
        // insert payment
        $pdata=array();
        $pdata['payment_type'] = $request->payment_type;;
        $pdata['payment_status']='pending';
        $payment_id = DB::table('payment')
                    ->insertGetId($pdata);
        // insert order
        $user_id = $request->user_id;
        $tran_id = $user_id.Str::random(10);

        $odata=array();
        $odata['payment_id'] = $payment_id;
        $odata['ran_order_id'] = $tran_id;
        $odata['package_id'] = $request->package_id;
        $odata['user_id'] = $user_id;
        $odata['amount'] = $request->amount;
        $odata['address'] = $request->address;
        $odata['first_name'] = $request->first_name;
        $odata['last_name'] = $request->last_name;
        $odata['email'] = $request->email;
        $odata['quantity'] = $request->quantity;
        $odata['resize_image'] = $request->resize_image;
        $odata['image_width'] = $request->image_width;
        $odata['image_height'] = $request->image_height;
        $odata['set_margin'] = $request->set_margin;
        $odata['additional_comment'] = $request->additional_comment;
        $odata['order_status'] = 'Pending';
        $odata['currency']='BDT';
        $_SESSION['created_at'] = date("Y/m/d");
        // attache file
        if ($request->hasFile('attache_zip')) {
            $file = $request->file('attache_zip');
            $filename=$file->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/frontend_asset/upfile/';
            $file->move($destination_path, $picture); 
            $odata['attache_zip'] = $picture;
        }
         // store session
        Session::put('email',$odata['email']);
        // Session::put('tran_id',$odata['ran_order_id'];
        Session::put('first_name',$odata['first_name']);
        Session::put('last_name',$odata['last_name']);
        $_SESSION['tran_id'] = $odata['ran_order_id'];

        $order_id = DB::table('order')
                    ->insertGetId($odata);
        $_SESSION['order_id'] = $order_id;
        $_SESSION['package_id'] = $odata['package_id'];
         // insert orderservice
        $services = $request->service_id;
        foreach ($services as $value) {
           $new_order_service = new Orderservice();
           $new_order_service->order_id = $order_id;
           $new_order_service->service_id = $value;
           $new_order_service->save();
        }
        
        if ($pdata['payment_type'] == 'paypal' || $pdata['payment_type'] = 'bkash' || $pdata['payment_type'] = 'rocket' || $pdata['bank']) 
        {
            return Redirect('home/pay');
        }
   }
}
