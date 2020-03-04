<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Termcondition extends Model
{
    protected $table="termcondition";
    protected $primaryKey="id";
    protected $fillable=[
    	'title',
        'description'
    ];
}
