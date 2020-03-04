<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verifyemail()
    {
        return view('auth.emailVer');
    }

    public function verifyemail_save($id){
    	$user = User::where('id',$id)->first();
    	$user->is_email_ver = 1;
    	$user->save();

    	return redirect('home');
    }
}
