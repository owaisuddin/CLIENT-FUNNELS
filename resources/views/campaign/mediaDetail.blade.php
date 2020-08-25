@extends('layouts.app')
@section('content')


        <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12" id="page_messages"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">airplay</i>
                                    </div>
                                    <h4 class="card-title">View Campaign Media</h4>
                                </div>
                                <div class="card-body">
                                    <div class="toolbar">
                                        <a href="/campaigns/media"
                                           title="Back to media list" class="btn btn-success m-b">
                                            <i class="fa fa-arrow-left"></i> Media List
                                        </a>

                                        <button type="button" class="btn btn-rose watch-media-video m-b"
                                                data-toggle="modal"
                                                data-target="#myModal">
                                            <i class="fa fa-play"></i> Watch
                                        </button>

                                        <a type="button"
                                           class="btn btn-danger m-b pull-right btn-sm delete-content"
                                           href="/delete/media/{{$webinar_video['id']}}">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>

                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12 ml-auto mr-auto">
                                            <div class="page-categories">

                                                <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab"
                                                           href="#view-campaign-media-details" role="tablist">
                                                            <i class="material-icons">info</i> Description
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab"
                                                           href="#view-campaign-media-campaigns" role="tablist">
                                                            <i class="material-icons">build</i> Campaigns
                                                        </a>
                                                    </li>
                                                </ul>

                                                <hr>
                                                <div class="tab-content tab-space tab-subcategories">

                                                    <div class="tab-pane active" id="view-campaign-media-details">
                                                        <div class="card">
                                                            <div class="card-body">

                                                                <div class="row m-b word-break">
                                                                    <div class="col-sm-6">
                                                                        <strong>Video ID:</strong> {{$webinar_video['id']}}
                                                                    </div>


                                                                    <div class="col-sm-6">
                                                                        <strong>Name:</strong>
                                                                        {{$webinar_video['videos']}}
                                                                    </div>

                                                                </div>
                                                                <hr>
                                                                <div class="row m-b word-break">
{{--                                                                        <div class="col-sm-6">--}}
{{--                                                                            <strong>Duration:</strong>  seconds--}}
{{--                                                                        </div>--}}


                                                                    <div class="col-sm-12">
                                                                        <strong>Created:</strong>
                                                                        {{$webinar_video['created_at']}}
                                                                    </div>

                                                                </div>
                                                                <hr>
                                                                <div class="row m-b word-break">
                                                                    <div class="col-sm-6">
                                                                        <strong>Created By:</strong> <span
                                                                                class="label label-success">{{$webinar_video['created_by']}}</span>
                                                                    </div>


                                                                    <div class="col-sm-6">
                                                                        <strong>Status:</strong> <span
                                                                                class="text-success"><i
                                                                                    class="fa fa-check"></i> Video Ready</span>
                                                                    </div>

                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="view-campaign-media-campaigns">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                @if(empty($webinar_video['webinarVideo']))
                                                                <div class="alert alert-info">
                                                                    Video not used in any campaigns.
                                                                </div>
                                                                @else
                                                                    <div class="row">
                                                                            <div class="col-sm-3">
                                                                                <b>id</b>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <b>name</b>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <b>webinar_url</b>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <b>status</b>
                                                                            </div>
                                                                        <br/>
                                                                        <br/>
                                                                        @foreach($webinar_video['webinarVideo'] as $webinar)
                                                                        <div class="col-sm-3">
                                                                            {{$webinar['id']}}
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            {{$webinar['name']}}
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <a href="{{$webinar['webinar_url']}}" target="_blank">
                                                                                {{$webinar['webinar_url']}}
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            {{$webinar['status']}}
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->            </div>
            </div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Watch Video</h5>
                    </div>
                    <div class="row watch-media-video"
                         data-type="ready">
                        <div class="col-sm-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video width="550" controls
                                       autoplay>
                                    <source src="{{asset('/uploads/'.$webinar_video->videos)}}"
                                            type="video/mp4">
                                    <source src="{{asset('/uploads/'.$webinar_video->videos)}}"
                                            type="video/ogg">
                                    Your browser does not
                                    support HTML video.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-danger"
                                data-dismiss="modal">Close
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">

                <div class="copyright float-left">
                    <a href="#" title="View Our Cookie Policy" class="view-cookie-policy">
                        Cookie Policy
                    </a>
                    |
                    <a href="#" title="View Our Privacy Policy" class="view-privacy-policy">
                        Privacy Policy
                    </a>
                </div>
                <div class="copyright float-right">
                    © 2020 Client Funnels
                </div>
            </div>
        </footer>

    <!--Modals -->
    <!-- Loading -->
    <div id="loading-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>

                <div class="modal-body">
                    <p>
                        <img src="https://www.clientfunnels.io/img/loading-hc.gif"
                             class="img-responsive modal-img-center">
                    </p>
                </div>

            </div>
        </div>
    </div>

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

    <script src="https://www.clientfunnels.io/js/default.js?v=1.1.2"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.dataTables.min.js"></script>
    <script src="https://www.clientfunnels.io/js/app-media.js?v=1.1.0"></script>

    <script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>

    <script>
        $(document).ready(function () {
            $().ready(function () {
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

                $('.fixed-plugin a').click(function (event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function () {
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

                $('.fixed-plugin .background-color .badge').click(function () {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function () {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function () {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function () {
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

                $('.switch-sidebar-image input').change(function () {
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

                $('.switch-sidebar-mini input').change(function () {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function () {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function () {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function () {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>



    <div class="crisp-client">
        <div class="crisp-1o7uamv">
            <div class="crisp-1qz76wn">
                <style type="text/css">.crisp-client .crisp-1rjpbb7 .crisp-12w1xmh,
                    .crisp-client .crisp-1rjpbb7 .crisp-poqhnx:hover {
                        color: #FFFFFF !important;
                        -webkit-text-fill-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1wiroug,
                    .crisp-client .crisp-1rjpbb7 .crisp-ao27ue:hover {
                        color: #5B5B5B !important;
                        -webkit-text-fill-color: #5B5B5B !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-6mlwlm,
                    .crisp-client .crisp-1rjpbb7 .crisp-q5z06s:hover {
                        color: #3F3F3F !important;
                        -webkit-text-fill-color: #3F3F3F !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-wcida4,
                    .crisp-client .crisp-1rjpbb7 .crisp-o6w0yc:hover {
                        color: #2A2A2A !important;
                        -webkit-text-fill-color: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-pusm34 {
                        background-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-bdhv0t {
                        background-color: #5B5B5B !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-9o0cq7 {
                        background-color: #3A3A3A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ws3gf1,
                    .crisp-client .crisp-1rjpbb7 .crisp-13h0akn:before,
                    .crisp-client .crisp-1rjpbb7 .crisp-13h0akn:after {
                        background-color: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1gr5ak3 {
                        background-color: #F2F2F2 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-145mbcr,
                    .crisp-client .crisp-1rjpbb7 .crisp-1jrqqbm:hover {
                        background-color: #F9F9F9 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-17f70m7 {
                        background-image: linear-gradient(125deg, #2A2A2A -10%, #5B5B5B 100%) !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-111u58f,
                    .crisp-client .crisp-1rjpbb7 .crisp-y1nqlk:hover {
                        border-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14u434g {
                        border-color: rgba(91, 91, 91, 0.175) !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-k6ym6q,
                    .crisp-client .crisp-1rjpbb7 .crisp-1hadq69:hover,
                    .crisp-client .crisp-1rjpbb7 .crisp-1kqjjm4:before,
                    .crisp-client .crisp-1rjpbb7 .crisp-1kqjjm4:after {
                        border-color: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1n0zdj7 {
                        border-color: rgba(42, 42, 42, 0.15) !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-rdu43e {
                        border-top-color: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ogcg7k,
                    .crisp-client .crisp-1rjpbb7 .crisp-1mnx9b2:hover {
                        border-color: #F2F2F2 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11:placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11:-moz-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11::-moz-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11:-ms-input-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11::-webkit-input-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp:placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp:-moz-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp::-moz-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp:-ms-input-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp::-webkit-input-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-gjhthi,
                    .crisp-client .crisp-1rjpbb7 .crisp-1t1dtpc:hover,
                    .crisp-client .crisp-1rjpbb7 .crisp-gjhthi:hover,
                    .crisp-client .crisp-1rjpbb7 .crisp-1t1dtpc:active,
                    .crisp-client .crisp-1rjpbb7 .crisp-gjhthi:active,
                    .crisp-client .crisp-1rjpbb7 .crisp-1v3kwn:hover .crisp-oc2kqi,
                    .crisp-client .crisp-1rjpbb7 .crisp-1v3kwn .crisp-oc2kqi:active {
                        background: #5B5B5B !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1dgibgx,
                    .crisp-client .crisp-1rjpbb7 .crisp-1r2x6vr:hover {
                        background: #3F3F3F !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1dgibgx:hover,
                    .crisp-client .crisp-1rjpbb7 .crisp-1r2x6vr:active {
                        background: #515151 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1dgibgx:active {
                        background: #5B5B5B !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-27o9vm:hover .crisp-1ekhg1c {
                        background: #3F3F3F !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-27o9vm .crisp-1ekhg1c:active {
                        background: #515151 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ox3dbf,
                    .crisp-client .crisp-1rjpbb7 .crisp-1fmeyoi[data-active="true"] {
                        background: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ox3dbf:hover {
                        background: #3A3A3A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ox3dbf:active {
                        background: #3F3F3F !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j::-moz-selection,
                    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j *::-moz-selection {
                        background-color: #E9E9E9 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j::selection,
                    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j *::selection {
                        background-color: #E9E9E9 !important;
                    }</style>
            </div>
            <div class="crisp-1nasccw">
                <style type="text/css">.crisp-client .crisp-1rjpbb7 {
                        z-index: 1000000;
                    }
                </style>
            </div>
        </div>
        <div id="crisp-chatbox" lang="en" dir="ltr" translate="no" data-blocked="false" data-lock-maximized="false"
             data-last-operator-face="false" data-availability-tooltip="false" data-hide-vacation="false"
             data-hide-on-away="false" data-hide-on-mobile="false" data-position-reverse="false" data-full-view="true"
             data-small-view="true" data-large-view="false" data-availability="away" data-is-activity-ongoing="false"
             data-was-availability-online="false" data-has-local-messages="false" class="crisp-1rjpbb7">
            <div class="crisp-1rf4xdh crisp-k5ll1j"><a data-maximized="false" data-is-failure="false" href="#!"
                                                       class="crisp-kquevr"
                                                       data-cshid="b3588d11-6514-4f0c-ce02-ae30446411de"><span
                            class="crisp-1059tj2"><span data-id="general_entice" data-with-helpdesk="true"
                                                        data-is-concealed="false" class="crisp-1xaupiq"
                                                        style="display: block !important;"><span
                                    class="crisp-1sa0919"><span class="crisp-1s66m5e crisp-9dgo7z"><span
                                            class="crisp-yzclt"><span class="crisp-5me80a"><span
                                                    class="crisp-bz13r8 crisp-i1yn7v"></span><span
                                                    data-has-avatar="true" class="crisp-1sd4dmd"><span
                                                        class="crisp-191rfs5"><span class="crisp-pkd0me crisp-13qutdl">Welcome to Client Funnels Technical Support.</span><span
                                                            data-id="online" class="crisp-h99wdo crisp-9dgo7z">Support is online.</span><span
                                                            data-id="away" class="crisp-h99wdo crisp-9dgo7z">Support is away.</span></span><span
                                                        class="crisp-z83vpo"><span
                                                            class="crisp-bjk43g crisp-4oo1n4"><span
                                                                style="background-image: url('https://image.crisp.chat/avatar/operator/0d30b760-8a4c-42d4-961a-69c12fe53bae/240/?1597088119999') !important;"
                                                                class="crisp-2tz7y crisp-1mh9nm6"></span></span></span></span></span></span><span
                                            data-when="online" class="crisp-a1mko8"><span
                                                class="crisp-vz5ota crisp-1jrqqbm"><span class="crisp-4snher"><span
                                                        class="crisp-rvg3pe crisp-wcida4 crisp-13qutdl">Chat with Client Funnels Team</span></span></span></span><span
                                            data-when="away" class="crisp-a1mko8"><span data-pop="spotlight"
                                                                                        class="crisp-vz5ota crisp-1jrqqbm"><span
                                                    class="crisp-4snher"><span
                                                        class="crisp-rvg3pe crisp-wcida4 crisp-13qutdl">Search help center</span></span></span><span
                                                class="crisp-vz5ota crisp-1jrqqbm"><span class="crisp-4snher"><span
                                                        class="crisp-rvg3pe crisp-13qutdl">Chat</span></span></span></span></span></span></span></span><span
                            class="crisp-x94m06 crisp-ws3gf1"><span data-id="chat_closed" class="crisp-16qgsyi"><span
                                    class="crisp-1t2kwsy"><span class="crisp-174tqf9 crisp-1e8tjtx"></span></span><span
                                    data-is-ongoing="false" class="crisp-101bp3x"></span></span></span></a></div>
        </div>
    </div>
@endsection