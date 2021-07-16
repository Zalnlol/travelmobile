<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'tb_car_type';

    protected $primaryKey = 'type_id';

    protected $fillable = ['mfg_id','model' ,'suggest_price','fuel_type','seatnum','car_style'];
}
