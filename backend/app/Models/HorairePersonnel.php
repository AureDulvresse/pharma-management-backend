<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorairePersonnel extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'day_of_week', 'begin_hour', 'end_hour'];

}
