@extends('layouts.app')

@section('content')
    <div class="wrapper">
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" title="New Contact Messages">
                                    <i class="material-icons" style="font-size: 3em;">chat</i>
                                    <span class="notification header-total-new-messages" style="display: none"></span>
                                    <p class="d-lg-none d-md-block">
                                        New Contact Message
                                    </p>
                                    <div class="ripple-container"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="https://www.clientfunnels.io/contacts?new-messages">View
                                        Contacts With&nbsp;<span class="header-total-new-messages"></span>&nbsp;New
                                        Messages</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="https://www.clientfunnels.io/admin/credits"
                                   title="SMS Credits">
                                    <i class="fas fa-2x fa-comments-dollar"></i>
                                    <span class=" header-total-credits"></span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons" style="font-size: 3em;">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                    <div class="ripple-container"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="https://www.clientfunnels.io/my-account">My
                                        Account</a>
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
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">build</i>
                                        </div>
                                        <h4 class="card-title">Campaigns</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="toolbar">
                                            <button type="button" class="btn btn-success start-new-campaign"
                                                    title="Start New Campaign">
                                                <i class="fa fa-plus"></i> Start New Campaign
                                            </button>

                                            <a href="https://www.clientfunnels.io/campaigns/media" class="btn btn-info"
                                               title="View Your Media Files">
                                                <i class="fa fa-video"></i> Media
                                            </a>

                                        </div>
                                        <div class="material-datatables">
                                            <table id="campaign-list-dt"
                                                   class="table table-striped table-no-bordered table-hover"
                                                   cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Campaign ID</th>
                                                    <th>Name</th>
                                                    <th>Video Status</th>
                                                    <th>Webinar URL</th>
                                                    <th>Statistics</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                                </thead>
                                                @foreach($campaigns as $campaign)
                                                <tr>
                                                    <td>{{$campaign->id}}
                                                        <hr>
                                                        <span class="text-success"><i
                                                                    class="fas fa-check"></i> {{$campaign->status}}</span></td>
                                                    <td>{{$campaign->name}}</td>
                                                    <td class="campaign-video-render-status" data-campaign-id="{{$campaign->id}}"
                                                        data-status="1">
                                                        <img src="https://www.clientfunnels.io/img/loading-hc.gif"
                                                             class="img-fluid" style="max-height: 50px;"/>
                                                    </td>
                                                    <td>
                                                        Webinar URL:
                                                        <a href="https://www.clientfunnels.io/webinar/lead/736"
                                                           target="_blank" title="View Webinar Lead Page">
                                                            {{$campaign->webinar_url}}</a>
                                                        <hr/>
                                                        Booking URL:
                                                        <a href="https://www.clientfunnels.io/booking/736"
                                                           target="_blank" title="Booking Page">
                                                            {{$campaign->booking_url}}</a>

                                                    </td>
                                                    <td>
                                                        <strong>Page Views: {{$campaign->page_views}}</strong><br>
                                                        <strong>Registrations: {{$campaign->registrations}}</strong><br>
                                                        <strong>Call Bookings: {{$campaign->bookings}}</strong><br>
                                                        <strong>Call Closed: {{$campaign->call_closed}}</strong>
                                                        <hr/>
                                                        Created: {{date("F j, Y, g:i a", strtotime($campaign->created_at))}}<br>By: <span
                                                                class="label label-success">You</span></td>
                                                    <td>
                                                        <a href="https://www.clientfunnels.io/campaigns/view/736"
                                                           class="btn btn-success m-b">
                                                            <i class="fa fa-eye"></i> View
                                                        </a>

                                                        <a href="https://www.clientfunnels.io/campaigns/edit-campaign/736"
                                                           class="btn btn-warning m-b">
                                                            <i class="fa fa-wrench"></i> Edit
                                                        </a>


                                                        <button type="button"
                                                                class="btn btn-info m-b start-duplicate-campaign"
                                                                data-campaign-id="736" title="Duplicate Campaign">
                                                            <i class="far fa-object-ungroup"></i> Duplicate
                                                        </button>

                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tfoot>
                                                <tr>
                                                    <th>Campaign ID</th>
                                                    <th>Name</th>
                                                    <th>Video Status</th>
                                                    <th>Webinar URL</th>
                                                    <th>Statistics</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                                </tfoot>
                                                <tbody>

                                                </tbody>
                                            </table>
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
            </div>

        </div>
    </div>

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
                             class="img-responsive modal-img-center"/>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Re Login Modal -->
    <div id="re-login-modal" class="modal fade hmodal-success" role="dialog" data-backdrop="static"
         data-keyboard="false">
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
                                        <label for="re-login-email" class="bmd-label-floating"> Email <span
                                                    class="required">*</span></label>
                                        <input type="text" class="form-control" id="re-login-email" required="true"
                                               name="email" value="helenahillfit@gmail.com" maxlength="100">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="re-login-password" class="bmd-label-floating"> Password <span
                                                    class="required">*</span></label>
                                        <input type="password" class="form-control" name="password"
                                               id="re-login-password" maxlength="50" placeholder="Password"/>
                                    </div>
                                </div>
                            </div>


                        </form>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success do-re-login"><i class="fa fa-arrow-right"
                                                                                 aria-hidden="true"></i> Login
                    </button>
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

                            <input type="hidden" name="action"/>
                            <input type="hidden" name="type"/>
                            <input type="hidden" name="delete_id"/>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle"></i> <span
                                                class="del-modal-preview"></span>
                                    </div>
                                </div>
                            </div>
                            <hr/>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="del-modal-notes" class="bmd-label-floating"> Notes <span
                                                    class="required">*</span></label><br/>
                                        <textarea class="form-control" id="del-modal-notes" required="true" name="notes"
                                                  maxlength="2000"
                                                  placeholder="Please enter notes to delete!"></textarea>
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
                            <button type="button" class="btn btn-danger conf-delete-modal"><i class="fa fa-trash"
                                                                                              aria-hidden="true"></i>
                                Delete
                            </button>
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
    <!-- Start New Campaign -->
    <div id="start-new-campaign-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>

                <div class="modal-messages"></div>

                <form id="start-new-campaign-form" class="form-horizontal live-form-validation">
                    <input type="hidden" name="duplicate_campaign_id" value="0"/>

                    <div class="modal-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-info">
                                    Enter Campaign name below to start.<br> You can change this at any time later!
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="new-company-user-name" class="bmd-label-floating"> Name <span
                                                class="required">*</span></label>
                                    <input type="text" class="form-control" id="new-company-user-name" required="true"
                                           name="name" value="" maxlength="100">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="new-company-user-notes" class="bmd-label-floating"> Notes</label>
                                    <textarea rows="5" class="form-control" id="new-company-user-notes" name="notes"
                                              maxlength="2000"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-success pull-right">
                            <i class="fa fa-arrow-right"></i> Start Campaign
                        </button>

                    </div>

                </form>

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

    <script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>

    <script>
        $(document).ready(function () {
            $().ready(function () {
                if ($(".start-new-campaign").length) {
                    var start_new_campaign_modal = $("#start-new-campaign-modal"),
                        start_new_campaign_form = start_new_campaign_modal.find(
                            "#start-new-campaign-form"
                        ),
                        start_new_campaign_messages = start_new_campaign_modal.find(
                            ".modal-messages"
                        );

                    //Show Modal
                    $(document).on(
                        "click",
                        ".start-new-campaign, .start-duplicate-campaign",
                        function () {
                            start_new_campaign_messages.html("").hide();
                            start_new_campaign_form.trigger("reset");

                            var campaign_id = parseInt($(this).data("campaign-id"), 0xa),
                                modal_title = "Start New Campaign";
                            if (campaign_id && campaign_id > 0) modal_title = "Duplicate Campaign";
                            else campaign_id = 0;

                            start_new_campaign_modal.find(".modal-title").html(modal_title);
                            start_new_campaign_form
                                .find("input[name='duplicate_campaign_id']")
                                .val(campaign_id);

                            start_new_campaign_modal.modal("show");

                            return false;
                        }
                    );

                    //Submit to start new campaign
                    $(document).on("submit", start_new_campaign_form, function (e) {
                        e.preventDefault();

                        loading_modal("open", "Starting Campaign");

                        var form_data = $('#start-new-campaign-form').serializeArray().reduce(function (obj, item) {
                            obj[item.name] = item.value;
                            return obj;
                        }, {});

                        $.ajax({
                            type: 'POST',
                            url: '/startCampaign',
                            data: {
                                '_token': '<?php echo csrf_token() ?>',
                                'form_data': form_data
                            },
                            success: function (result) {
                                window.location.href = result;
                            }
                        });

                        return false;
                    });
                }

                if ($(".campaign-video-render-status").length) {

                    var list_table = $('#campaign-list-dt').DataTable({
                        "pagingType": "full_numbers",
                        "lengthMenu": [
                            [10, 25, 50, -1],
                            [10, 25, 50, "All"]
                        ],
                        responsive: true,
                        language: {
                            search: "_INPUT_",
                            searchPlaceholder: "Search Campaigns",
                        },
                        "order": [],
                    });


                    ////////////////////////////
                    function update_render_statuses() {
                        var campaign_ids = [],
                            row,
                            c_td,
                            c_id,
                            c_status;
                        list_table.rows().every(function (rowIdx, tableLoop, rowLoop) {
                            row = $(this.node());
                            c_td = row.find("td.campaign-video-render-status");
                            c_id = parseInt(c_td.data("campaign-id"), 10);
                            c_status = parseInt(c_td.data("status"), 10);

                            if (c_id && c_status == 1) campaign_ids.push(c_id);
                        });

                        if (!campaign_ids.length) return clearInterval(render_status);

                        api(
                            "Campaign",
                            "q_campaign_video_status_text",
                            {
                                campaign_ids: campaign_ids
                            },
                            function (result) {
                                if (!result) return clearInterval(render_status);

                                $.each(result, function (campaign_id, data) {
                                    list_table.rows().every(function (rowIdx, tableLoop, rowLoop) {
                                        row = $(this.node());
                                        c_td = row.find(
                                            "td.campaign-video-render-status[data-campaign-id='" + campaign_id + "']"
                                        );

                                        if (c_td && c_td.length) {
                                            c_td.data("status", data.status);
                                            list_table.cell(c_td).data(data.html);
                                        }
                                    });
                                });

                                list_table.columns.adjust().draw();
                            }
                        );
                    }

                    var render_status = setInterval(update_render_statuses, 0xea60);
                    update_render_statuses();
                }
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

    <script type="text/javascript">
        var BASE_URL = "https://www.clientfunnels.io/",
            API_URL = "https://www.clientfunnels.io/api/",
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