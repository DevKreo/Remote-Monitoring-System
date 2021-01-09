<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class S_n_m_p_branche extends Model
{
    protected $table='s_n_m_p_branches';
    protected $fillable=['branch_name', 'OID'];
    use HasFactory;
}
