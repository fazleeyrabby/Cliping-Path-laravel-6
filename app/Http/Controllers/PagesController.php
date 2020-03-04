<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tranection;
use App\Order;
use App\About;
use App\Termcondition;
use App\Privacypolicy;
use App\Getintouch;
use App\Subscribe;
use App\Servicepage;
use App\Ourwork;
use Auth;
use Session;
use App\User;
use DB;
use Mail;

class PagesController extends Controller
{       
        public function order_history() 
        {
                $orders = Order::join('package','order.package_id','=','package.pkg_id')
                        ->select('order.*', 'package.pkg_name')
                        ->orderBy('order_id','DESC')->paginate(15);
                return view('order.myOrder',compact('orders'));
        }

        public function all_user()
        {
                $users = User::orderBy('id','DESC')->paginate(15);
                return view('admin.user.all',compact('users'));
        }

        public function all_user_show($id)
        {
            $user = User::where('id',$id)->first();
            return view('admin.user.show',compact('user'));
        }

        public function all_user_destry($id)
        {
                $data=User::findOrFail($id);
                $data->delete($data);
                Session::flash('success', 'Your Client infos has been deleted successfully');
                return redirect()->back(); 
        }

 	public function transection()
 	{
 		$transections = Tranection::orderBy('id','DESC')->paginate(15);
 		return view('admin.transection.trx',compact('transections'));
 	} 

 	public function user_trx_history()
 	{	
 		$user_id = Auth::user()->id;
 		$trxs = Tranection::where('user_id',$user_id)->orderBy('id','DESC')->paginate(15);
 		return view('trx.trx',compact('trxs'));
 	} 

 	public function trx_pay_status_unactive($id)
 	{   
        DB::table('tranection')
                ->where('id',$id)
                ->update(['payment_status' => 0]);       
        Session::flash('success', 'Your Client Payment Transection status has been Pending');
        return redirect()->back();
 	}

 	public function trx_pay_status_active($id)
 	{   
        DB::table('order')
                ->where('payment_id',$id)
                ->update(['order_status' => 1]);  

        DB::table('tranection')
                ->where('id',$id)
                ->update(['payment_status' => 1]);       
        return redirect()->back()->with('success', 'Your Client Payment Transection status has been Success');
 	}

 	public function trx_destroy($id) 
 	{
 		$data = Tranection::findOrFail($id);
                $data->delete($data);
                Session::flash('success', 'Your transection history infos has been deleted successfully');
                return redirect()->back();
 	}


        public function fast_high_quality()
        {
                return view('pages.fhqualitydetails');
        } 

        public function see_our_work()
        {
                return view('pages.ourwork');
        } 

        public function user_free_quote_order(Request $request)
        {
                return $input = $request->all();
        }

        public function about() 
        {
                return view('admin.allstatic.about');
        }

        public function store_about(Request $request)
        {
        // return $input = $request->all();
        // $obj = new About;
        $obj = About::first();
        $obj->page_top_title=$request->page_top_title;
        $obj->page_top_des=$request->page_top_des;
        $obj->sec_two_title=$request->sec_two_title;
        $obj->sec_two_sub_title_one=$request->sec_two_sub_title_one;
        $obj->sec_two_sub_des_one=$request->sec_two_sub_des_one;
        $obj->sec_two_sub_title_two=$request->sec_two_sub_title_two;
        $obj->sec_two_sub_des_two=$request->sec_two_sub_des_two;
        $obj->sec_two_sub_title_three=$request->sec_two_sub_title_three;
        $obj->sec_two_sub_des_three=$request->sec_two_sub_des_three;
        $obj->sec_three_des_one=$request->sec_three_des_one;
        $obj->sec_three_des_two=$request->sec_three_des_two;
        $obj->sec_three_des_three=$request->sec_three_des_three;
        $obj->sec_five_des=$request->sec_five_des;
        $obj->location_des=$request->location_des;
        $obj->location_img_title_one=$request->location_img_title_one;
        $obj->location_img_title_two=$request->location_img_title_two;
        $obj->location_img_title_three=$request->location_img_title_three;
        $obj->location_img_title_four=$request->location_img_title_four;
        $obj->location_img_title_five=$request->location_img_title_five;
        // logo
        if ($request->hasFile('page_top_img')) {
            $files=$request->file('page_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->page_top_img=$picture;
        }
        // logo
        if ($request->hasFile('sec_two_img_one')) {
            $files=$request->file('sec_two_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_two_img_one=$picture;
        }
        // logo
        if ($request->hasFile('sec_two_img_two')) {
            $files=$request->file('sec_two_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_two_img_two=$picture;
        }
        // logo
        if ($request->hasFile('sec_two_img_three')) {
            $files=$request->file('sec_two_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_two_img_three=$picture;
        }
        // logo
        if ($request->hasFile('sec_three_img_one')) {
            $files=$request->file('sec_three_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_one=$picture;
        }
         // logo
        if ($request->hasFile('sec_three_img_two')) {
            $files=$request->file('sec_three_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_two=$picture;
        } 
        // logo
        if ($request->hasFile('sec_three_img_three')) {
            $files=$request->file('sec_three_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_three=$picture;
        }
         // logo
        if ($request->hasFile('sec_five_img')) {
            $files=$request->file('sec_five_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_five_img=$picture;
        }  
         // logo
        if ($request->hasFile('sec_six_img_one')) {
            $files=$request->file('sec_six_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_one=$picture;
        }  
         // logo
        if ($request->hasFile('sec_six_img_two')) {
            $files=$request->file('sec_six_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_two=$picture;
        } 
         // logo
        if ($request->hasFile('sec_six_img_three')) {
            $files=$request->file('sec_six_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_three=$picture;
        }  
         // logo
        if ($request->hasFile('sec_six_img_four')) {
            $files=$request->file('sec_six_img_four');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_four=$picture;
        } 
         // logo
        if ($request->hasFile('sec_six_img_five')) {
            $files=$request->file('sec_six_img_five');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_five=$picture;
        }  
        // logo
        if ($request->hasFile('sec_six_img_six')) {
            $files=$request->file('sec_six_img_six');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_six=$picture;
        } 
         // logo
        if ($request->hasFile('sec_six_img_seven')) {
            $files=$request->file('sec_six_img_seven');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_seven=$picture;
        } 
         // logo
        if ($request->hasFile('sec_six_img_eight')) {
            $files=$request->file('sec_six_img_eight');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_eight=$picture;
        }  
        // logo
        if ($request->hasFile('location_img_one')) {
            $files=$request->file('location_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->location_img_one=$picture;
        } 
        // logo
        if ($request->hasFile('location_img_two')) {
            $files=$request->file('location_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->location_img_two=$picture;
        } 
        // logo
        if ($request->hasFile('location_img_three')) {
            $files=$request->file('location_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->location_img_three=$picture;
        } 
         // logo
        if ($request->hasFile('location_img_four')) {
            $files=$request->file('location_img_four');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->location_img_four=$picture;
        } 
        // logo
        if ($request->hasFile('location_img_five')) {
            $files=$request->file('location_img_five');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->location_img_five=$picture;
        }

        $obj->save();
        return redirect()->back()->with('success', ' About has been changed successfully');
    }

    public function term_condition()
    {
        return view('admin.allstatic.trmcndtn');
    } 
    public function store_tc(Request $request)
    {
        $obj = Termcondition::first();
        $obj->title=$request->title;
        $obj->description=$request->description;
        $obj->save();
        return redirect()->back()->with('success', ' Term & Condition has been changed successfully');

    }
    
    public function privacy_policy()
    {
        return view('admin.allstatic.privacypolicy');
    } 

    public function privacypolicy(Request $request)
    {
        $obj = Privacypolicy::first();
        $obj->title=$request->title;
        $obj->description=$request->description;
        $obj->save();
        return redirect()->back()->with('success', ' Privacy policy has been changed successfully');

    }

    public function get_in_touch(Request $request)
    {
        $data = [
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'comment' => $request->comment,
                ];
                // Mail sent
        Mail::send('mail.getintouchmail', $data, function($message) use ($data) {
                    $message->from('fazleyrabbicse@gmail.com', 'Clipping Path');
                    $message->subject('Your quote request has been received');
                    $message->to('fazleyrabbicse@gmail.com');
        }); 
        $obj = new Getintouch;
        $obj->first_name=$request->first_name;
        $obj->last_name=$request->last_name;
        $obj->email=$request->email;
        $obj->comment=$request->comment;
        $obj->save();
        return redirect()->back()->with('success', 'Your information goted.In 45 minits we will contact you.');

    }

     public function subscribe(Request $request)
    {
        $obj =new Subscribe;
        $obj->email=$request->email;
        $obj->save();
        return redirect()->back()->with('success', ' Now you are subscriber.');

    }

    public function our_work() 
    {
        return view('admin.allstatic.ourwork');
    }

        public function ourwork(Request $request)
        {
        // return $input = $request->all();
        // $obj = new Ourwork;
        $obj = Ourwork::first();
        $obj->page_top_title=$request->page_top_title;
        $obj->page_top_des=$request->page_top_des;
        $obj->sec_two_title_one=$request->sec_two_title_one;
        $obj->sec_two_title_two=$request->sec_two_title_two;
        $obj->sec_two_title_three=$request->sec_two_title_three;
        $obj->sec_two_title_four=$request->sec_two_title_four;
        $obj->sec_two_title_five=$request->sec_two_title_five;
        $obj->sec_two_title_six=$request->sec_two_title_six;
        $obj->sec_two_title_seven=$request->sec_two_title_seven;
        $obj->sec_two_title_eight=$request->sec_two_title_eight;
        $obj->sec_two_title_nine=$request->sec_two_title_nine;
        $obj->sec_two_title_ten=$request->sec_two_title_ten;
        $obj->sec_six_title_one=$request->sec_six_title_one;
        $obj->sec_six_title_two=$request->sec_six_title_two;
        $obj->sec_six_title_three=$request->sec_six_title_three;
        $obj->sec_six_des_one=$request->sec_six_des_one;
        $obj->sec_six_des_two=$request->sec_six_des_two;
        $obj->sec_six_des_three=$request->sec_six_des_three;
        $obj->sec_five_des=$request->sec_five_des;
        // logo
        if ($request->hasFile('page_top_img')) {
            $files=$request->file('page_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->page_top_img=$picture;
        }
        // logo
        if ($request->hasFile('sec_three_img_one')) {
            $files=$request->file('sec_three_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_one=$picture;
        }
        // logo
        if ($request->hasFile('sec_three_img_two')) {
            $files=$request->file('sec_three_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_two=$picture;
        }
        // logo
        if ($request->hasFile('sec_three_img_three')) {
            $files=$request->file('sec_three_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_three=$picture;
        }
        // logo
        if ($request->hasFile('sec_three_img_four')) {
            $files=$request->file('sec_three_img_four');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_four=$picture;
        }
         // logo
        if ($request->hasFile('sec_three_img_five')) {
            $files=$request->file('sec_three_img_five');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_five=$picture;
        } 
        // logo
        if ($request->hasFile('sec_three_img_six')) {
            $files=$request->file('sec_three_img_six');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_six=$picture;
        }
         // logo
        if ($request->hasFile('sec_three_img_seven')) {
            $files=$request->file('sec_three_img_seven');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_seven=$picture;
        }  
         // logo
        if ($request->hasFile('sec_three_img_eight')) {
            $files=$request->file('sec_three_img_eight');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_three_img_eight=$picture;
        }  
         // logo
        if ($request->hasFile('sec_six_img_one')) {
            $files=$request->file('sec_six_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_one=$picture;
        } 
         // logo
        if ($request->hasFile('sec_six_img_two')) {
            $files=$request->file('sec_six_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_two=$picture;
        }  
         // logo
        if ($request->hasFile('sec_six_img_three')) {
            $files=$request->file('sec_six_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/servicepage/';
            $files->move($destination_path, $picture); 
            $obj->sec_six_img_three=$picture;
        } 

        $obj->save();
        return redirect()->back()->with('success', ' our work infos has been changed successfully');
    }

   
}
