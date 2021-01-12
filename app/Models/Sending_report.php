<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sending_report extends Model
{
    protected $table = 'sending_reports';
    protected $fillable=['report_periods_id', 'reports_template_id', 'reg_id', 'destination'];
    use HasFactory;
}
