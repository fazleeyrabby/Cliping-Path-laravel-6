<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\User;
use Auth;
use Hash;

class UserProfileController extends Controller
{
    public function user_profile()
    {
    	$user = User::where('id',Auth::user()->id)->first();
    	return view('profile.userProfile',compact('user'));
    }

    public function user_profile_update(Request $request)
    {
    	// return $input = $request->all();
        $user = User::where('id',Auth::user()->id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->company = $request->company;
        $user->address = $request->address;

         // profile file
    	if( $request->hasFile('profile_img'))
    	{
	        $files=$request->file('profile_img');  
	        $filename=$files->getClientOriginalName();
	        $picture=date('His').$filename;
	        $destination_path=base_path().'/public/assets/frontend_asset/profile_img';
	        $files->move($destination_path, $picture); 
	        $user->profile_img=$picture;  
    	}

        $user->city = $request->city;
        $user->country = $request->country;
        $user->zip = $request->zip;
        $user->phone = $request->phone;
        $user->save();

        return back()->with('success','Profile Updated');
    }

    public function change_pass()
    {
    	return view('user.changePassword');
    }

    public function user_chng_pass(Request $request)
    {
    	$n_pass = $request->n_pass;
    	$c_pass = $request->c_pass;
    	if($n_pass != $c_pass){
			return back()->with('alert','Password does not match');    		
    	} else {
    		$user = User::where('id', Auth::user()->id)->first();
    		$user->password = Hash::make($n_pass);
    		$user->save();
    		return back()->with('success','Password Changed');
    	}
    }
}
