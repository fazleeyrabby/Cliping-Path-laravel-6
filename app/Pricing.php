<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
   protected $table="pricing";
    protected $primaryKey="id";
    protected $fillable=[
    	'title',
        'image',
    	'sub_title'
    ];
}
