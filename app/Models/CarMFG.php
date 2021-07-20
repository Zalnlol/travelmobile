<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMFG extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    public $incrementing = false;
    protected $table = 'tb_car_mfg';
    protected $primaryKey = 'mfg_id';
    protected $fillable = ['name' ,'logo','nation','website','update_at','create_at'];
}
