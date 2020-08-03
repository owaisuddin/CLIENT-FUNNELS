<?php

namespace App\Http\Controllers;

use App\Campaigns;
use App\WebinarBooking;
use App\WebinarRegistration;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $campaign = Campaigns::with(['campaignLead'])->where('id',$id)->first();
        return view('webinar.lead')->with(compact('campaign',$campaign));
    }

    public function bookingWebinar(Request $request,$id){
        return view('webinar.booking')->with('campaign_id',$id);
    }

    public function saveBookingWebinar(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'country_code' => 'required',
            'mobile' => 'required',
            'call_slot' => 'required',
        ]);

        WebinarBooking::create($request->all());

        return view('webinar.completed');
    }

    public function registrationWebinar(Request $request){
        $webinar_info = WebinarRegistration::create($request->all());

        return view('webinar.congratulation')->with('webinar_info',$webinar_info);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCampaignDetail(Request $request){
        $campaign = Campaigns::with('webinarRegistration','webinarBooking', 'campaignPublish')->where('id',$request->get('id'))->first();
        return view('webinar.contact')->with('campaign',$campaign);
    }
}
