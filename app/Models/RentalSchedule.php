<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalSchedule extends Model
{
    public $timestamps = FALSE;
    use HasFactory;
    protected $table = 'tb_rental_schedule';

    protected $primaryKey = 'schedule_id';

    protected $fillable = ['id_rental_contract','car_id','start_date','end_date','status','note'];
}
