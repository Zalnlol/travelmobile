<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPic extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'tb_car_pic';

    protected $primaryKey = 'pic_id';

    protected $fillable = ['car_id' ,'image'];

}
