<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    protected $table='errors';
    protected $fillable=['message_error', 'message_for_user', 'error_type_id'];
    use HasFactory;
}
