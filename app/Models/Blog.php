<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table='tb_blog';
    protected $primaryKey = 'blog_id';
    protected $fillable = ['blog_id','title','content','blog_pic',];
      // remove update_at, create_at in SQL insert/update query

}
