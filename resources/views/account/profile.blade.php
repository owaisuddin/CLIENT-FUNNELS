@extends('layouts.app')
<link href="{{ asset('css/client_default.css') }}" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="https://www.clientfunnels.io/img/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://www.clientfunnels.io/img/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://www.clientfunnels.io/img/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://www.clientfunnels.io/img/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://www.clientfunnels.io/img/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://www.clientfunnels.io/img/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://www.clientfunnels.io/img/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://www.clientfunnels.io/img/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://www.clientfunnels.io/img/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"
      href="https://www.clientfunnels.io/img/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.clientfunnels.io/img/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://www.clientfunnels.io/img/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://www.clientfunnels.io/img/icons/favicon-16x16.png">
<link rel="manifest" href="https://www.clientfunnels.io/img/icons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://www.clientfunnels.io/img/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
<link rel="stylesheet" href="https://www.clientfunnels.io/vendor/fontawesome/css/all.min.css">

<!-- CSS Files -->
<link href="https://www.clientfunnels.io/css/material-dashboard.min.css?v=2.0.2" rel="stylesheet">

<link href="https://www.clientfunnels.io/css/custom.css?v=1.0.2" rel="stylesheet">

<link href="https://www.clientfunnels.io/vendor/slim-image-cropper/css/slim.min.css" rel="stylesheet">
<script src="https://www.clientfunnels.io/vendor/slim-image-cropper/js/slim.jquery.min.js"></script>
<script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('.slim-result').on('click', function () {
            $('#profile_image').click();
        });

        $('.edit-account-chanage-password').on('click', function (e) {
            $('.change-password-row').css('display', 'block');
        });

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

<script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>

@section('content')
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
                    <a class="navbar-brand" href="/home">Dashboard</a>
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

                            <a class="nav-link" href="https://www.clientfunnels.io/admin/credits" title="SMS Credits">
                                <i class="fas fa-2x fa-comments-dollar"></i>
                                <span class=" header-total-credits">677</span>
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
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form id="user-account-edit-form" class="form-horizontal live-form-validation"
                                  novalidate="novalidate" method="POST" action="{{ route('update_profile') }}"
                                  enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-text">
                                        <div class="card-text">
                                            <h4 class="card-title">My Account</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="edit-account-name" class="bmd-label-floating"> Name
                                                        <span class="required" aria-required="true">*</span></label>
                                                    <input type="text" class="form-control" id="edit-account-name"
                                                           required="true" name="name" value="{{ Auth::user()->name }}"
                                                           aria-required="true">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group is-filled">
                                                    <label for="edit-account-email" class="bmd-label-floating"> Email
                                                        Address <span class="required"
                                                                      aria-required="true">*</span></label>
                                                    <input type="email" class="form-control" id="edit-account-email"
                                                           required="true" name="email"
                                                           value="{{ Auth::user()->email }}"
                                                           aria-required="true">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <button type="button"
                                                        class="btn btn-warning edit-account-chanage-password">Change
                                                    Password
                                                </button>
                                                <button type="button"
                                                        class="btn btn-danger edit-account-chanage-password-cancel"
                                                        style="display: none">Cancel Change Password
                                                </button>

                                                <div class="row change-password-row" style="display: none">

                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="edit-account-new-password1"
                                                                   class="bmd-label-floating"> New Password <span
                                                                        class="required"
                                                                        aria-required="true">*</span></label>
                                                            <input type="password" class="form-control"
                                                                   id="edit-account-new-password1" required="true"
                                                                   name="password" aria-required="true">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="edit-account-new-password2"
                                                                   class="bmd-label-floating"> Confirm New Password
                                                                <span class="required"
                                                                      aria-required="true">*</span></label>
                                                            <input type="password" class="form-control"
                                                                   id="edit-account-new-password2"
                                                                   equalto="#edit-account-new-password1" required="true"
                                                                   name="new_confirm_password" aria-required="true">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="slim-image-wrapper">
                                                    <label for="edit-account-picture" class="bmd-label-floating">
                                                        Profile Picture</label>
                                                    <div class="slim img-responsive" id="edit-account-picture"
                                                         data-label="Profile Image" data-ratio="1:1" data-size="500,500"
                                                         data-show-upload-btn="0"
                                                         style="max-height: 300px; !important; max-width: 300px; !important"
                                                         data-state="preview">
                                                        <input type="file" id="profile_image" name="p_image"
                                                               accept="image/jpeg,image/png,image/gif,image/bmp"
                                                               style="margin-bottom: 100%;">

                                                        <input type="hidden" name="slim[]">
                                                        <div class="slim-file-hopper" style="display: none;"></div>
                                                        <div class="slim-area">

                                                            <div class="slim-loader"
                                                                 style="transform: matrix3d(0.774483, 0.632594, 0, 0, -0.632594, 0.774483, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                                                <svg style="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 0;">
                                                                    <path class="slim-loader-background" fill="none"
                                                                          stroke-width="3"
                                                                          d="M 11.494659292840298 3.000001677832694 A 8.5 8.5 0 1 0 11.5 3"></path>
                                                                    <path class="slim-loader-foreground" fill="none"
                                                                          stroke-width="3"
                                                                          d="M 11.5 20 A 8.5 8.5 0 0 0 11.5 3"></path>
                                                                </svg>
                                                            </div>


                                                            <div class="slim-upload-status" style="opacity: 0;"></div>

                                                            <div class="slim-drip"><span><span></span></span></div>
                                                            <div class="slim-status">
                                                                <div class="slim-label"><p>Profile Image</p></div>
                                                            </div>

                                                            <div class="slim-result">
                                                                <img class="in" style="opacity: 1;"
                                                                     src="{{asset('/profile_image/'.Auth::user()->profile_image)}}"><img><img
                                                                        style="opacity:0">
                                                            </div>
                                                        </div>
                                                        <div class="slim-btn-group" style="">
                                                            <button class="slim-btn slim-btn-remove" title="Remove"
                                                                    type="button" data-action="remove"
                                                                    style="opacity: 1;">Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="profile_image_64">
                                            </div>

                                        </div>

                                        <hr>
                                        <h2 class="text-center">Notifications</h2>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3>Booked Call Changed</h3>
                                                <div class="togglebutton">
                                                    <label>
                                                        <input type="checkbox"
                                                               name="booked_call_changed" value="1"
                                                                {{ Auth::user()->booked_call_changed == 1 ? 'checked' : ''}}>
                                                        <span class="toggle"></span>
                                                        ON
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="alert alert-warning">
                                                    <i class="fas fa-info-circle"></i> When a contact changes a booked
                                                    call that you are assigned to.
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3>New Call Booked</h3>
                                                <div class="togglebutton">
                                                    <label>
                                                        <input type="checkbox" name="new_call_booked"
                                                               value="1"
                                                                {{ Auth::user()->new_call_booked == 1 ? 'checked' : ''}}>
                                                        <span class="toggle"></span>
                                                        ON
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="alert alert-warning">
                                                    <i class="fas fa-info-circle"></i> When a contact books a call with
                                                    you.
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3>Questionnaire Completed</h3>
                                                <div class="togglebutton">
                                                    <label>
                                                        <input type="checkbox"
                                                               name="questionnaire_completed" value="1"
                                                                {{ Auth::user()->questionnaire_completed == 1 ? 'checked' : ''}}>
                                                        <span class="toggle"></span>
                                                        ON
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="alert alert-warning">
                                                    <i class="fas fa-info-circle"></i> When a contact completes a
                                                    questionnaire for your booked call.
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <hr>

                                        <div class="row">

                                            <div class="col-md-6">
                                                &nbsp;
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <label for="edit-account-c-password" class="bmd-label-floating">
                                                        Current Password <span class="required"
                                                                               aria-required="true">*</span></label>
                                                    <input type="password" class="form-control"
                                                           id="edit-account-c-password" required="true"
                                                           name="current_password" aria-required="true">
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-rose update-user-profile">
                                            <i class="fas fa-sync-alt"></i>
                                            Update Account
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
