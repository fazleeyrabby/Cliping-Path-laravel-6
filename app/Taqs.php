<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taqs extends Model
{
    protected $table="taqs";
    protected $primaryKey="id";
    protected $fillable=[
    	'name'
    ];
}
