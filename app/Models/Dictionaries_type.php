<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictionaries_type extends Model
{
    
    protected $table='dictionaries_types';
    protected $fillable=['dict_type_name'];
    use HasFactory;
}
