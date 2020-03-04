<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Mailtrap;
use Mail;

class MailController extends Controller
{
    public function index()
    {
    	 Mail::to('kafjonrabbi@live.com')->send(new Mailtrap());
    }
}
