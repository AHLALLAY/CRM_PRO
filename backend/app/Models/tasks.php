<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $fillable = ['title', 'start_date', 'end_date', 'phase', 'status', 'responsable', 'project_id',];
}
