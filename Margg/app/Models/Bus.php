<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'Bus_No',
        'Arrival_Time',
        'Date',
        'Duration',
        'Departure_Time',
        'Arrival_Date',
        'From',
        'To',
        'Price',
    ];
}
