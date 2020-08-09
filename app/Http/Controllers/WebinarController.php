<?php

namespace App\Http\Controllers;

use App\Campaigns;
use App\LeadPage;
use App\Questionnaire;
use App\WebinarBooking;
use App\webinarCallSlot;
use App\WebinarQuestions;
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

        $webinar_info = WebinarBooking::create($request->all());
        $campaign = Questionnaire::where('campaign_id',$request->get('campaign_id'))->first();
        return view('webinar.questions')->with(compact('campaign','webinar_info'));
    }

    public function registrationWebinar(Request $request){
        $webinar_info = WebinarRegistration::create($request->all());
        $campaign = Campaigns::where('id',$request->get('campaign_id'))->first();
        return view('webinar.congratulation')->with(compact('webinar_info','campaign'));
    }

    public function getCampaignVideo(Request $request,$id){
        $campaign = Campaigns::where('id',$id)->first();
        $lead_pages = LeadPage::where('campaign_id',$id)->first();

        return view('webinar.webinar_video')->with(compact('campaign','lead_pages'));
    }

    public function callSlot(Request $request){
        $webinar_info = WebinarBooking::create($request->all());
        $campaign = Questionnaire::where('campaign_id',$request->get('campaign_id'))->first();
        return view('webinar.questions')->with(compact('campaign','webinar_info'));
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
    public function submitQuestion(Request $request)
    {
        $request['questions'] = serialize($request['questions']);
        $request['answers'] = serialize($request['answers']);
        $campaign = Questionnaire::where('campaign_id',$request->get('campaign_id'))->first();
        return view('webinar.after_call_slot')->with(compact('campaign'));
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
