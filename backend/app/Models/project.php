<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'status', 'user_id', 'company_id'];
}
