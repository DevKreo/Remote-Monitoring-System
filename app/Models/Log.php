<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table='logs';
    protected $fillable=['log_time', 'devices_id', 'users_id', 'operation_type_id'];
    use HasFactory;
}
