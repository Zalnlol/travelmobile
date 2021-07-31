<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'tb_review';

    protected $fillable = ['star_num', 'comment'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'review_users');
    }

}
