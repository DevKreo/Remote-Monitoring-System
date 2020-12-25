<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Boundary_groupFactory;

class Boundary_group extends Model
{
    protected $table = 'boundary_groups';
    protected $fillable = ['group_name'];
    
    use HasFactory;
}
