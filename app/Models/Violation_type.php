<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violation_type extends Model
{
    protected $table='violation_types';
    protected $fillable=['violation_neme', 'description'];
    use HasFactory;
}
