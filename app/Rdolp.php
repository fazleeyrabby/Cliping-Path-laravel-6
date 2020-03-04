<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdolp extends Model
{
    protected $table="rdolp";
    protected $primaryKey="id";
    protected $fillable=[
    	'sec_title',
        'image',
    	'title'
    ];
}
