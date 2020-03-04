<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliveryorder extends Model
{
    protected $table="deliveryorder";
    protected $primaryKey="delivryordr_id";
    protected $fillable=[
        'order_id',
        'user_id',
        'update_file'
    ];
}
