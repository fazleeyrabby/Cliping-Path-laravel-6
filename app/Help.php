<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $table="help";
    protected $primaryKey="id";
    protected $fillable=[
        'fb',
        'tweeter',
        'pinterest',
        'brows_help_img',
        'linkedin',
        'ask_beacon_img',
        'sm_img',
        'sm_img_two',
        'page_top_title',
        'pagetop_sub_title',
        'brows_help_des',
        'askbeacon_des',
        'gettouch_des',
        'sub_email_des',
        'sm_des',
        'sm_des_two'
    ];
}
