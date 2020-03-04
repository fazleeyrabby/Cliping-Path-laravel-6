<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpservice extends Model
{
    protected $table="cpservice";
    protected $primaryKey="id";
    protected $fillable=[
    	 	'top_img',
            'top_des_side_img',
            'ur_wrk_actn_img',
            'cnt_img_one',
            'cnt_img_two',
            'cnt_img_three',
            'reltd_srvs_img',
            'cps_top_title',
            'top_img_title',
           	'brows_help_des',
            'try_ur_srv_des',
            'why_cp_bd_des',
            'content_title',
            'rltd_srv_title',
            'rltd_srv_one',
            'rltd_srv_two',
            'rltd_srv_three',
            'rltd_srv_des',
            'content_des'
    ];
}
