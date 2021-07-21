<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPic extends Model
{

    use HasFactory;
    protected $table = 'tb_car_pic';

    protected $primaryKey = 'pic_id';

    protected $fillable = ['car_id' ,'image', 'image_left', 'image_right', 'image_behind'];

    public function car()
    {
        return $this->hasOne(CarRental::class, 'car_id');
    }

}
