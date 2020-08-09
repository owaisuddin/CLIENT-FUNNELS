<?php

namespace App\Http\Controllers;

use App\Campaigns;
use App\WebinarRegistration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $campaign_count = Campaigns::all()->count();
        $registration_count = WebinarRegistration::all()->count();
        return view('home')->with(compact('registration_count','campaign_count'));
    }
}
