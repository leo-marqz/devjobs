<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    //definiendo ese campo de tabla hacer formateado como fecha
    protected $dates = ['last_day_apply'];
    protected $fillable = [
        'salary_id',
        'category_id',
        'user_id',
        'title',
        'company',
        'last_day_apply',
        'description',
        'image',
    ];
}
