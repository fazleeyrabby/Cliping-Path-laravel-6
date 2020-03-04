<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gnrlstng extends Model
{
    Protected $table = 'gnrlstng';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'name',
    	'logo',
    	'favicon',
    	'color',
        'navbar_color',
    	'address',
    	'mobile',
    	'email',
    	'currency',
    	'top_text',
    	'facebook',
    	'tweeter',
    	'google_plus',
    	'linkin',
    	'youtube',
    	'footer_text',
    	'fotr_btm_txt'
    ];
}
