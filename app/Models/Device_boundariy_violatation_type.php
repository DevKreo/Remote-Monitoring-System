<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device_boundariy_violatation_type extends Model
{
    protected $table = 'device_boundariy_violatation_types';
    protected $filleble = ['dev_bound_id', 'vio_id'];
    use HasFactory;
}
