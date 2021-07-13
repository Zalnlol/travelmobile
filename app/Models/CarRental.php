<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRental extends Model
{
    use HasFactory;

    protected $fillable = ['car_id' ,'plate_id', 'brand', 'name', 'seatnum', 'auto', 'fuel', 'consumption', 'description', 'model_year',
                            'rent_price', 'convertible', 'bluetooth', 'gps', 'usb', 'kid_chair', 'map', 'camera', 'address', 'discount_weekly',
                            'discount_monthly', 'free_ship_distance', 'max_ship_distance', 'shipping_price_km','max_travel_distance',
                            'over_max_travel_cost', 'rules', 'status', 'approval'];
                

}
