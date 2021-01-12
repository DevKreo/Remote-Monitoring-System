<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requests';
    protected $fillable=['r_status_id', 'operators_id', 'devices_id', 'responsible_user_id', 'opend', 'closed', 'description'];
    use HasFactory;
}
