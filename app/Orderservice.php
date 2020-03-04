<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderservice extends Model
{
    protected $table="orderservice";
    protected $primaryKey="id";
    protected $fillable=[
    	'order_id',
        'service_id'
    ];
}
