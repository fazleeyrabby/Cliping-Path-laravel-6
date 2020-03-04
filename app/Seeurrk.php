<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seeurrk extends Model
{
    protected $table="seeurrk";
    protected $primaryKey="id";
    protected $fillable=[
    	'text',
        'image'
    ];
}
