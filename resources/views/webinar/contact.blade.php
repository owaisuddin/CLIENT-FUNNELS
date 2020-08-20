<div id="view-campaign-reg-booking-modal" class="modal hmodal-success show" tabindex="-1" role="dialog"
     data-backdrop="static" data-keyboard="false" style="display: block; padding-right: 14.9935px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h5 class="modal-title">Contact Registration &amp; Booking</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-messages" style="display: none;"></div>

            <div class="modal-body">


                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="page-categories">

                            <ul class="nav nav-pills nav-pills-rose nav-pills-icons justify-content-center"
                                role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link view-rb-modal-tab-reg active show" data-toggle="tab"
                                       href="#view-crb-reg" role="tablist">
                                        <i class="fa fa-check"></i> Registration
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link view-rb-modal-tab-booking" data-toggle="tab"
                                       href="#view-crb-booking" role="tablist">
                                        <i class="fa fa-calendar"></i> Booking
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link view-rb-modal-tab-questionnaire" data-toggle="tab"
                                       href="#view-crb-questionnaire" role="tablist">
                                        <i class="fas fa-question-circle"></i> Questionnaire
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link view-rb-modal-tab-contact" data-toggle="tab"
                                       href="#view-crb-contact" role="tablist">
                                        <i class="fas fa-user"></i> Contact
                                    </a>
                                </li>

                            </ul>

                            <hr>

                            <div class="tab-content tab-space tab-subcategories">

                                <div class="tab-pane view-rb-modal-tab-reg active show" id="view-crb-reg">
                                    <h4 class="text-center"><strong>Registration Details</strong></h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Registration ID:</strong>
                                        </div>
                                        <div class="col-sm-8 vcr-data-reg_id">{{$campaign['id']}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Name:</strong>
                                        </div>
                                        <div class="col-sm-8 vcr-data-name">{{$campaign['webinarRegistration'][0]['first_name']}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Email:</strong>
                                        </div>
                                        <div class="col-sm-8 vcr-data-email">{{$campaign['webinarRegistration'][0]['email']}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Mobile:</strong>
                                        </div>
                                        <div class="col-sm-8 vcr-data-mobile"><img
                                                    src
                                                    alt="">
                                            {{$campaign['webinarBooking'][0]['mobile']}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Campaign:</strong>
                                        </div>
                                        <div class="col-sm-8 vcr-data-campaign">{{$campaign['campaignPublish']['campaign_name']}} (ID: {{$campaign['id']}})</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Campaign Stage:</strong>
                                        </div>
                                        <div class="col-sm-8 vcr-data-stage">Indoctrination</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Webinar Watched:</strong>
                                        </div>
                                        <div class="col-sm-8 vcr-data-webinar_watched"></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Registered:</strong>
                                        </div>
                                        <div class="col-sm-8 vcr-data-registered">3rd August 2020 12:51:59</div>
                                    </div>
                                    <hr>

                                </div>

                                <div class="tab-pane view-rb-modal-tab-booking" id="view-crb-booking">

                                    <h4 class="text-center"><strong>Booking Details</strong></h4>
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle"></i> This is the booking made during the
                                        webinar, checkout the contact for more bookings made!
                                    </div>
                                    <hr>

                                    <div class="vcb-datawrap">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Booked Call ID:</strong>
                                            </div>
                                            <div class="col-sm-8 vcb-data-booked_call_id">3483</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Booked With:</strong>
                                            </div>
                                            <div class="col-sm-8 vcb-data-booked_with">Helena Hill</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Call Start:</strong>
                                            </div>
                                            <div class="col-sm-8 vcb-data-call_start">4th August 2020 13:00:00</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Call End:</strong>
                                            </div>
                                            <div class="col-sm-8 vcb-data-call_end">4th August 2020 15:00:00</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Call Duration:</strong>
                                            </div>
                                            <div class="col-sm-8 vcb-data-call_duration">2 hours</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Booked:</strong>
                                            </div>
                                            <div class="col-sm-8 vcb-data-booked">3rd August 2020 12:52:00</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Call Status:</strong>
                                            </div>
                                            <div class="col-sm-8 vcb-data-status"><span class="text-danger"><i
                                                            class="fas fa-exclamation-triangle"></i> Waiting for call</span>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="vcb-no-data" style="display: none;">
                                        <div class="alert alert-danger">
                                            Contact has not booked a call themselves yet.
                                        </div>
                                    </div>


                                </div>

                                <div class="tab-pane view-rb-modal-tab-questionnaire" id="view-crb-questionnaire">
                                    <h4 class="text-center"><strong>Questionnaire</strong></h4>

                                    <div class="vcq-qa-template" style="display: none">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <strong></strong>
                                            </div>
                                            <div class="col-sm-6>"></div>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="vcq-datawrap" style="display: none;">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Questionnaire ID:</strong>
                                            </div>
                                            <div class="col-sm-8 vcq-data-questionnaire_id"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Saved:</strong>
                                            </div>
                                            <div class="col-sm-8 vcq-data-saved"></div>
                                        </div>
                                        <hr>
                                        <div class="row text-success">
                                            <div class="col-sm-6">
                                                <strong>Question</strong>
                                            </div>
                                            <div class="col-sm-6>"><strong>User Answer</strong></div>
                                        </div>
                                        <hr>
                                        <hr>
                                        <div class="vcq-qa-op"></div>


                                    </div>

                                    <div class="vcq-no-data">
                                        <div class="alert alert-warning">
                                            User has not answered the questionnaire OR questionnaire not set in
                                            campaign.
                                        </div>
                                    </div>

                                </div>


                                <div class="tab-pane view-rb-modal-tab-contact" id="view-crb-contact">
                                    <h4 class="text-center"><strong>Contact</strong></h4>

                                    <hr>

                                    <div class="vcc-datawrap">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Contact ID:</strong>
                                            </div>
                                            <div class="col-sm-8 vcc-data-contact_id">123213</div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Contact Name:</strong>
                                            </div>
                                            <div class="col-sm-8 vcc-data-name">{{$campaign['webinarRegistration'][0]['first_name']}}</div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Notes:</strong>
                                            </div>
                                            <div class="col-sm-8 vcc-data-notes"></div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Created:</strong>
                                            </div>
                                            <div class="col-sm-8 vcc-data-created">
                                                {{date("F j, Y, g:i a", strtotime($campaign['webinarRegistration'][0]['created_at']))}}
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <strong>Created By:</strong>
                                            </div>
                                            <div class="col-sm-8 vcc-data-created_by"><span class="label label-warning">System</span>
                                            </div>
                                            <hr>
                                        </div>
                                        <a href="javascript:void(0)"
                                           class="btn btn-success vcc-view-url" id="contact_url">
                                            <i class="fa fa-arrow-right"></i> View Contact
                                        </a>
                                    </div>

                                    <div class="vcc-no-data" style="display: none;">
                                        <div class="alert alert-danger">
                                            Deleted Contact
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close
                <div class="ripple-container">
                    <div class="ripple-decorator ripple-on ripple-out"
                         style="left: 5.71924px; top: 17.3869px; background-color: rgb(255, 255, 255); transform: scale(8.12185);"></div>
                </div>
            </button>

        </div>

    </div>
</div>