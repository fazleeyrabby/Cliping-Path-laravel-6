<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacypolicy extends Model
{
    protected $table="privacypolicy";
    protected $primaryKey="id";
    protected $fillable=[
    	'title',
        'description'
    ];
}
