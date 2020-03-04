<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catwiseservice extends Model
{
    protected $table="catwiseservice";
    protected $primaryKey="id";
    protected $fillable=[
    	'image',
        'name',
    	'description'
    ];
}
