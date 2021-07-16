<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'tb_review';

    protected $fillable = ['star_num', 'comment'];

    public function car_rental()
    {
        $this->hasMany(CarRental::class, 'car_id');
    }
}
