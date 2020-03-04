<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpservice;

class AllServicesController extends Controller
{
    public function cp_srvc()
    {
    	return view('admin.frontservice.cpservice');
    }

    public function cpsrvc(Request $request)
    {
        // return $input = $request->all();

        $obj = Cpservice::first();

        // $obj = new Cpservice;
        $obj->cps_top_title=$request->cps_top_title;
        $obj->top_img_title=$request->top_img_title;
        $obj->brows_help_des=$request->brows_help_des;
        $obj->try_ur_srv_des=$request->try_ur_srv_des;
        $obj->why_cp_bd_des=$request->why_cp_bd_des;
        $obj->content_title=$request->content_title;
        $obj->rltd_srv_title=$request->rltd_srv_title;
        $obj->rltd_srv_one=$request->rltd_srv_one;
        $obj->rltd_srv_two=$request->rltd_srv_two;
        $obj->rltd_srv_three=$request->rltd_srv_three;
        $obj->rltd_srv_des=$request->rltd_srv_des;
        $obj->content_des=$request->content_des;  
        if ($request->hasFile('top_img')) {
            $files=$request->file('top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->top_img=$picture;
        }
        if ($request->hasFile('top_des_side_img')) {
            $files=$request->file('top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->top_des_side_img=$picture;
        }
        if ($request->hasFile('ur_wrk_actn_img')) {
            $files=$request->file('ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('cnt_img_one')) {
            $files=$request->file('cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cnt_img_one=$picture;
        }
        if ($request->hasFile('cnt_img_two')) {
            $files=$request->file('cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cnt_img_two=$picture;
        } 
        if ($request->hasFile('cnt_img_three')) {
            $files=$request->file('cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cnt_img_three=$picture;
        }
        if ($request->hasFile('reltd_srvs_img')) {
            $files=$request->file('reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->reltd_srvs_img=$picture;
        } 
        $obj->ibrs_page_top_title=$request->ibrs_page_top_title;
        $obj->ibrs_top_img_title=$request->ibrs_top_img_title;
        $obj->ibrs_brows_help_des=$request->ibrs_brows_help_des;
        $obj->ibrs_try_ur_srv_des=$request->ibrs_try_ur_srv_des;
        $obj->ibrs_why_cp_bd_des=$request->ibrs_why_cp_bd_des;
        $obj->ibrs_content_title=$request->ibrs_content_title;
        $obj->ibrs_rltd_srv_title=$request->ibrs_rltd_srv_title;
        $obj->ibrs_rltd_srv_one=$request->ibrs_rltd_srv_one;
        $obj->ibrs_rltd_srv_two=$request->ibrs_rltd_srv_two;
        $obj->ibrs_rltd_srv_three=$request->ibrs_rltd_srv_three;
        $obj->ibrs_rltd_srv_des=$request->ibrs_rltd_srv_des;
        $obj->ibrs_content_des=$request->ibrs_content_des;  
        if ($request->hasFile('ibrs_top_img')) {
            $files=$request->file('ibrs_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ibrs_top_img=$picture;
        }
        if ($request->hasFile('ibrs_top_des_side_img')) {
            $files=$request->file('ibrs_top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ibrs_top_des_side_img=$picture;
        }
        if ($request->hasFile('ibrs_ur_wrk_actn_img')) {
            $files=$request->file('ibrs_ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ibrs_ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('ibrs_cnt_img_one')) {
            $files=$request->file('ibrs_cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ibrs_cnt_img_one=$picture;
        }
        if ($request->hasFile('ibrs_cnt_img_two')) {
            $files=$request->file('ibrs_cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ibrs_cnt_img_two=$picture;
        } 
        if ($request->hasFile('ibrs_cnt_img_three')) {
            $files=$request->file('ibrs_cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ibrs_cnt_img_three=$picture;
        }
        if ($request->hasFile('ibrs_reltd_srvs_img')) {
            $files=$request->file('ibrs_reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ibrs_reltd_srvs_img=$picture;
        }
        $obj->ims_page_top_title=$request->ims_page_top_title;
        $obj->ims_top_img_title=$request->ims_top_img_title;
        $obj->ims_brows_help_des=$request->ims_brows_help_des;
        $obj->ims_try_ur_srv_des=$request->ims_try_ur_srv_des;
        $obj->ims_why_cp_bd_des=$request->ims_why_cp_bd_des;
        $obj->ims_content_title=$request->ims_content_title;
        $obj->ims_rltd_srv_title=$request->ims_rltd_srv_title;
        $obj->ims_rltd_srv_one=$request->ims_rltd_srv_one;
        $obj->ims_rltd_srv_two=$request->ims_rltd_srv_two;
        $obj->ims_rltd_srv_three=$request->ims_rltd_srv_three;
        $obj->ims_rltd_srv_des=$request->ims_rltd_srv_des;
        $obj->ims_content_des=$request->ims_content_des;  
        if ($request->hasFile('ims_top_img')) {
            $files=$request->file('ims_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ims_top_img=$picture;
        }
        if ($request->hasFile('ims_top_des_side_img')) {
            $files=$request->file('ims_top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ims_top_des_side_img=$picture;
        }
        if ($request->hasFile('ims_ur_wrk_actn_img')) {
            $files=$request->file('ims_ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ims_ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('ims_cnt_img_one')) {
            $files=$request->file('ims_cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ims_cnt_img_one=$picture;
        }
        if ($request->hasFile('ims_cnt_img_two')) {
            $files=$request->file('ims_cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ims_cnt_img_two=$picture;
        } 
        if ($request->hasFile('ims_cnt_img_three')) {
            $files=$request->file('ims_cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ims_cnt_img_three=$picture;
        }
        if ($request->hasFile('ims_reltd_srvs_img')) {
            $files=$request->file('ims_reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ims_reltd_srvs_img=$picture;
        } 
        $obj->dss_page_top_title=$request->dss_page_top_title;
        $obj->dss_top_img_title=$request->dss_top_img_title;
        $obj->dss_brows_help_des=$request->dss_brows_help_des;
        $obj->dss_try_ur_srv_des=$request->dss_try_ur_srv_des;
        $obj->dss_why_cp_bd_des=$request->dss_why_cp_bd_des;
        $obj->dss_content_title=$request->dss_content_title;
        $obj->dss_rltd_srv_title=$request->dss_rltd_srv_title;
        $obj->dss_rltd_srv_one=$request->dss_rltd_srv_one;
        $obj->dss_rltd_srv_two=$request->dss_rltd_srv_two;
        $obj->dss_rltd_srv_three=$request->dss_rltd_srv_three;
        $obj->dss_rltd_srv_des=$request->dss_rltd_srv_des;
        $obj->dss_content_des=$request->dss_content_des;  
        if ($request->hasFile('dss_top_img')) {
            $files=$request->file('dss_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->dss_top_img=$picture;
        }
        if ($request->hasFile('dss_top_des_side_img')) {
            $files=$request->file('dss_top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->dss_top_des_side_img=$picture;
        }
        if ($request->hasFile('dss_ur_wrk_actn_img')) {
            $files=$request->file('dss_ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->dss_ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('dss_cnt_img_one')) {
            $files=$request->file('dss_cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->dss_cnt_img_one=$picture;
        }
        if ($request->hasFile('dss_cnt_img_two')) {
            $files=$request->file('dss_cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->dss_cnt_img_two=$picture;
        } 
        if ($request->hasFile('dss_cnt_img_three')) {
            $files=$request->file('dss_cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->dss_cnt_img_three=$picture;
        }
        if ($request->hasFile('dss_reltd_srvs_img')) {
            $files=$request->file('dss_reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->dss_reltd_srvs_img=$picture;
        } 
        $obj->gmpe_page_top_title=$request->gmpe_page_top_title;
        $obj->gmpe_top_img_title=$request->gmpe_top_img_title;
        $obj->gmpe_brows_help_des=$request->gmpe_brows_help_des;
        $obj->gmpe_try_ur_srv_des=$request->gmpe_try_ur_srv_des;
        $obj->gmpe_why_cp_bd_des=$request->gmpe_why_cp_bd_des;
        $obj->gmpe_content_title=$request->gmpe_content_title;
        $obj->gmpe_rltd_srv_title=$request->gmpe_rltd_srv_title;
        $obj->gmpe_rltd_srv_one=$request->gmpe_rltd_srv_one;
        $obj->gmpe_rltd_srv_two=$request->gmpe_rltd_srv_two;
        $obj->gmpe_rltd_srv_three=$request->gmpe_rltd_srv_three;
        $obj->gmpe_rltd_srv_des=$request->gmpe_rltd_srv_des;
        $obj->gmpe_content_des=$request->gmpe_content_des;  
        if ($request->hasFile('gmpe_top_img')) {
            $files=$request->file('gmpe_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->gmpe_top_img=$picture;
        }
        if ($request->hasFile('gmpe_top_des_side_img')) {
            $files=$request->file('gmpe_top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->gmpe_top_des_side_img=$picture;
        }
        if ($request->hasFile('gmpe_ur_wrk_actn_img')) {
            $files=$request->file('gmpe_ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->gmpe_ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('gmpe_cnt_img_one')) {
            $files=$request->file('gmpe_cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->gmpe_cnt_img_one=$picture;
        }
        if ($request->hasFile('gmpe_cnt_img_two')) {
            $files=$request->file('gmpe_cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->gmpe_cnt_img_two=$picture;
        } 
        if ($request->hasFile('gmpe_cnt_img_three')) {
            $files=$request->file('gmpe_cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->gmpe_cnt_img_three=$picture;
        }
        if ($request->hasFile('gmpe_reltd_srvs_img')) {
            $files=$request->file('gmpe_reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->gmpe_reltd_srvs_img=$picture;
        }
        $obj->cvcc_page_top_title=$request->cvcc_page_top_title;
        $obj->cvcc_top_img_title=$request->cvcc_top_img_title;
        $obj->cvcc_brows_help_des=$request->cvcc_brows_help_des;
        $obj->cvcc_try_ur_srv_des=$request->cvcc_try_ur_srv_des;
        $obj->cvcc_why_cp_bd_des=$request->cvcc_why_cp_bd_des;
        $obj->cvcc_content_title=$request->cvcc_content_title;
        $obj->cvcc_rltd_srv_title=$request->cvcc_rltd_srv_title;
        $obj->cvcc_rltd_srv_one=$request->cvcc_rltd_srv_one;
        $obj->cvcc_rltd_srv_two=$request->cvcc_rltd_srv_two;
        $obj->cvcc_rltd_srv_three=$request->cvcc_rltd_srv_three;
        $obj->cvcc_rltd_srv_des=$request->cvcc_rltd_srv_des;
        $obj->cvcc_content_des=$request->cvcc_content_des;  
        if ($request->hasFile('cvcc_top_img')) {
            $files=$request->file('cvcc_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cvcc_top_img=$picture;
        }
        if ($request->hasFile('cvcc_top_des_side_img')) {
            $files=$request->file('cvcc_top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cvcc_top_des_side_img=$picture;
        }
        if ($request->hasFile('cvcc_ur_wrk_actn_img')) {
            $files=$request->file('cvcc_ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cvcc_ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('cvcc_cnt_img_one')) {
            $files=$request->file('cvcc_cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cvcc_cnt_img_one=$picture;
        }
        if ($request->hasFile('cvcc_cnt_img_two')) {
            $files=$request->file('cvcc_cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cvcc_cnt_img_two=$picture;
        } 
        if ($request->hasFile('cvcc_cnt_img_three')) {
            $files=$request->file('cvcc_cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cvcc_cnt_img_three=$picture;
        }
        if ($request->hasFile('cvcc_reltd_srvs_img')) {
            $files=$request->file('cvcc_reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->cvcc_reltd_srvs_img=$picture;
        }
        $obj->prs_page_top_title=$request->prs_page_top_title;
        $obj->prs_top_img_title=$request->prs_top_img_title;
        $obj->prs_brows_help_des=$request->prs_brows_help_des;
        $obj->prs_try_ur_srv_des=$request->prs_try_ur_srv_des;
        $obj->prs_why_cp_bd_des=$request->prs_why_cp_bd_des;
        $obj->prs_content_title=$request->prs_content_title;
        $obj->prs_rltd_srv_title=$request->prs_rltd_srv_title;
        $obj->prs_rltd_srv_one=$request->prs_rltd_srv_one;
        $obj->prs_rltd_srv_two=$request->prs_rltd_srv_two;
        $obj->prs_rltd_srv_three=$request->prs_rltd_srv_three;
        $obj->prs_rltd_srv_des=$request->prs_rltd_srv_des;
        $obj->prs_content_des=$request->prs_content_des;  
        if ($request->hasFile('prs_top_img')) {
            $files=$request->file('prs_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->prs_top_img=$picture;
        }
        if ($request->hasFile('prs_top_des_side_img')) {
            $files=$request->file('prs_top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->prs_top_des_side_img=$picture;
        }
        if ($request->hasFile('prs_ur_wrk_actn_img')) {
            $files=$request->file('prs_ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->prs_ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('prs_cnt_img_one')) {
            $files=$request->file('prs_cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->prs_cnt_img_one=$picture;
        }
        if ($request->hasFile('prs_cnt_img_two')) {
            $files=$request->file('prs_cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->prs_cnt_img_two=$picture;
        } 
        if ($request->hasFile('prs_cnt_img_three')) {
            $files=$request->file('prs_cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->prs_cnt_img_three=$picture;
        }
        if ($request->hasFile('prs_reltd_srvs_img')) {
            $files=$request->file('prs_reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->prs_reltd_srvs_img=$picture;
        }
        $obj->ppe_page_top_title=$request->ppe_page_top_title;
        $obj->ppe_top_img_title=$request->ppe_top_img_title;
        $obj->ppe_brows_help_des=$request->ppe_brows_help_des;
        $obj->ppe_try_ur_srv_des=$request->ppe_try_ur_srv_des;
        $obj->ppe_why_cp_bd_des=$request->ppe_why_cp_bd_des;
        $obj->ppe_content_title=$request->ppe_content_title;
        $obj->ppe_rltd_srv_title=$request->ppe_rltd_srv_title;
        $obj->ppe_rltd_srv_one=$request->ppe_rltd_srv_one;
        $obj->ppe_rltd_srv_two=$request->ppe_rltd_srv_two;
        $obj->ppe_rltd_srv_three=$request->ppe_rltd_srv_three;
        $obj->ppe_rltd_srv_des=$request->ppe_rltd_srv_des;
        $obj->ppe_content_des=$request->ppe_content_des;  
        if ($request->hasFile('ppe_top_img')) {
            $files=$request->file('ppe_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ppe_top_img=$picture;
        }
        if ($request->hasFile('ppe_top_des_side_img')) {
            $files=$request->file('ppe_top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ppe_top_des_side_img=$picture;
        }
        if ($request->hasFile('ppe_ur_wrk_actn_img')) {
            $files=$request->file('ppe_ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ppe_ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('ppe_cnt_img_one')) {
            $files=$request->file('ppe_cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ppe_cnt_img_one=$picture;
        }
        if ($request->hasFile('ppe_cnt_img_two')) {
            $files=$request->file('ppe_cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ppe_cnt_img_two=$picture;
        } 
        if ($request->hasFile('ppe_cnt_img_three')) {
            $files=$request->file('ppe_cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ppe_cnt_img_three=$picture;
        }
        if ($request->hasFile('ppe_reltd_srvs_img')) {
            $files=$request->file('ppe_reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->ppe_reltd_srvs_img=$picture;
        }
        $obj->vcs_page_top_title=$request->vcs_page_top_title;
        $obj->vcs_top_img_title=$request->vcs_top_img_title;
        $obj->vcs_brows_help_des=$request->vcs_brows_help_des;
        $obj->vcs_try_ur_srv_des=$request->vcs_try_ur_srv_des;
        $obj->vcs_why_cp_bd_des=$request->vcs_why_cp_bd_des;
        $obj->vcs_content_title=$request->vcs_content_title;
        $obj->vcs_rltd_srv_title=$request->vcs_rltd_srv_title;
        $obj->vcs_rltd_srv_one=$request->vcs_rltd_srv_one;
        $obj->vcs_rltd_srv_two=$request->vcs_rltd_srv_two;
        $obj->vcs_rltd_srv_three=$request->vcs_rltd_srv_three;
        $obj->vcs_rltd_srv_des=$request->vcs_rltd_srv_des;
        $obj->vcs_content_des=$request->vcs_content_des;  
        if ($request->hasFile('vcs_top_img')) {
            $files=$request->file('vcs_top_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->vcs_top_img=$picture;
        }
        if ($request->hasFile('vcs_top_des_side_img')) {
            $files=$request->file('vcs_top_des_side_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->vcs_top_des_side_img=$picture;
        }
        if ($request->hasFile('vcs_ur_wrk_actn_img')) {
            $files=$request->file('vcs_ur_wrk_actn_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->vcs_ur_wrk_actn_img=$picture;
        }
        if ($request->hasFile('vcs_cnt_img_one')) {
            $files=$request->file('vcs_cnt_img_one');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->vcs_cnt_img_one=$picture;
        }
        if ($request->hasFile('vcs_cnt_img_two')) {
            $files=$request->file('vcs_cnt_img_two');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->vcs_cnt_img_two=$picture;
        } 
        if ($request->hasFile('vcs_cnt_img_three')) {
            $files=$request->file('vcs_cnt_img_three');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->vcs_cnt_img_three=$picture;
        }
        if ($request->hasFile('vcs_reltd_srvs_img')) {
            $files=$request->file('vcs_reltd_srvs_img');  
            $filename=$files->getClientOriginalName();
            $picture=date('His').$filename;
            $destination_path=base_path().'/public/assets/admin/images/allservice/';
            $files->move($destination_path, $picture); 
            $obj->vcs_reltd_srvs_img=$picture;
        } 

        $obj->save();
        return redirect()->back()->with('success', ' Help has been changed successfully');
    } 
}
