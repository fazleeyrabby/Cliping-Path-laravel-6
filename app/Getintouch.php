<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getintouch extends Model
{
    Protected $table = 'getintouch';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'first_name',
    	'last_name',
    	'email',
    	'comment'
    ];
}
