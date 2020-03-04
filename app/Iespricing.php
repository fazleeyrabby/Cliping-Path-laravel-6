<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iespricing extends Model
{
    protected $table="iespricing";
    protected $primaryKey="id";
    protected $fillable=[
        'dlr_img',
        'paypal_img',
        'bank_img',
        'bkash_img',
        'rocket_img',
        'tp_title',
        'page_top_des',
        'ec_des',
        'ec_title',
        'save_time',
        'std_des',
        'business_friendly',
        'business_friendly_des',
        'save_money',
        'save_money_des',
        'valid_for',
        'valid_for_des',
        'pay_as_go_des'
    ];
}
