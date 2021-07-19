<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MFGCar extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'tb_car_mfg';
    protected $primaryKey = 'mgf_id';
    protected $fillable = ['mfg_id','name' ,'logo','nation','website','update_at','create_at'];
}
