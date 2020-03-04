<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attachefile; 
use App\Admin;
use App\Getintouch;
use App\Subscribe;
use Auth; 
use Hash;
use session;
use Mail;
class AdminController extends Controller
{
    public function index()
    {
        return view('adminChild');
    }

    public function admin_profile()
    {   
        $admin = Admin::where('id',Auth::user()->id)->first();
        return view('admin.page.profile',compact('admin'));
    } 

    public function admin_profile_update(Request $request)
    {
       // return $input = $request->all();
        $user = Admin::where('id',Auth::user()->id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;

         // profile file
        if( $request->hasFile('profile_img'))
        {
            $files=$request->file('profile_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/profile_img';
            $files->move($destination_path, $picture); 
            $user->profile_img=$picture;  
        }
        $user->phone = $request->phone;
        $user->save();

        return back()->with('success','Profile Updated');
    } 

    public function change_password()
    {
        return view('admin.page.changePassword');
    } 

    public function admin_chng_pass(Request $request)
    {
        $n_pass = $request->n_pass;
        $c_pass = $request->c_pass;
        if($n_pass != $c_pass){
            return back()->with('alert','Password does not match');         
        } else {
            $user = Admin::where('id', Auth::user()->id)->first();
            $user->password = Hash::make($n_pass);
            $user->save();
            return back()->with('success','Password Changed');
        }
    }

    public function user_attache_info()
    {
        $fileinfoes = Attachefile::paginate(2);
    	return view('admin.fileinfo.all_fileinfo',compact('fileinfoes'));
    }
    public function attache_show($id)
    {
       $attachefile = Attachefile::findOrFail($id);
       $img_data =explode(',',$attachefile->atach_file);

        return view('admin.fileinfo.single',compact('attachefile','img_data'));
    }

    public function attache_edit($id)
    {
        $attachefile = Attachefile::findOrFail($id);
        return view('admin.fileinfo.edit',compact('attachefile'));
    }

    public function attache_update(Request $request, $id)
    {
     return  $input = $request->all();
        $attachefile = Attachefile::findOrFail($id);
        return view('admin.fileinfo.edit',compact('attachefile'));
    }

    public function get_in_touch()
    {
        $getintouchs = Getintouch::paginate(15);
        return view('admin.getintouch',compact('getintouchs'));
    }

    public function get_in_touch_destroy($id)
    {
        $data = Getintouch::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', 'Your information delete has been successfully.');
    }
    
     public function subscriber()
    {
        $subscribes = Subscribe::paginate(15);
        return view('admin.subscribe',compact('subscribes'));
    }

    public function subscriber_destroy($id)
    {
        $data = Subscribe::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', 'Subscriber information delete has been successfully.');
    }

    public function broadcast_mail(Request $request)
    {
        $data = [
                    'subject' => $request->subject,
                    'messages' => $request->messages,
                ];
        Mail::send('mail.subscriber', $data, function($message) use ($data) {
            $subscribers  = Subscribe::pluck('email')->toArray();
            foreach ($subscribers as $email) {
                $message->from('fazleyrabbicse@gmail.com', 'Clipping Path');
                $message->subject('Your quote request has been received');
                $message->to($email);   
            }  
        });
        return redirect()->back()->with('success', 'Subscriber News Letter sent has been successfully.'); 
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
