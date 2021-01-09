<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error_message extends Model
{
    protected $table='error_messages';
    protected $fillable=['message_error', 'message_for_user'];
    use HasFactory;
}
