<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Howitwork extends Model
{
    protected $table="howitwork";
    protected $primaryKey="id";
    protected $fillable=[
    	'title',
        'iamge'
    ];
}
