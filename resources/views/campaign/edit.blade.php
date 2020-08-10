@extends('layouts.app')
@section('content')
    <link href="https://www.clientfunnels.io/vendor/select2/select2-bootstrap.css" rel="stylesheet" />
    <link href="https://www.clientfunnels.io/vendor/select2/select2.css" rel="stylesheet" />
    <link href="https://www.clientfunnels.io/vendor/slim-image-cropper/css/slim.min.css" rel="stylesheet" />
<div class="wrapper ">

    <div class="main-panel">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="https://www.clientfunnels.io/">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="New Contact Messages">
                                <i class="material-icons" style="font-size: 3em;">chat</i>
                                <span class="notification header-total-new-messages" style="display: none"></span>
                                <p class="d-lg-none d-md-block">
                                    New Contact Message
                                </p>
                                <div class="ripple-container"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="https://www.clientfunnels.io/contacts?new-messages">View Contacts With&nbsp;<span class="header-total-new-messages"></span>&nbsp;New Messages</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link" href="https://www.clientfunnels.io/admin/credits" title="SMS Credits">
                                <i class="fas fa-2x fa-comments-dollar"></i>
                                <span class=" header-total-credits"></span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons" style="font-size: 3em;">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                                <div class="ripple-container"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="https://www.clientfunnels.io/my-account">My Account</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://www.clientfunnels.io/logout">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
        <!-- End Navbar -->

        <div class="content">
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12" id="page_messages"></div>
                    </div><style type="text/css">
                        .modal-backdrop {
                            opacity: 1 !important;
                        }
                    </style>
                    <div class="row">
                        <div class="col-md-12 mr-auto ml-auto">

                            <div class="campaign-lp-preview-wrap" style="display: none">
                                <button class="btn btn-success max-width campaign-lp-preview-return" type="button">
                                    <i class="fa fa-arrow-left"></i> Return to Editing
                                </button>
                                <hr />
                                <div class="embed-responsive embed-responsive-1by1">

                                    <iframe id="campaign-lp-preview-iframe" class="embed-responsive-item" src="https://www.clientfunnels.io/campaigns/preview_campaign_page/lead"></iframe>
                                </div>
                            </div>

                            <div class="campaign-whp-preview-wrap" style="display: none">
                                <button class="btn btn-success max-width campaign-whp-preview-return" type="button">
                                    <i class="fa fa-arrow-left"></i> Return to Editing
                                </button>
                                <hr />
                                <div class="embed-responsive embed-responsive-1by1">

                                    <iframe id="campaign-whp-preview-iframe" class="embed-responsive-item" src="https://www.clientfunnels.io/campaigns/preview_campaign_page/waiting"></iframe>
                                </div>
                            </div>

                            <div class="campaign-in-preview-wrap" style="display: none">
                                <button class="btn btn-success max-width campaign-in-preview-return" type="button">
                                    <i class="fa fa-arrow-left"></i> Return to Editing
                                </button>
                                <hr />
                                <div class="embed-responsive embed-responsive-1by1">

                                    <iframe id="campaign-in-preview-iframe" class="embed-responsive-item" src="https://www.clientfunnels.io/campaigns/preview_campaign_page/indoctrination"></iframe>
                                </div>
                            </div>

                            <!--      Wizard container        -->
                            <div class="wizard-container">

                                <div class="card card-wizard" data-color="rose" id="wizardProfile">

                                    <div class="alert alert-warning text-center" role="alert">
                                        Do not refresh page unless all sections are ticked green and you have published/saved the campaign otherwise all data will be lost.
                                        <br>
                                        For tutorial setup on your campaign please <a target="_blank" style="text-decoration: underline;" data-toggle="modal" data-src="https://player.vimeo.com/video/358012894" data-target="#videoModal" class="video-btn">watch the following video</a> before building your campaign
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form id="edit-campaign-form" onSubmit="return false;">
                                        <input type="hidden" name="campaign_id" value="{{$id}}" />
                                        <div class="card-header text-center">

                                            <h3 class="card-title">
                                                Build Your Campaign
                                            </h3>
                                            <h5 class="card-description">Campaign ID: {{$id}}</h5>

                                            <div class="row">
                                                <div class="col-md-6 mr-auto ml-auto">
                                                    <div class="new-webinar-file-details" style="display: none;">

                                                        <span class="new-webinar-file-details-upload-text">0</span>% Uploaded Webinar
                                                        <div class="progress">
                                                            <div class="new-webinar-file-details-upload-bar progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="wizard-navigation">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#edit-campaign-pages-tab" data-toggle="tab" role="tab">
                                                        Pages <i class="edit-campaign-content-status-icon ecc-required fa fa-times text-danger" data-type="pages"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#edit-campaign-content-tab" data-toggle="tab" role="tab">
                                                        Content <i class="edit-campaign-content-status-icon fa fa-hand-paper text-danger" data-type="content"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#edit-campaign-communications-tab" data-toggle="tab" role="tab">
                                                        Communications <i class="edit-campaign-content-status-icon ecc-required fa fa-check text-success" data-type="communications"></i>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="#edit-campaign-publish-tab" data-toggle="tab" role="tab">
                                                        Publish <i class="edit-campaign-content-status-icon ecc-required fa fa-times text-danger" data-type="publish"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">

                                                <!-- Pages TAB -->
                                                <div class="tab-pane active" id="edit-campaign-pages-tab">

                                                    <div class="row justify-content-center">

                                                        <div class="col-md-4 col-lg-3">
                                                            <h5 class="info-text"><strong> Campaign Pages</strong></h5>
                                                            <ul class="campaign-sub-nav" role="tab" data-type="pages">
                                                                <li class="nav-item active" data-content="cp-lead" data-eq="0">
                                                                    Lead Page <i class="fa fa-times text-danger"></i>
                                                                </li>
                                                                <li class="nav-item" data-content="cp-holding" data-eq="1">
                                                                    Webinar Holding Page <i class="fa fa-times text-danger"></i>
                                                                </li>
                                                                <li class="nav-item" data-content="cp-webinar" data-eq="2">
                                                                    Webinar Room <i class="fa fa-times text-danger"></i>
                                                                </li>
                                                                <li class="nav-item" data-content="cp-booking" data-eq="3">
                                                                    Booking <i class="fa fa-times text-danger"></i>
                                                                </li>
                                                                <li class="nav-item" data-content="cp-questionnaire" data-eq="4">
                                                                    Questionnaire <i class="fa fa-times text-danger"></i>
                                                                </li>
                                                                <li class="nav-item" data-content="cp-indoctrination" data-eq="5">
                                                                    Rapport <i class="fa fa-times text-danger status"></i>
                                                                </li>
                                                            </ul>



                                                            <div class="campaign-sub-nav-progress-wrap">
                                                                <span class="cp-progress-amount">0</span>% completed
                                                                <div class="progress">
                                                                    <div class="cp-progress-bar progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-8 col-lg-9">

                                                            <div class="nav-cp-content" data-name="cp-lead" style="display: block">

                                                                <div class="campaign-lp-inputs">

                                                                    <div class="row">
                                                                        <div class="col-sm-12 text-center">
                                                                            <h3>
                                                                                <strong>Create Your Lead Page</strong>
                                                                            </h3>
                                                                            <hr />
                                                                        </div>
                                                                    </div>

                                                                    <span id="lp-form-inputs"></span>


                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">

                                                                                <label class="bmd-label-floating">Title <span class="required">*</span></label>

                                                                                <div
                                                                                        class="ec-tinymce-inline-lead"
                                                                                        data-name="lead_page[title]"
                                                                                        data-preview-target="#preview-webinar-title"
                                                                                        id="ec-lp-title"
                                                                                >How TARGET MARKET/ If You Are A.. Can Get PLEASURE & PLEASURE WITHOUT HAVING TO Using SECRET SAUCE</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">

                                                                                <label class="bmd-label-floating">Subheading</label>

                                                                                <div
                                                                                        class="ec-tinymce-inline-lead"
                                                                                        data-name="lead_page[subheading]"
                                                                                        data-preview-target="#preview-webinar-subheading"
                                                                                        id="ec-lp-subheading"
                                                                                >And the FAST, easy way to stop Pain WITHOUT HAVING TO, or WITHOUT HAVING TO .....</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr />

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">

                                                                                <label class="bmd-label-floating">Training Starts Text</label>

                                                                                <div
                                                                                        class="ec-tinymce-inline-lead"
                                                                                        data-name="lead_page[training_starts_text]"
                                                                                        data-preview-target="#preview-webinar-lead-training-starts"
                                                                                        id="ec-lp-training_starts_text"
                                                                                >Your Training Starts In...</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">

                                                                                <label class="bmd-label-floating">What Will You Learn Title</label>

                                                                                <div
                                                                                        class="ec-tinymce-inline-lead"
                                                                                        data-name="lead_page[learn_title]"
                                                                                        data-preview-target="#preview-webinar-learn-title"
                                                                                        id="ec-lp-learn_title"
                                                                                >In This 45 Minute 'No Cost' Online Training You Will Discover...</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="m-b"> What Will You Learn List </label>

                                                                                <div class="input-group">
                                                                                    <span class="edit-campaign-learn-list-number">1. </span>

                                                                                    <div class="ec-tinymce-inline-lead" data-name="lead_page[learn_list][]"
                                                                                         data-preview-target="#preview-webinar-learn-list-wrap"											  id="ec-lp-list-0"
                                                                                    >The simple, yet effective SECRET SAUCE that delivers PLEASURE 1 in TIMESCALE (Less than 3 months at most) WITHOUT HAVING TO .....</div>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span class="edit-campaign-learn-list-number">2. </span>

                                                                                    <div class="ec-tinymce-inline-lead" data-name="lead_page[learn_list][]"
                                                                                         id="ec-lp-list-1"
                                                                                    >Why MYTH (And the much easier methods that still allow you to PLEASURE)</div>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span class="edit-campaign-learn-list-number">3. </span>

                                                                                    <div class="ec-tinymce-inline-lead" data-name="lead_page[learn_list][]"
                                                                                         id="ec-lp-list-2"
                                                                                    >Do you PAIN ? Forget about doing WITHOUT HAVING TO, WITHOUT HAVING TO ,or WITHOUT HAVING TO. Instead you're about to see overlooked secrets which DO make it easy to PLEASURE and PLEASURE...</div>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span class="edit-campaign-learn-list-number">4. </span>

                                                                                    <div class="ec-tinymce-inline-lead" data-name="lead_page[learn_list][]"
                                                                                         id="ec-lp-list-3"
                                                                                    >The breakthrough strategy that is great if you have already tried Thing they have tried, Thing they have tried or Thing they have tried just to (end Pain or get to pleasure..)</div>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span class="edit-campaign-learn-list-number">5. </span>

                                                                                    <div class="ec-tinymce-inline-lead" data-name="lead_page[learn_list][]"
                                                                                         id="ec-lp-list-4"
                                                                                    >And that’s only just the beginning....</div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <hr />

                                                                    <div class="row m-b">
                                                                        <div class="col-sm-12">
                                                                            <div class="slim-image-wrapper">
                                                                                <label for="edit-campaign-lp-ri" class="bmd-label-floating"> Presenter Image</label>
                                                                                <div class="slim img-responsive" id="edit-campaign-lp-ri" data-label="Page Image" data-show-upload-btn="0" style="max-width: 500px; max-height: 600px" data-preview-target="#preview-webinar-right-img">
                                                                                    <input type="file"/>
                                                                                    <img src="" alt="Page Image">
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="lead_page[image]"/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">


                                                                                <label class="bmd-label-floating">Presenter Title</label>

                                                                                <div
                                                                                        class="ec-tinymce-inline-lead"
                                                                                        data-name="lead_page[presenter_title]"
                                                                                        data-preview-target="#preview-webinar-presenter-title"
                                                                                        id="ec-lp-presenter_title"
                                                                                >Introducing Your Presenter: </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">

                                                                                <label class="bmd-label-floating">Presenter Name</label>

                                                                                <div
                                                                                        class="ec-tinymce-inline-lead"
                                                                                        data-name="lead_page[presenter_name]"
                                                                                        data-preview-target="#preview-webinar-presenter-name"
                                                                                        id="ec-lp-presenter_name"
                                                                                ></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">

                                                                                <label class="bmd-label-floating">Presenter Text</label>

                                                                                <div
                                                                                        class="ec-tinymce-inline-lead"
                                                                                        data-name="lead_page[presenter_text]"
                                                                                        data-preview-target="#preview-webinar-presenter-text"
                                                                                        id="ec-lp-presenter_text"
                                                                                >"I love finding xxxxx that are desperate for xxxxx. After working with over xxxx clients just like you, I know that you are struggling, frustrated and feeling a failure when it comes to xxxxxx. Together, on this one of a kind training we will work together in finally solving this and giving you the xxxxx Formula to ensure you xxxx quickly and easily. I cannot wait to see you on the training and showing you this system to ensure you xxxxxx"</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            &nbsp;
                                                                        </div>

                                                                    </div>
                                                                    <hr />

                                                                    <div class="row">
                                                                        <div class="col-sm-12 text-center">
                                                                            <button type="button" class="btn btn-success preview-campaign-lp">
                                                                                <i class="fas fa-palette"></i> Preview Page
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="nav-cp-content" data-name="cp-holding">

                                                                <div class="row">
                                                                    <div class="col-sm-12 text-center">
                                                                        <h3>
                                                                            <strong>Create Your Holding Page</strong>
                                                                        </h3>
                                                                        <hr />
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="edit-campaign-whp-title" class="bmd-label-floating"> Title <span class="required">*</span></label>
                                                                            <input type="text" class="form-control campaign-preview-whp-input" id="edit-campaign-whp-title" name="holding_page[title]" value="Congrats... You're Registered" data-preview-target="#webinar-preview-title">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="edit-campaign-whp-subheading" class="bmd-label-floating"> Subheading </label>
                                                                            <input type="text" class="form-control campaign-preview-whp-input" id="edit-campaign-whp-subheading" name="holding_page[subheading]" value="" data-preview-target="#webinar-preview-subheading">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="edit-campaign-whp-schedule-text" class="bmd-label-floating"> Schedule Text</label>
                                                                            <input type="text" class="form-control campaign-preview-whp-input" id="edit-campaign-whp-schedule-text" name="holding_page[schedule_text]" value="Hi [[Name]], you are confirmed for" data-preview-target="#preview-webinar-schedule-text">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="edit-campaign-whp-event-begin-text" class="bmd-label-floating"> Event Begin Text </label>
                                                                            <input type="text" class="form-control campaign-preview-whp-input" id="edit-campaign-whp-event-begin-text" name="holding_page[event_text]" value="Your event will begin in:" data-preview-target="#preview-webinar-event-begin-text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr />


                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <h3>Select Preview video</h3>
                                                                        <div class="alert alert-warning">
                                                                            <strong>DO NOT</strong> use your webinar video here, this can be a preview or intoduction while a contact waits for the webinar to start.
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-10 mt-3">
                                                                        <input type="hidden" name="holding_page[preview_video_id]" value="0" />
                                                                        <div class="row whp-preview-wrap" style="display: none">
                                                                            <div class="col-sm-6" style="font-size: 1.5em">
                                                                                <strong>Video ID: </strong><span class="whp-preview-webinar_video_id"></span><br>
                                                                                <strong>Name: </strong><span class="whp-preview-name"></span><br>
                                                                                <strong>Duration: </strong><span class="whp-preview-duration"><span class='text-danger'>Unknown</span></span><br>
                                                                                <strong>Size: </strong><span class="whp-preview-size">0B</span><br>
                                                                                <strong>Status: </strong>
                                                                                <span class="whp-preview-text_status"></span>
                                                                                <span class="whp-preview-status" style="display: none"></span>
                                                                                <hr />

                                                                                <button type="button" class="btn btn-warning edit-campaign-change-whp-video">
                                                                                    <i class="fa fa-exchange-alt"></i> Change Video
                                                                                </button>

                                                                            </div>
                                                                            <div class="col-sm-6 campaign-preview-whp-input" data-preview-target="#preview-webinar-video-col">

                                                                                <div class="whp-video-preview-rendering">
                                                                                    <div class="text-danger">
                                                                                        Video Rendering, it will be available soon.
                                                                                        <div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-double-ring"><div></div><div></div></div><style type="text/css">@keyframes lds-double-ring{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes lds-double-ring{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes lds-double-ring_reverse{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}@-webkit-keyframes lds-double-ring_reverse{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}.lds-double-ring{position:relative}.lds-double-ring div{position:absolute;width:160px;height:160px;top:20px;left:20px;border-radius:50%;border:8px solid #000;border-color:#0c0 transparent;-webkit-animation:lds-double-ring 4.5s linear infinite;animation:lds-double-ring 4.5s linear infinite}.lds-double-ring div:nth-child(2){width:140px;height:140px;top:30px;left:30px;border-color:transparent #e7008a;-webkit-animation:lds-double-ring_reverse 4.5s linear infinite;animation:lds-double-ring_reverse 4.5s linear infinite}.lds-double-ring{width:50px!important;height:50px!important;-webkit-transform:translate(-25px,-25px) scale(.25) translate(25px,25px);transform:translate(-25px,-25px) scale(.25) translate(25px,25px)}
                                                                                            </style></div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="embed-responsive embed-responsive-16by9">
                                                                                    <video id="whp-preview-video" width="320" height="240" controls poster="" data-video-status="1">
                                                                                    </video>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="whp-set-video-wrap">

                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <h3>Upload video to use in webinar holding page</h3>

                                                                                    <div class="new-webinar-file-input">
                                                                                        <strong>Upload New Media File</strong>
                                                                                        <ul>
                                                                                            <li>Max Upload Size: <strong>2GB</strong></li>
                                                                                            <li>Allowed File Types: <strong><ul ><li >mp4</li><li >wmv</li><li >mpeg</li><li >avi</li><li >flv</li><li >3gp</li><li >acc</li></ul></strong></li>
                                                                                        </ul>
                                                                                        <label class="btn btn-info btn-file">
                                                                                            Upload Video <input type="file" id="new-whp-file-upload" style="display: none;">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 whp-saved-videos-wrap">
                                                                                    <h3>Select Video</h3>

                                                                                    <select class="js-source-states-2 m-b" id="edit-campaign-whp-select" style="width: 100%">
                                                                                        <option value="">--- Select ---</option>
                                                                                        <option value="1450">
                                                                                            2Clientfunne (ID: 1450)
                                                                                        </option>
                                                                                        <option value="1439">
                                                                                            Webinar clientfunnels (ID: 1439)
                                                                                        </option>
                                                                                        <option value="1437">
                                                                                            Webinar (ID: 1437)
                                                                                        </option>
                                                                                        <option value="1436">
                                                                                            Webinar copy (ID: 1436)
                                                                                        </option>
                                                                                        <option value="1236">
                                                                                            Untitled_ May 17, 2020 8_05 PM (ID: 1236)
                                                                                        </option>
                                                                                        <option value="1235">
                                                                                            v2 Holding room (ID: 1235)
                                                                                        </option>
                                                                                        <option value="1213">
                                                                                            Webinar v1 (ID: 1213)
                                                                                        </option>
                                                                                        <option value="1212">
                                                                                            Holding room 2 (ID: 1212)
                                                                                        </option>
                                                                                    </select>

                                                                                    <button type="button" class="btn btn-success edit-campaign-use-selected-whp-video">
                                                                                        <i class="fa fa-check"></i> Use Selected Video
                                                                                    </button>

                                                                                </div>
                                                                            </div>


                                                                            <div class="new-whp-file-details" style="display: none">

                                                                                <strong>File Name: </strong><span class="new-whp-file-details-filename"></span><br>
                                                                                <strong>File Size: </strong><span class="new-whp-file-details-filesize"></span><br>

                                                                                <span class="new-whp-file-details-upload-text">0</span>% Uploaded
                                                                                <div class="progress">
                                                                                    <div class="new-whp-file-details-upload-bar progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                                </div>
                                                                                <button type="button" class="btn btn-danger cancel-whp-media-upload">
                                                                                    <i class="fa fa-times"></i> Cancel Upload
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>



                                                                <hr />
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <button type="button" class="btn btn-success max-width preview-campaign-whp">
                                                                            <i class="fas fa-palette"></i> Preview Page
                                                                        </button>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                            <div class="nav-cp-content" data-name="cp-webinar">

                                                                <div class="row">
                                                                    <div class="col-sm-12 text-center">
                                                                        <h3>
                                                                            <strong>Webinar Room</strong>
                                                                        </h3>
                                                                        <hr />
                                                                    </div>
                                                                </div>

                                                                <h4><strong>Scheduling</strong></h4>


                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="alert alert-info">
                                                                            <i class="far fa-clock"></i> Webinar will repeat every 15 minutes.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr />

                                                                <div class="row">
                                                                    <div class="col-sm-12 text-center">
                                                                        <h4>
                                                                            <strong>Webinar Popup</strong>
                                                                        </h4>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-sm-4" style="display: block;">
                                                                        <div class="togglebutton pull-right">
                                                                            <label>
                                                                                <input type="checkbox" name="webinar_popup[on]" value="1" checked>
                                                                                <span class="toggle"></span>
                                                                                Show
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">

                                                                        <div class="row ec-popup-config">
                                                                            <div class="col-sm-6">
                                                                                <label class="bmd-label-floating"> Minutes<span class="required">*</span></label>
                                                                                <input type="number" class="form-control" name="webinar_popup[minutes]" value="0" step="1" min="0" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label class="bmd-label-floating"> Seconds<span class="required">*</span></label>
                                                                                <input type="number" class="form-control" name="webinar_popup[seconds]" value="10" step="1" min="0" max="59" required>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>

                                                            <div class="nav-cp-content" data-name="cp-booking">

                                                                <div class="row">
                                                                    <div class="col-sm-12 text-center">
                                                                        <h4>
                                                                            <strong>Webinar Booking Options</strong>
                                                                        </h4>
                                                                        <hr />
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="ec-wbo-title" class="bmd-label-floating"> Title <span class="required">*</span></label>
                                                                            <input type="text" class="form-control" id="ec-wbo-title" required="true" name="booking_options[title]" value="Please Select A Suitable Call Slot Below" maxlength="100">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="ec-wbo-helpertext" class="bmd-label-floating"> Helper Text</label>
                                                                            <textarea class="form-control" rows="5" id="ec-wbo-helpertext" name="booking_options[helper]" maxlength="1000">Enter Your Details below to book a call with us.</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="ec-wbo-f-mobile" class="bmd-label-floating"> Mobile </label>

                                                                        <div class="togglebutton">
                                                                            <label>
                                                                                <input type="checkbox" name="booking_options[mobile_required]" value="1" checked>
                                                                                <span class="toggle"></span>
                                                                                Required
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-6"> </div>
                                                                </div>

                                                                <hr />

                                                                <h4>
                                                                    <strong>Data Fields</strong>
                                                                </h4>

                                                                <div class="row m-b">							  <div class="col-md-6">
                                                                        <label for="ec-wbo-f-best_number" class="bmd-label-floating"> Best Number </label>

                                                                        <div class="togglebutton">
                                                                            <label>
                                                                                <input type="checkbox" class="bo-data-fields-ask" data-type="best_number" name="booking_options[best_number][ask]" value="1">
                                                                                <span class="toggle"></span>
                                                                                Ask
                                                                            </label>
                                                                        </div>

                                                                        <div class="togglebutton">
                                                                            <label>
                                                                                <input type="checkbox" class="bo-data-fields-pair" data-type="best_number" name="booking_options[best_number][required]" value="1">
                                                                                <span class="toggle"></span>
                                                                                Required
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="ec-wbo-f-additional_information" class="bmd-label-floating"> Additional Information </label>

                                                                        <div class="togglebutton">
                                                                            <label>
                                                                                <input type="checkbox" class="bo-data-fields-ask" data-type="additional_information" name="booking_options[additional_information][ask]" value="1">
                                                                                <span class="toggle"></span>
                                                                                Ask
                                                                            </label>
                                                                        </div>

                                                                        <div class="togglebutton">
                                                                            <label>
                                                                                <input type="checkbox" class="bo-data-fields-pair" data-type="additional_information" name="booking_options[additional_information][required]" value="1">
                                                                                <span class="toggle"></span>
                                                                                Required
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                            </div>

                                                            <div class="nav-cp-content" data-name="cp-questionnaire">

                                                                <div class="row">
                                                                    <div class="col-sm-12 text-center">
                                                                        <h3>
                                                                            <strong>Questionnaire</strong>
                                                                            <div class="togglebutton pull-right" style="display:none;">
                                                                                <label>
                                                                                    <input type="checkbox" name="questionnaire_on" value="1" checked>
                                                                                    <span class="toggle"></span>
                                                                                    Show
                                                                                </label>
                                                                            </div>

                                                                        </h3>
                                                                    </div>
                                                                </div>

                                                                <hr />



                                                                <div class="questionnaire-wrap">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="edit-campaign-q-title" class="bmd-label-floating"> Title <span class="required">*</span></label>
                                                                                <input type="text" class="form-control" id="edit-campaign-q-title" required="true" name="questionnaire[title]" value="Congrats You've Booked" maxlength="100">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="edit-campaign-q-description" class="bmd-label-floating"> Description</label>
                                                                                <textarea class="form-control" rows="5" id="edit-campaign-q-description" name="questionnaire[description]" maxlength="1000">Please complete the following short questionaire below to ensure we make the most of your call</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <hr />

                                                                    <div class="row">
                                                                        <div class="col-sm-12 text-center">
                                                                            <h3>
                                                                                <strong>Questions</strong>
                                                                            </h3>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-success questionnaire-add-new-question">
                                                                                <i class="fa fa-plus"></i> New Question
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />

                                                                    <div id="questionnaire-datatable-actions-template" style="display: none">
                                                                        <input type="hidden" name="questionnaire_questions[]" value="QUESTION_DATA_REPLACE" />

                                                                        <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="up">
                                                                            <i class="fa fa-arrow-up"></i>
                                                                        </button>

                                                                        <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="down">
                                                                            <i class="fa fa-arrow-down"></i>
                                                                        </button>
                                                                        <br>
                                                                        <button type="button" class="btn btn-warning questionnaire-edit-question">
                                                                            <i class="fa fa-wrench"></i> Edit
                                                                        </button>
                                                                        <br>
                                                                        <button type="button" class="btn btn-danger questionnaire-remove-question">
                                                                            <i class="fa fa-trash"></i> Remove
                                                                        </button>
                                                                    </div>

                                                                    <div class="material-datatables">
                                                                        <table class="table table-striped table-no-bordered table-hover questionnaire-datatable" cellspacing="0" width="100%" style="width:100%">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Order</th>
                                                                                <th>Question</th>
                                                                                <th>Type</th>
                                                                                <th>Answers</th>
                                                                                <th class="text-right">Actions</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>What results are you looking to achieve in the next 90 days? (the more you share the more I can help :)</td>
                                                                                <td>Comment Box</td>			<td>
                                                                                    <strong>Max Answer Length: </strong> 100										</td>
                                                                                <td class="text-right">
                                                                                    <input type="hidden" name="questionnaire_questions[]" value="%7B%22question%22%3A%22What%20results%20are%20you%20looking%20to%20achieve%20in%20the%20next%2090%20days%3F%20%28the%20more%20you%20share%20the%20more%20I%20can%20help%20%3A%29%22%2C%22type%22%3A%22comment_box%22%2C%22required%22%3Atrue%2C%22max_length%22%3A100%7D" />

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="up">
                                                                                        <i class="fa fa-arrow-up"></i>
                                                                                    </button>

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="down">
                                                                                        <i class="fa fa-arrow-down"></i>
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-warning questionnaire-edit-question">
                                                                                        <i class="fa fa-wrench"></i> Edit
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-danger questionnaire-remove-question">
                                                                                        <i class="fa fa-trash"></i> Remove
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2</td>
                                                                                <td>How often are you experiencing the problems you are having?</td>
                                                                                <td>Comment Box</td>			<td>
                                                                                    <strong>Max Answer Length: </strong> 100										</td>
                                                                                <td class="text-right">
                                                                                    <input type="hidden" name="questionnaire_questions[]" value="%7B%22question%22%3A%22How%20often%20are%20you%20experiencing%20the%20problems%20you%20are%20having%3F%22%2C%22type%22%3A%22comment_box%22%2C%22required%22%3Atrue%2C%22max_length%22%3A100%7D" />

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="up">
                                                                                        <i class="fa fa-arrow-up"></i>
                                                                                    </button>

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="down">
                                                                                        <i class="fa fa-arrow-down"></i>
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-warning questionnaire-edit-question">
                                                                                        <i class="fa fa-wrench"></i> Edit
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-danger questionnaire-remove-question">
                                                                                        <i class="fa fa-trash"></i> Remove
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3</td>
                                                                                <td>When was the last time you had the problem?</td>
                                                                                <td>Comment Box</td>			<td>
                                                                                    <strong>Max Answer Length: </strong> 100										</td>
                                                                                <td class="text-right">
                                                                                    <input type="hidden" name="questionnaire_questions[]" value="%7B%22question%22%3A%22When%20was%20the%20last%20time%20you%20had%20the%20problem%3F%22%2C%22type%22%3A%22comment_box%22%2C%22required%22%3Atrue%2C%22max_length%22%3A100%7D" />

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="up">
                                                                                        <i class="fa fa-arrow-up"></i>
                                                                                    </button>

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="down">
                                                                                        <i class="fa fa-arrow-down"></i>
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-warning questionnaire-edit-question">
                                                                                        <i class="fa fa-wrench"></i> Edit
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-danger questionnaire-remove-question">
                                                                                        <i class="fa fa-trash"></i> Remove
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>4</td>
                                                                                <td>What solutions have you tried in the last 3 years to fix your problem?</td>
                                                                                <td>Comment Box</td>			<td>
                                                                                    <strong>Max Answer Length: </strong> 100										</td>
                                                                                <td class="text-right">
                                                                                    <input type="hidden" name="questionnaire_questions[]" value="%7B%22question%22%3A%22What%20solutions%20have%20you%20tried%20in%20the%20last%203%20years%20to%20fix%20your%20problem%3F%22%2C%22type%22%3A%22comment_box%22%2C%22required%22%3Atrue%2C%22max_length%22%3A100%7D" />

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="up">
                                                                                        <i class="fa fa-arrow-up"></i>
                                                                                    </button>

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="down">
                                                                                        <i class="fa fa-arrow-down"></i>
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-warning questionnaire-edit-question">
                                                                                        <i class="fa fa-wrench"></i> Edit
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-danger questionnaire-remove-question">
                                                                                        <i class="fa fa-trash"></i> Remove
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>5</td>
                                                                                <td>What is this problem holding you back from doing?</td>
                                                                                <td>Comment Box</td>			<td>
                                                                                    <strong>Max Answer Length: </strong> 100										</td>
                                                                                <td class="text-right">
                                                                                    <input type="hidden" name="questionnaire_questions[]" value="%7B%22question%22%3A%22What%20is%20this%20problem%20holding%20you%20back%20from%20doing%3F%22%2C%22type%22%3A%22comment_box%22%2C%22required%22%3Atrue%2C%22max_length%22%3A100%7D" />

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="up">
                                                                                        <i class="fa fa-arrow-up"></i>
                                                                                    </button>

                                                                                    <button type="button" class="btn btn-outline-dark btn-sm questionnaire-edit-question-pos" data-dir="down">
                                                                                        <i class="fa fa-arrow-down"></i>
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-warning questionnaire-edit-question">
                                                                                        <i class="fa fa-wrench"></i> Edit
                                                                                    </button>
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-danger questionnaire-remove-question">
                                                                                        <i class="fa fa-trash"></i> Remove
                                                                                    </button>
                                                                                </td>
                                                                            </tr>

                                                                            </tbody>
                                                                            <tfoot>
                                                                            <tr>
                                                                                <th>Order</th>
                                                                                <th>Question</th>
                                                                                <th>Type</th>
                                                                                <th>Answers</th>
                                                                                <th class="text-right">Actions</th>
                                                                            </tr>
                                                                            </tfoot>
                                                                            <tbody>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                </div>

                                                                <div class="questionnaire-not-shown"  style="display: none">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="alert alert-info">
                                                                                <i class="fa fa-exclamation-triangle"></i> Questionnaire not in use on the this campaign, change this using the toggle above.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="nav-cp-content" data-name="cp-indoctrination">

                                                                <div class="row">
                                                                    <div class="col-sm-12 text-center">
                                                                        <h3>
                                                                            Rapport Page
                                                                        </h3>
                                                                    </div>
                                                                </div>

                                                                <hr />

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="edit-campaign-indoctrination-toggle" class="bmd-label-floating"> Display Rapport Page</label>
                                                                        <div class="togglebutton indoctrination-toggle">
                                                                            <label>
                                                                                <input type="checkbox" name="indoctrination[display]" value="1" checked >
                                                                                <span class="toggle"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="indoctrination-page-info" style="display:none">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label for="edit-campaign-indoctrination-select" class="bmd-label-floating"> Indoctrination Option<span class="required">*</span></label>
                                                                            <select class="js-source-states-2 m-b" name="indoctrination[option]" id="edit-campaign-indoctrination-select" style="width: 100%">
                                                                                <option value="">--- Select ---</option>
                                                                                <option value="link">External Link</option>
                                                                                <option value="page" selected>Page</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            &nbsp;
                                                                            <div class="indoctrination-select-row" data-type="link" style="display: none">
                                                                                <label for="edit-campaign-indoctrination-link" class="bmd-label-floating"> External Link <span class="required">*</span></label>
                                                                                <input type="text" class="form-control" id="edit-campaign-indoctrination-link" required="true" name="indoctrination[link]" value="" maxlength="200">

                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="indoctrination-select-row" data-type="page" style="display: none">

                                                                        <div class="row" style="display:none;">
                                                                            <div class="col-sm-12 text-center">
                                                                                <h3>
                                                                                    Page Setup
                                                                                </h3>
                                                                            </div>
                                                                        </div>

                                                                        <hr />

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="edit-campaign-in-title" class="bmd-label-floating"> Title <span class="required">*</span></label>
                                                                                    <input type="text" class="form-control campaign-preview-in-input" id="edit-campaign-in-title" name="indoctrination[page][title]" value="Please watch this important video in full before our call as it contains some important information" data-preview-target="#indoctrination-preview-title">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="edit-campaign-in-subheading" class="bmd-label-floating"> Subheading </label>
                                                                                    <input type="text" class="form-control campaign-preview-in-input" id="edit-campaign-in-subheading" name="indoctrination[page][subheading]" value="" data-preview-target="#indoctrination-preview-subheading">
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label class="bmd-label-floating">Page Text</label>
                                                                                <div
                                                                                        class="ec-tinymce-inline-lead campaign-preview-in-input"
                                                                                        data-name="indoctrination[page][text]"
                                                                                        data-preview-target="#indoctrination-preview-text"
                                                                                        id="ec-lp-ind-text"
                                                                                ></div>
                                                                            </div>
                                                                        </div>




                                                                        <input type="hidden" name="indoctrination[page][indoctrination_video_id]" value="0" />

                                                                        <div class="row ind-preview-wrap" style="display: none">
                                                                            <div class="col-sm-6" style="font-size: 1.5em">
                                                                                <h4>Webinar Video</h4>
                                                                                <strong>Video ID: </strong><span class="ind-preview-webinar_video_id"></span><br>
                                                                                <strong>Name: </strong><span class="ind-preview-name"></span><br>
                                                                                <strong>Duration: </strong><span class="ind-preview-duration"><span class='text-danger'>Unknown</span></span><br>
                                                                                <strong>Size: </strong><span class="ind-preview-size">0B</span><br>
                                                                                <strong>Status: </strong><span class="ind-preview-text_status"></span>
                                                                                <hr />

                                                                                <button type="button" class="btn btn-warning edit-campaign-change-ind-video">
                                                                                    <i class="fa fa-exchange-alt"></i> Change Video
                                                                                </button>

                                                                            </div>
                                                                            <div class="col-sm-6 campaign-preview-in-input" data-preview-target="#indoctrination-media-video">

                                                                                <div class="ind-video-preview-rendering">
                                                                                    <div class="text-danger">
                                                                                        Video Rendering, it will be available soon.
                                                                                        <div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-double-ring"><div></div><div></div></div><style type="text/css">@keyframes lds-double-ring{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes lds-double-ring{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes lds-double-ring_reverse{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}@-webkit-keyframes lds-double-ring_reverse{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}.lds-double-ring{position:relative}.lds-double-ring div{position:absolute;width:160px;height:160px;top:20px;left:20px;border-radius:50%;border:8px solid #000;border-color:#0c0 transparent;-webkit-animation:lds-double-ring 4.5s linear infinite;animation:lds-double-ring 4.5s linear infinite}.lds-double-ring div:nth-child(2){width:140px;height:140px;top:30px;left:30px;border-color:transparent #e7008a;-webkit-animation:lds-double-ring_reverse 4.5s linear infinite;animation:lds-double-ring_reverse 4.5s linear infinite}.lds-double-ring{width:50px!important;height:50px!important;-webkit-transform:translate(-25px,-25px) scale(.25) translate(25px,25px);transform:translate(-25px,-25px) scale(.25) translate(25px,25px)}
                                                                                            </style></div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="embed-responsive embed-responsive-16by9">
                                                                                    <video id="ind-preview-video" width="320" height="240" controls poster="" data-video-status="1">
                                                                                    </video>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="ind-set-video-wrap">

                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <h3>Upload video to use in rapport page</h3>

                                                                                    <div class="new-ind-file-input">
                                                                                        <strong>Upload New Media File</strong>
                                                                                        <ul>
                                                                                            <li>Max Upload Size: <strong>2GB</strong></li>
                                                                                            <li>Allowed File Types: <strong><ul ><li >mp4</li><li >wmv</li><li >mpeg</li><li >avi</li><li >flv</li><li >3gp</li><li >acc</li></ul></strong></li>
                                                                                        </ul>
                                                                                        <label class="btn btn-info btn-file">
                                                                                            Upload Video <input type="file" id="new-ind-file-upload" style="display: none;">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 ind-saved-videos-wrap">
                                                                                    <h3>Select Video</h3>

                                                                                    <select class="js-source-states-2 m-b" id="edit-campaign-ind-select" style="width: 100%">
                                                                                        <option value="">--- Select ---</option>
                                                                                        <option value="1450">
                                                                                            2Clientfunne (ID: 1450)
                                                                                        </option>
                                                                                        <option value="1439">
                                                                                            Webinar clientfunnels (ID: 1439)
                                                                                        </option>
                                                                                        <option value="1437">
                                                                                            Webinar (ID: 1437)
                                                                                        </option>
                                                                                        <option value="1436">
                                                                                            Webinar copy (ID: 1436)
                                                                                        </option>
                                                                                        <option value="1236">
                                                                                            Untitled_ May 17, 2020 8_05 PM (ID: 1236)
                                                                                        </option>
                                                                                        <option value="1235">
                                                                                            v2 Holding room (ID: 1235)
                                                                                        </option>
                                                                                        <option value="1213">
                                                                                            Webinar v1 (ID: 1213)
                                                                                        </option>
                                                                                        <option value="1212">
                                                                                            Holding room 2 (ID: 1212)
                                                                                        </option>
                                                                                    </select>

                                                                                    <button type="button" class="btn btn-success edit-campaign-use-selected-ind-video">
                                                                                        <i class="fa fa-check"></i> Use Selected Video
                                                                                    </button>

                                                                                </div>
                                                                            </div>


                                                                            <div class="new-ind-file-details" style="display: none">

                                                                                <strong>File Name: </strong><span class="new-ind-file-details-filename"></span><br>
                                                                                <strong>File Size: </strong><span class="new-ind-file-details-filesize"></span><br>

                                                                                <span class="new-ind-file-details-upload-text">0</span>% Uploaded
                                                                                <div class="progress">
                                                                                    <div class="new-ind-file-details-upload-bar progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                                </div>
                                                                                <button type="button" class="btn btn-danger cancel-ind-media-upload">
                                                                                    <i class="fa fa-times"></i> Cancel Upload
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                        <hr />
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <button type="button" class="btn btn-success max-width preview-campaign-in-page">
                                                                                    <i class="fas fa-palette"></i> Preview Page
                                                                                </button>
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/ Pages TAB -->

                                                <!-- Content TAB -->
                                                <div class="tab-pane" id="edit-campaign-content-tab">
                                                    <h5 class="info-text"> Campaign Content</h5>
                                                    <div class="row justify-content-center">


                                                        <div class="col-lg-10 mt-3">
                                                            <input type="hidden" name="webinar_video_id" value="0" />

                                                            <div class="row webinar-preview-wrap" style="display: none">
                                                                <div class="col-sm-6" style="font-size: 1.5em">
                                                                    <h4>Webinar Video</h4>
                                                                    <strong>Video ID: </strong><span class="webinar-preview-webinar_video_id"></span><br>
                                                                    <strong>Name: </strong><span class="webinar-preview-name"></span><br>
                                                                    <strong>Duration: </strong><span class="webinar-preview-duration"><span class='text-danger'>Unknown</span></span><br>
                                                                    <strong>Size: </strong><span class="webinar-preview-size">0B</span><br>
                                                                    <strong>Status: </strong><span class="webinar-preview-text_status"></span>
                                                                    <hr />

                                                                    <button type="button" class="btn btn-warning edit-campaign-change-webinar-video">
                                                                        <i class="fa fa-exchange-alt"></i> Change Video
                                                                    </button>

                                                                </div>
                                                                <div class="col-sm-6">

                                                                    <div class="webinar-video-preview-rendering">
                                                                        <div class="text-danger">
                                                                            Video Rendering, it will be available soon.
                                                                            <div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-double-ring"><div></div><div></div></div><style type="text/css">@keyframes lds-double-ring{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes lds-double-ring{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes lds-double-ring_reverse{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}@-webkit-keyframes lds-double-ring_reverse{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}.lds-double-ring{position:relative}.lds-double-ring div{position:absolute;width:160px;height:160px;top:20px;left:20px;border-radius:50%;border:8px solid #000;border-color:#0c0 transparent;-webkit-animation:lds-double-ring 4.5s linear infinite;animation:lds-double-ring 4.5s linear infinite}.lds-double-ring div:nth-child(2){width:140px;height:140px;top:30px;left:30px;border-color:transparent #e7008a;-webkit-animation:lds-double-ring_reverse 4.5s linear infinite;animation:lds-double-ring_reverse 4.5s linear infinite}.lds-double-ring{width:50px!important;height:50px!important;-webkit-transform:translate(-25px,-25px) scale(.25) translate(25px,25px);transform:translate(-25px,-25px) scale(.25) translate(25px,25px)}
                                                                                </style></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="embed-responsive embed-responsive-16by9">
                                                                        <video id="webinar-preview-video" width="320" height="240" controls poster="" data-video-status="1">
                                                                        </video>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="webinar-set-video-wrap">

                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <h3>Upload video to use in campaign webinar</h3>

                                                                        <div class="new-webinar-file-input">
                                                                            <strong>Upload New Media File</strong>
                                                                            <ul>
                                                                                <li>Max Upload Size: <strong>2GB</strong></li>
                                                                                <li>Allowed File Types: <strong><ul ><li >mp4</li><li >wmv</li><li >mpeg</li><li >avi</li><li >flv</li><li >3gp</li><li >acc</li></ul></strong></li>
                                                                            </ul>
                                                                            <label class="btn btn-info btn-file">
                                                                                Upload Video <input type="file" id="new-webinar-file-upload" style="display: none;">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 webinar-saved-videos-wrap">
                                                                        <h3>Select webinar campaign video</h3>

                                                                        <select class="js-source-states-2 m-b" id="edit-campaign-webinar-select" style="width: 100%">
                                                                            <option value="">--- Select ---</option>
                                                                            <option value="1450">
                                                                                2Clientfunne (ID: 1450)
                                                                            </option>
                                                                            <option value="1439">
                                                                                Webinar clientfunnels (ID: 1439)
                                                                            </option>
                                                                            <option value="1437">
                                                                                Webinar (ID: 1437)
                                                                            </option>
                                                                            <option value="1436">
                                                                                Webinar copy (ID: 1436)
                                                                            </option>
                                                                            <option value="1236">
                                                                                Untitled_ May 17, 2020 8_05 PM (ID: 1236)
                                                                            </option>
                                                                            <option value="1235">
                                                                                v2 Holding room (ID: 1235)
                                                                            </option>
                                                                            <option value="1213">
                                                                                Webinar v1 (ID: 1213)
                                                                            </option>
                                                                            <option value="1212">
                                                                                Holding room 2 (ID: 1212)
                                                                            </option>
                                                                        </select>

                                                                        <button type="button" class="btn btn-success edit-campaign-use-selected-webinar">
                                                                            <i class="fa fa-check"></i> Use Selected Webinar
                                                                        </button>

                                                                    </div>
                                                                </div>


                                                                <div class="new-webinar-file-details" style="display: none">

                                                                    <strong>File Name: </strong><span class="new-webinar-file-details-filename"></span><br>
                                                                    <strong>File Size: </strong><span class="new-webinar-file-details-filesize"></span><br>

                                                                    <span class="new-webinar-file-details-upload-text">0</span>% Uploaded
                                                                    <div class="progress">
                                                                        <div class="new-webinar-file-details-upload-bar progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                    </div>
                                                                    <button type="button" class="btn btn-danger cancel-webinar-media-upload">
                                                                        <i class="fa fa-times"></i> Cancel Upload
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/ Content TAB -->

                                                <!-- Communications TAB -->
                                                <div class="tab-pane" id="edit-campaign-communications-tab">


                                                    <div class="mailing_list">

                                                        <h5 class="info-text"><strong>Add new Contacts to List</strong></h5>
                                                        <div class="row pull-right">

                                                            <a href="#" class="btn btn-primary add_to_list">Choose List<div class="ripple-container"></div></a>

                                                        </div>
                                                        <br>
                                                        <br>


                                                        <div class="material-datatables">
                                                            <table class="table table-striped table-no-bordered table-hover mailing-list-datatable" cellspacing="0" width="100%" style="width:100%">
                                                                <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Name</th>
                                                                    <th class="text-right">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>


                                                    <h5 class="info-text"><strong>Campaign Communications</strong></h5>
                                                    <div class="row justify-content-center">


                                                        <div class="col-sm-12">
                                                            <h4>
                                                                <strong>Email List</strong>
                                                                <button type="button" class="btn btn-success btn-sm pull-right edit-campaign-coms-new-email">
                                                                    <i class="fa fa-plus"></i> New Email
                                                                </button>
                                                            </h4>

                                                            <hr />

                                                            <div class="edit-campaign-email-template" style="display: none">

                                                                <div class="edit-campaign-coms-email-wrap">
                                                                    <input type="hidden" name="coms[emails][]"  />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-email-op-trigger"></div>
                                                                        <div class="col-md-4 coms-email-op-delay"></div>
                                                                        <div class="col-md-4 coms-email-op-template"></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-email">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Email
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-email">
                                                                                <i class="fa fa-trash"></i> Delete Email
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>

                                                            </div>

                                                            <div class="edit-campaign-emails-header">
                                                                <div class="row">
                                                                    <div class="col-md-4"><strong>Trigger</strong></div>
                                                                    <div class="col-md-4"><strong>Delay</strong></div>
                                                                    <div class="col-md-4"><strong>Template</strong></div>
                                                                </div>
                                                                <hr />
                                                            </div>

                                                            <div class="edit-campaign-emails-header-none" style="display: none">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="alert alert-warning">
                                                                            No emails are set to be sent.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="edit-campaign-emails-wrap">						  <div class="edit-campaign-coms-email-wrap">
                                                                    <input type="hidden" name="coms[emails][]" value="%7B%22campaign_communication_id%22%3A%22DEFAULT%22%2C%22trigger%22%3A%22booked_call%22%2C%22template_id%22%3A%22D1513%22%2C%22delay_on%22%3A0%2C%22delay_number%22%3A0%2C%22delay_type%22%3A%22%22%7D" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-email-op-trigger">Booked a Call</div>
                                                                        <div class="col-md-4 coms-email-op-delay">None</div>
                                                                        <div class="col-md-4 coms-email-op-template">Email #1 - Sent Immediately Upon Call Booking</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-email">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Email
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-email">
                                                                                <i class="fa fa-trash"></i> Delete Email
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>

                                                                <div class="edit-campaign-coms-email-wrap">
                                                                    <input type="hidden" name="coms[emails][]" value="%7B%22campaign_communication_id%22%3A%22DEFAULT%22%2C%22trigger%22%3A%22before_call_booking%22%2C%22template_id%22%3A%22D1514%22%2C%22delay_on%22%3A1%2C%22delay_number%22%3A48%2C%22delay_type%22%3A%22hours%22%7D" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-email-op-trigger">Before Call Booking</div>
                                                                        <div class="col-md-4 coms-email-op-delay">48 hours</div>
                                                                        <div class="col-md-4 coms-email-op-template">Email #2 - Sent 48 Hours Before Booking</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-email">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Email
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-email">
                                                                                <i class="fa fa-trash"></i> Delete Email
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>

                                                                <div class="edit-campaign-coms-email-wrap">
                                                                    <input type="hidden" name="coms[emails][]" value="%7B%22campaign_communication_id%22%3A%22DEFAULT%22%2C%22trigger%22%3A%22before_call_booking%22%2C%22template_id%22%3A%22D1515%22%2C%22delay_on%22%3A1%2C%22delay_number%22%3A24%2C%22delay_type%22%3A%22hours%22%7D" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-email-op-trigger">Before Call Booking</div>
                                                                        <div class="col-md-4 coms-email-op-delay">24 hours</div>
                                                                        <div class="col-md-4 coms-email-op-template">Email #3 - Sent 24 Hours Before Booking</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-email">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Email
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-email">
                                                                                <i class="fa fa-trash"></i> Delete Email
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>

                                                                <div class="edit-campaign-coms-email-wrap">
                                                                    <input type="hidden" name="coms[emails][]" value="%7B%22campaign_communication_id%22%3A%22DEFAULT%22%2C%22trigger%22%3A%22before_call_booking%22%2C%22template_id%22%3A%22D1516%22%2C%22delay_on%22%3A1%2C%22delay_number%22%3A1%2C%22delay_type%22%3A%22hours%22%7D" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-email-op-trigger">Before Call Booking</div>
                                                                        <div class="col-md-4 coms-email-op-delay">1 hours</div>
                                                                        <div class="col-md-4 coms-email-op-template">Email #4 - Sent 60 Mins Before Booking</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-email">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Email
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-email">
                                                                                <i class="fa fa-trash"></i> Delete Email
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div style="clear:both;">
                                                            <br><br>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <h4>
                                                                <strong>Texts List</strong>
                                                                <button type="button" class="btn btn-success btn-sm pull-right edit-campaign-coms-new-text">
                                                                    <i class="fa fa-plus"></i> New Text
                                                                </button>
                                                            </h4>

                                                            <hr />

                                                            <div class="edit-campaign-texts-template" style="display: none">
                                                                <div class="edit-campaign-coms-texts-wrap">
                                                                    <input type="hidden" name="coms[texts][]" value="" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-text-op-trigger"></div>
                                                                        <div class="col-md-4 coms-text-op-delay"></div>
                                                                        <div class="col-md-4 coms-text-op-message"></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-text">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Text
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-text">
                                                                                <i class="fa fa-trash"></i> Delete Text
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>
                                                            </div>

                                                            <div class="edit-campaign-texts-header">
                                                                <div class="row">
                                                                    <div class="col-md-4"><strong>Trigger</strong></div>
                                                                    <div class="col-md-4"><strong>Delay</strong></div>
                                                                    <div class="col-md-4"><strong>Message</strong></div>
                                                                </div>
                                                                <hr />
                                                            </div>

                                                            <div class="edit-campaign-texts-header-none" style="display: none">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="alert alert-warning">
                                                                            No texts are set to be sent.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="edit-campaign-texts-wrap">					  <div class="edit-campaign-coms-texts-wrap">
                                                                    <input type="hidden" name="coms[texts][]" value="%7B%22campaign_communication_id%22%3A%22%22%2C%22trigger%22%3A%22booked_call%22%2C%22message%22%3A%22Hi%20%7Bname%7D%2C%20%7Bbooked_with%7D%20here%2C%20Your%20strategy%20session%20with%20me%20for%20%7Bcall_booking_slot%7D%20is%20confirmed.%20I%20will%20be%20calling%20you%20at%20the%20confirmed%20time.%20While%20you%20are%20waiting%20-%20go%20to%20this%20link%20%26%20watch%20the%20%5C%22pre-call%5C%22%20videos%20I%20have%20for%20you%3A%20%7Btiny_indoctrination_page%7D%22%2C%22delay_on%22%3A0%2C%22delay_number%22%3A0%2C%22delay_type%22%3A%22%22%7D" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-text-op-trigger">Booked a Call</div>
                                                                        <div class="col-md-4 coms-text-op-delay">None</div>
                                                                        <div class="col-md-4 coms-text-op-message">Hi {name}, {booked_with} here, Your strategy session with me for {call_booking_slot} is confirmed. I will be calling you at the confirmed time. While you are waiting - go to this link & watch the "pre-call" videos I have for you: {tiny_indoctrination_page}</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-text">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Text
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-text">
                                                                                <i class="fa fa-trash"></i> Delete Text
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>
                                                                <div class="edit-campaign-coms-texts-wrap">
                                                                    <input type="hidden" name="coms[texts][]" value="%7B%22campaign_communication_id%22%3A%22%22%2C%22trigger%22%3A%22before_call_booking%22%2C%22message%22%3A%22%7Bname%7D%2C%20%7Bbooked_with%7D%20here%20-I%5Cu2019m%20looking%20forward%20to%20our%20upcoming%20call%20%7Bcall_booking_slot%7D.%20I%20will%20be%20calling%20you%20at%20the%20confirmed%20time.%20While%20you%5Cu2019re%20waiting%20-%20here%5Cu2019s%20some%20important%20videos%20and%20case%20studies%20for%20you%3A%20%7Btiny_indoctrination_page%7D%22%2C%22delay_on%22%3A1%2C%22delay_number%22%3A48%2C%22delay_type%22%3A%22hours%22%7D" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-text-op-trigger">Before Call Booking</div>
                                                                        <div class="col-md-4 coms-text-op-delay">48 hours</div>
                                                                        <div class="col-md-4 coms-text-op-message">{name}, {booked_with} here -I’m looking forward to our upcoming call {call_booking_slot}. I will be calling you at the confirmed time. While you’re waiting - here’s some important videos and case studies for you: {tiny_indoctrination_page}</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-text">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Text
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-text">
                                                                                <i class="fa fa-trash"></i> Delete Text
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>
                                                                <div class="edit-campaign-coms-texts-wrap">
                                                                    <input type="hidden" name="coms[texts][]" value="%7B%22campaign_communication_id%22%3A%22%22%2C%22trigger%22%3A%22before_call_booking%22%2C%22message%22%3A%22REMINDER%3A%20%7Bname%7D%2C%20%7Bbooked_with%7D%20here%20-%20Your%20Strategy%20call%20is%20%7Bcall_booking_slot%7D.%20I%20will%20be%20calling%20you%20at%20the%20confirmed%20time.%20While%20you%5Cu2019re%20waiting%20-%20here%5Cu2019s%20some%20important%20videos%20and%20case%20studies%20for%20you%3A%20%7Btiny_indoctrination_page%7D%22%2C%22delay_on%22%3A1%2C%22delay_number%22%3A24%2C%22delay_type%22%3A%22hours%22%7D" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-text-op-trigger">Before Call Booking</div>
                                                                        <div class="col-md-4 coms-text-op-delay">24 hours</div>
                                                                        <div class="col-md-4 coms-text-op-message">REMINDER: {name}, {booked_with} here - Your Strategy call is {call_booking_slot}. I will be calling you at the confirmed time. While you’re waiting - here’s some important videos and case studies for you: {tiny_indoctrination_page}</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-text">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Text
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-text">
                                                                                <i class="fa fa-trash"></i> Delete Text
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>
                                                                <div class="edit-campaign-coms-texts-wrap">
                                                                    <input type="hidden" name="coms[texts][]" value="%7B%22campaign_communication_id%22%3A%22%22%2C%22trigger%22%3A%22before_call_booking%22%2C%22message%22%3A%22Hi%20%7Bname%7D%2C%20%7Bbooked_with%7D%20here%2C%20Your%20strategy%20session%20with%20me%20for%20%7Bcall_booking_slot%7D%20is%20happening%20in%2060mins.%20While%20you%20are%20waiting%20-%20go%20to%20this%20link%20%26%20watch%20the%20%5C%22pre-call%5C%22%20videos%20I%20have%20for%20you%3A%20%7Btiny_indoctrination_page%7D%22%2C%22delay_on%22%3A1%2C%22delay_number%22%3A1%2C%22delay_type%22%3A%22hours%22%7D" />

                                                                    <div class="row">
                                                                        <div class="col-md-4 coms-text-op-trigger">Before Call Booking</div>
                                                                        <div class="col-md-4 coms-text-op-delay">1 hours</div>
                                                                        <div class="col-md-4 coms-text-op-message">Hi {name}, {booked_with} here, Your strategy session with me for {call_booking_slot} is happening in 60mins. While you are waiting - go to this link & watch the "pre-call" videos I have for you: {tiny_indoctrination_page}</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="button" class="btn btn-warning edit-coms-text">
                                                                                <i class="fa fa-pencil-alt"></i> Edit Text
                                                                            </button>

                                                                            <button type="button" class="btn btn-danger delete-coms-text">
                                                                                <i class="fa fa-trash"></i> Delete Text
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/ Communications TAB -->

                                                <!--/ users TAB -->

                                                <!-- Publish TAB -->
                                                <div class="tab-pane" id="edit-campaign-publish-tab">
                                                    <h5 class="info-text"> Publish Campaign</h5>
                                                    <div class="row justify-content-center">


                                                        <div class="col-lg-10 mt-3">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <label class="bmd-label-floating" for="pc-name"> Campaign Name<span class="required">*</span></label>
                                                                    <input type="text" class="form-control" name="campaign_name" id="pc-name" value="admin" maxlength="100" required>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <label class="bmd-label-floating"> Status </label>

                                                                    <select class="js-source-states-2 m-b" name="campaign_status" id="pc-status" style="width: 100%">
                                                                        <option value="1" selected>
                                                                            Active									</option>
                                                                        <option value="0">
                                                                            Disabled									</option>
                                                                        <option value="-1">
                                                                            Draft									</option>
                                                                    </select>

                                                                    <div class="row pc-statuses-helper" data-status="1">
                                                                        <div class="col-sm-12">
                                                                            <div class="alert alert-success">
                                                                                Campaign live & running!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pc-statuses-helper" data-status="0" style="display: none">
                                                                        <div class="col-sm-12">
                                                                            <div class="alert alert-danger">
                                                                                Campaign disabled and not running!
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pc-statuses-helper" data-status="-1" style="display: none">
                                                                        <div class="col-sm-12">
                                                                            <div class="alert alert-warning">
                                                                                Campaign not running while editions are being made.

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="bmd-label-floating" for="pc-notes"> Notes </label>
                                                                    <textarea type="text" rows="5" id="pc-notes" class="form-control" name="campaign_notes" maxlength="2000">admin</textarea>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/ Publish TAB -->

                                            </div>
                                        </div>
                                        <hr />
                                        <div class="card-footer">
                                            <div class="mr-auto">
                                                <input type="button" class="btn btn-previous-pages btn-fill btn-default btn-wd pull-left" value="Previous">
                                                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" value="Previous">
                                            </div>
                                            <div class="ml-auto">


                                                <input type="button" class="btn btn-next-pages btn-fill btn-rose btn-wd" value="Next">
                                                <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" value="Next">
                                                <input type="button" class="btn btn-finish save-edit-campaign btn-fill btn-rose btn-wd" value="Save" style="display: none;">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- wizard container -->
                        </div>
                    </div>
                    <!-- end row -->


                    <!-- Mailing List Modal -->
                    <div class="modal fade" id="add-to-list-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Choose Mailing List</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-messages"></div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong> Mailing List Name<span class="required">*</span></strong>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class="js-source-states-2 m-b" id="mailing_list_select" style="width: 100%">
                                                <option value="">--- Select ---</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer model-footer-ie-fix">
                                    <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success float-right save_mailing_list">Save</button>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>

</div>
</div>

<!--Modals -->
<!-- Loading -->
<div id="loading-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-body">
                <p>
                    <img src="https://www.clientfunnels.io/img/loading-hc.gif" class="img-responsive modal-img-center" />
                </p>
            </div>

        </div>
    </div>
</div>

<!-- Re Login Modal -->
<div id="re-login-modal" class="modal fade hmodal-success" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title">Please Login To Continue</h4>
            </div>
            <div class="modal-body">

                <div class="modal-messages"></div>

                <div class="modal-wrap-content">

                    <form id="re-login-form" onSubmit="return false;">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="re-login-email" class="bmd-label-floating"> Email <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="re-login-email" required="true" name="email" value="helenahillfit@gmail.com" maxlength="100">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="re-login-password" class="bmd-label-floating"> Password <span class="required">*</span></label>
                                    <input type="password" class="form-control" name="password" id="re-login-password" maxlength="50" placeholder="Password" />
                                </div>
                            </div>
                        </div>


                    </form>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success do-re-login"><i class="fa fa-arrow-right" aria-hidden="true"></i> Login</button>
            </div>

        </div>

    </div>
</div>
<!--/ Re Login Modal -->

<!-- Delete Modal -->
<div id="delete-modal" class="modal fade hmodal-success" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="modal-messages"></div>

                <div class="modal-wrap-content">

                    <form id="delete-modal-form" onSubmit="return false;">

                        <input type="hidden" name="action" />
                        <input type="hidden" name="type" />
                        <input type="hidden" name="delete_id" />

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle"></i> <span class="del-modal-preview"></span>
                                </div>
                            </div>
                        </div>
                        <hr />

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="del-modal-notes" class="bmd-label-floating"> Notes <span class="required">*</span></label><br />
                                    <textarea class="form-control" id="del-modal-notes" required="true" name="notes" maxlength="2000" placeholder="Please enter notes to delete!"></textarea>
                                </div>
                            </div>
                        </div>


                    </form>

                </div>

            </div>
            <div class="modal-footer">

                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-danger conf-delete-modal"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </div>
                </div>




            </div>

        </div>

    </div>
</div>
<!-- Delete Modal --><!-- Privacy Modal -->
<div id="cookie-privacy-policy-modal" class="modal fade hmodal-success" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="modal-wrap-content"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success max-width" data-dismiss="modal">
                    <i class="fa fa-check" aria-hidden="true"></i> Close
                </button>
            </div>

        </div>

    </div>
</div>
<!--/ Privacy Modal -->
<!-- Campaign New Questionnaire question -->
<div id="new-q-question-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-messages"></div>

            <div class="modal-body">

                <form id="new-q-question-form" onSubmit="return false">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="new-q-question-text" class="form-label"> Question <span class="required">*</span></label>
                                <input type="text" class="form-control" id="new-q-question-text" required="true" value="" maxlength="2000">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="new-q-question-required" checked=""> Answer Required?
                                        <span class="form-check-sign">
												<span class="check"></span>
											</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="new-q-question-type" class="bmd-label-floating"> Answer Format <span class="required">*</span></label>
                                <select class="js-source-states-2 m-b" id="new-q-question-type" style="width: 100%">
                                    <option value="" selected>--- Select ---</option>
                                    <option value="comment_box">
                                        Comment Box											</option>
                                    <option value="checkboxes">
                                        Checkboxes											</option>
                                    <option value="multiple_choice">
                                        Multiple Choice											</option>
                                    <option value="date_time">
                                        Date / Time											</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="new-q-question-type-config" data-type="comment_box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating"> Max Answer Length <span class="required">*</span></label>
                                    <input type="number" class="form-control" id="new-q-question-comment-box-max" placeholder="Max 2000" value="100" min="0" max="2000" step="1" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="new-q-question-type-config" data-type="checkboxes">

                        <div class="new-q-question-checkboxes-template" style="display: none">

                            <div class="new-q-question-checkboxes-answer-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label class="bmd-label-floating"> Answer <span class="required">*</span></label>
                                        <input type="text" maxlength="100" placeholder="" class="new-q-question-checkbox-answers form-control" value="" />
                                    </div>

                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-danger remove-q-question-checkbox">
                                            <i class="fa fa-trash"></i> Remove
                                        </button>

                                    </div>

                                </div>
                                <hr />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <h4><strong>Checkbox Answers</strong></h4>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating" for="new-q-question-checkboxes-min-a"> Min Answers <span class="required">*</span></label>
                                            <input type="number" class="form-control" id="new-q-question-checkboxes-min-a" value="0" min="0" step="1" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating" for="new-q-question-checkboxes-max-a"> Max Answers</label>
                                            <input type="number" class="form-control" id="new-q-question-checkboxes-max-a" value="" min="1" step="1" />
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-info new-q-question-checkboxes-new new-q-auto-on-new">
                                    <i class="fa fa-plus"></i> Add More
                                </button>

                            </div>
                        </div>

                        <hr />
                        <div class="new-q-question-checkboxes-wrap new-q-auto-empty-on-start"></div>

                    </div>
                    <!-- /End checkboxes-->

                    <div class="new-q-question-type-config" data-type="multiple_choice">

                        <div class="new-q-question-checkboxes-template" style="display: none">

                            <div class="new-q-question-checkboxes-answer-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label class="bmd-label-floating"> Answer <span class="required">*</span></label>
                                        <input type="text" maxlength="100" placeholder="" class="new-q-question-checkbox-answers form-control" value="" />
                                    </div>

                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-danger remove-q-question-checkbox">
                                            <i class="fa fa-trash"></i> Remove
                                        </button>

                                    </div>

                                </div>
                                <hr />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <h4><strong>Multiple Choice Answers</strong></h4>

                                <button type="button" class="btn btn-info new-q-question-checkboxes-new new-q-auto-on-new">
                                    <i class="fa fa-plus"></i> Add More
                                </button>

                            </div>
                        </div>

                        <hr />
                        <div class="new-q-question-checkboxes-wrap new-q-auto-empty-on-start" data-type="multi_choice"></div>

                    </div>
                    <!-- /End Multi choice -->

                    <div class="new-q-question-type-config" data-type="date_time">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="new-q-question-date-time-future" checked=""> Future Date / Time Answer
                                        <span class="form-check-sign">
												<span class="check"></span>
											</span>
                                    </label>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating"> Type <span class="required">*</span></label>
                                    <select class="js-source-states-2 m-b" id="new-q-question-date-time-type" style="width: 100%">
                                        <option value="">--- Select ---</option>

                                        <option value="date_time">Date &amp; Time</option>
                                        <option value="date">Date Only</option>
                                        <option value="time">Time Only</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /End Date Time -->

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>

                <button type="button" class="btn btn-success pull-right new-q-question-save">
                    Save Question <i class="fa fa-arrow-down"></i>
                </button>

            </div>

        </div>
    </div>
</div>
<!-- /Campaign New Questionnaire question -->

<!-- Campaign Email modal -->
<div id="campaign-coms-email-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">

                <div class="modal-messages"></div>

                <form id="campaign-coms-email-form" onSubmit="return false;">
                    <input type="hidden" name="campaign_communication_id" value="0" />
                    <div class="row m-b">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="campaign-coms-email-trigger" class="bmd-label-floating"> Trigger <span class="required">*</span></label>
                                <select class="js-source-states-2 m-b" name="trigger" id="campaign-coms-email-trigger" style="width: 100%">
                                    <option value="" selected>--- Select ---</option>
                                    <option value="registered_for_webinar" data-delay-required="0" data-delay-negative="0">
                                        Registered For Webinar											</option>
                                    <option value="before_webinar_starts" data-delay-required="0" data-delay-negative="1">
                                        Before Webinar Starts											</option>
                                    <option value="after_webinar_ends" data-delay-required="0" data-delay-negative="0">
                                        After Webinar Ends											</option>
                                    <option value="failed_webinar_viewing" data-delay-required="0" data-delay-negative="0">
                                        Failed to view webinar											</option>
                                    <option value="booked_call" data-delay-required="0" data-delay-negative="0">
                                        Booked a Call											</option>
                                    <option value="failed_to_book" data-delay-required="1" data-delay-negative="0">
                                        Failed To Book											</option>
                                    <option value="completed_questionnaire" data-delay-required="0" data-delay-negative="0">
                                        Completed Questionnaire											</option>
                                    <option value="failed_to_complete_questionnaire" data-delay-required="1" data-delay-negative="1">
                                        Failed to Complete Questionnaire											</option>
                                    <option value="before_call_booking" data-delay-required="1" data-delay-negative="1">
                                        Before Call Booking											</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="campaign-coms-email-after-trigger">

                        <div class="row m-b">
                            <div class="col-sm-12">
                                <div class="text-warning">
                                    <i class="fas fa-info-circle"></i>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="registered_for_webinar">When a person registers for your webinar, this communication will be sent + any delay set below</div>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="before_webinar_starts">Sent before the webinar starts using the delay as time before.</div>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="after_webinar_ends">Sent after webinar ends (If Watched)</div>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="failed_webinar_viewing">Sent if the person fails to watch the webinar, use the delay to select the time after ending to send</div>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="booked_call">Sent when the person books a call</div>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="failed_to_book">Sent if person fails to book a call after webinar ends, use the delay to give them time after the end to enter their details.</div>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="completed_questionnaire">Sent if the person completes the questionnaire</div>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="failed_to_complete_questionnaire">Sent if the person fails to fill out the questionnaire before the call booking.  Set the time you wish the text to be sent out BEFORE the call booking if they have not yet completed the questionnaire</div>
                                    <div class="campaign-coms-email-trigger-description" data-trigger-id="before_call_booking">Sent before call booking, use the delay to set how long before the call booking.</div>

                                </div>
                            </div>
                        </div>

                        <div class="row m-b">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="campaign-coms-email-template-select" class="bmd-label-floating"> Email Template <span class="required">*</span></label>
                                    <select class="js-source-states-2 m-b" name="email_template_id" id="campaign-coms-email-template-select" style="width: 100%"></select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-info m-b campaign-coms-email-refresh-templates-list">
                                    <i class="fas fa-sync-alt"></i> Refresh List
                                </button>

                                <a href="https://www.clientfunnels.io/communications/emails/new-template" target="_blank" title="Create New Email Template" class="btn btn-warning m-b">
                                    <i class="fas fa-external-link-alt"></i> Create New
                                </a>

                                <div class="alert alert-danger">
                                    <i class="fas fa-exclamation"></i> DO NOT REFRESH THIS PAGE!<br />
                                    After creating a new email template use the 'Refresh List' Button Above.
                                </div>
                            </div>
                        </div>
                        <hr />

                        <div class="row m-b">
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="delay" id="campaign-coms-email-delay"> Delay Sending
                                        <span class="form-check-sign">
												<span class="check"></span>
											</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row delay-sending-coms-email">

                            <div class="col-sm-4">
                                <label class="bmd-label-floating" for="campaign-coms-email-delay-number"> Send After <span class="required">*</span></label>
                                <input type="number" id="campaign-coms-email-delay-number" placeholder="Number" name="delay_number" class="form-control" value="" step="1" min="1" />
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="campaign-coms-email-delay-type" class="bmd-label-floating"> Type <span class="required">*</span></label>
                                    <select class="js-source-states-2 m-b" name="delay_type" id="campaign-coms-email-delay-type" style="width: 100%">
                                        <option value="" selected>--- Select ---</option>
                                        <option value="minutes">
                                            Minutes												</option>
                                        <option value="hours">
                                            Hours												</option>
                                        <option value="days">
                                            Days												</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>



                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>

                <button class="btn btn-success save-campaign-coms-email">
                    <i class="fa fa-arrow-down"></i> Save
                </button>

            </div>

        </div>
    </div>
</div>
<!-- /Campaign Email modal -->

<!-- Campaign text modal -->
<div id="campaign-coms-text-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">

                <div class="modal-messages"></div>

                <form id="campaign-coms-text-form" onSubmit="return false;">
                    <input type="hidden" name="campaign_communication_id" value="0" />
                    <div class="row m-b">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="campaign-coms-text-trigger" class="bmd-label-floating"> Trigger <span class="required">*</span></label>
                                <select class="js-source-states-2 m-b" name="trigger" id="campaign-coms-text-trigger" style="width: 100%">
                                    <option value="" selected>--- Select ---</option>
                                    <option value="registered_for_webinar" data-dynamic-value-ids='[1,2,3,4,5]' data-delay-required="0"  data-delay-negative="0">
                                        Registered For Webinar											</option>
                                    <option value="before_webinar_starts" data-dynamic-value-ids='[1,2,3,4,5]' data-delay-required="0"  data-delay-negative="1">
                                        Before Webinar Starts											</option>
                                    <option value="after_webinar_ends" data-dynamic-value-ids='[1,2,3,4,5]' data-delay-required="0"  data-delay-negative="0">
                                        After Webinar Ends											</option>
                                    <option value="failed_webinar_viewing" data-dynamic-value-ids='[1,2,3,4,5]' data-delay-required="0"  data-delay-negative="0">
                                        Failed to view webinar											</option>
                                    <option value="booked_call" data-dynamic-value-ids='[1,2,3,4,5,7,8,9]' data-delay-required="0"  data-delay-negative="0">
                                        Booked a Call											</option>
                                    <option value="failed_to_book" data-dynamic-value-ids='[1,2,3,4,5,6]' data-delay-required="1"  data-delay-negative="0">
                                        Failed To Book											</option>
                                    <option value="completed_questionnaire" data-dynamic-value-ids='[1,2,3,4,5,10,12]' data-delay-required="0"  data-delay-negative="0">
                                        Completed Questionnaire											</option>
                                    <option value="failed_to_complete_questionnaire" data-dynamic-value-ids='[1,2,3,4,5,10,11]' data-delay-required="1"  data-delay-negative="1">
                                        Failed to Complete Questionnaire											</option>
                                    <option value="before_call_booking" data-dynamic-value-ids='[1,2,3,4,5,6,7,8,9,10,11,12,13]' data-delay-required="1"  data-delay-negative="1">
                                        Before Call Booking											</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="campaign-coms-text-after-trigger">

                        <div class="row m-b">
                            <div class="col-sm-12">
                                <div class="text-warning">
                                    <i class="fas fa-info-circle"></i>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="registered_for_webinar">When a person registers for your webinar, this communication will be sent + any delay set below</div>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="before_webinar_starts">Sent before the webinar starts using the delay as time before.</div>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="after_webinar_ends">Sent after webinar ends (If Watched)</div>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="failed_webinar_viewing">Sent if the person fails to watch the webinar, use the delay to select the time after ending to send</div>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="booked_call">Sent when the person books a call</div>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="failed_to_book">Sent if person fails to book a call after webinar ends, use the delay to give them time after the end to enter their details.</div>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="completed_questionnaire">Sent if the person completes the questionnaire</div>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="failed_to_complete_questionnaire">Sent if the person fails to fill out the questionnaire before the call booking.  Set the time you wish the text to be sent out BEFORE the call booking if they have not yet completed the questionnaire</div>
                                    <div class="campaign-coms-text-trigger-description" data-trigger-id="before_call_booking">Sent before call booking, use the delay to set how long before the call booking.</div>


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-info">
                                    Dynamic Values - description:
                                    <ul class="campaign-coms-text-dynamic-values-list">
                                        <li data-dv-id="1"><strong class="text-dv-values-item">{name}</strong> - Name used to register</li>
                                        <li data-dv-id="2"><strong class="text-dv-values-item">{email}</strong> - Email used to register</li>
                                        <li data-dv-id="3"><strong class="text-dv-values-item">{mobile}</strong> - Mobile used to register (If captured)</li>
                                        <li data-dv-id="4"><strong class="text-dv-values-item">{webinar_name}</strong> - Webinar Name</li>
                                        <li data-dv-id="5"><strong class="text-dv-values-item">{webinar_slot}</strong> - Webinar Registered date &amp; time</li>
                                        <li data-dv-id="6"><strong class="text-dv-values-item">{manage_booking_link}</strong> - Manage Booking Link for already booked contact or contact that requires to make a call booking</li>
                                        <li data-dv-id="7"><strong class="text-dv-values-item">{call_booking_slot}</strong> - Date &amp; Time of call booking</li>
                                        <li data-dv-id="8"><strong class="text-dv-values-item">{booked_with}</strong> - Who is the call booked with</li>
                                        <li data-dv-id="9"><strong class="text-dv-values-item">{best_number}</strong> - Best number person has set to be called on</li>
                                        <li data-dv-id="10"><strong class="text-dv-values-item">{questionnaire_title}</strong> - Title of questionnaire</li>
                                        <li data-dv-id="11"><strong class="text-dv-values-item">{questionnaire_link}</strong> - Link to complete questionnaire</li>
                                        <li data-dv-id="12"><strong class="text-dv-values-item">{questionnaire_answers_given}</strong> - Answers of questionnaire given by the person</li>
                                        <li data-dv-id="13"><strong class="text-dv-values-item">{webinar_url}</strong> - Lead Page for webinar, a place to register for the event or rebook into webinar.</li>
                                        <li data-dv-id="14"><strong class="text-dv-values-item">{indoctrination_page}</strong> - Indoctrination Page Link</li>
                                        <li data-dv-id="16"><strong class="text-dv-values-item">{tiny_indoctrination_page}</strong> - Tiny indoctrination page Link</li>
                                        <li data-dv-id="18"><strong class="text-dv-values-item">{tiny_questionnaire_link}</strong> - Tiny questionnaire page link</li>
                                        <li data-dv-id="19"><strong class="text-dv-values-item">{tiny_manage_booking_link}</strong> - Tiny manage booking link</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="campaign-coms-text-message" class="bmd-label-floating"> Message</label>
                                    <textarea rows="5" class="form-control" id="campaign-coms-text-message" name="message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <span class="campaign-coms-text-message-length-wrap">Characters: <span class="campaign-coms-text-message-length">0</span></span>
                                <i class="fas fa-exclamation-triangle campaign-coms-text-message-dv-warning" style="color: #F00"></i>

                                <div class="campaign-coms-text-message-dv-warning">
                                    <div class="alert alert-danger">
                                        <strong>Warning:</strong> Text messages over 140 characters will be sent as multiple messages and cost 1 credit per message sent.
                                        <hr />
                                        Using dynamic values such as names can be different lengths from person to person.
                                        <br>Make sure you take this into account and keep messages as short as posible.
                                    </div>
                                </div>



                            </div>
                        </div>

                        <hr />

                        <div class="row m-b">
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="delay" id="campaign-coms-text-delay"> Delay Sending
                                        <span class="form-check-sign">
												<span class="check"></span>
											</span>
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="row delay-sending-coms-text">

                            <div class="col-sm-4">
                                <label class="bmd-label-floating" for="campaign-coms-text-delay-number"> Send After <span class="required">*</span></label>
                                <input type="number" id="campaign-coms-text-delay-number" placeholder="Number" name="delay_number" class="form-control" value="" step="1" min="1" />
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="campaign-coms-text-delay-type" class="bmd-label-floating"> Type <span class="required">*</span></label>
                                    <select class="js-source-states-2 m-b" name="delay_type" id="campaign-coms-text-delay-type" style="width: 100%">
                                        <option value="" selected>--- Select ---</option>
                                        <option value="minutes">
                                            Minutes												</option>
                                        <option value="hours">
                                            Hours												</option>
                                        <option value="days">
                                            Days												</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>



                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>

                <button class="btn btn-success save-campaign-coms-text">
                    <i class="fa fa-arrow-down"></i> Save
                </button>

            </div>

        </div>
    </div>
</div>
<!-- /Campaign text modal -->

<!-- Save Campaign modal -->
<div id="save-edit-campaign-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="color-line"></div>
            <div class="modal-header">
                <h5 class="modal-title">Save Campaign</h5>
            </div>

            <div class="modal-body">

                <div class="row save-edit-campaign-ready">
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            Campaign Ready!<br>
                            Click Save below to confirm campaign setup.
                        </div>
                    </div>
                </div>

                <div class="save-edit-campaign-warnings">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-warning">
                                Video's still in rendering, you can save this campaign but please allow 15-30 minutes for rendering before promoting this campaign!
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>


                <button type="button" class="btn btn-success pull-right confirm-save-campaign">
                    <i class="fa fa-arrow-up"></i> Save
                </button>

            </div>

        </div>
    </div>
</div>
<!-- /Save Campaign modal -->









?>
<!--   Core JS Files   -->
<script src="https://www.clientfunnels.io/js/core/jquery.min.js"></script>
<script src="https://www.clientfunnels.io/js/core/popper.min.js"></script>
<script src="https://www.clientfunnels.io/js/core/bootstrap-material-design.min.js"></script>
<script src="https://www.clientfunnels.io/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="https://www.clientfunnels.io/js/plugins/jquery.validate.min.js"></script>
<script src="https://www.clientfunnels.io/js/plugins/jquery.bootstrap-wizard.js"></script>
<script src="https://www.clientfunnels.io/js/plugins/moment.min.js"></script>
<script src="https://www.clientfunnels.io/js/plugins/sweetalert2.js"></script>
<script src="https://www.clientfunnels.io/js/plugins/jquery-jvectormap.js"></script>
<script src="https://www.clientfunnels.io/js/plugins/chartist.min.js"></script>
<script src="https://www.clientfunnels.io/js/material-dashboard.js?v=2.1.0"></script>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=e1xreqfrwjb1aiyv3ecn3rx8we7fqm7gc954pguudl1pb0jo"></script>
<script src="https://www.clientfunnels.io/js/default.js?v=1.1.2"></script>
<script src="https://www.clientfunnels.io/vendor/select2/select2.js"></script>
<script src="https://www.clientfunnels.io/js/plugins/jquery.dataTables.min.js"></script>
{{--<script src="https://www.clientfunnels.io/vendor/slim-image-cropper/js/slim.jquery.min.js"></script>--}}

<script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>

<script>
    $(document).ready(function() {
        $().ready(function() {
            /*!
 * IE10 viewport hack for Surface/desktop Windows 8 bug
 */
            (function() {
                'use strict'

                if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                    var msViewportStyle = document.createElement('style')
                    msViewportStyle.appendChild(
                        document.createTextNode(
                            '@-ms-viewport{width:auto!important}'
                        )
                    )
                    document.head.appendChild(msViewportStyle)
                }

            }());

            $(document).ready(function() {
                var index_t = 0;


                $(document).on("click", ".btn-next-pages", function(e) {
                    e.preventDefault();
                    var l = ($(".campaign-sub-nav > .nav-item").length-1);
                    if(index_t<l){
                        index_t++;
                        $('.btn-previous-pages').show();
                        $(".campaign-sub-nav > .nav-item").eq(index_t).trigger('click');
                        $(window).scrollTop(0);
                    }else{
                        //alert('end');
                        $('.btn-next').show();
                        $('.btn-previous').show();
                        $('.btn-next').trigger('click');

                        $('.btn-next-pages').hide();
                        $('.btn-previous-pages').hide();
                    }
                });

                $(document).on("click", ".btn-previous-pages", function(e) {
                    e.preventDefault();
                    var l = ($(".campaign-sub-nav > .nav-item").length-1);
                    if(index_t>0){
                        index_t--;
                        if(index_t==0){
                            $('.btn-previous-pages').hide();
                        }
                        $(".campaign-sub-nav > .nav-item").eq(index_t).trigger('click');
                        $(window).scrollTop(0);
                    }else{
                        //alert('start');
                        $('.btn-next').hide();
                        $('.btn-previous').hide();

                        $('.btn-next-pages').show();
                        $('.btn-previous-pages').show();
                    }
                });
                /***** EDIT CAMPAIGN *****/

                    //TincyMCE Init
                var i = 0;
                var emailBodyConfig = {
                    selector: '.ec-tinymce-inline-lead',
                    menubar: false,
                    inline: true,
                    paste_as_text: true,
                    auto_focus : "ec-lp-title",
                    relative_urls : false,
                    remove_script_host: false,
                    convert_urls: false,
                    setup: function (ed) {
                        ed.on('init', function(args) {

                            if(i==0){
                                setTimeout(function(){

                                    var content = tinymce.get("ec-lp-title").getContent(),
                                        lp_valid = content.length > 0;
                                    if(content!=='<p>&ldquo;How XXXXX Can Start Getting XXXX WITHOUT XXXX Using The XXXX Method&rdquo;</p>'){
                                        set_edit_campaign_sub_nav_status("pages", "cp-lead", lp_valid ? "check" : "times", lp_valid ? "success" : "danger");
                                    }

                                }, 1000);
                                i++;
                            }

                        });
                    },
                    plugins: [
                        'link',
                        'lists',
                        'autolink',
                        'paste',
                    ],
                    toolbar: [
                        'bold italic underline',
                        'numlist bullist'
                    ],
                    valid_elements: 'p[style],strong,em,span[style],a[href],ul,ol,li',
                    valid_styles: {
                        '*': 'color,text-decoration'
                    },
                    content_css: [
                        'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
                    ],
                };
                tinymce.init(emailBodyConfig);

                var formSubmitting = false;
                var setFormSubmitting = function() { formSubmitting = true; };
                window.onload = function() {
                    window.addEventListener("beforeunload", function (e) {
                        if (formSubmitting) return undefined;
                        var confirmationMessage = 'It looks like you have been editing something. If you leave before saving, your changes will be lost.';
                        (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                        return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
                    });
                };

                //Paeg Wizard and custom sub nav

                //Sub Nav
                $(document).on("click", ".campaign-sub-nav .nav-item", function() {

                    var target_div = $(this).data("content"),
                        nav_items = $(".campaign-sub-nav .nav-item");

                    $(".nav-cp-content").hide();
                    $(".nav-cp-content[data-name='" + target_div + "']").slideDown("slow");
                    nav_items.removeClass("active");
                    $(this).addClass("active");
                    index_t = $(this).attr('data-eq');

                    return false;
                });



                setTimeout(function() {
                    $('.card.card-wizard').addClass('active');
                }, 600);

                // Wizard Initialization

                $('.card-wizard').bootstrapWizard({
                    'tabClass': 'nav nav-pills',
                    'nextSelector': '.btn-next',
                    'previousSelector': '.btn-previous',

                    onInit: function(tab, navigation, index) {
                        var $wizard = navigation.closest('.card-wizard'),
                            $first_li = navigation.find('li:first-child a').html(),
                            $moving_div = $('<div class="moving-tab">' + $first_li + '</div>');
                        $('.card-wizard .wizard-navigation').append($moving_div);

                        refreshAnimation($wizard, index);

                        $('.moving-tab').css('transition', 'transform 0s');
                    },

                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;

                        var $wizard = navigation.closest('.card-wizard');

                        // If it's the last tab then hide the last button and show the finish instead


                        var button_text = navigation.find('li:nth-child(' + $current + ') a').html();

                        setTimeout(function() {
                            $('.moving-tab').html(button_text);
                        }, 150);

                        var checkbox = $('.footer-checkbox');

                        if (!index == 0) {
                            $(checkbox).css({
                                'opacity': '0',
                                'visibility': 'hidden',
                                'position': 'absolute'
                            });
                        } else {
                            $(checkbox).css({
                                'opacity': '1',
                                'visibility': 'visible'
                            });
                        }

                        refreshAnimation($wizard, index);

                        setTimeout(function(){

                            if($('#edit-campaign-pages-tab').hasClass('active')){

                                $('.btn-previous-pages').show();
                                $('.btn-next-pages').show();

                                $('.btn-previous').hide();
                                $('.btn-next').hide();

                            }else{

                                $('.btn-previous-pages').hide();
                                $('.btn-next-pages').hide();

                                $('.btn-previous').show();
                                $('.btn-next').show();

                            }

                            if($current!==1){
                                if ($current >= $total) {
                                    $($wizard).find('.btn-next').hide();
                                    $($wizard).find('.btn-finish').show();
                                } else {
                                    $($wizard).find('.btn-next').show();
                                    $($wizard).find('.btn-finish').hide();
                                }
                            }
                            if(index_t==0){
                                $('.btn-previous-pages').hide();
                            }

                        }, 1000);
                    }
                });


                $('[data-toggle="wizard-radio"]').click(function() {
                    var wizard = $(this).closest('.card-wizard');
                    wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('[type="radio"]').removeAttr('checked');
                    $(this).find('[type="radio"]').attr('checked', 'true');
                });

                $('[data-toggle="wizard-checkbox"]').click(function() {
                    if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                        $(this).find('[type="checkbox"]').removeAttr('checked');
                    } else {
                        $(this).addClass('active');
                        $(this).find('[type="checkbox"]').attr('checked', 'true');
                    }
                });

                $('.set-full-height').css('height', 'auto');

                $('.btn-next').hide();
                $('.btn-previous').hide();

                $(window).resize(function() {
                    $('.card-wizard').each(function() {
                        var $wizard = $(this),
                            index = $wizard.bootstrapWizard('currentIndex');
                        refreshAnimation($wizard, index);

                        $('.moving-tab').css({
                            'transition': 'transform 0s'
                        });
                    });
                });

                function refreshAnimation($wizard, index) {
                    var $total = $wizard.find('.nav li').length,
                        $li_width = 100 / $total,
                        total_steps = $wizard.find('.nav li').length,
                        move_distance = $wizard.width() / total_steps,
                        index_temp = index,
                        vertical_level = 0,
                        mobile_device = $(document).width() < 600 && $total > 3;

                    if (mobile_device) {
                        move_distance = $wizard.width() / 2;
                        index_temp = index % 2;
                        $li_width = 50;
                    }

                    $wizard.find('.nav li').css('width', $li_width + '%');

                    var step_width = move_distance,
                        $current = index + 1;
                    move_distance = move_distance * index_temp;

                    if ($current == 1 || (mobile_device == true && (index % 2 == 0))) {
                        move_distance -= 8;
                    } else if ($current == total_steps || (mobile_device == true && (index % 2 == 1))) {
                        move_distance += 8;
                    }

                    if (mobile_device) {
                        vertical_level = parseInt(index / 2, 10);
                        vertical_level = vertical_level * 38;
                    }

                    $wizard.find('.moving-tab').css('width', step_width);
                    $('.moving-tab').css({
                        'transform': 'translate3d(' + move_distance + 'px, ' + vertical_level + 'px, 0)',
                        'transition': 'all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)'

                    });
                }

                function tinyMcePageData(id_match) {
                    var lp_els = {},
                        id, body, preview_target, form_name;
                    $.each($("[id^=" + id_match + "]"), function() {
                        id = $(this).attr("id");
                        body = tinymce.get(id).getContent();
                        form_name = $(this).data("name");
                        preview_target = $(this).data("preview-target");
                        lp_els[id] = {
                            content: body,
                            form_name: form_name,
                            preview_target: preview_target,
                        };
                    });

                    return lp_els;
                }

                //Lead Page

                //Preview lead page
                $(document).on("click", ".preview-campaign-lp, .campaign-lp-preview-return", function() {

                    var lp_input_wrap = $(".wizard-container"),
                        lp_preview_wrap = $(".campaign-lp-preview-wrap"),
                        lp_preview_iframe = lp_preview_wrap.find("#campaign-lp-preview-iframe").contents(),
                        preview_target,
                        input_target,
                        input_val,
                        preview_parent_wrap;

                    if ($(this).hasClass("campaign-lp-preview-return")) {
                        lp_preview_wrap.hide();
                        lp_input_wrap.slideDown("slow");
                    } else {
                        //Add contents
                        var page_data = tinyMcePageData("ec-lp-");
                        $.each(page_data, function(el_id, el_data) {

                            preview_target = el_data.preview_target;
                            if (!preview_target) return;
                            input_target = lp_preview_iframe.find(preview_target);
                            input_val = el_data.content;

                            if (input_target && input_target.length) {

                                //List items
                                if (preview_target === "#preview-webinar-learn-list-wrap") {
                                    var list_inputs = "",
                                        list_input_val,

                                        preview_webinar_learn_list_wrap = lp_preview_iframe.find("#preview-webinar-learn-list-wrap"),
                                        preview_webinar_learn_list_item_template = lp_preview_iframe.find("#preview-webinar-learn-list-item-template").html();

                                    for (var i = 0; i < 5; i++) {
                                        list_input_val = page_data["ec-lp-list-" + i].content;
                                        if (list_input_val && list_input_val.length) {
                                            if(list_input_val.slice(0, 4) === "<p>") list_input_val = list_input_val.slice(0, 4);
                                            if(list_input_val.slice(0, -4) === "</p>") list_input_val = list_input_val.slice(0, -4);
                                            list_inputs += replace_all("", list_input_val, preview_webinar_learn_list_item_template);
                                        }
                                    }

                                    if (list_inputs.length) preview_webinar_learn_list_wrap.html(list_inputs).show();
                                    else preview_webinar_learn_list_wrap.hide();

                                    return;
                                }

                                //Wraps
                                preview_parent_wrap = ([
                                    "#preview-webinar-join-text",
                                    "#preview-webinar-presenter",
                                    "#preview-webinar-name",
                                ].indexOf(preview_target) !== -1);

                                if (preview_parent_wrap) {
                                    preview_parent_wrap = lp_preview_iframe.find(preview_target + "-wrap");
                                    if (preview_parent_wrap && preview_parent_wrap.length)
                                        input_val.length ? preview_parent_wrap.show() : preview_parent_wrap.hide();
                                }

                                //Replace content
                                input_target.html(input_val);
                                if (!input_val.length) input_target.hide();
                                else input_target.show();
                            }
                        });


                        //Image + mobile Option
                        //Page image
                        var image_wrap = $("#edit-campaign-lp-ri"),
                            image_data = image_wrap.slim('dataBase64');
                        input_target = lp_preview_iframe.find(image_wrap.data("preview-target"));
                        image_data = image_data&&image_data[0]&&image_data[0].output ? image_data[0].output.image : false;

                        if (image_data && image_data.length) {
                            input_target.attr("src", image_data)
                            input_target.parent().show();
                        } else {
                            input_target.attr("src", "");
                            input_target.parent().hide();
                        }

                        //Mobile Option
                        var lp_text_reminder = $("#ec-lp-mobile-reminder").is(":checked"),
                            preview_text_reminder = lp_preview_iframe.find("#preview-webinar-text-reminder");

                        if (lp_text_reminder) preview_text_reminder.show();
                        else preview_text_reminder.hide();

                        lp_input_wrap.hide();
                        lp_preview_wrap.slideDown("slow");
                    }
                    return false;
                });

                //Lead Page completed
                $(document).on("keyup", "#ec-lp-title", function() {

                    var content = tinymce.get("ec-lp-title").getContent(),
                        lp_valid = content.length > 0;

                    set_edit_campaign_sub_nav_status("pages", "cp-lead", lp_valid ? "check" : "times", lp_valid ? "success" : "danger");
                });

                setTimeout(function(){
                    $("#ec-lp-title").trigger("keyup");
                }, 5500);

                //Webinar Holding Room
                $(document).on("click", ".preview-campaign-whp, .campaign-whp-preview-return", function() {

                    var whp_input_wrap = $(".wizard-container"),
                        whp_preview_wrap = $(".campaign-whp-preview-wrap"),
                        whp_preview_iframe = whp_preview_wrap.find("#campaign-whp-preview-iframe").contents(),
                        preview_inputs = $(".campaign-preview-whp-input"),
                        preview_target,
                        input_target,
                        input_val,
                        preview_parent_wrap;

                    if ($(this).hasClass("campaign-whp-preview-return")) {
                        whp_preview_wrap.hide();
                        whp_input_wrap.slideDown("slow");
                    } else {
                        //Add contents
                        $.each(preview_inputs, function() {
                            preview_target = $(this).data("preview-target");
                            input_target = whp_preview_iframe.find(preview_target);
                            input_val = clean($(this).val());

                            if (input_target && input_target.length) {

                                //Page video
                                if (preview_target === "#preview-webinar-video-col") {

                                    if ($(this).is(":visible")) input_val = $(this).html();
                                    else input_val = '<span class="text-danger">No Preview Video Set</span>';
                                    input_target.html(input_val);
                                    return;
                                }

                                //Wraps
                                preview_parent_wrap = ([
                                    "#preview-webinar-join-text",
                                    "#preview-webinar-presenter",
                                    "#preview-webinar-name",
                                ].indexOf(preview_target) !== -1);

                                if (preview_parent_wrap) {
                                    preview_parent_wrap = whp_preview_iframe.find(preview_target + "-wrap");
                                    if (preview_parent_wrap && preview_parent_wrap.length)
                                        input_val.length ? preview_parent_wrap.show() : preview_parent_wrap.hide();
                                }

                                //Replace content
                                input_target.html(input_val);
                                if (!input_val.length) input_target.hide();
                                else input_target.show();
                            }
                        });

                        whp_input_wrap.hide();
                        whp_preview_wrap.slideDown("slow");
                    }
                    return false;
                });

                //Holding Page completed
                $(document).on("keyup", "#edit-campaign-whp-title", function() {

                    var whp_valid = $(this).val().length > 0,
                        video_uploading = $(".new-whp-file-details-upload-bar").is(":visible"),
                        video_rendering = (parseInt($(".whp-preview-status").html(), 10) === 0),
                        icon = "times",
                        icon_class = "danger";

                    if (video_uploading) {
                        icon = "arrow-up";
                        icon_class = "info";
                    } else if (whp_valid && video_rendering) {
                        icon = "sync-alt";
                        icon_class = "info";
                    } else if (whp_valid) {
                        icon = "check";
                        icon_class = "success";
                    }

                    set_edit_campaign_sub_nav_status("pages", "cp-holding", icon, icon_class);
                });


                //WHP Media File Upload / select
                var whp_preview_wrap = $(".whp-preview-wrap"),
                    whp_set_video_wrap = $(".whp-set-video-wrap"),
                    whp_video_id_input = $("input[name='holding_page[preview_video_id]']");
                $("#new-whp-file-upload").change(function() {
                    var input_file_whp = $(this),
                        file_name = input_file_whp.val();
                    if (!file_name) return false;
                    var file_name_parts = file_name.split("\\");
                    file_name = clean(file_name_parts[file_name_parts.length - 1]);

                    var iSize = ($("#new-whp-file-upload")[0].files[0].size / 1024),
                        file_size_text;
                    if (iSize / 1024 > 1) {
                        if (((iSize / 1024) / 1024) > 1) {
                            iSize = (Math.round(((iSize / 1024) / 1024) * 100) / 100);
                            file_size_text = iSize + "GB";
                        } else {
                            iSize = (Math.round((iSize / 1024) * 100) / 100)
                            file_size_text = iSize + "MB";
                        }
                    } else {
                        iSize = (Math.round(iSize * 100) / 100)
                        file_size_text = iSize + "KB";
                    }

                    var w_whp_filename = $(".new-whp-file-details-filename"),

                        w_whp_filesize = $(".new-whp-file-details-filesize"),
                        w_whp_file_input = $(".new-whp-file-input"),
                        w_whp_file_details_wrap = $(".new-whp-file-details"),
                        whp_upload_progress_bar = $(".new-whp-file-details-upload-bar"),
                        whp_upload_upload_text = $(".new-whp-file-details-upload-text"),
                        edit_campaign_whp_list_select = $("#edit-campaign-whp-select"),
                        whp_saved_videos_wrap = $(".whp-saved-videos-wrap");

                    w_whp_filename.html(file_name);
                    w_whp_filesize.html(file_size_text);
                    w_whp_file_input.hide();
                    w_whp_file_details_wrap.slideDown("slow");
                    whp_upload_progress_bar.attr("aria-valuenow", 0).css("width", "0%");
                    whp_upload_upload_text.html("0");
                    whp_saved_videos_wrap.hide();
                    set_edit_campaign_sub_nav_status("pages", "cp-holding", "arrow-up", "info");

                    $("#page_messages").html("").hide();

                    //Send to sever
                    var formData = new FormData(),
                    campaign_id = $("input[name='campaign_id']").val();
                    console.log($("#new-whp-file-upload")[0].files[0]);
                    formData.append('webinar', $("#new-whp-file-upload")[0].files[0]);
                    formData.append('campaign_id', campaign_id);
                    formData.append('_token' , '<?php echo csrf_token(); ?>');

                    var uploadURL = "/new_webinar_video"; //Upload URL
                    var whp_jqXHR = $.ajax({
                        xhr: function() {
                            var xhrobj = $.ajaxSettings.xhr();
                            if (xhrobj.upload) {
                                xhrobj.upload.addEventListener('progress', function(event) {
                                    var percent = 0;
                                    var position = event.loaded || event.position;
                                    var total = event.total;
                                    if (event.lengthComputable) {
                                        percent = Math.ceil(position / total * 100);
                                    }
                                    //Set progress
                                    whp_upload_progress_bar.attr("aria-valuenow", 0).css("width", percent + "%");
                                    whp_upload_upload_text.html(percent);
                                }, false);
                            }
                            return xhrobj;
                        },
                        url: uploadURL,
                        type: "POST",
                        contentType: false,
                        processData: false,
                        cache: false,
                        data: formData,
                        success: function(data) {
                            w_whp_file_details_wrap.hide();
                            w_whp_file_input.show();
                            input_file_whp.val("");

                            data = JSON.parse(data);

                            if (data.result != "success") {
                                var error = data.message;
                                if (!error) error = DEFAULT_MESSAGE;
                                alert_message("danger", error);
                                return false;
                            }

                            //List Saved Videos
                            edit_campaign_whp_list_select.select2("destroy");
                            var edit_campaign_whp_list_select_html = '<option value="">--- Select ---</option>';
                            $.each(data.return_data.webinar_videos_list, function(whp_video_id, text) {
                                edit_campaign_whp_list_select_html += '<option value="' + whp_video_id + '">' + text + '</option>';
                            });
                            edit_campaign_whp_list_select.html(edit_campaign_whp_list_select_html);
                            edit_campaign_whp_list_select.select2();
                            edit_campaign_whp_list_select.val(data.return_data.webinar_video_id);

                            whp_saved_videos_wrap.show();
                            $(".edit-campaign-use-selected-whp-video").click();
                        }
                    });

                    $(document).on("click", ".cancel-whp-media-upload", function() {

                        swal_confirm("Canel Upload?", "Uploading will stop and not be saved!", function(isConfirm) {

                            if (isConfirm) {
                                whp_jqXHR.abort();
                                w_whp_file_details_wrap.hide();
                                w_whp_file_input.show();
                                input_file_whp.val("");
                                whp_saved_videos_wrap.show();
                                $("#edit-campaign-whp-title").trigger("keyup");
                            }
                            return false;
                        });

                        return false;
                    });

                });

                //Change campaign wedinar video
                var whp_preview_video = $("#whp-preview-video");
                $(document).on("click", ".edit-campaign-change-whp-video", function() {

                    whp_preview_video[0].pause();
                    whp_preview_wrap.hide();
                    whp_set_video_wrap.slideDown("slow");
                    whp_video_id_input.val("0");
                    $("#edit-campaign-whp-title").trigger("keyup");
                    return false;
                });

                //Use Selected webinar
                $(document).on("click", ".edit-campaign-use-selected-whp-video", function() {

                    $("#page_messages").html("").hide();
                    var whp_video_id = $("#edit-campaign-whp-select").val();
                    if (!whp_video_id) {
                        alert_message("danger", "Please select a webinar from the list or upload a new video");
                        return false;
                    }

                    loading_modal("open", "Getting Webinar Video Data");

                    api("Campaign", "get_webinar_video_peview_data", {
                        webinar_video_id: whp_video_id
                    }, function(result) {

                        loading_modal("close");

                        if (!result) return false;

                        var whp_data = result.webinar_data,
                            video_status = parseInt(whp_data.status, 10),
                            video_i_class = "danger",
                            video_i_icon = "times",

                            whp_rendering_wrap = $(".whp-video-preview-rendering");

                        whp_rendering_wrap.show();
                        whp_preview_video.html("");
                        if (video_status > 0) {
                            whp_rendering_wrap.hide();
                        }

                        //Show Selected Video
                        var whp_data_ignore_list = [
                            "video_status",
                            "video_urls",
                        ];
                        $.each(whp_data, function(name, val) {

                            //Ignore List
                            if (whp_data_ignore_list.indexOf(name) > -1) return false;


                            if (name === "thumb_url") {
                                whp_preview_video.attr("poster", val);

                                //Add Videos if not rendering
                                var whp_video_urls = whp_data.video_urls;
                                if (video_status === 1 && whp_video_urls && whp_video_urls.length) {
                                    //List in HTML
                                    var whp_html_sources = "";
                                    $.each(whp_video_urls, function(index, video_data) {
                                        whp_html_sources += '<source src="' + video_data.url + '" type="' + video_data.type + '">';
                                    });

                                    whp_preview_video.html(whp_html_sources);
                                    whp_preview_video[0].load();
                                }
                            } else {
                                whp_preview_wrap.find(".whp-preview-" + name).html(val);
                            }

                        });
                        whp_set_video_wrap.hide();
                        whp_video_id_input.val(whp_data.webinar_video_id);
                        whp_preview_wrap.slideDown("slow", function() {
                            $("#edit-campaign-whp-title").trigger("keyup");
                        });

                    });

                    return false;
                });
                //END: WHP media upload

                //IND Media File Upload / select
                var ind_preview_wrap = $(".ind-preview-wrap"),
                    ind_set_video_wrap = $(".ind-set-video-wrap"),
                    ind_video_id_input = $("input[name='indoctrination[page][indoctrination_video_id]']");
                $("#new-ind-file-upload").change(function() {
                    var input_file_ind = $(this),
                        file_name = input_file_ind.val();
                    if (!file_name) return false;
                    var file_name_parts = file_name.split("\\");
                    file_name = clean(file_name_parts[file_name_parts.length - 1]);

                    var iSize = ($("#new-ind-file-upload")[0].files[0].size / 1024),
                        file_size_text;
                    if (iSize / 1024 > 1) {
                        if (((iSize / 1024) / 1024) > 1) {
                            iSize = (Math.round(((iSize / 1024) / 1024) * 100) / 100);
                            file_size_text = iSize + "GB";
                        } else {
                            iSize = (Math.round((iSize / 1024) * 100) / 100)
                            file_size_text = iSize + "MB";
                        }
                    } else {
                        iSize = (Math.round(iSize * 100) / 100)
                        file_size_text = iSize + "KB";
                    }

                    var w_ind_filename = $(".new-ind-file-details-filename"),

                        w_ind_filesize = $(".new-ind-file-details-filesize"),
                        w_ind_file_input = $(".new-ind-file-input"),
                        w_ind_file_details_wrap = $(".new-ind-file-details"),
                        ind_upload_progress_bar = $(".new-ind-file-details-upload-bar"),
                        ind_upload_upload_text = $(".new-ind-file-details-upload-text"),
                        edit_campaign_ind_list_select = $("#edit-campaign-ind-select"),
                        ind_saved_videos_wrap = $(".ind-saved-videos-wrap");

                    w_ind_filename.html(file_name);
                    w_ind_filesize.html(file_size_text);
                    w_ind_file_input.hide();
                    w_ind_file_details_wrap.slideDown("slow");
                    ind_upload_progress_bar.attr("aria-valuenow", 0).css("width", "0%");
                    ind_upload_upload_text.html("0");
                    ind_saved_videos_wrap.hide();
                    set_edit_campaign_sub_nav_status("pages", "cp-holding", "arrow-up", "info");

                    $("#page_messages").html("").hide();

                    //Send to sever
                    var formData = new FormData(),
                        campaign_id = $("input[name='campaign_id']").val();
                    formData.append('webinar', $("#new-ind-file-upload")[0].files[0]);
                    formData.append('campaign_id', campaign_id);

                    var uploadURL = "/new_campaign_video";
                    var ind_jqXHR = $.ajax({
                        xhr: function() {
                            var xhrobj = $.ajaxSettings.xhr();
                            if (xhrobj.upload) {
                                xhrobj.upload.addEventListener('progress', function(event) {
                                    var percent = 0;
                                    var position = event.loaded || event.position;
                                    var total = event.total;
                                    if (event.lengthComputable) {
                                        percent = Math.ceil(position / total * 100);
                                    }
                                    //Set progress
                                    ind_upload_progress_bar.attr("aria-valuenow", 0).css("width", percent + "%");
                                    ind_upload_upload_text.html(percent);
                                }, false);
                            }
                            return xhrobj;
                        },
                        url: uploadURL,
                        type: "POST",
                        contentType: false,
                        processData: false,
                        cache: false,
                        data: formData,
                        success: function(data) {
                            w_ind_file_details_wrap.hide();
                            w_ind_file_input.show();
                            input_file_ind.val("");

                            data = JSON.parse(data);

                            if (data.result != "success") {
                                var error = data.message;
                                if (!error) error = DEFAULT_MESSAGE;
                                alert_message("danger", error);
                                return false;
                            }

                            //List Saved Videos
                            edit_campaign_ind_list_select.select2("destroy");
                            var edit_campaign_ind_list_select_html = '<option value="">--- Select ---</option>';
                            $.each(data.return_data.webinar_videos_list, function(ind_video_id, text) {
                                edit_campaign_ind_list_select_html += '<option value="' + ind_video_id + '">' + text + '</option>';
                            });
                            edit_campaign_ind_list_select.html(edit_campaign_ind_list_select_html);
                            edit_campaign_ind_list_select.select2();
                            edit_campaign_ind_list_select.val(data.return_data.webinar_video_id);

                            ind_saved_videos_wrap.show();
                            $(".edit-campaign-use-selected-ind-video").click();
                        }
                    });

                    $(document).on("click", ".cancel-ind-media-upload", function() {

                        swal_confirm("Canel Upload?", "Uploading will stop and not be saved!", function(isConfirm) {

                            if (isConfirm) {
                                ind_jqXHR.abort();
                                w_ind_file_details_wrap.hide();
                                w_ind_file_input.show();
                                input_file_ind.val("");
                                ind_saved_videos_wrap.show();
                                $("#edit-campaign-ind-title").trigger("keyup");
                            }
                            return false;
                        });

                        return false;
                    });

                });

                //Change campaign wedinar video
                var ind_preview_video = $("#ind-preview-video");
                $(document).on("click", ".edit-campaign-change-ind-video", function() {

                    ind_preview_video[0].pause();
                    ind_preview_wrap.hide();
                    ind_set_video_wrap.slideDown("slow");
                    ind_video_id_input.val("0");
                    $("#edit-campaign-ind-title").trigger("keyup");
                    return false;
                });

                //Use Selected webinar
                $(document).on("click", ".edit-campaign-use-selected-ind-video", function() {

                    $("#page_messages").html("").hide();
                    var ind_video_id = $("#edit-campaign-ind-select").val();
                    if (!ind_video_id) {
                        alert_message("danger", "Please select a webinar from the list or upload a new video");
                        return false;
                    }

                    loading_modal("open", "Getting Webinar Video Data");

                    api("Campaign", "get_webinar_video_peview_data", {
                        webinar_video_id: ind_video_id
                    }, function(result) {

                        loading_modal("close");

                        if (!result) return false;

                        var ind_data = result.webinar_data,
                            video_status = parseInt(ind_data.status, 10),
                            video_i_class = "danger",
                            video_i_icon = "times",

                            ind_rendering_wrap = $(".ind-video-preview-rendering");

                        ind_rendering_wrap.show();
                        ind_preview_video.html("");
                        if (video_status > 0) {
                            ind_rendering_wrap.hide();
                        }

                        //Show Selected Video
                        var ind_data_ignore_list = [
                            "video_status",
                            "video_urls",
                        ];
                        $.each(ind_data, function(name, val) {

                            //Ignore List
                            if (ind_data_ignore_list.indexOf(name) > -1) return false;


                            if (name === "thumb_url") {
                                ind_preview_video.attr("poster", val);

                                //Add Videos if not rendering
                                var ind_video_urls = ind_data.video_urls;
                                if (video_status === 1 && ind_video_urls && ind_video_urls.length) {
                                    //List in HTML
                                    var ind_html_sources = "";
                                    $.each(ind_video_urls, function(index, video_data) {
                                        ind_html_sources += '<source src="' + video_data.url + '" type="' + video_data.type + '">';
                                    });

                                    ind_preview_video.html(ind_html_sources);
                                    ind_preview_video[0].load();
                                }
                            } else {
                                ind_preview_wrap.find(".ind-preview-" + name).html(val);
                            }

                        });
                        ind_set_video_wrap.hide();
                        ind_video_id_input.val(ind_data.webinar_video_id);
                        ind_preview_wrap.slideDown("slow", function() {
                            $("#edit-campaign-ind-title").trigger("keyup");
                        });

                    });

                    return false;
                });
                //END: IND media upload

                //Webinar Room

                /*
                //Repeat change
                var repeat_schedule_switch = $("#edit-campaign-repeating-schedule");
                $(document).on("change", repeat_schedule_switch, function() {
                    var schedule_repeat_wrap = $(".repeating-schedule-wrap");
                    if (repeat_schedule_switch.is(":checked")) {
                        schedule_repeat_wrap.slideDown("slow");
                    } else {
                        schedule_repeat_wrap.hide();
                    }

                    $("#edit-campaign-wr-start-time").trigger("keyup");
                });

                //Webinar popups
                $(document).on("click", ".new-webinar-popup, .remove-webinar-popup", function() {

                    var webinar_section_wrap = $(".nav-cp-content[data-name='cp-webinar']"),
                        webinar_pu_template = webinar_section_wrap.find(".webinar-popup-template").html(),
                        webinar_pu_wrap = webinar_section_wrap.find(".webinar-popup-wrap");

                    //Remove
                    if ($(this).hasClass("remove-webinar-popup")) {
                        var parent_pu_wrap = $(this).parents(".webinar-popup-item-wrap");
                        swal_confirm("Remove Weinar Popup", "Confirm?", function(isConfirm) {
                            if (isConfirm) {
                                parent_pu_wrap.slideUp("slow", function() {
                                    parent_pu_wrap.remove();
                                    $("#edit-campaign-wr-start-time").trigger("keyup");
                                });
                            }
                            return false;
                        });
                        return false;
                    }

                    //Add New
                    webinar_pu_wrap.append(webinar_pu_template);
                    $("#edit-campaign-wr-start-time").trigger("keyup");

                    return false;
                });


                //Validate scheduling
                $(document).on("keyup", "#edit-campaign-wr-start-time, #edit-campaign-wr-repeat-every, .webinar-popup-input", function() {

                    var start_time = $("#edit-campaign-wr-start-time").val(),
                        repeat_every = parseInt($("#edit-campaign-wr-repeat-every").val(), 10),
                        repeat_schedule_on = repeat_schedule_switch.is(":checked"),

                        webinar_popup_inputs = $(".webinar-popup-input"),
                        valid_popup_items = true;

                    if (webinar_popup_inputs.length) $.each(webinar_popup_inputs, function() {
                        if (!$(this).is(":visible")) return;

                        if ($(this).val().length < 1) {
                            valid_popup_items = false;

                        }

                    });

                    var valid_schedule_webinar = (
                        start_time && start_time.toString() &&
                        (!repeat_schedule_on || (!isNaN(repeat_every) && repeat_every > 0)) &&
                        valid_popup_items
                    );

                    set_edit_campaign_sub_nav_status("pages", "cp-webinar", valid_schedule_webinar ? "check" : "times", valid_schedule_webinar ? "success" : "danger");
                });
                */

                //Popup Show / hide / validate config
                $(document).on("change", "input[name='webinar_popup[on]']", function() {

                    var popup_config = $(".ec-popup-config");
                    if ($(this).is(":checked")) popup_config.slideDown("slow");
                    else popup_config.hide();
                    validate_webinar_room_config();
                });

                //Validate scheduling
                $(document).on("keyup", "input[name='webinar_popup[minutes]'], input[name='webinar_popup[seconds]']", function() {
                    validate_webinar_room_config();
                });

                function validate_webinar_room_config() {
                    var popup_on = $("input[name='webinar_popup[on]']").is(":checked"),
                        popup_minutes_input = $("input[name='webinar_popup[minutes]']"),
                        popup_minutes_val = parseInt(popup_minutes_input.val(), 10),
                        popup_seconds_input = $("input[name='webinar_popup[seconds]']"),
                        popup_seconds_val = parseInt(popup_seconds_input.val(), 10);


                    if (!popup_minutes_val || popup_minutes_val < 0) popup_minutes_val = 0;
                    if (!popup_seconds_val || popup_seconds_val < 0 || popup_seconds_val > 59) popup_seconds_val = 0;
                    popup_minutes_input.val(popup_minutes_val);
                    popup_seconds_input.val(popup_seconds_val);

                    set_edit_campaign_sub_nav_status("pages", "cp-webinar", "check", "success");
                }


                /***** Booking Options *****/

                //Data Fields Switch
                $(document).on("change", ".bo-data-fields-ask", function() {

                    var type = $(this).data("type"),
                        pair_input = $(".bo-data-fields-pair[data-type='" + type + "']"),
                        checked = $(this).is(":checked");

                    if (pair_input.length) {
                        pair_input.prop("disabled", false);

                        if (checked) {
                            pair_input.prop("disabled", false);
                        } else {
                            pair_input.prop("checked", false);
                            pair_input.prop("disabled", true);
                        }
                    }
                });

                //Validate Booking Options
                $(document).on("keyup", "#ec-wbo-title", function() {

                    var title_valid = clean($(this).val()).length;

                    set_edit_campaign_sub_nav_status("pages", "cp-booking", title_valid ? "check" : "times", title_valid ? "success" : "danger");
                });

                /***** ~END~ Booking Options *****/


                    //Questionnaie Data Tables
                var questionnaire_dt_wrap = $(".questionnaire-datatable");
                if (questionnaire_dt_wrap.length) {
                    var questionnaire_dt = questionnaire_dt_wrap.DataTable({
                        "ordering": false,
                        "iDisplayLength": 100,
                        responsive: true,
                        language: {
                            search: "_INPUT_",
                            searchPlaceholder: "Search Questions",
                            emptyTable: "No Questions Saved",
                        }
                    });
                }

                let users_table = $('.users-datatable').DataTable( {
                    rowReorder: true,
                    //ordering: false,
                    //orderable: true,
                    order: [[ 0, "asc" ]]
                });

                users_table.on( 'row-reorder', function ( e, diff, edit ) {

                    setTimeout(function(){
                        let order = [];
                        users_table
                            .column( 1 )
                            .data()
                            .each( function ( value, index ) {
                                console.log( 'Data in index: '+index+' is: '+value );
                                order[index] = value;
                            });
                        console.log(order);

                        let user_id = $(this).attr('data-id');

                        api("Campaign", "reorder_user_campaign", {
                            campaign_id: $("input[name='campaign_id']").val(),
                            order: order
                        }, function(result) {
                            console.log(result);
                        });
                    }, 500);
                });

                //Questionnaire I/O swtich
                $(document).on("change", "input[name='questionnaire_on']", function() {

                    var questionnaire_wrap = $(".questionnaire-wrap"),
                        no_questionnaire_info_wrap = $(".questionnaire-not-shown");
                    if ($(this).is(":checked")) {
                        no_questionnaire_info_wrap.hide();
                        questionnaire_wrap.slideDown("slow");
                    } else {
                        questionnaire_wrap.hide();
                        no_questionnaire_info_wrap.slideDown("slow");
                    }
                    edit_campaign_validate_questionnaire();
                    return false;
                });

                //Title Keyup for validation
                $(document).on("keyup", "#edit-campaign-q-title", function() {
                    edit_campaign_validate_questionnaire();
                });


                //New / Edit question
                var new_question_modal = $("#new-q-question-modal"),
                    new_question_config_types = new_question_modal.find(".new-q-question-type-config");
                $(document).on("click", ".questionnaire-add-new-question, .questionnaire-edit-question, .new-q-question-checkboxes-new, .remove-q-question-checkbox, .new-q-question-save, .questionnaire-remove-question", function() {

                    var new_question_form = new_question_modal.find("#new-q-question-form"),
                        new_question_messages = new_question_modal.find(".modal-messages"),
                        question_checkboxes_wrap = new_question_form.find(".new-q-question-checkboxes-wrap:visible");

                    new_question_messages.html("").hide();

                    //Checkbox control
                    if ($(this).hasClass("new-q-question-checkboxes-new")) {
                        question_checkboxes_wrap.append(new_question_form.find(".new-q-question-checkboxes-template").html());
                        return false;
                    }
                    if ($(this).hasClass("remove-q-question-checkbox")) {
                        $(this).parents(".new-q-question-checkboxes-answer-item").remove();
                        if (!question_checkboxes_wrap.children().length) new_question_modal.find(".new-q-question-checkboxes-new:visible").click();
                        return false;
                    }

                    //Saving
                    if ($(this).hasClass("new-q-question-save")) {
                        //Validate
                        var q_question_text = clean(new_question_form.find("#new-q-question-text").val()),
                            q_questions_type = $("#new-q-question-type").val(),
                            q_questions_q_type_wrap = new_question_modal.find(".new-q-question-type-config[data-type='" + q_questions_type + "']");

                        if (q_question_text.length < 1 || q_question_text == " ") return alert_message("danger", "Please enter a question text", new_question_messages);
                        if (!q_questions_type || !q_questions_q_type_wrap) return alert_message("danger", "Please enter a question type", new_question_messages);

                        var q_type_text = uc_words(replace_all("_", " ", q_questions_type));

                        var q_question_package_data = {
                                "question": q_question_text,
                                "type": q_questions_type,
                                "required": $("#new-q-question-required").is(":checked"),
                            },
                            q_question_table_data = {
                                "question": q_question_text,
                                "type": q_type_text,
                            };
                        if (q_questions_type == "comment_box") {
                            //Max length Check
                            var q_comment_box_max_input = q_questions_q_type_wrap.find("#new-q-question-comment-box-max"),
                                q_comment_box_max_length = parseInt(q_comment_box_max_input.val(), 10);

                            if (isNaN(q_comment_box_max_length) || q_comment_box_max_length < 1 || q_comment_box_max_length > q_comment_box_max_input.attr("max")) return alert_message("danger", "Invalid comment box maximum", new_question_messages);

                            //Package
                            q_question_package_data.max_length = q_comment_box_max_length;
                            q_question_table_data.answers = "<strong>Max Answer Length: </strong> " + q_comment_box_max_length;
                        } else if (q_questions_type == "checkboxes" || q_questions_type == "multiple_choice") {
                            var q_questions_answers_inputs = q_questions_q_type_wrap.find(".new-q-question-checkboxes-wrap:visible .new-q-question-checkbox-answers"),
                                q_questions_answers_valid = [],
                                q_questions_answers_valid_text = "";

                            if (q_questions_answers_inputs.length) $.each(q_questions_answers_inputs, function() {
                                var q_questions_answer_val = clean($(this).val());
                                if (q_questions_answer_val.length && q_questions_answers_valid.indexOf(q_questions_answer_val) === -1) {
                                    q_questions_answers_valid.push(q_questions_answer_val);
                                    q_questions_answers_valid_text += '<li>' + q_questions_answer_val + '</li>';
                                }
                            });

                            var q_questions_answers_valid_len = q_questions_answers_valid.length;
                            if (q_questions_type == "multiple_choice" && q_questions_answers_valid_len < 2) return alert_message("danger", "Please enter at least 2 answers for this question", new_question_messages);
                            if (!q_questions_answers_valid_len) return alert_message("danger", "Please enter at least 1 answer for this question", new_question_messages);

                            q_question_package_data.answers = q_questions_answers_valid;
                            q_question_table_data.answers = "<strong>Answers List: </strong> <ul>" + q_questions_answers_valid_text + "</ul>";

                            if (q_questions_type == "checkboxes") {
                                var q_questions_answers_ck_min = parseInt(q_questions_q_type_wrap.find("#new-q-question-checkboxes-min-a").val(), 10),
                                    q_questions_answers_ck_max = parseInt(q_questions_q_type_wrap.find("#new-q-question-checkboxes-max-a").val(), 10);

                                //Min Max Check
                                if (isNaN(q_questions_answers_ck_min) || q_questions_answers_ck_min < 1) q_questions_answers_ck_min = "";
                                if (isNaN(q_questions_answers_ck_max) || q_questions_answers_ck_max < 1) q_questions_answers_ck_max = "";

                                if (q_questions_answers_ck_min && q_questions_answers_ck_min > q_questions_answers_valid_len) return alert_message("danger", "Minimum answers can't be MORE than total valid answers!<br />Change the minimum or leave empty for no minimum.", new_question_messages);

                                if (q_questions_answers_ck_max && q_questions_answers_ck_max >= q_questions_answers_valid_len) q_questions_answers_ck_max = 0;
                                if (q_questions_answers_ck_min && q_questions_answers_ck_max && q_questions_answers_ck_min > q_questions_answers_ck_max) q_questions_answers_ck_max = q_questions_answers_ck_min;

                                //Package
                                q_question_package_data.min_answers = q_questions_answers_ck_min;
                                q_question_package_data.max_answers = q_questions_answers_ck_max;

                                q_question_table_data.answers += "<hr /><strong>Answer Restrictions: </strong>";
                                var q_questions_ck_text = (!q_questions_answers_ck_min && !q_questions_answers_ck_max ? "None" : "");


                                if (q_questions_answers_ck_min) q_questions_ck_text = "Minimum " + q_questions_answers_ck_min;
                                if (q_questions_answers_ck_min && q_questions_answers_ck_max) q_questions_ck_text += " &amp; ";
                                if (q_questions_answers_ck_max) q_questions_ck_text += "Maximum " + q_questions_answers_ck_max;
                                q_question_table_data.answers += q_questions_ck_text;
                            }
                        } else if (q_questions_type == "date_time") {

                            var new_q_dt_f = q_questions_q_type_wrap.find("#new-q-question-date-time-future").is(":checked"),
                                new_q_dt_type = q_questions_q_type_wrap.find("#new-q-question-date-time-type").val();

                            //Validate
                            if (!new_q_dt_type) return alert_message("danger", "Please enter a date time type", new_question_messages);

                            //Package
                            q_question_package_data.future = new_q_dt_f;
                            q_question_package_data.dt_type = new_q_dt_type;
                            q_question_table_data.answers = (new_q_dt_f ? "Future " : "") + uc_words(replace_all("_", " ", new_q_dt_type));

                        } else return alert_message("danger", "Please enter a question type", new_question_messages);

                        q_question_table_data.actions = $("#questionnaire-datatable-actions-template").html();
                        q_question_package_data = encodeURIComponent(JSON.stringify(q_question_package_data));

                        q_question_table_data.actions = replace_all("QUESTION_DATA_REPLACE", q_question_package_data, q_question_table_data.actions);

                        var qq_set_dt_row_data = [
                            '<span class="questionnaire-questions-list-order-number"></span>',
                            q_question_table_data.question,
                            q_question_table_data.type,
                            q_question_table_data.answers,
                            q_question_table_data.actions,
                        ];

                        //If Editing
                        var qq_is_editing_question = $(".editing-qq-this");
                        if (qq_is_editing_question.length) {
                            questionnaire_dt.row(qq_is_editing_question).data(qq_set_dt_row_data).draw();
                        } else {
                            questionnaire_dt.row.add(qq_set_dt_row_data).draw(false);
                        }
                        q_question_list_set_order();
                        edit_campaign_validate_questionnaire();
                        $(".editing-qq-this").removeClass("editing-qq-this");

                        swal_alert("success", "Question " + (qq_is_editing_question.length ? "Updated" : "Added to questionnaire"), "Click OK to continue", function() {
                            new_question_modal.modal("hide");
                        });


                        return false;
                    }

                    //Delete Question
                    if ($(this).hasClass("questionnaire-remove-question")) {
                        var delete_qq_row = $(this).parents("tr");
                        swal_confirm("Delete Questionnaire Question?", "Confirm", function(isConfirm) {
                            if (isConfirm) {
                                questionnaire_dt.row(delete_qq_row).remove().draw(false);
                                q_question_list_set_order();
                                edit_campaign_validate_questionnaire();
                            }
                        });
                        return false;
                    }


                    new_question_config_types.hide();
                    new_question_form.trigger("reset");
                    new_question_form.find("#new-q-question-type").val("").trigger("change");
                    var new_question_modal_title = new_question_modal.find(".modal-title"),
                        new_qq_question_is_editing = $(this).hasClass("questionnaire-edit-question");
                    new_question_modal_title.html((new_qq_question_is_editing ? "Edit" : "Add New") + " Question");

                    $(".editing-qq-this").removeClass("editing-qq-this");

                    //Editing
                    if (new_qq_question_is_editing) {
                        var qq_editing_tr = $(this).parents("tr"),
                            qq_editing_input_val = JSON.parse(decodeURIComponent(qq_editing_tr.find("input[name='questionnaire_questions[]']").val())),
                            qq_editing_type = qq_editing_input_val.type;

                        qq_editing_tr.addClass("editing-qq-this");

                        //Add Data to modal
                        new_question_form.find("#new-q-question-text").val(qq_editing_input_val.question);
                        new_question_form.find("#new-q-question-required").prop("required", qq_editing_input_val.required);
                        new_question_form.find("#new-q-question-type").val(qq_editing_type).trigger("change");

                        if (qq_editing_type === "comment_box") new_question_form.find("#new-q-question-comment-box-max").val(qq_editing_input_val.max_length);
                        else if (qq_editing_type === "checkboxes" || qq_editing_type === "multiple_choice") {
                            var qq_editing_type_wrap = new_question_form.find(".new-q-question-type-config[data-type='" + qq_editing_type + "']");

                            var qq_editing_checkboxes_wrap = qq_editing_type_wrap.find(".new-q-question-checkboxes-wrap"),
                                qq_editing_checkboxes_html;
                            $.each(qq_editing_input_val.answers, function(index, answer) {
                                qq_editing_checkboxes_html = $(new_question_form.find(".new-q-question-checkboxes-template").html());
                                qq_editing_checkboxes_html.find(".new-q-question-checkbox-answers").val(answer);
                                qq_editing_checkboxes_wrap.append(qq_editing_checkboxes_html);
                            });

                            //Min /Max Answers Checkboxes
                            if (qq_editing_type === "checkboxes") {
                                qq_editing_type_wrap.find("#new-q-question-checkboxes-min-a").val(qq_editing_input_val.min_answers)
                                qq_editing_type_wrap.find("#new-q-question-checkboxes-max-a").val(qq_editing_input_val.max_answers)
                            }



                        } else if (qq_editing_type === "date_time") {
                            new_question_form.find("#new-q-question-date-time-future").prop("checked", qq_editing_input_val.future),
                                new_question_form.find("#new-q-question-date-time-type").val(qq_editing_input_val.dt_type).trigger("change");
                        }
                    }

                    //Show
                    new_question_modal.modal("show");
                    return false;
                });

                //Edit Questionnaire question type (Modal)
                $(document).on("change", "#new-q-question-type", function() {

                    var question_type = $(this).val();

                    new_question_config_types.hide();
                    if (question_type) {
                        var new_q_type_config = new_question_modal.find(".new-q-question-type-config[data-type='" + question_type + "']");
                        if (new_q_type_config.length) {
                            new_q_type_config.find(".new-q-auto-empty-on-start").html("");
                            new_q_type_config.slideDown("slow");
                            new_q_type_config.find(".new-q-auto-on-new").click();
                        }
                    }
                });

                //Edit Questionnaire Position
                $(document).on("click", ".questionnaire-edit-question-pos", function() {

                    var edit_question_dir = $(this).data("dir"),
                        edit_question_tr = $(this).parents("tr");

                    var index = questionnaire_dt.row(edit_question_tr).index();

                    var order = -1;
                    if (edit_question_dir === "down") order = 1;

                    var data1 = questionnaire_dt.row(index).data();
                    if (!data1) return;
                    data1.order += order;

                    var data2 = questionnaire_dt.row(index + order).data();
                    if (!data2) return;
                    data2.order += -order;

                    questionnaire_dt.row(index).data(data2);
                    questionnaire_dt.row(index + order).data(data1);

                    questionnaire_dt.page(0).draw(false);
                    q_question_list_set_order();
                });

                function q_question_list_set_order() {
                    var qq_list_count = 1;
                    $.each($(".questionnaire-questions-list-order-number"), function() {
                        $(this).html(qq_list_count.toString());
                        qq_list_count++;
                    });
                }

                function edit_campaign_validate_questionnaire() {

                    var valid_campaign_questionnaire = (
                        !$("input[name='questionnaire_on']").is(":checked") ||
                        (
                            $("#edit-campaign-q-title").val().length > 0 &&
                            questionnaire_dt.rows().count() > 0
                        )
                    );

                    set_edit_campaign_sub_nav_status("pages", "cp-questionnaire", valid_campaign_questionnaire ? "check" : "times", valid_campaign_questionnaire ? "success" : "danger");
                }



                /* /END Questionnaire functions */

                /* Indoctrination functions */
                $(document).on("change", ".indoctrination-toggle", function() {
                    if ($('[name="indoctrination[display]"]').is(":checked")) {
                        $('.indoctrination-page-info').slideDown("slow");
                    } else {
                        $('.indoctrination-page-info').hide();
                    }
                    edit_campaign_validate_indoctrination();
                });
                //Select change
                $(document).on("change", "#edit-campaign-indoctrination-select", function() {

                    var selected_val = $(this).select2().find(":selected").val(),
                        select_rows = $(".indoctrination-select-row"),
                        target_select_row = $(".indoctrination-select-row[data-type='" + selected_val + "']");
                    select_rows.hide();
                    if (target_select_row.length) target_select_row.slideDown("slow");
                });

                //Preview page
                $(document).on("click", ".preview-campaign-in-page, .campaign-in-preview-return", function() {

                    var in_input_wrap = $(".wizard-container"),
                        in_preview_wrap = $(".campaign-in-preview-wrap"),
                        in_preview_iframe = in_preview_wrap.find("#campaign-in-preview-iframe").contents(),
                        preview_inputs = $(".campaign-preview-in-input"),
                        preview_target,
                        input_target,
                        input_val,
                        v_parent;

                    if ($(this).hasClass("campaign-in-preview-return")) {
                        in_preview_wrap.hide();
                        in_input_wrap.slideDown("slow");
                    } else {
                        //Add contents
                        $.each(preview_inputs, function() {

                            preview_target = $(this).data("preview-target");
                            input_target = in_preview_iframe.find(preview_target);
                            input_val = clean($(this).val());

                            if (input_target && input_target.length) {

                                //Page video
                                if (preview_target === "#indoctrination-media-video") {

                                    v_parent = input_target.parent();

                                    if (ind_video_id_input.val() > 0) {
                                        input_target.html($(this).html());
                                        v_parent.show();
                                    } else {
                                        v_parent.hide();
                                    }
                                    return;
                                }

                                else if(preview_target === "#indoctrination-preview-text") {
                                    input_val = tinymce.get($(this).attr("id")).getContent();
                                }
                                else if (preview_target === "#indoctrination-preview-button") {
                                    var in_btn_text = $("#edit-campaign-in-bt").val();
                                    input_target.hide();
                                    if (in_btn_text.length) {
                                        input_target.html(in_btn_text);
                                        input_target.show();
                                    }
                                    return;
                                }

                                //Replace content
                                input_target.html(input_val);
                                if (!input_val.length) input_target.hide();
                                else input_target.show();
                            }
                        });

                        in_input_wrap.hide();
                        in_preview_wrap.slideDown("slow");
                    }
                    return false;
                });


                //Validate Indoctrination
                $(document).on("change", "#edit-campaign-indoctrination-select", function() {
                    edit_campaign_validate_indoctrination();
                });

                $(document).on("keyup", "#edit-campaign-indoctrination-link, #edit-campaign-in-title", function() {
                    edit_campaign_validate_indoctrination();
                });

                function edit_campaign_validate_indoctrination() {

                    if($('[name="indoctrination[display]"]').is(":checked")){
                        var indoctrination_option = $("#edit-campaign-indoctrination-select :selected").val(),
                            valid_indoctrination = (
                                indoctrination_option.length &&
                                (
                                    (indoctrination_option === "link" && clean($("#edit-campaign-indoctrination-link").val()).length) ||
                                    (indoctrination_option === "page" && clean($("#edit-campaign-in-title").val()).length)
                                )
                            );
                    }else{
                        valid_indoctrination = true;
                    }
                    set_edit_campaign_sub_nav_status("pages", "cp-indoctrination", valid_indoctrination ? "check" : "times", valid_indoctrination ? "success" : "danger");
                }


                /* /END Indoctrination functions */


                //Webinar File Upload / select
                var webinar_preview_wrap = $(".webinar-preview-wrap"),
                    webinar_set_video_wrap = $(".webinar-set-video-wrap"),
                    webinar_video_id_input = $("input[name='webinar_video_id']");
                $("#new-webinar-file-upload").change(function() {
                    var input_file_webinar = $(this),
                        file_name = input_file_webinar.val();
                    if (!file_name) return false;
                    file_name_parts = file_name.split("\\");
                    file_name = clean(file_name_parts[file_name_parts.length - 1]);

                    var iSize = ($("#new-webinar-file-upload")[0].files[0].size / 1024),
                        file_size_text;
                    if (iSize / 1024 > 1) {
                        if (((iSize / 1024) / 1024) > 1) {
                            iSize = (Math.round(((iSize / 1024) / 1024) * 100) / 100);
                            file_size_text = iSize + "GB";
                        } else {
                            iSize = (Math.round((iSize / 1024) * 100) / 100)
                            file_size_text = iSize + "MB";
                        }
                    } else {
                        iSize = (Math.round(iSize * 100) / 100)
                        file_size_text = iSize + "KB";
                    }

                    var w_webinar_filename = $(".new-webinar-file-details-filename"),
                        w_webinar_filesize = $(".new-webinar-file-details-filesize"),
                        w_webinar_file_input = $(".new-webinar-file-input"),
                        w_webinar_file_details_wrap = $(".new-webinar-file-details"),
                        webinar_upload_progress_bar = $(".new-webinar-file-details-upload-bar"),
                        webinar_upload_upload_text = $(".new-webinar-file-details-upload-text"),
                        edit_campaign_webinar_list_select = $("#edit-campaign-webinar-select"),
                        webinar_saved_videos_wrap = $(".webinar-saved-videos-wrap");

                    w_webinar_filename.html(file_name);
                    w_webinar_filesize.html(file_size_text);
                    w_webinar_file_input.hide();
                    w_webinar_file_details_wrap.slideDown("slow");
                    webinar_upload_progress_bar.attr("aria-valuenow", 0).css("width", "0%");
                    webinar_upload_upload_text.html("0");
                    webinar_saved_videos_wrap.hide();
                    set_edit_campaign_wizard_status("content", "arrow-up", "info");

                    $("#page_messages").html("").hide();

                    //Send to sever
                    var formData = new FormData(),
                        campaign_id = $("input[name='campaign_id']").val();
                    formData.append('webinar', $("#new-webinar-file-upload")[0].files[0]);
                    formData.append('campaign_id', campaign_id);
                    formData.append('_token' , '<?php echo csrf_token(); ?>');

                    var uploadURL = "/new_campaign_video"; //Upload URL
                    var jqXHR = $.ajax({
                        xhr: function() {
                            var xhrobj = $.ajaxSettings.xhr();
                            if (xhrobj.upload) {
                                xhrobj.upload.addEventListener('progress', function(event) {
                                    var percent = 0;
                                    var position = event.loaded || event.position;
                                    var total = event.total;
                                    if (event.lengthComputable) {
                                        percent = Math.ceil(position / total * 100);
                                    }
                                    //Set progress
                                    webinar_upload_progress_bar.attr("aria-valuenow", 0).css("width", percent + "%");
                                    webinar_upload_upload_text.html(percent);
                                }, false);
                            }
                            return xhrobj;
                        },
                        url: uploadURL,
                        type: "POST",
                        contentType: false,
                        processData: false,
                        cache: false,
                        data: formData,
                        success: function(data) {
                            w_webinar_file_details_wrap.hide();
                            w_webinar_file_input.show();
                            input_file_webinar.val("");

                            data = JSON.parse(data);
                            if (data.result != "success") {
                                var error = data.message;
                                if (!error) error = DEFAULT_MESSAGE;
                                alert_message("danger", error);
                                return false;
                            }

                            //List Saved Videos
                            edit_campaign_webinar_list_select.select2("destroy");
                            var edit_campaign_webinar_list_select_html = '<option value="">--- Select ---</option>';
                            $.each(data.return_data.webinar_videos_list, function(webinar_video_id, text) {
                                edit_campaign_webinar_list_select_html += '<option value="' + webinar_video_id + '">' + text + '</option>';
                            });
                            edit_campaign_webinar_list_select.html(edit_campaign_webinar_list_select_html);
                            edit_campaign_webinar_list_select.select2();
                            edit_campaign_webinar_list_select.val(data.return_data.webinar_video_id);

                            webinar_saved_videos_wrap.show();
                            $(".edit-campaign-use-selected-webinar").click();
                        }
                    });

                    $(document).on("click", ".cancel-webinar-media-upload", function() {

                        swal_confirm("Canel Upload?", "Uploading will stop and not be saved!", function(isConfirm) {

                            if (isConfirm) {
                                jqXHR.abort();
                                w_webinar_file_details_wrap.hide();
                                w_webinar_file_input.show();
                                input_file_webinar.val("");
                                webinar_saved_videos_wrap.show();
                                set_edit_campaign_wizard_status("content", "times", "danger");
                            }
                            return false;
                        });

                        return false;
                    });
                });

                //Change campaign wedinar video
                var webinar_preview_video = $("#webinar-preview-video");
                $(document).on("click", ".edit-campaign-change-webinar-video", function() {

                    webinar_preview_video[0].pause();
                    webinar_preview_wrap.hide();
                    webinar_set_video_wrap.slideDown("slow");
                    webinar_video_id_input.val("0");
                    set_edit_campaign_wizard_status("content", "hand-paper", "danger");

                    return false;
                });

                //Use Selected webinar
                $(document).on("click", ".edit-campaign-use-selected-webinar", function() {

                    $("#page_messages").html("").hide();
                    var webinar_video_id = $("#edit-campaign-webinar-select").val();
                    if (!webinar_video_id) {
                        alert_message("danger", "Please select a webinar from the list or upload a new video");
                        return false;
                    }

                    loading_modal("open", "Getting Webinar Video Data");

                    api("Campaign", "get_webinar_video_peview_data", {
                        webinar_video_id: webinar_video_id
                    }, function(result) {

                        loading_modal("close");

                        if (!result) return false;

                        var webinar_data = result.webinar_data,
                            video_status = parseInt(result.webinar_data.status, 10),
                            video_i_class = "danger",
                            video_i_icon = "times",

                            webinar_rendering_wrap = $(".webinar-video-preview-rendering");

                        webinar_rendering_wrap.show();
                        webinar_preview_video.html("");
                        if (video_status === 0 || video_status === -1) {
                            video_i_class = "info";
                            video_i_icon = "sync-alt";
                        } else if (video_status > 0) {
                            video_i_class = "success";
                            video_i_icon = "check";
                            webinar_rendering_wrap.hide();
                        }
                        set_edit_campaign_wizard_status("content", video_i_icon, video_i_class);

                        //Show Selected Video
                        var webinar_data_ignore_list = [
                            "video_status",
                            "video_urls",
                        ];
                        $.each(webinar_data, function(name, val) {

                            //Ignore List
                            if (webinar_data_ignore_list.indexOf(name) > -1) return false;


                            if (name === "thumb_url") {
                                webinar_preview_video.attr("poster", val);

                                //Add Videos if not rendering
                                var webinar_video_urls = webinar_data.video_urls;
                                if (video_status === 1 && webinar_video_urls && webinar_video_urls.length) {
                                    //List in HTML
                                    var webinar_html_sources = "";
                                    $.each(webinar_video_urls, function(index, video_data) {
                                        webinar_html_sources += '<source src="' + video_data.url + '" type="' + video_data.type + '">';
                                    });

                                    webinar_preview_video.html(webinar_html_sources);
                                    webinar_preview_video[0].load();
                                }
                            } else {
                                webinar_preview_wrap.find(".webinar-preview-" + name).html(val);
                            }

                        });
                        webinar_set_video_wrap.hide();
                        webinar_preview_wrap.slideDown("slow");
                        webinar_video_id_input.val(webinar_data.webinar_video_id);
                    });

                    return false;
                });

                // END: Webinar File Upload / select

                function set_edit_campaign_wizard_status(type, icon, text_type) {
                    var edit_campaign_content_status_icon = $(".edit-campaign-content-status-icon[data-type='" + type + "']");
                    if (!edit_campaign_content_status_icon.length) return false;

                    edit_campaign_content_status_icon.attr("class", "");
                    edit_campaign_content_status_icon.addClass("edit-campaign-content-status-icon fa fa-" + icon + " text-" + text_type);
                }

                function set_edit_campaign_sub_nav_status(type, li_content, icon, text_type) {
                    var campaign_sub_nav = $(".campaign-sub-nav[data-type='" + type + "']"),
                        edit_campaign_sub_nav_icon = campaign_sub_nav.find("li[data-content='" + li_content + "'] i"),
                        campaign_progress_bar_wrap = campaign_sub_nav.parent().find(".campaign-sub-nav-progress-wrap");
                    if (!edit_campaign_sub_nav_icon.length) return false;

                    edit_campaign_sub_nav_icon.attr("class", "");
                    edit_campaign_sub_nav_icon.addClass("fa fa-" + icon + " text-" + text_type);

                    //Progress Bar
                    if (!campaign_progress_bar_wrap.length) return;

                    //Get percent done
                    var campaign_progress_sub_done = campaign_sub_nav.find(".fa-check, .fa-sync-alt").length,
                        campaign_progress_sub_not_done = campaign_sub_nav.find(".fa-times").length,
                        campaign_progress_sub_total = campaign_progress_sub_done + campaign_progress_sub_not_done,

                        campaign_progress_sub_percent_done = Math.floor((campaign_progress_sub_done / campaign_progress_sub_total) * 100);

                    campaign_progress_bar_wrap.find(".cp-progress-amount").html(campaign_progress_sub_percent_done);
                    campaign_progress_bar_wrap.find(".cp-progress-bar").attr("aria-valuenow", campaign_progress_sub_percent_done).css("width", campaign_progress_sub_percent_done + "%");

                    var valid_pages_tab = (campaign_progress_sub_done === campaign_progress_sub_total);
                    set_edit_campaign_wizard_status("pages", valid_pages_tab ? "check" : "times", valid_pages_tab ? "success" : "danger");
                }

                /***** Communications *****/

                    //Add New / Edit Email
                var email_modal = $("#campaign-coms-email-modal"),
                    delay_sending_emails_row = email_modal.find(".delay-sending-coms-email"),
                    email_trigger = email_modal.find("#campaign-coms-email-trigger"),
                    email_template_select = email_modal.find("#campaign-coms-email-template-select"),
                    after_email_trigger_wrap = email_modal.find(".campaign-coms-email-after-trigger"),
                    email_template_modal_messages = email_modal.find(".modal-messages"),

                    email_template_refresh_list_btn = $(".campaign-coms-email-refresh-templates-list"),
                    email_template_list_loaded = false;

                $(document).on("click", ".edit-campaign-coms-new-email, .edit-coms-email, .delete-coms-email, .save-campaign-coms-email", function() {

                    var title = email_modal.find(".modal-title"),
                        form = email_modal.find("#campaign-coms-email-form"),

                        emails_header = $(".edit-campaign-emails-header"),
                        emails_header_none = $(".edit-campaign-emails-header-none"),
                        emails_op_wrap = $(".edit-campaign-emails-wrap");

                    email_template_modal_messages.html("").hide();

                    //Delete
                    if ($(this).hasClass("delete-coms-email")) {
                        var row_to_remove = $(this).parents(".edit-campaign-coms-email-wrap");
                        swal_confirm("Remove Email from campaign?", "Confirm", function(isConfirm) {
                            if (!isConfirm) return false;

                            row_to_remove.remove();

                            if (emails_op_wrap.children().length < 1) {
                                emails_header.hide();
                                emails_header_none.show();
                            }
                        });

                        return false;
                    }

                    //Saving
                    if ($(this).hasClass("save-campaign-coms-email")) {
                        //Validate

                        var selected_trigger_obj = email_trigger.select2().find(":selected"),
                            selected_template_obj = email_template_select.select2().find(":selected"),

                            selected_trigger_val = selected_trigger_obj.val(),
                            selected_trigger_text = selected_trigger_obj.text(),

                            selected_template_val = selected_template_obj.val(),
                            selected_template_text = selected_template_obj.text(),

                            campaign_communication_id = form.find("input[name='campaign_communication_id']").val();

                        if (!selected_trigger_val.length) {
                            alert_message("danger", "Please enter the email trigger.", email_template_modal_messages);
                            return false;
                        }

                        if (!selected_template_val.length) {
                            alert_message("danger", "Please enter the email template.", email_template_modal_messages);
                            return false;
                        }

                        var email_delay_html = "None",
                            delay_on = form.find("#campaign-coms-email-delay").is(":checked"),
                            email_delay_number = "",
                            email_delay_type = "";
                        if (delay_on) {
                            email_delay_number = parseInt(form.find("#campaign-coms-email-delay-number").val(), 10);
                            email_delay_type = form.find("#campaign-coms-email-delay-type :selected").val();

                            if (isNaN(email_delay_number) || email_delay_number < 1) {
                                alert_message("danger", "Please enter a valid delay whole number that is greater than 0", email_template_modal_messages);
                                return false;
                            }

                            if (!email_delay_type) {
                                alert_message("danger", "Please select a delay type", email_template_modal_messages);
                                return false;
                            }

                            email_delay_html = email_delay_number + " " + email_delay_type;
                        }

                        //Save Ready
                        var email_package_data = {
                                "campaign_communication_id": campaign_communication_id,
                                "trigger": selected_trigger_val,
                                "template_id": selected_template_val,
                                "delay_on": delay_on,
                                "delay_number": email_delay_number,
                                "delay_type": email_delay_type,
                            },
                            email_op_template = $(".edit-campaign-email-template").html(),

                            email_package_encoded = encodeURIComponent(JSON.stringify(email_package_data));


                        if ($(".editing-email-row").length) {

                            var email_editing_item = $(".editing-email-row");
                            email_editing_item.find("input[name='coms[emails][]']").val(email_package_encoded);
                            email_editing_item.find(".coms-email-op-trigger").html(selected_trigger_text);
                            email_editing_item.find(".coms-email-op-template").html(selected_template_text);
                            email_editing_item.find(".coms-email-op-delay").html(email_delay_html);

                            $(".editing-email-row").removeClass("editing-email-row");
                        } else {
                            email_op_template = replace_all("", selected_trigger_text, email_op_template);
                            email_op_template = replace_all("", email_delay_html, email_op_template);
                            email_op_template = replace_all("", selected_template_text, email_op_template);
                            email_op_template = replace_all("", email_package_encoded, email_op_template);

                            emails_header_none.hide();
                            emails_header.show();
                            emails_op_wrap.append(email_op_template);
                        }

                        email_modal.modal("hide");

                        return false;
                    }

                    $(".editing-email-row").removeClass("editing-email-row");

                    form.trigger("reset");
                    form.find("input[name='campaign_communication_id']").val("0");

                    if (email_template_list_loaded === false) email_template_refresh_list_btn.click();

                    //Editing
                    if ($(this).hasClass("edit-coms-email")) {
                        //Reverse package data
                        var editing_email_row = $(this).parents(".edit-campaign-coms-email-wrap"),
                            edit_email_package_data = JSON.parse(decodeURIComponent(editing_email_row.find("input[name='coms[emails][]']").val()));

                        console.log(edit_email_package_data);
                        console.log('###');
                        editing_email_row.addClass("editing-email-row");

                        //Add data
                        email_trigger.val(edit_email_package_data.trigger).trigger("change");

                        setTimeout(function() {
                            var coms_email_template_select = form.find("#campaign-coms-email-template-select");

                            coms_email_template_select.select2("destroy");
                            console.log(edit_email_package_data.template_id);
                            coms_email_template_select.val(edit_email_package_data.template_id).trigger("change");
                            coms_email_template_select.select2();
                        }, 1000);

                        let delay = Boolean(Number(edit_email_package_data.delay_on));
                        form.find("#campaign-coms-email-delay").prop("checked", delay).trigger("change");
                        form.find("#campaign-coms-email-delay-number").val(edit_email_package_data.delay_number);
                        form.find("#campaign-coms-email-delay-type").val(edit_email_package_data.delay_type).trigger("change");
                        form.find("input[name='campaign_communication_id']").val(edit_email_package_data.campaign_communication_id);

                        title.html("Edit Email");
                        email_modal.modal("show");

                        return false;
                    }

                    //New
                    title.html("New Email");
                    email_trigger.trigger("change");
                    email_template_select.trigger("change");
                    after_email_trigger_wrap.hide();
                    delay_sending_emails_row.hide();
                    email_modal.modal("show");

                    return false;
                });

                //Email Trigger change
                var last_email_set_trigger;
                $(document).on("change", "#campaign-coms-email-trigger", function() {

                    var selected_email_trigger = email_trigger.select2().find(":selected"),
                        selected_email_trigger_val = selected_email_trigger.val(),
                        delay_required = selected_email_trigger.data("delayRequired");

                    delay_negative = parseInt(selected_email_trigger.data("delayNegative"));
                    if(!isNaN(delay_negative)){
                        switch(delay_negative){
                            case 0:
                                $('label[for="campaign-coms-email-delay-number"]').html('Send After <span class="required">*</span>')
                                break;
                            case 1:
                                $('label[for="campaign-coms-email-delay-number"]').html('Send Before <span class="required">*</span>')
                                break;
                        }
                    }

                    $("#campaign-coms-email-modal").find("#campaign-coms-email-delay-type").val(null);
                    $("#campaign-coms-email-modal").find("#campaign-coms-email-delay-type").trigger('change.select2');

                    if (last_email_set_trigger !== selected_email_trigger_val) {
                        last_email_set_trigger = selected_email_trigger_val;
                        if (selected_email_trigger_val) {
                            //Trigger descriptions
                            email_modal.find(".campaign-coms-email-trigger-description").hide();
                            email_modal.find('.campaign-coms-email-trigger-description[data-trigger-id="' + selected_email_trigger_val + '"]').show();

                            //Delay required
                            email_modal.find("#campaign-coms-email-delay")
                                .prop("checked", delay_required)
                                .prop("disabled", delay_required)
                                .trigger("change");

                            after_email_trigger_wrap.slideDown("slow");
                        } else {
                            after_email_trigger_wrap.hide();
                        }
                    }
                });

                //Email template refresh
                $(document).on("click", ".campaign-coms-email-refresh-templates-list", function() {

                    email_template_list_loaded = true;

                    //Get List
                    loading_modal("open", "Getting Email Templates List");

                    api("Communications", "get_email_template_list_data", {}, function(result) {

                        loading_modal("close");

                        if (!result) return false;

                        //Make List
                        email_template_select.select2("destroy");
                        var email_template_list_html = {
                                custom: "",
                                defaults: "",
                            },
                            email_template_list_html_op = "";
                        $.each(result, function(email_type, email_templates) {

                            $.each(email_templates, function(index, list_data){
                                email_template_list_html[email_type] += '<option value="' + list_data.template_id + '">' + list_data.name + (email_type==="custom"?'(ID: ' + list_data.template_id + ')':'')+'</option>';
                            })

                        });

                        if(email_template_list_html.custom) {
                            email_template_list_html_op += '<optgroup label="Custom">'+email_template_list_html.custom+'</optgroup>';
                        }
                        if(email_template_list_html.defaults) {
                            email_template_list_html_op += '<optgroup label="Default">'+email_template_list_html.defaults+'</optgroup>';
                        }

                        email_template_select.html(email_template_list_html_op).select2();

                    }, email_template_modal_messages);

                    return false;
                });

                //Email delay toggle change
                $(document).on("change", "#campaign-coms-email-delay", function() {
                    if ($(this).is(":checked")) {
                        delay_sending_emails_row.slideDown("slow");
                    } else {
                        delay_sending_emails_row.hide();
                    }
                });

                //Add New /Edit Text
                var texts_modal = $("#campaign-coms-text-modal"),
                    delay_sending_texts_row = texts_modal.find(".delay-sending-coms-text"),
                    texts_trigger = texts_modal.find("#campaign-coms-text-trigger"),
                    after_texts_trigger_wrap = texts_modal.find(".campaign-coms-text-after-trigger"),
                    texts_dv_list = texts_modal.find(".campaign-coms-text-dynamic-values-list"),
                    text_length_wrap = texts_modal.find(".campaign-coms-text-message-length");

                $(document).on("click", ".edit-campaign-coms-new-text, .edit-coms-text, .delete-coms-text, .save-campaign-coms-text", function() {

                    var title = texts_modal.find(".modal-title"),
                        form = texts_modal.find("#campaign-coms-text-form"),
                        messages = texts_modal.find(".modal-messages"),

                        texts_header = $(".edit-campaign-texts-header"),
                        texts_header_none = $(".edit-campaign-texts-header-none"),
                        texts_op_wrap = $(".edit-campaign-texts-wrap");

                    messages.html("").hide();

                    //Delete
                    if ($(this).hasClass("delete-coms-text")) {
                        var row_to_remove = $(this).parents(".edit-campaign-coms-texts-wrap");
                        swal_confirm("Remove text message from campaign?", "Confirm", function(isConfirm) {
                            if (!isConfirm) return false;

                            row_to_remove.remove();

                            if (texts_op_wrap.children().length < 1) {
                                texts_header.hide();
                                texts_header_none.show();
                            }
                        });

                        return false;
                    }

                    //Saving
                    if ($(this).hasClass("save-campaign-coms-text")) {
                        //Validate

                        var selected_trigger_obj = texts_trigger.select2().find(":selected"),
                            selected_trigger_val = selected_trigger_obj.val(),
                            selected_trigger_text = selected_trigger_obj.text(),
                            campaign_communication_id = form.find("input[name='campaign_communication_id']").val();

                        if (!selected_trigger_val.length) {
                            alert_message("danger", "Please enter the text trigger.", messages);
                            return false;
                        }


                        var final_text_val = clean(form.find("#campaign-coms-text-message").val()),
                            final_text_length = final_text_val.length;

                        if (final_text_length < 1 || final_text_val == "" || final_text_val == " ") {
                            alert_message("danger", "Please enter the text message to be sent.", messages);
                            return false;
                        }

                        var texts_delay_html = "None",
                            delay_on = form.find("#campaign-coms-text-delay").is(":checked"),
                            texts_delay_number = "",
                            text_delay_type = "";
                        if (delay_on) {
                            texts_delay_number = parseInt(form.find("#campaign-coms-text-delay-number").val(), 10);
                            text_delay_type = form.find("#campaign-coms-text-delay-type :selected").val();

                            if (isNaN(texts_delay_number) /*|| texts_delay_number < 1*/) {
                                alert_message("danger", "Please enter a valid delay whole number that is greater than 0", messages);
                                return false;
                            }

                            if (!text_delay_type) {
                                alert_message("danger", "Please select a delay type", messages);
                                return false;
                            }

                            texts_delay_html = texts_delay_number + " " + text_delay_type;
                        }

                        //Save Ready
                        var texts_package_data = {
                                "campaign_communication_id": campaign_communication_id,
                                "trigger": selected_trigger_val,
                                "message": final_text_val,
                                "delay_on": delay_on,
                                "delay_number": texts_delay_number,
                                "delay_type": text_delay_type,
                            },
                            texts_op_template = $(".edit-campaign-texts-template").html(),

                            texts_package_encoded = encodeURIComponent(JSON.stringify(texts_package_data));

                        if ($(".editing-text-row").length) {

                            var text_editing_item = $(".editing-text-row");
                            text_editing_item.find("input[name='coms[texts][]']").val(texts_package_encoded);
                            text_editing_item.find(".coms-text-op-trigger").html(selected_trigger_text);
                            text_editing_item.find(".coms-text-op-message").html(final_text_val);
                            text_editing_item.find(".coms-text-op-delay").html(texts_delay_html);

                            $(".editing-text-row").removeClass("editing-text-row");
                        } else {

                            texts_op_template = replace_all("", selected_trigger_text, texts_op_template);
                            texts_op_template = replace_all("", texts_delay_html, texts_op_template);
                            texts_op_template = replace_all("", final_text_val, texts_op_template);
                            texts_op_template = replace_all("", texts_package_encoded, texts_op_template);

                            texts_header_none.hide();
                            texts_header.show();
                            texts_op_wrap.append(texts_op_template);
                        }

                        texts_modal.modal("hide");

                        return false;
                    }

                    $(".editing-text-row").removeClass("editing-text-row");

                    form.trigger("reset");
                    form.find("input[name='campaign_communication_id']").val("0");

                    //Editing
                    if ($(this).hasClass("edit-coms-text")) {
                        //Reverse package data
                        var editing_text_row = $(this).parents(".edit-campaign-coms-texts-wrap"),
                            edit_text_package_data = JSON.parse(decodeURIComponent(editing_text_row.find("input[name='coms[texts][]']").val()));

                        editing_text_row.addClass("editing-text-row");

                        //Add data
                        texts_trigger.val(edit_text_package_data.trigger).trigger("change");
                        form.find("#campaign-coms-text-message").val(edit_text_package_data.message).trigger("keyup");
                        form.find("#campaign-coms-text-delay").prop("checked", edit_text_package_data.delay_on).trigger("change");
                        form.find("#campaign-coms-text-delay-number").val(edit_text_package_data.delay_number);
                        form.find("#campaign-coms-text-delay-type").val(edit_text_package_data.delay_type).trigger("change");
                        form.find("input[name='campaign_communication_id']").val(edit_text_package_data.campaign_communication_id);

                        title.html("Edit Text Message");
                        texts_modal.modal("show");

                        return false;
                    }

                    //New
                    title.html("New Text Message");
                    texts_trigger.trigger("change");
                    form.find("#campaign-coms-text-message").trigger("keyup");
                    after_texts_trigger_wrap.hide();
                    delay_sending_texts_row.hide();
                    texts_modal.modal("show");
                    return false;
                });

                //Text Trigger change
                var last_text_set_trigger;
                $(document).on("change", texts_trigger, function() {

                    var selected_texts_trigger = texts_trigger.select2().find(":selected"),
                        selected_texts_trigger_val = selected_texts_trigger.val(),
                        dv_ids = selected_texts_trigger.data("dynamicValueIds"),
                        delay_required = selected_texts_trigger.data("delayRequired");

                    delay_negative = parseInt(selected_texts_trigger.data("delayNegative"));
                    //console.log(delay_negative);
                    if(!isNaN(delay_negative)){
                        switch(delay_negative){
                            case 0:
                                $('label[for="campaign-coms-text-delay-number"]').html('Send After <span class="required">*</span>')
                                break;
                            case 1:
                                $('label[for="campaign-coms-text-delay-number"]').html('Send Before <span class="required">*</span>')
                                break;
                        }
                    }

                    if (last_text_set_trigger !== selected_texts_trigger_val) {
                        last_text_set_trigger = selected_texts_trigger_val;
                        if (selected_texts_trigger_val) {
                            //Trigger descriptions
                            texts_modal.find(".campaign-coms-text-trigger-description").hide();
                            texts_modal.find('.campaign-coms-text-trigger-description[data-trigger-id="' + selected_texts_trigger_val + '"]').show();

                            //Delay required
                            texts_modal.find("#campaign-coms-text-delay")
                                .prop("checked", delay_required)
                                .prop("disabled", delay_required)
                                .trigger("change");

                            //Dynamic values to show
                            texts_dv_list.find("li").hide();
                            if (dv_ids && dv_ids.length) $.each(dv_ids, function(index, dv_id) {
                                texts_dv_list.find('li[data-dv-id="' + dv_id + '"]').show();
                            });

                            after_texts_trigger_wrap.slideDown("slow");
                        } else {
                            after_texts_trigger_wrap.hide();
                        }
                    }
                });

                //Text max length
                $(document).on("keyup", "#campaign-coms-text-message", function() {

                    var text_dv_warning = texts_modal.find(".campaign-coms-text-message-dv-warning"),
                        text_message_val = $(this).val(),
                        has_dv = false,
                        text_message_length = text_message_val.length;

                    //Has DV
                    if (text_message_length) {
                        $.each($(".text-dv-values-item"), function() {
                            if (text_message_length > 140 || text_message_val.indexOf($(this).html()) !== -1) {
                                has_dv = true;
                                return false;
                            }
                        });
                    }

                    if (has_dv) {
                        text_dv_warning.slideDown("slow");
                    } else {
                        text_dv_warning.hide();
                    }

                    text_length_wrap.removeClass("text-danger");
                    text_length_wrap.html(text_message_length);
                    if (text_message_length > 140) text_length_wrap.addClass("text-danger");

                });

                //Text delay toggle change
                $(document).on("change", "#campaign-coms-text-delay", function() {
                    if ($(this).is(":checked")) {
                        delay_sending_texts_row.slideDown("slow");
                    } else {
                        delay_sending_texts_row.hide();
                    }
                });

                /***** Publish Campaign *****/

                //Status Change
                $(document).on("change", "#pc-status", function() {

                    var selected_val = $(this).select2().find(":selected").val();

                    $(".pc-statuses-helper").hide();
                    $(".pc-statuses-helper[data-status='" + selected_val + "']").slideDown("slow");
                });

                //Publish validate
                $(document).on("keyup", "#pc-name", function() {
                    var valid = clean($(this).val()).length;

                    set_edit_campaign_wizard_status("publish", valid ? "check" : "times", valid ? "success" : "danger");
                });

                //Save Campaign
                var edit_campaign_form = $("#edit-campaign-form");
                $(document).on("click", ".save-edit-campaign, .confirm-save-campaign", function() {

                    //Validate campaign
                    var save_edit_campaign_modal = $("#save-edit-campaign-modal"),
                        sec_ready_wrap = save_edit_campaign_modal.find(".save-edit-campaign-ready"),
                        sec_warning_wrap = save_edit_campaign_modal.find(".save-edit-campaign-warnings");

                    //Conf Save

                    if ($(this).hasClass("confirm-save-campaign")) {

                        save_edit_campaign_modal.modal("hide");

                        //Lead Page Image
                        // var image_obj = $("#edit-campaign-lp-ri").slim('dataBase64'),
                        //     image_data = image_obj ? image_obj[0].output.image : false;
                        //
                        // edit_campaign_form.find("input[name='lead_page[image]']").val(image_data ? image_data : "");

                        //Clear Slim
                        edit_campaign_form.find("input[name='slim[]']").val("");

                        //TinyMce form inputs
                        var lp_form_inputs_wrap = $("#lp-form-inputs");
                        lp_form_inputs_wrap.html("");
                        $.each(tinyMcePageData("ec-lp-"), function(id, data){
                            $('<input>').attr({
                                type: 'hidden',
                                name: data.form_name,
                                value: encodeURIComponent(data.content),
                            }).appendTo(lp_form_inputs_wrap);
                        });

                        var form_data = edit_campaign_form.serialize();

                        loading_modal("open", "Saving Campaign");

                        $.ajax({
                            type: 'POST',
                            url: '/editCampaign',
                            data: {
                                '_token': '<?php echo csrf_token() ?>',
                                'form_data': form_data
                            },
                            success: function (result) {
                                setFormSubmitting();
                                swal_alert("success", "Campaign Updated", "Click OK to go back to campaigns list", function() {
                                    window.location.href = result;
                                });
                            }
                        });
                        // api("Campaign", "save_edit_campaign", form_data, function(result) {
                        //
                        //     loading_modal("close");
                        //
                        //     if (!result) return false;
                        //
                        //     setFormSubmitting();
                        //
                        //     swal_alert("success", "Campaign Updated", "Click OK to go back to campaigns list", function() {
                        //         window.location.href = result.url;
                        //     });
                        // });

                        return false;
                    }

                    if ($(".ecc-required.fa-times").length) {
                        swal_alert("error", "Please resolve all the tabs marked with a <i class='fa fa-times' style='color: #F00'></i> before saving", "Click OK to return and fix issues");
                        return false;
                    }

                    //Ready or warnings
                    sec_ready_wrap.hide();
                    sec_warning_wrap.hide();
                    if ($(".edit-campaign-content-status-icon.fa-sync-alt").length || $(".campaign-sub-nav .nav-item[data-content='cp-holding'] .fa-sync-alt").length) sec_warning_wrap.show();
                    else sec_ready_wrap.show();

                    save_edit_campaign_modal.modal("show");

                    return false;
                });


                //Trigger validate on load
                loading_modal("open", "Preparing Campaign for editing...");
                setTimeout(function() {
                    edit_campaign_form.find(":input, .ec-tinymce-inline-lead").trigger("change").trigger("keyup");
                }, 650);
                setTimeout(function() {
                    loading_modal("close");
                }, 5000);


                //modal src
                var $videoSrc;
                $('.video-btn').click(function() {
                    $videoSrc = $(this).data( "src" );

                });
                // when the modal is opened autoplay it
                $('#videoModal').on('shown.bs.modal', function (e) {

                    // set the video src to autoplay and not to show related video.
                    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );

                })

                // stop playing the youtube video when I close the modal
                $('#videoModal').on('hide.bs.modal', function (e) {
                    // a poor man's stop video
                    $("#video").attr('src',$videoSrc);
                })

                $(document).on("click", ".add-user-campaign", function() {
                    let element = $(this);
                    let user_id = $(this).attr('data-id');
                    let row = element.parent().parent().parent();
                    let order = row.find('.users-list-order-number').html();
                    api("Campaign", "add_user_campaign", {
                        user_id:     user_id,
                        campaign_id: $("input[name='campaign_id']").val(),
                        order: order
                    }, function(result) {

                        if(result.status==1){
                            element.addClass('add-user-campaign-in-campaign');
                        }else{
                            element.removeClass('add-user-campaign-in-campaign');
                        }

                    });

                });

            });

            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
    <script type="text/javascript">
        var BASE_URL = "https://www.clientfunnels.io/",
            API_URL = "{{env('APP_URL')}}",
            DEFAULT_MESSAGE = "We could not process your request right now, please try again or contact us";
    </script>

    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "2cb97914-9f14-45af-aa69-5c75e2abe437";
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
    <script>
        $crisp.push(["set", "user:email", ["helenahillfit@gmail.com"]]);
        $crisp.push(["set", "user:company", ["Silko Ltd t/a Body Glow Coaching"]]);
        $crisp.push(["set", "user:nickname", ["sHelena Hill"]]);
        $crisp.push(["set", "user:avatar", ["https://www.clientfunnels.io/uploads/profile_image/236/profile_image.jpeg?1595371709"]]);
        $crisp.push(["set", "session:data", [
            [
                ["user_id", "236"],
                ["company_id", "192"],
            ]
        ]]);
    </script>
@endsection