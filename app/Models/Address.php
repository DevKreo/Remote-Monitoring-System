<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='adresses';
    protected $fillable=['adress', 'region_id', 'count_of_device','device_id'];
    use HasFactory;
}
