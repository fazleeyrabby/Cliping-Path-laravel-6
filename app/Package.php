<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table="package";
    protected $primaryKey="pkg_id";
    protected $fillable=[
    	'pkg_name',
        'description',
        'amount',
        'publication_status'
    ];
}
