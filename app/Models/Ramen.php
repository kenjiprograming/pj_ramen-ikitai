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
        'time_open_2',
        'time_close_2',
        'date_open',
        'day_close',
        'url',
    ];
}
