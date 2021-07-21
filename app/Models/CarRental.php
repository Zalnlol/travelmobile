<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRental extends Model
{
    use HasFactory; 

    protected $table = 'tb_car_rental';

    protected $primaryKey = 'car_id';

    protected $fillable = ['user_id' ,'type_id', 'plate_id', 'brand', 'name', 'seatnum', 'auto', 'fuel', 'consumption', 'description', 
    'model_year','rent_price', 'convertible', 'bluetooth', 'gps', 'usb', 'kid_chair', 'map','camera', 'address','lat','lng', 'discount_weekly',
    'discount_monthly', 'free_ship_distance', 'max_ship_distance', 'shipping_price_km','max_travel_distance','over_max_travel_cost',
    'rules', 'status', 'approval'];
    

    public function review()
    {
        return $this->belongsTo(Review::class, 'car_id');
    }

    public function image()
    {
        return $this->belongsTo(CarPic::class, 'car_id');
    }
}
