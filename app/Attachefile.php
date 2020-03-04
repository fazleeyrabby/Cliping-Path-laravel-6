<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachefile extends Model
{
    protected $table="attachefile";
    protected $primaryKey="id";
    protected $fillable=[
    	'title',
        'description',
    	'atach_file'
    ];
}
