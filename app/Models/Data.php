<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'actual_mileage', 'work_days', 'petrol_per_day', 'average_monthly_income', 'fin_goal'];
}
