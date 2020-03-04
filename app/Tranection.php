<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tranection extends Model
{
    protected $table="tranection";
    protected $primaryKey="id";
    protected $fillable=[
    	'sender_number',
    	'user_id',
        'trx_id',
        'random_trx_id',
        'bank_number',
        'amount',
        'payment_type',
        'payment_status'
    ];
}
