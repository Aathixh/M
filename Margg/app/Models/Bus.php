<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'Bus No',
        'Arrival Time',
        'Date',
        'Duration',
        'Departure Time',
        'Arrival Date',
        'From',
        'To',
        'Price',
    ];
}
