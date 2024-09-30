<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{   
    protected $table = 'shedules';
    protected $primaryKey = 'id';
    protected $fillable = ['start_station', 'end_station', 'start_time', 'end_time', 'fprice', 'sprice', 'tprice'];
    use HasFactory;
}
