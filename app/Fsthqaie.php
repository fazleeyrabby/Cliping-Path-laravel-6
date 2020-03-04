<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fsthqaie extends Model
{
   protected $table="fsthqaie";
    protected $primaryKey="id";
    protected $fillable=[
    	'name',
    	'category',
        'description',
    	'image'
    ];
}
