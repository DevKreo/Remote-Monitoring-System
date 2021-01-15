<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device_poll extends Model
{
    protected $table='device_polls';
    protected $fillable=['date', 'devices_id', 'violation_quantity','transition','performance'];
    use HasFactory;
}
