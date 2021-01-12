<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table='devices';
    protected $fillable=['serial_number', 'device_groups_id','cord','cord_latitude','cord_longtitude','device_type_id',
'device_boundaries_id','installation_date','date_of_deletion','device_developer_id','performance'];
    use HasFactory;
}
