<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_car_type';
    protected $primaryKey = 'type_id';
    protected $fillable = ['type_id','mfg_id','model' ,'suggest_price','fuel_type','seatnum','car_style','upadted_at','created_at'];
    public $incrementing = true;
    
}
