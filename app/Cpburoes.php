<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpburoes extends Model
{
    protected $table="cpburoes";
    protected $primaryKey="id";
    protected $fillable=[
    	'title',
    	'desone',
        'destwo'
    ];
}
