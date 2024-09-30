<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{   
    protected $table = 'hotels';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'phone_number', 'image1', 'image2', 'image3', 'description','location','price'];
    use HasFactory;
}
