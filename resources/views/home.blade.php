@extends('layouts.app')
@section('content')
    <script src="https://www.clientfunnels.io/js/core/jquery.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/Chart.min.js"></script>
<script>
    $(document).ready(function() {

        //Line Chart INIT
        new Chart(document.getElementById('campaign-stats').getContext('2d'), {
            type: 'horizontalBar',
            data: statsData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                    }
                },
                responsive: true,
                legend: {
                    display: false,
                },
                scales : {
                    yAxes : [{
                        ticks : {
                            beginAtZero : true
                        }
                    }]
                },
                scaleBeginAtZero: true,
                tooltips: {enabled: false},
                hover: {mode: null},
            }
        });
    });
</script>
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
                                <a class="dropdown-item" href="https://www.clientfunnels.io/contacts?new-messages">View Contacts With&nbsp;<span class="header-total-new-messages" style="display: none;"></span>&nbsp;New Messages</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link" href="https://www.clientfunnels.io/admin/credits" title="SMS Credits">
                                <i class="fas fa-2x fa-comments-dollar"></i>
                                <span class=" header-total-credits">677</span>
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
                    </div><div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">build</i>
                                    </div>
                                    <h2 class="card-title text-center">
                                        All Campaign Statistics This
                                        Week {{date("dS", strtotime("-1 week"))}}-{{date('dS')}} {{date('M')}}	</h2>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-8"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                            <canvas id="campaign-stats" width="651" height="366" style="display: block; width: 651px; height: 366px;" class="chartjs-render-monitor"></canvas>

                                            <script type="text/javascript">
                                                var statsData = {
                                                    labels: ['Optin Rate', 'View Rate', 'Calls Booked', 'Calls Closed'],
                                                    datasets: [
                                                        {
                                                            label: 'Optin Rate (33%)',
                                                            backgroundColor: 'rgba(255,0,0,0.5)',
                                                            borderColor: 'rgba(255,0,0)',
                                                            borderWidth: 1,
                                                            data: [{{$campaign_count}},0,0,0]
                                                        }
                                                        ,
                                                        {
                                                            label: 'View Rate (31%)',
                                                            backgroundColor: 'rgba(255,0,0,0.5)',
                                                            borderColor: 'rgba(255,0,0)',
                                                            borderWidth: 1,
                                                            data: [0,31,0,0]
                                                        }
                                                        ,
                                                        {
                                                            label: 'Calls Booked (19%)',
                                                            backgroundColor: 'rgba(0,204,0,0.5)',
                                                            borderColor: 'rgba(0,204,0)',
                                                            borderWidth: 1,
                                                            data: [0,0,{{$booking_count}},0]
                                                        }
                                                        ,
                                                        {
                                                            label: 'Calls Closed (0%)',
                                                            backgroundColor: 'rgba(255,0,0,0.5)',
                                                            borderColor: 'rgba(255,0,0)',
                                                            borderWidth: 1,
                                                            data: [0,0,0,0]
                                                        }
                                                    ],
                                                }
                                            </script>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <strong class="text-danger">Optin Rate</strong><br>
                                                    <small>
                                                        <div class="row">
                                                            <div class="col-sm-4 text-danger">Current: 19%</div>
                                                            <div class="col-sm-4 text-info">Target: 20%</div>
                                                            <div class="col-sm-4">Total: {{$campaign_count}}</div>
                                                        </div>
                                                    </small>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <strong class="text-danger">View Rate</strong><br>
                                                    <small>
                                                        <div class="row">
                                                            <div class="col-sm-4 text-danger">Current: 31%</div>
                                                            <div class="col-sm-4 text-info">Target: 65%</div>
                                                            <div class="col-sm-4">Total: 5</div>
                                                        </div>
                                                    </small>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <strong class="text-success">Calls Booked</strong><br>
                                                    <small>
                                                        <div class="row">
                                                            <div class="col-sm-4 text-success">Current: 19%</div>
                                                            <div class="col-sm-4 text-info">Target: 13%</div>
                                                            <div class="col-sm-4">Total: {{$booking_count}}</div>
                                                        </div>
                                                    </small>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <strong class="text-danger">Calls Closed</strong><br>
                                                    <small>
                                                        <div class="row">
                                                            <div class="col-sm-4 text-danger">Current: 0%</div>
                                                            <div class="col-sm-4 text-info">Target: 20%</div>
                                                            <div class="col-sm-4">Total: 0</div>
                                                        </div>
                                                    </small>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>			</div>
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
                        <img src="https://www.clientfunnels.io/img/loading-hc.gif" class="img-responsive modal-img-center">
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

                        <form id="re-login-form" onsubmit="return false;">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label for="re-login-email" class="bmd-label-floating"> Email <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="re-login-email" required="true" name="email" value="helenahillfit@gmail.com" maxlength="100">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="re-login-password" class="bmd-label-floating"> Password <span class="required">*</span></label>
                                        <input type="password" class="form-control" name="password" id="re-login-password" maxlength="50" placeholder="Password">
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

                        <form id="delete-modal-form" onsubmit="return false;">

                            <input type="hidden" name="action">
                            <input type="hidden" name="type">
                            <input type="hidden" name="delete_id">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle"></i> <span class="del-modal-preview"></span>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="del-modal-notes" class="bmd-label-floating"> Notes <span class="required">*</span></label><br>
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
    <!-- Start New Campaign -->
    <div id="start-new-campaign-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>

                <div class="modal-messages"></div>

                <form id="start-new-campaign-form" class="form-horizontal live-form-validation" novalidate="novalidate">
                    <input type="hidden" name="duplicate_campaign_id" value="0">

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
                                <div class="form-group bmd-form-group">
                                    <label for="new-company-user-name" class="bmd-label-floating"> Name <span class="required" aria-required="true">*</span></label>
                                    <input type="text" class="form-control" id="new-company-user-name" required="true" name="name" value="" maxlength="100" aria-required="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group bmd-form-group">
                                    <label for="new-company-user-notes" class="bmd-label-floating"> Notes</label>
                                    <textarea rows="5" class="form-control" id="new-company-user-notes" name="notes" maxlength="2000"></textarea>
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
    <!-- /Start New Campaign -->
@endsection
