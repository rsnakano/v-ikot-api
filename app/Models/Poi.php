<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poi extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'history',
        'courses',
        'offices',
        'top',
        'bottom',
        'left',
        'right'
    ];
}
