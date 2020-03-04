<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clpngpbd extends Model
{
    protected $table="clpngpbd";
    protected $primaryKey="id";
    protected $fillable=[
    	'image',
        'name',
    	'description'
    ];
}
