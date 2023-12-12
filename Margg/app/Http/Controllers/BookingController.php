<?php

namespace App\Http\Controllers;

use App\Models\Bus;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function index()
    {
        $BusDetails = Bus::all();
        return view('booking.menu', ['BusData' => $BusDetails]);
    }

}
