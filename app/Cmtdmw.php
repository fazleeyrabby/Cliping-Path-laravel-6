<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cmtdmw extends Model
{
    protected $table="cmtdmw";
    protected $primaryKey="id";
    protected $fillable=[
        'title',
        'description',
    	'image'
    ];
}
