<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blog";
    protected $primaryKey="id";
    protected $fillable=[
    	'name',
        'blog_title',
    	'description',
    	'publication_status',
    	'blog_img'
    ];
}
