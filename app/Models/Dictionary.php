<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table='dictionaries';
    protected $fillable=['name', 'dict_type_id'];
    use HasFactory;
    
}
