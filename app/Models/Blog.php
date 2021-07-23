<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table='tb_blog';
    protected $fillable = ['blog_id','title','content','blog_pic','post_date'];
    public $timestamps = false;  // remove update_at, create_at in SQL insert/update query
}
