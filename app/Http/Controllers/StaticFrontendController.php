<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Howitwork;
use App\Pricing;
use App\Clpngpbd;
use App\Seeurrk;
use App\Cmtdmw;
use App\Cpburoes;
use App\Rdolp;
use App\Taqs;
use App\Iespricing;
use App\Help;

class StaticFrontendController extends Controller
{
    public function how_it_work()
    {	
    	return view('admin.allstatic.howItWrk');
    } 

    public function howitwork(Request $request)
    {
    	$obj = Howitwork::first();

    	// $obj = new Howitwork;
        $obj->fb_title=$request->fb_title;
        // logo
        if ($request->hasFile('fb_img')) {
            $files=$request->file('fb_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/howitwork/';
            $files->move($destination_path, $picture); 
            $obj->fb_img=$picture;
        }
        $obj->desk_title=$request->desk_title;
        // logo
        if ($request->hasFile('desk_img')) {
            $files=$request->file('desk_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/howitwork/';
            $files->move($destination_path, $picture); 
            $obj->desk_img=$picture;
        }
        $obj->bnf_title=$request->bnf_title;
        // logo
        if ($request->hasFile('bnf_img')) {
            $files=$request->file('bnf_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/howitwork/';
            $files->move($destination_path, $picture); 
            $obj->bnf_img=$picture;
        }
        $obj->mail_title=$request->mail_title;
        // logo
        if ($request->hasFile('mail_img')) {
            $files=$request->file('mail_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/howitwork/';
            $files->move($destination_path, $picture); 
            $obj->mail_img=$picture;
        }
        $obj->unknown_title=$request->unknown_title;
        // logo
        if ($request->hasFile('unknown_img')) {
            $files=$request->file('unknown_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/howitwork/';
            $files->move($destination_path, $picture); 
            $obj->unknown_img=$picture;
        }
        $obj->time_title=$request->time_title;
        // logo
        if ($request->hasFile('time_img')) {
            $files=$request->file('time_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/howitwork/';
            $files->move($destination_path, $picture); 
            $obj->time_img=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' General setting has been added successfully');
    }

    public function pricing()
    {
        return view('admin.allstatic.pricing');
    } 

    public function store_update_pricing(Request $request)
    {
        // return $input = $request->all();
       $obj = Pricing::first();

        // $obj = new Pricing;
        $obj->cp_title=$request->cp_title;
        $obj->cp_sub_title=$request->cp_sub_title;
        // logo
        if ($request->hasFile('cp_img')) {
            $files=$request->file('cp_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/pricing/';
            $files->move($destination_path, $picture); 
            $obj->cp_img=$picture;
        }
        $obj->ds_title=$request->ds_title;
        $obj->ds_sub_title=$request->ds_sub_title;
        // logo
        if ($request->hasFile('ds_img')) {
            $files=$request->file('ds_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/pricing/';
            $files->move($destination_path, $picture); 
            $obj->ds_img=$picture;
        }
        $obj->gm_title=$request->gm_title;
        $obj->gm_sub_title=$request->gm_sub_title;
        // logo
        if ($request->hasFile('gm_img')) {
            $files=$request->file('gm_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/pricing/';
            $files->move($destination_path, $picture); 
            $obj->gm_img=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' Pricing  has been changed successfully');
    } 

    public function cpbd()
    {
        return view('admin.allstatic.cpbd');
    } 

    public function cp_bd(Request $request)
    {
        // return $input = $request->all();
       $obj = Clpngpbd::first();

        // $obj = new Clpngpbd;
        $obj->qlty_title=$request->qlty_title;
        $obj->qlty_des=$request->qlty_des;
        // logo
        if ($request->hasFile('qlty_img')) {
            $files=$request->file('qlty_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/cpbd/';
            $files->move($destination_path, $picture); 
            $obj->qlty_img=$picture;
        }
        $obj->price_title=$request->price_title;
        $obj->price_des=$request->price_des;
        // logo
        if ($request->hasFile('price_img')) {
            $files=$request->file('price_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/cpbd/';
            $files->move($destination_path, $picture); 
            $obj->price_img=$picture;
        }
        $obj->time_title=$request->time_title;
        $obj->time_des=$request->time_des;
        // logo
        if ($request->hasFile('time_img')) {
            $files=$request->file('time_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/cpbd/';
            $files->move($destination_path, $picture); 
            $obj->time_img=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' CP BD  has been changed successfully');
    } 

    public function seeourwrk()
    {
        return view('admin.allstatic.seerwrk');
    } 

    public function see_our_wrk(Request $request)
    {
        // return $input = $request->all();
       $obj = Seeurrk::first();

        // $obj = new Seeurrk;
        $obj->dscrptn=$request->dscrptn;
        // logo
        if ($request->hasFile('bnb_img')) {
            $files=$request->file('bnb_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->bnb_img=$picture;
        } 
        // logo
        if ($request->hasFile('clock_img')) {
            $files=$request->file('clock_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->clock_img=$picture;
        } 
        // logo
        if ($request->hasFile('desk_img')) {
            $files=$request->file('desk_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->desk_img=$picture;
        } 
        // logo
        if ($request->hasFile('fb_img')) {
            $files=$request->file('fb_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->fb_img=$picture;
        } 
        // logo
        if ($request->hasFile('mail_img')) {
            $files=$request->file('mail_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->mail_img=$picture;
        } 
        // logo
        if ($request->hasFile('pen_img')) {
            $files=$request->file('pen_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->pen_img=$picture;
        } 
        // logo
        if ($request->hasFile('polo_img')) {
            $files=$request->file('polo_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->polo_img=$picture;
        } 
        // logo
        if ($request->hasFile('sun_img')) {
            $files=$request->file('sun_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->sun_img=$picture;
        } 
        // logo
        if ($request->hasFile('teddy_img')) {
            $files=$request->file('teddy_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->teddy_img=$picture;
        } 
        // logo
        if ($request->hasFile('tnd_img')) {
            $files=$request->file('tnd_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/seeurrk/';
            $files->move($destination_path, $picture); 
            $obj->tnd_img=$picture;
        }

        $obj->save();
        return redirect()->back()->with('success', ' See our work section  has been changed successfully');
    } 

    public function committed_mkng_wld()
    {
        return view('admin.allstatic.committedmkngwld');
    }

    public function committedmkngwld(Request $request)
    {
        // return $input = $request->all();
       $obj = Cmtdmw::first();

        // $obj = new Cmtdmw;
        $obj->title=$request->title;
        $obj->description=$request->description;
        // logo
        if ($request->hasFile('image')) {
            $files=$request->file('image');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/committedmkngwld/';
            $files->move($destination_path, $picture); 
            $obj->image=$picture;
        } 
        $obj->save();
        return redirect()->back()->with('success', ' Your info  has been changed successfully');
    }
    
    public function cpburoes()
    {
        return view('admin.allstatic.cpburoes');
    }

    public function cp_buroes(Request $request)
    {
        // return $input = $request->all();
       $obj = Cpburoes::first();

        // $obj = new Cpburoes;
        $obj->title=$request->title;
        $obj->desone=$request->desone;
        $obj->destwo=$request->destwo;
      
        $obj->save();
        return redirect()->back()->with('success', ' Your info has been changed successfully');
    }

    public function rdolp()
    {
        return view('admin.allstatic.rdolp');
    } 

    public function rd_olp(Request $request)
    {
        // return $input = $request->all();
       $obj = Rdolp::first();

        // $obj = new Rdolp;
        $obj->title=$request->title;
        $obj->bnb_title=$request->bnb_title;
        $obj->bnb_des=$request->bnb_des;
        // logo
        if ($request->hasFile('bnb_img')) {
            $files=$request->file('bnb_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/rdolp/';
            $files->move($destination_path, $picture); 
            $obj->bnb_img=$picture;
        }
        $obj->desk_title=$request->desk_title;
        $obj->desk_des=$request->desk_des;
        // logo
        if ($request->hasFile('desk_img')) {
            $files=$request->file('desk_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/rdolp/';
            $files->move($destination_path, $picture); 
            $obj->desk_img=$picture;
        }
        $obj->taddy_title=$request->taddy_title;
        $obj->taddy_des=$request->taddy_des;
        // logo
        if ($request->hasFile('taddy_img')) {
            $files=$request->file('taddy_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/rdolp/';
            $files->move($destination_path, $picture); 
            $obj->taddy_img=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' Your info has been changed successfully');
    } 

    public function taqs()
    {
        return view('admin.allstatic.taqs');
    } 

    public function taq_s(Request $request)
    {
        // return $input = $request->all();
       $obj = Taqs::first();

        // $obj = new Taqs;
        $obj->taqs_one=$request->taqs_one;
        $obj->taqs_two=$request->taqs_two;
        $obj->taqs_three=$request->taqs_three;
        $obj->taqs_four=$request->taqs_four;
        $obj->taqs_five=$request->taqs_five;
        $obj->taqs_six=$request->taqs_six;
        $obj->taqs_seven=$request->taqs_seven;
        $obj->taqs_eight=$request->taqs_eight;
        $obj->taqs_nine=$request->taqs_nine;
        $obj->taqs_ten=$request->taqs_ten;
        $obj->taqs_eleven=$request->taqs_eleven;
        $obj->taqs_twelve=$request->taqs_twelve;
        $obj->save();
        return redirect()->back()->with('success', ' Your info has been changed successfully');
    } 

    public function img_edit_service_price()
    {
        return view('admin.allstatic.imgedtsrvcp');
    }

    public function help_price(Request $request)
    {
        // return $input = $request->all();

        $obj = Iespricing::first();

        // $obj = new Iespricing;
        $obj->tp_title=$request->tp_title;
        $obj->page_top_des=$request->page_top_des;
        $obj->ec_des=$request->ec_des;
        $obj->ec_title=$request->ec_title;
        $obj->save_time=$request->save_time;
        $obj->std_des=$request->std_des;
        $obj->business_friendly=$request->business_friendly;
        $obj->business_friendly_des=$request->business_friendly_des;
        $obj->save_money=$request->save_money;
        $obj->save_money_des=$request->save_money_des;
        $obj->valid_for=$request->valid_for;
        $obj->valid_for_des=$request->valid_for_des;
        $obj->pay_as_go_des=$request->pay_as_go_des;
        // logo
        if ($request->hasFile('dlr_img')) {
            $files=$request->file('dlr_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->dlr_img=$picture;
        }
        // logo
        if ($request->hasFile('paypal_img')) {
            $files=$request->file('paypal_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->paypal_img=$picture;
        }
        // logo
        if ($request->hasFile('bank_img')) {
            $files=$request->file('bank_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->bank_img=$picture;
        }
        // logo
        if ($request->hasFile('bkash_img')) {
            $files=$request->file('bkash_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->bkash_img=$picture;
        }
        // logo
        if ($request->hasFile('rocket_img')) {
            $files=$request->file('rocket_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->rocket_img=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' Image-editing Service Pricing has been changed successfully');
    }  

    public function help()
    {
        return view('admin.allstatic.help');
    }

    public function store_help(Request $request)
    {
        // return $input = $request->all();

        $obj = Help::first();

        // $obj = new Help;
        $obj->page_top_title=$request->page_top_title;
        $obj->pagetop_sub_title=$request->pagetop_sub_title;
        $obj->brows_help_des=$request->brows_help_des;
        $obj->askbeacon_des=$request->askbeacon_des;
        $obj->gettouch_des=$request->gettouch_des;
        $obj->sub_email_des=$request->sub_email_des;
        $obj->sm_des=$request->sm_des;
        $obj->sm_des_two=$request->sm_des_two;
        // logo
        if ($request->hasFile('fb')) {
            $files=$request->file('fb');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->fb=$picture;
        }
        // logo
        if ($request->hasFile('tweeter')) {
            $files=$request->file('tweeter');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->tweeter=$picture;
        }
        // logo
        if ($request->hasFile('pinterest')) {
            $files=$request->file('pinterest');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->pinterest=$picture;
        }
        // logo
        if ($request->hasFile('brows_help_img')) {
            $files=$request->file('brows_help_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->brows_help_img=$picture;
        }
        // logo
        if ($request->hasFile('linkedin')) {
            $files=$request->file('linkedin');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->linkedin=$picture;
        } // logo
        if ($request->hasFile('ask_beacon_img')) {
            $files=$request->file('ask_beacon_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->ask_beacon_img=$picture;
        } // logo
        if ($request->hasFile('sm_img')) {
            $files=$request->file('sm_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->sm_img=$picture;
        } // logo
        if ($request->hasFile('sm_img_two')) {
            $files=$request->file('sm_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/help/';
            $files->move($destination_path, $picture); 
            $obj->sm_img_two=$picture;
        }
        $obj->save();
        return redirect()->back()->with('success', ' Help has been changed successfully');
    } 
    
}
