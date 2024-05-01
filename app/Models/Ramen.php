<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ramen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'type',
        'taste',
        'image',
        'time_open',
        'time_close',
        'date_open',
        'day_close',
    ];
}
