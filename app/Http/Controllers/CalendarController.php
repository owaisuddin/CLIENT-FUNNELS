<?php

namespace App\Http\Controllers;

use App\WebinarBooking;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        $webinar = WebinarBooking::with('WebinarBooking')->get();

        return view('calendar')->with('data',$webinar);
    }

    public function getEvents()
    {
        return array("result" => "success", "message" => "", "return_data" => [

        ]);
    }

    public function getBookingData(Request $request){
        $webinarData = WebinarBooking::where('id',$request->get('booking_id'))->first();
        return $webinarData;
    }
}
