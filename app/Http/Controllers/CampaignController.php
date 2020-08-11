<?php

namespace App\Http\Controllers;

use App\Booking;
use App\CampaignCommunication;
use App\CampaignContent;
use App\CampaignPublish;
use App\Campaigns;
use App\LeadPage;
use App\Questionnaire;
use App\Rapport;
use App\User;
use App\WebinarHolding;
use App\WebinarRoom;
use App\WebinarVideos;
use Illuminate\Http\Request;
use Validator, Hash, Auth, Session, Redirect,DB;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $campaign = Campaigns::with('webinarRegistration','webinarBooking')->where('id',$id)->first();

        return view('campaign.view')->with(compact('campaign',$campaign));
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
    public function show()
    {
        $campaigns = Campaigns::with('webinarRegistration','webinarBooking', 'campaignPublish')->where('is_deleted',0)->get();

        return view('campaign.index')->with('campaigns',$campaigns);
    }


    public function startCampaign(Request $request){

        $campaign = new Campaigns();
        $last_record = Campaigns::orderBy('id','desc')->first();
        $last_record_id = !empty($last_record) ? $last_record['id'] : 0;

        $campaign->name = $request->get('form_data')['name'];
        $campaign->note = $request->get('form_data')['notes'];
        $campaign->user_id = Auth::user()->id;
        $campaign->webinar_url = env('APP_URL') . '/webinar/lead/'.($last_record_id+1);
        $campaign->booking_url = env('APP_URL') . '/booking/'.($last_record_id+1);
        $campaign->save();

        return env('APP_URL').'/edit-campaign/'.$campaign->id;

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $webinar_videos = WebinarVideos::all();
        return view('campaign.edit')->with(compact('id','webinar_videos'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Campaigns::where('id',$id)->update(['is_deleted'=>1]);
        return redirect('campaigns');
    }

    public function editCampaign(Request $request){

        $values = array();
        parse_str($request->get('form_data'),$values);

        $leadPage = [
            'campaign_id' => $values['campaign_id'],
            'title' => $values['lead_page']['title'],
            'subheading' => $values['lead_page']['subheading'],
            'training_start_text' => $values['lead_page']['training_starts_text'],
            'learn_title' => $values['lead_page']['learn_title'],
            'learn_list' => serialize($values['lead_page']['learn_list']),
            'image' => $values['lead_page']['image'],
            'presenter_title' => $values['lead_page']['presenter_title'],
            'presenter_name' => $values['lead_page']['presenter_name'],
            'presenter_text' => $values['lead_page']['presenter_text'],
        ] ;

        $questionnaire = [
            'campaign_id' => $values['campaign_id'],
            'title' => $values['questionnaire']['title'],
            'description' => $values['questionnaire']['description'],
            'questions' => serialize($values['questionnaire_questions']),
        ];

        $indoctrination = [
            'campaign_id' => $values['campaign_id'],
            'text' => $values['indoctrination']['page']['text'],
            'title' => $values['indoctrination']['page']['title'],
            'subheading' => $values['indoctrination']['page']['subheading'],
            'indoctrination_video_id' => $values['indoctrination']['page']['indoctrination_video_id'],
            'display' => $values['indoctrination']['display'],
            'option' => $values['indoctrination']['option'],
            'link' => $values['indoctrination']['link']
        ];

        $campaignContent = [
            'campaign_id' => $values['campaign_id'],
            'webinar_video_id' => $values['webinar_video_id']
        ];

        $campaignCommunication = [
            'campaign_id' => $values['campaign_id'],
            'emails' => serialize($values['coms']['emails']),
            'texts' => serialize($values['coms']['texts']),
        ];

        $campaignPublish = [
            'campaign_id' => $values['campaign_id'],
            'campaign_name' => $values['campaign_name'],
            'campaign_name' => $values['campaign_status'],
            'campaign_name' => $values['campaign_notes'],
        ];

        $values['holding_page']['campaign_id'] = $values['campaign_id'];
        $values['webinar_popup']['campaign_id'] = $values['campaign_id'];
        $values['booking_options']['campaign_id'] = $values['campaign_id'];

        DB::beginTransaction();

        try {
            CampaignContent::create($campaignContent);
            CampaignCommunication::create($campaignCommunication);
            CampaignPublish::create($campaignPublish);
            Rapport::create($indoctrination);
            WebinarHolding::create($values['holding_page']);
            WebinarRoom::create($values['webinar_popup']);
            Booking::create($values['booking_options']);
            Questionnaire::create($questionnaire);
            LeadPage::create($leadPage);
            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
        return env('APP_URL').'/campaigns';
    }

    public function newWebinarVideo(Request $request){

        $file_info = $request->file('webinar');
        $filename = $file_info->getClientOriginalName();
        $path = public_path().'/uploads/';
        $file = $file_info;
        $file->move($path, $filename);
        Campaigns::where('id',$request->get('campaign_id'))->update(['preview_video'=>$filename]);
        WebinarVideos::create(['videos' => $filename]);
        return array(
          'result' => 'success',
          'message' => 'upload video successfully',
          'return_data' => $file_info
        );
    }

    public function newCampaignVideo(Request $request){
        $file_info = $request->file('webinar');
        $filename = $file_info->getClientOriginalName();
        $path = public_path().'/uploads/';
        $file = $file_info;
        $file->move($path, $filename);
        Campaigns::where('id',$request->get('campaign_id'))->update(['webinar_video'=>$filename]);
        WebinarVideos::create(['videos' => $filename]);

        return array(
            'result' => 'success',
            'message' => 'upload video successfully',
            'return_data' => $file_info
        );
    }
}
