<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device_boundarie extends Model
{
    protected $table='device_boundaries';
    protected $fillable=['device_bound_neme', 'region_id', 'speed_mode','movement_states','bound_group_id'];
    use HasFactory;
}
