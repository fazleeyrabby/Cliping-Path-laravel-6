<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="order";
    protected $primaryKey="order_id";
    protected $fillable=[
        'user_id',
        'ran_order_id',
        'payment_id',
        'package_id',
        'amount',
        'address',
        'currency',
        'order_status',
        'status',
        'first_name',
        'last_name',
        'email',
        'quantity',
        'resize_image',
        'image_width',
        'image_height',
        'attache_zip',
        'set_margin',
        'additional_comment'
    ];
}
