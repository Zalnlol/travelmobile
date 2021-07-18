<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMFG extends Model
{
    use HasFactory;

    public $timestamps = FALSE;

    protected $table = 'tb_car_mfg';
    
    protected $fillable = ['mfg_id','name' ,'logo','nation','website'];
}
