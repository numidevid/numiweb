<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    Use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'year',
        'short_description',
    ];
}
