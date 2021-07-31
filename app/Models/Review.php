<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'tb_review';

    protected $fillable = ['user_id', 'car_id', 'contract_id','star_num', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

}
