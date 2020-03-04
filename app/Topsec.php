<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topsec extends Model
{
    protected $table="topsec";
    protected $primaryKey="id";
    protected $fillable=[
    	'top_title',
        'sub_title',
        'image',
        'color'
    ];
}
