<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalContract extends Model
{

    use HasFactory;
    protected $table = 'tb_rental_contract';

    protected $primaryKey = 'contract_id';

    protected $fillable = ['contract_id','user_id','car_id','contract_date','pickup_date','return_date','rental_price','service_cost','pickup_address','shipping_cost','contract_value','deposit','status','comment'];
    public $timestamps = false;


}
