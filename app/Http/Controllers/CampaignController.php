<?php

namespace App\Http\Controllers;

use App\Campaigns;
use Illuminate\Http\Request;
use Validator, Hash, Auth, Session, Redirect;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $campaigns = Campaigns::all();
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
        return view('campaign.edit')->with('id',$id);
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
        //
    }
}
