<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderquote extends Model
{
    protected $table="orderquote";
    protected $primaryKey="id";
    protected $fillable=[
    	'quantity',
        'service_id',
        'email'
    ];
}
