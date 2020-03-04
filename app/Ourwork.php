<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ourwork extends Model
{
    protected $table="ourwork";
    protected $primaryKey="id";
    protected $fillable=[
    	'title',
        'description',
    	'atach_file'
    ];
}
