<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles_privelegies_dictionary extends Model
{
    protected $table = 'roles_privelegies_dictionaries';
    protected $filleble=['roles_id', 'previleg_id'];
    use HasFactory;
}
