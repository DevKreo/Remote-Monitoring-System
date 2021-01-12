<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_template extends Model
{
    protected $table='report_templates';
    protected $fillable=['template_name', 'devices_id', 'parametrs_id'];
    use HasFactory;
}
