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
use App\Tranection;
use Session;
use DB;
use Auth;
use Mail;
session_start();

class PaymentController extends Controller
{
    public function pay(Request $request){
    	// get data from session
    	$tran_id = $_SESSION['tran_id']; 
    	$order_id = $_SESSION['order_id']; 
    	$package_id = $_SESSION['package_id']; 


    	$_SESSION['customer_email'] = Auth::user()->email;

    	$_SESSION['order'] = Order::join('package','order.package_id','=','package.pkg_id')
            ->select('order.*', 'package.pkg_name')
            ->where('pkg_id',$package_id)
            ->first();

    	$order_detials = DB::table('order')
                            ->where('ran_order_id', $tran_id)
                            ->select('ran_order_id', 'order_status','currency','amount')->first();

        if($order_detials->order_status=='Pending') {
	        $data = [
                    'first_name' => $_SESSION['order']->first_name,
                    'last_name' => $_SESSION['order']->last_name,
                    'email' => $_SESSION['order']->email,
                    'tran_id' => $_SESSION['order']->ran_order_id,
                    'amount' => $_SESSION['order']->amount,
                    'package_name' => $_SESSION['order']->pkg_name,
                    'payment_status' => $_SESSION['order']->order_status,
                    'created_at' => $_SESSION['order']->created_at,
                ];

	    	// Mail sent
	        Mail::send('mail.mail', $data, function($message) use ($data) {
	                    $message->from('fazleyrabbicse@gmail.com', 'Clipping Path');
	                    $message->subject('Your quote request has been received');
	                    $message->to($_SESSION['customer_email']);
	        });

            // insert transection table

            $sender_number = $_SESSION['sender_number'];
            $trx_id = $_SESSION['trx_id'];
            $bank_number = $_SESSION['bank_number'];
            $amount = $_SESSION['amount'];
            $payment_type = $_SESSION['payment_type'];
            $user_id = Auth::user()->id;

            $tdata=array();
            $tdata['sender_number'] = $sender_number;
            $tdata['trx_id'] = $trx_id;
            $tdata['bank_number'] = $bank_number;
            $tdata['amount'] = $amount;
            $tdata['payment_type'] = $payment_type;
            $tdata['user_id'] = $user_id;
            $tdata['payment_status'] = 0;
            $trx_id = $user_id.Str::random(10);
            $tdata['random_trx_id'] = $trx_id;

            //insert transection table
            $order_id = DB::table('tranection')
                    ->insertGetId($tdata);

            $update_product = DB::table('order')
                            ->where('ran_order_id', $tran_id)
                            ->update(['order_status' => 'Processing']);
            
            if($tdata['payment_type'] == 'paypal')
            {
                return view('htmlWebsiteStandardPayment');
            } 
            else 
            {
                return back()->with('success','Your Payment process successfully'); 
            }

	    }
	}
}