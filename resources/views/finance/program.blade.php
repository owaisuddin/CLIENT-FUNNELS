@extends('layouts.app')
<script src="https://www.clientfunnels.io/js/core/bootstrap-material-design.min.js"></script>
@section('content')
    <div class="wrapper ">

        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " style="">
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
                            aria-expanded="false" aria-label="Toggle navigation" style="">
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
                                    <span class=" header-total-credits">564</span>
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
                                            <i class="fa fa-book-open"></i>
                                        </div>
                                        <h4 class="card-title">Programs</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="toolbar">
                                            <button type="button" class="btn btn-success add-new-program">
                                                <i class="fa fa-plus"></i> Add New Program
                                                <div class="ripple-container"></div>
                                            </button>
                                        </div>
                                        <div class="material-datatables">
                                            <div id="DataTables_Table_0_wrapper"
                                                 class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_length" id="DataTables_Table_0_length">
                                                            <label>Show <select name="DataTables_Table_0_length"
                                                                                aria-controls="DataTables_Table_0"
                                                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="-1">All</option>
                                                                </select> entries</label></div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                            <label><input type="search"
                                                                          class="form-control form-control-sm"
                                                                          placeholder="Search records"
                                                                          aria-controls="DataTables_Table_0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-striped table-no-bordered table-hover default-datatables dataTable dtr-inline"
                                                               cellspacing="0" width="100%" style="width: 100%;"
                                                               id="DataTables_Table_0" role="grid"
                                                               aria-describedby="DataTables_Table_0_info">
                                                            <thead>
                                                            <tr role="row">
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_0" rowspan="1"
                                                                    colspan="1" style="width: 65px;"
                                                                    aria-label="Program ID: activate to sort column ascending">
                                                                    Program ID
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_0" rowspan="1"
                                                                    colspan="1" style="width: 222px;"
                                                                    aria-label="Name: activate to sort column ascending">
                                                                    Name
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_0" rowspan="1"
                                                                    colspan="1" style="width: 73px;"
                                                                    aria-label="Contracts: activate to sort column ascending">
                                                                    Contracts
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_0" rowspan="1"
                                                                    colspan="1" style="width: 92px;"
                                                                    aria-label="Assigned Contacts: activate to sort column ascending">
                                                                    Assigned Contacts
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_0" rowspan="1"
                                                                    colspan="1" style="width: 109px;"
                                                                    aria-label="Created: activate to sort column ascending">
                                                                    Created
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="DataTables_Table_0" rowspan="1"
                                                                    colspan="1" style="width: 212px;"
                                                                    aria-label="Notes: activate to sort column ascending">
                                                                    Notes
                                                                </th>
                                                                <th class="disabled-sorting text-right sorting"
                                                                    tabindex="0" aria-controls="DataTables_Table_0"
                                                                    rowspan="1" colspan="1" style="width: 148px;"
                                                                    aria-label="Actions: activate to sort column ascending">
                                                                    Actions
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($programs as $program)
                                                                <tr role="row" class="odd">
                                                                    <td tabindex="0">{{$program->id}}</td>
                                                                    <td>
                                                                        <div class="d-inline">{{$program->name}}</div>
                                                                    </td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>{{date('d-m-Y',strtotime($program->created_at))}}
                                                                        <br>By: <span
                                                                                class="label label-success">You</span>
                                                                    </td>
                                                                    <td>{{$program->notes}}</td>
                                                                    <td>
                                                                        <button type="button"
                                                                                class="btn btn-warning pull-right m-b edit-company-contract"
                                                                                data-program-id="{{$program->id}}">
                                                                            <i class="fa fa-pencil-alt"></i> Edit
                                                                        </button>

                                                                        <a href="/finance/programs/view/{{$program->id}}"
                                                                           class="btn btn-success pull-right m-b">
                                                                            <i class="fa fa-eye"></i> View
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">Program ID</th>
                                                                <th rowspan="1" colspan="1">Name</th>
                                                                <th rowspan="1" colspan="1">Contracts</th>
                                                                <th rowspan="1" colspan="1">Assigned</th>
                                                                <th rowspan="1" colspan="1">Created</th>
                                                                <th rowspan="1" colspan="1">Notes</th>
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
    <div id="add-new-program-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>

                <div class="modal-messages"></div>

                <form id="new-program-form" class="form-horizontal live-form-validation" novalidate="novalidate">
                    @csrf
                    <input type="hidden" name="edit_program_id" value="0">

                    <div class="row edit-program-warning">
                        <div class="col-sm-12">
                            <div class="alert alert-warning">
                                <i class="fa fa-exclamation-triangle"></i> <strong>WARNING</strong><br>
                                Editing this program will <strong>NOT</strong> change any programs already assigned to
                                contacts!
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group bmd-form-group">
                                    <label for="new-program-name"> Name <span class="required"
                                                                              aria-required="true">*</span></label>
                                    <input type="text" class="form-control" required="true" name="name" value=""
                                           maxlength="100" aria-required="true">
                                </div>
                            </div>
                        </div>

                        <h3 class="text-center">Default Price Configuration</h3>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select class="form-control" name="currency">
                                        <option value="" selected>--- Select ---</option>
                                        <option value="AUD">
                                            $ Australian dollar
                                        </option>
                                        <option value="CAD">
                                            $ Canadian dollar
                                        </option>
                                        <option value="EUR">
                                            € Euro
                                        </option>
                                        <option value="GBP" selected="">
                                            £ British Pound
                                        </option>
                                        <option value="USD">
                                            $ US Dollar
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <hr/>
                            <br/>
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label for="" style="padding-top: 30px"> Price <span class="required"
                                                                                         aria-required="true">*</span></label>
                                    <input type="number" class="form-control" required="true" name="price" value=""
                                           min="1" step="0.01" aria-required="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-inline" type="checkbox" name="recurring_payment">
                                            Recurring Payment
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row program-recurring-wrap">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="new-program-rec-n"> Recurring <span class="required"
                                                                                    aria-required="true">*</span></label>
                                    <input type="number" class="form-control" required="true" name="recurring_every"
                                           value="" min="1" step="1" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">

                                    <select class="form-control" name="recurring_tenure">
                                        <option value="day">Day</option>
                                        <option value="month" selected="">Month</option>
                                        <option value="year">Year</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-control"> Contracts</label>
                                    <input type="text" class="form-control" name="contracts">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="new-contract-notes"> Notes</label>
                                    <textarea rows="5" class="form-control" name="notes" maxlength="2000"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-success pull-right">
                            <i class="fa fa-arrow-up"></i> Save
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.dataTables.min.js"></script>
    <script>
        $('.add-new-program').on('click', function () {
            $('#add-new-program-modal').show();
        });
        $('form').submit(function (e) {
            e.preventDefault();
            var data = $('#new-program-form').serialize();
            $.ajax({
                type: 'POST',
                url: '/finance/programs',
                data: {
                    '_token': '<?php echo csrf_token() ?>',
                    'data': data
                },
                success: function (result) {
                    $('#add-new-program-modal').hide();
                    alert('asd');
                    window.location.reload();
                }
            });
        });

        $('.edit-company-contract').on('click',function (e) {
            $.ajax({
                type: 'POST',
                url: '/finance/programs/show/',
                data: {
                    '_token': '<?php echo csrf_token() ?>',
                    'data': $(this).attr('data-program-id')
                },
                success: function (result) {
                    $('#add-new-program-modal').hide();
                }
            });
            $('#add-new-program-modal').show();
        })
    </script>

    <link href="https://www.clientfunnels.io/vendor/select2/select2-bootstrap.css" rel="stylesheet">
    <link href="https://www.clientfunnels.io/vendor/select2/select2.css" rel="stylesheet">
    <style>
        @-webkit-keyframes swal2-show {
            0% {
                -webkit-transform: scale(0.7);
                transform: scale(0.7);
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes swal2-show {
            0% {
                -webkit-transform: scale(0.7);
                transform: scale(0.7);
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }
            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
                opacity: 0;
            }
        }

        @keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            100% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
                opacity: 0;
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0;
            }
            54% {
                top: 1.0625em;
                left: .125em;
                width: 0;
            }
            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em;
            }
            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em;
            }
            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em;
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0;
            }
            54% {
                top: 1.0625em;
                left: .125em;
                width: 0;
            }
            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em;
            }
            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em;
            }
            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em;
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0;
            }
            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0;
            }
            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em;
            }
            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em;
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0;
            }
            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0;
            }
            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em;
            }
            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em;
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                opacity: 0;
            }
            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                opacity: 0;
            }
            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
            }
            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                opacity: 0;
            }
            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                opacity: 0;
            }
            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
            }
            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }
            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }
            100% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast {
            flex-direction: column;
            align-items: stretch;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            justify-content: flex-end;
            height: 2.2em;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-loading {
            justify-content: center;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em;
        }

        body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-validationerror {
            font-size: 1em;
        }

        body.swal2-toast-shown > .swal2-container {
            position: fixed;
            background-color: transparent;
        }

        body.swal2-toast-shown > .swal2-container.swal2-shown {
            background-color: transparent;
        }

        body.swal2-toast-shown > .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-top-end, body.swal2-toast-shown > .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto;
        }

        body.swal2-toast-shown > .swal2-container.swal2-top-start, body.swal2-toast-shown > .swal2-container.swal2-top-left {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0;
        }

        body.swal2-toast-shown > .swal2-container.swal2-center-start, body.swal2-toast-shown > .swal2-container.swal2-center-left {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-center-end, body.swal2-toast-shown > .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom-start, body.swal2-toast-shown > .swal2-container.swal2-bottom-left {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0;
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-toast-shown > .swal2-container.swal2-bottom-end, body.swal2-toast-shown > .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto;
        }

        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: 0.625em;
            box-shadow: 0 0 0.625em #d9d9d9;
            overflow-y: hidden;
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row;
        }

        .swal2-popup.swal2-toast .swal2-title {
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em;
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: initial;
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            font-size: 1em;
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0;
        }

        .swal2-popup.swal2-toast .swal2-icon-text {
            font-size: 2em;
            font-weight: bold;
            line-height: 1em;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            top: .875em;
            width: 1.375em;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
            left: .3125em;
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
            right: .3125em;
        }

        .swal2-popup.swal2-toast .swal2-actions {
            height: auto;
            margin: 0 .3125em;
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em;
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4);
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
            position: absolute;
            width: 2em;
            height: 2.8125em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
            top: -.25em;
            left: -.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 2em 2em;
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
            top: -.25em;
            left: .9375em;
            -webkit-transform-origin: 0 2em;
            transform-origin: 0 2em;
            border-radius: 0 4em 4em 0;
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em;
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
            height: .3125em;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
            top: 1.125em;
            left: .1875em;
            width: .75em;
        }

        .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
            top: .9375em;
            right: .1875em;
            width: 1.375em;
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s;
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards;
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s;
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s;
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-0.625em) rotateZ(2deg);
                transform: translateY(-0.625em) rotateZ(2deg);
                opacity: 0;
            }
            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5;
            }
            66% {
                -webkit-transform: translateY(0.3125em) rotateZ(2deg);
                transform: translateY(0.3125em) rotateZ(2deg);
                opacity: .7;
            }
            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1;
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-0.625em) rotateZ(2deg);
                transform: translateY(-0.625em) rotateZ(2deg);
                opacity: 0;
            }
            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5;
            }
            66% {
                -webkit-transform: translateY(0.3125em) rotateZ(2deg);
                transform: translateY(0.3125em) rotateZ(2deg);
                opacity: .7;
            }
            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1;
            }
            33% {
                opacity: .5;
            }
            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0;
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1;
            }
            33% {
                opacity: .5;
            }
            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0;
            }
            54% {
                top: .125em;
                left: .125em;
                width: 0;
            }
            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em;
            }
            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em;
            }
            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em;
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0;
            }
            54% {
                top: .125em;
                left: .125em;
                width: 0;
            }
            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em;
            }
            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em;
            }
            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em;
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0;
            }
            65% {
                top: 1.25em;
                right: .9375em;
                width: 0;
            }
            84% {
                top: .9375em;
                right: 0;
                width: 1.125em;
            }
            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em;
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0;
            }
            65% {
                top: 1.25em;
                right: .9375em;
                width: 0;
            }
            84% {
                top: .9375em;
                right: 0;
                width: 1.125em;
            }
            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em;
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow-y: hidden;
        }

        body.swal2-height-auto {
            height: auto !important;
        }

        body.swal2-no-backdrop .swal2-shown {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            background-color: transparent;
        }

        body.swal2-no-backdrop .swal2-shown > .swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-start, body.swal2-no-backdrop .swal2-shown.swal2-top-left {
            top: 0;
            left: 0;
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-end, body.swal2-no-backdrop .swal2-shown.swal2-top-right {
            top: 0;
            right: 0;
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-start, body.swal2-no-backdrop .swal2-shown.swal2-center-left {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-end, body.swal2-no-backdrop .swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-start, body.swal2-no-backdrop .swal2-shown.swal2-bottom-left {
            bottom: 0;
            left: 0;
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-end, body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
            right: 0;
            bottom: 0;
        }

        .swal2-container {
            display: flex;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: transparent;
            z-index: 1060;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .swal2-container.swal2-top {
            align-items: flex-start;
        }

        .swal2-container.swal2-top-start, .swal2-container.swal2-top-left {
            align-items: flex-start;
            justify-content: flex-start;
        }

        .swal2-container.swal2-top-end, .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end;
        }

        .swal2-container.swal2-center {
            align-items: center;
        }

        .swal2-container.swal2-center-start, .swal2-container.swal2-center-left {
            align-items: center;
            justify-content: flex-start;
        }

        .swal2-container.swal2-center-end, .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end;
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end;
        }

        .swal2-container.swal2-bottom-start, .swal2-container.swal2-bottom-left {
            align-items: flex-end;
            justify-content: flex-start;
        }

        .swal2-container.swal2-bottom-end, .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end;
        }

        .swal2-container.swal2-grow-fullscreen > .swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center;
        }

        .swal2-container.swal2-grow-row > .swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center;
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column;
        }

        .swal2-container.swal2-grow-column.swal2-top, .swal2-container.swal2-grow-column.swal2-center, .swal2-container.swal2-grow-column.swal2-bottom {
            align-items: center;
        }

        .swal2-container.swal2-grow-column.swal2-top-start, .swal2-container.swal2-grow-column.swal2-center-start, .swal2-container.swal2-grow-column.swal2-bottom-start, .swal2-container.swal2-grow-column.swal2-top-left, .swal2-container.swal2-grow-column.swal2-center-left, .swal2-container.swal2-grow-column.swal2-bottom-left {
            align-items: flex-start;
        }

        .swal2-container.swal2-grow-column.swal2-top-end, .swal2-container.swal2-grow-column.swal2-center-end, .swal2-container.swal2-grow-column.swal2-bottom-end, .swal2-container.swal2-grow-column.swal2-top-right, .swal2-container.swal2-grow-column.swal2-center-right, .swal2-container.swal2-grow-column.swal2-bottom-right {
            align-items: flex-end;
        }

        .swal2-container.swal2-grow-column > .swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center;
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right) > .swal2-modal {
            margin: auto;
        }

        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            .swal2-container .swal2-modal {
                margin: 0 !important;
            }
        }

        .swal2-container.swal2-fade {
            transition: background-color .1s;
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, 0.4);
        }

        .swal2-popup {
            display: none;
            position: relative;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border-radius: 0.3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .swal2-popup:focus {
            outline: none;
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden;
        }

        .swal2-popup .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .swal2-popup .swal2-title {
            display: block;
            position: relative;
            max-width: 100%;
            margin: 0 0 0.4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word;
        }

        .swal2-popup .swal2-actions {
            align-items: center;
            justify-content: center;
            margin: 1.25em auto 0;
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4;
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            box-sizing: border-box;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px;
        }

        .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            border: 3px solid #999999;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff;
            content: '';
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        }

        .swal2-popup .swal2-styled {
            margin: 0 .3125em;
            padding: .625em 2em;
            font-weight: 500;
            box-shadow: none;
        }

        .swal2-popup .swal2-styled:not([disabled]) {
            cursor: pointer;
        }

        .swal2-popup .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em;
        }

        .swal2-popup .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em;
        }

        .swal2-popup .swal2-styled:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
        }

        .swal2-popup .swal2-styled::-moz-focus-inner {
            border: 0;
        }

        .swal2-popup .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding-top: 1em;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em;
        }

        .swal2-popup .swal2-image {
            max-width: 100%;
            margin: 1.25em auto;
        }

        .swal2-popup .swal2-close {
            position: absolute;
            top: 0;
            right: 0;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            transition: color 0.1s ease-out;
            border: none;
            border-radius: 0;
            background: transparent;
            color: #cccccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer;
            overflow: hidden;
        }

        .swal2-popup .swal2-close:hover {
            -webkit-transform: none;
            transform: none;
            color: #f27474;
        }

        .swal2-popup > .swal2-input,
        .swal2-popup > .swal2-file,
        .swal2-popup > .swal2-textarea,
        .swal2-popup > .swal2-select,
        .swal2-popup > .swal2-radio,
        .swal2-popup > .swal2-checkbox {
            display: none;
        }

        .swal2-popup .swal2-content {
            justify-content: center;
            margin: 0;
            padding: 0;
            color: #545454;
            font-size: 1.125em;
            font-weight: 300;
            line-height: normal;
            word-wrap: break-word;
        }

        .swal2-popup #swal2-content {
            text-align: center;
        }

        .swal2-popup .swal2-input,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-textarea,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-checkbox {
            margin: 1em auto;
        }

        .swal2-popup .swal2-input,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-textarea {
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: 0.1875em;
            font-size: 1.125em;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
            box-sizing: border-box;
        }

        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important;
        }

        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: none;
            box-shadow: 0 0 3px #c4e6f5;
        }

        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #cccccc;
        }

        .swal2-popup .swal2-range input {
            width: 80%;
        }

        .swal2-popup .swal2-range output {
            width: 20%;
            font-weight: 600;
            text-align: center;
        }

        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 2.625em;
            margin: 1em auto;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em;
        }

        .swal2-popup .swal2-input {
            height: 2.625em;
            padding: 0.75em;
        }

        .swal2-popup .swal2-input[type='number'] {
            max-width: 10em;
        }

        .swal2-popup .swal2-file {
            font-size: 1.125em;
        }

        .swal2-popup .swal2-textarea {
            height: 6.75em;
            padding: 0.75em;
        }

        .swal2-popup .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            color: #545454;
            font-size: 1.125em;
        }

        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-checkbox {
            align-items: center;
            justify-content: center;
        }

        .swal2-popup .swal2-radio label,
        .swal2-popup .swal2-checkbox label {
            margin: 0 .6em;
            font-size: 1.125em;
        }

        .swal2-popup .swal2-radio input,
        .swal2-popup .swal2-checkbox input {
            margin: 0 .4em;
        }

        .swal2-popup .swal2-validationerror {
            display: none;
            align-items: center;
            justify-content: center;
            padding: 0.625em;
            background: #f0f0f0;
            color: #666666;
            font-size: 1em;
            font-weight: 300;
            overflow: hidden;
        }

        .swal2-popup .swal2-validationerror::before {
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center;
            content: '!';
            zoom: normal;
        }

        @supports (-ms-accelerator: true) {
            .swal2-range input {
                width: 100% !important;
            }

            .swal2-range output {
                display: none;
            }
        }

        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            .swal2-range input {
                width: 100% !important;
            }

            .swal2-range output {
                display: none;
            }
        }

        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, 0.4);
            }
        }

        .swal2-icon {
            position: relative;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            line-height: 5em;
            cursor: default;
            box-sizing: content-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            zoom: normal;
        }

        .swal2-icon-text {
            font-size: 3.75em;
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
            left: 1.0625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
            right: 1em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86;
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee;
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd;
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
            top: -.4375em;
            left: -2.0635em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 3.75em 3.75em;
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em;
        }

        .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
            top: -.6875em;
            left: 1.875em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 3.75em;
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0;
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            top: -.25em;
            left: -.25em;
            width: 100%;
            height: 100%;
            border: 0.25em solid rgba(165, 220, 134, 0.3);
            border-radius: 50%;
            z-index: 2;
            box-sizing: content-box;
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            z-index: 1;
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'] {
            display: block;
            position: absolute;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86;
            z-index: 2;
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
            top: 2.875em;
            left: .875em;
            width: 1.5625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal2-progresssteps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            font-weight: 600;
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative;
        }

        .swal2-progresssteps .swal2-progresscircle {
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center;
            z-index: 20;
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0;
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
            background: #add8e6;
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
            background: #add8e6;
        }

        .swal2-progresssteps .swal2-progressline {
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6;
            z-index: 10;
        }

        [class^='swal2'] {
            -webkit-tap-highlight-color: transparent;
        }

        .swal2-show {
            -webkit-animation: swal2-show 0.3s;
            animation: swal2-show 0.3s;
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none;
        }

        .swal2-hide {
            -webkit-animation: swal2-hide 0.15s forwards;
            animation: swal2-hide 0.15s forwards;
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none;
        }

        [dir='rtl'] .swal2-close {
            right: auto;
            left: 0;
        }

        .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip 0.75s;
            animation: swal2-animate-success-line-tip 0.75s;
        }

        .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long 0.75s;
            animation: swal2-animate-success-line-long 0.75s;
        }

        .swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in;
        }

        .swal2-animate-error-icon {
            -webkit-animation: swal2-animate-error-icon 0.5s;
            animation: swal2-animate-error-icon 0.5s;
        }

        .swal2-animate-error-icon .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark 0.5s;
            animation: swal2-animate-error-x-mark 0.5s;
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
@endsection