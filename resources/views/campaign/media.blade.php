@extends('layouts.app')
@section('content')
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
                                        Contacts With&nbsp;<span class="header-total-new-messages"
                                                                 style="display: none;"></span>&nbsp;New Messages</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="https://www.clientfunnels.io/admin/credits"
                                   title="SMS Credits">
                                    <i class="fas fa-2x fa-comments-dollar"></i>
                                    <span class=" header-total-credits">558</span>
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
                                        <h4 class="card-title">Campaign Media List</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="toolbar">

                                            <a href="/campaigns"
                                               class="btn btn-warning m-b">
                                                <i class="fa fa-arrow-left"></i> Campaigns List
                                            </a>

                                            <a href="/campaigns/media/add-new"
                                               class="btn btn-success m-b">
                                                <i class="fa fa-arrow-up"></i> Upload New Media
                                            </a>

                                        </div>
                                        <div class="material-datatables">
                                            <div id="media-list-dt_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_length" id="media-list-dt_length"><label>Show
                                                                <select name="media-list-dt_length"
                                                                        aria-controls="media-list-dt"
                                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="-1">All</option>
                                                                </select> entries</label></div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div id="media-list-dt_filter" class="dataTables_filter"><label><input
                                                                        type="search"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Search Media"
                                                                        aria-controls="media-list-dt"></label></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="media-list-dt"
                                                               class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                                                               cellspacing="0" width="100%" style="width: 100%;"
                                                               role="grid" aria-describedby="media-list-dt_info">
                                                            <thead>
                                                            <tr role="row">
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="media-list-dt" rowspan="1"
                                                                    colspan="1" style="width: 45px;"
                                                                    aria-label="Video ID: activate to sort column ascending">
                                                                    Video ID
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="media-list-dt" rowspan="1"
                                                                    colspan="1" style="width: 147px;"
                                                                    aria-label="Name: activate to sort column ascending">
                                                                    Name
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="media-list-dt" rowspan="1"
                                                                    colspan="1" style="width: 116px;"
                                                                    aria-label="Duration: activate to sort column ascending">
                                                                    Duration
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="media-list-dt" rowspan="1"
                                                                    colspan="1" style="width: 118px;"
                                                                    aria-label="Created: activate to sort column ascending">
                                                                    Created
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="media-list-dt" rowspan="1"
                                                                    colspan="1" style="width: 62px;"
                                                                    aria-label="Used Webinar: activate to sort column ascending">
                                                                    Used <br>Webinar
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="media-list-dt" rowspan="1"
                                                                    colspan="1" style="width: 58px;"
                                                                    aria-label="Used Holding: activate to sort column ascending">
                                                                    Used <br>Holding
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="media-list-dt" rowspan="1"
                                                                    colspan="1" style="width: 42px;"
                                                                    aria-label="Used Indoc: activate to sort column ascending">
                                                                    Used <br>Indoc
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="media-list-dt" rowspan="1"
                                                                    colspan="1" style="width: 59px;"
                                                                    aria-label="Status: activate to sort column ascending">
                                                                    Status
                                                                </th>
                                                                <th class="disabled-sorting text-right sorting"
                                                                    tabindex="0" aria-controls="media-list-dt"
                                                                    rowspan="1" colspan="1" style="width: 254px;"
                                                                    aria-label="Actions: activate to sort column ascending">
                                                                    Actions
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($webinar_videos as $webinar_video)
                                                                <tr role="row" class="odd">
                                                                    <td tabindex="0">{{$webinar_video->id}}</td>
                                                                    <td>{{$webinar_video->videos}}</td>
                                                                    <td>14 seconds</td>
                                                                    <td>{{$webinar_video->created_at}}
                                                                        <hr>
                                                                        By <span
                                                                                class="label label-success">{{$webinar_video->created_by}}</span>
                                                                    </td>
                                                                    <td class="media-video-counts"
                                                                        data-video-counts-id="1743">
                                                                            {{count($webinar_video->webinarVideo)}}
                                                                    </td>
                                                                    <td class="holding-video-counts"
                                                                        data-video-counts-id="1743">0
                                                                    </td>
                                                                    <td class="indoc-video-counts"
                                                                        data-video-counts-id="1743">0
                                                                    </td>
                                                                    <td class="media-video-render-status"
                                                                        data-video-id="1743" data-status="1"><span
                                                                                class="badge badge-success">Videos Ready</span>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                                class="btn btn-info btn-rose"
                                                                                data-toggle="modal"
                                                                                data-target="#myModal-{{$webinar_video->id}}">
                                                                            <i class="fa fa-play"></i> Watch
                                                                        </button>

                                                                        <a href="/campaigns/media/view/{{$webinar_video->id}}"
                                                                           class="btn btn-success m-b">
                                                                            <i class="fa fa-info-circle"></i> Details
                                                                        </a>

                                                                        <a type="button"
                                                                            class="btn btn-danger m-b delete-content"
                                                                            href="/delete/media/{{$webinar_video->id}}"
                                                                        >
                                                                            <i class="fa fa-trash"></i> Delete
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <div id="myModal-{{$webinar_video->id}}" class="modal fade" role="dialog">
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
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">Video ID</th>
                                                                <th rowspan="1" colspan="1">Name</th>
                                                                <th rowspan="1" colspan="1">Duration</th>
                                                                <th rowspan="1" colspan="1">Created</th>
                                                                <th rowspan="1" colspan="1">Used <br>Webinar</th>
                                                                <th rowspan="1" colspan="1">Used <br>Holding</th>
                                                                <th rowspan="1" colspan="1">Used <br>Indoc</th>
                                                                <th rowspan="1" colspan="1">Status</th>
                                                                <th class="disabled-sorting text-right" rowspan="1"
                                                                    colspan="1">Actions
                                                                </th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
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
        </div>
    </div>

    <!--Modals -->
    <!-- Loading -->
{{--    <div id="loading-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static"--}}
{{--         data-keyboard="false">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="color-line"></div>--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title"></h5>--}}
{{--                </div>--}}

{{--                <div class="modal-body">--}}
{{--                    <p>--}}
{{--                        <img src="https://www.clientfunnels.io/img/loading-hc.gif"--}}
{{--                             class="img-responsive modal-img-center">--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Re Login Modal -->--}}
{{--    <div id="re-login-modal" class="modal fade hmodal-success" role="dialog" data-backdrop="static"--}}
{{--         data-keyboard="false">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="color-line"></div>--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title">Please Login To Continue</h4>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                    <div class="modal-messages"></div>--}}

{{--                    <div class="modal-wrap-content">--}}

{{--                        <form id="re-login-form" onsubmit="return false;">--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="form-group bmd-form-group is-filled">--}}
{{--                                        <label for="re-login-email" class="bmd-label-floating"> Email <span--}}
{{--                                                    class="required">*</span></label>--}}
{{--                                        <input type="text" class="form-control" id="re-login-email" required="true"--}}
{{--                                               name="email" value="helenahillfit@gmail.com" maxlength="100">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="form-group bmd-form-group is-filled">--}}
{{--                                        <label for="re-login-password" class="bmd-label-floating"> Password <span--}}
{{--                                                    class="required">*</span></label>--}}
{{--                                        <input type="password" class="form-control" name="password"--}}
{{--                                               id="re-login-password" maxlength="50" placeholder="Password">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </form>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-success do-re-login"><i class="fa fa-arrow-right"--}}
{{--                                                                                 aria-hidden="true"></i> Login--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <!--/ Re Login Modal -->--}}

{{--    <!-- Delete Modal -->--}}
{{--    <div id="delete-modal" class="modal fade hmodal-success" role="dialog" data-backdrop="static" data-keyboard="false">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="color-line"></div>--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title"></h4>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="modal-messages"></div>--}}

{{--                    <div class="modal-wrap-content">--}}

{{--                        <form id="delete-modal-form" onsubmit="return false;">--}}

{{--                            <input type="hidden" name="action">--}}
{{--                            <input type="hidden" name="type">--}}
{{--                            <input type="hidden" name="delete_id">--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="alert alert-warning">--}}
{{--                                        <i class="fas fa-exclamation-triangle"></i> <span--}}
{{--                                                class="del-modal-preview"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="form-group bmd-form-group">--}}
{{--                                        <label for="del-modal-notes" class="bmd-label-floating"> Notes <span--}}
{{--                                                    class="required">*</span></label><br>--}}
{{--                                        <textarea class="form-control" id="del-modal-notes" required="true" name="notes"--}}
{{--                                                  maxlength="2000"--}}
{{--                                                  placeholder="Please enter notes to delete!"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </form>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Cancel</button>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <button type="button" class="btn btn-danger conf-delete-modal"><i class="fa fa-trash"--}}
{{--                                                                                              aria-hidden="true"></i>--}}
{{--                                Delete--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Delete Modal --><!-- Privacy Modal -->--}}
{{--    <div id="cookie-privacy-policy-modal" class="modal fade hmodal-success" role="dialog">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="color-line"></div>--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title"></h4>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="modal-wrap-content"></div>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-success max-width" data-dismiss="modal">--}}
{{--                        <i class="fa fa-check" aria-hidden="true"></i> Close--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    <!--/ Privacy Modal -->

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



@endsection