<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    protected $fillable=['name', 'password', 'email','device_group_ip','roles_id','registration_date'];
    use HasFactory;
}
