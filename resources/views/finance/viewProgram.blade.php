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
                                    <i class="fa fa-book-open"></i>
                                </div>
                                <h4 class="card-title">View Program</h4>
                            </div>
                            <div class="card-body">
                                <div class="toolbar">
                                    <a href="/finance/programs"
                                       title="Back to programs list" class="btn btn-success">
                                        <i class="fa fa-arrow-left"></i> Programs List
                                    </a>

                                    <a type="button"
                                            class="btn btn-danger btn-sm m-b pull-right"
                                            data-type="program" href="/finance/programs/delete/{{$program['id']}}"
                                            data-message="Delete Company Program">
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
                                                    <a class="nav-link active show" data-toggle="tab"
                                                       href="#view-program-details" role="tablist">
                                                        <i class="material-icons">info</i> Details
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab"
                                                       href="#view-program-contacts" role="tablist">
                                                        <i class="material-icons">assignment_ind</i> Assigned
                                                        Contacts (0)
                                                    </a>
                                                </li>
                                            </ul>

                                            <hr>
                                            <div class="tab-content tab-space tab-subcategories">

                                                <div class="tab-pane active show" id="view-program-details">
                                                    <div class="card">
                                                        <div class="card-body">

                                                            <div class="row m-b word-break">
                                                                <div class="col-sm-6">
                                                                    <strong>Program ID:</strong> {{$program['id']}}
                                                                </div>


                                                                <div class="col-sm-6">
                                                                    <strong>Name:</strong> {{$program['name']}}
                                                                </div>

                                                            </div>
                                                            <hr>
                                                            <div class="row m-b word-break">
                                                                <div class="col-sm-6">
                                                                    <strong>Price:</strong> {{$program['price'].' '.$program['currency']}}
                                                                </div>


                                                                <div class="col-sm-6">
                                                                    <strong>Recurring Payment:</strong> Every {{$program['recurring_every'].' '.$program['recurring_tenure']}}
                                                                </div>

                                                            </div>
                                                            <hr>
                                                            <div class="row m-b word-break">
                                                                <div class="col-sm-6">
                                                                    <strong>Contracts:</strong>
                                                                    <ul>
                                                                        <li>
                                                                            {{$program['contracts']}}
                                                                        </li>
                                                                    </ul>
                                                                </div>


                                                                <div class="col-sm-6">
                                                                    <strong>Notes:</strong> {{$program['notes']}}
                                                                </div>

                                                            </div>
                                                            <hr>
                                                            <div class="row m-b word-break">
                                                                <div class="col-sm-6">
                                                                    <strong>Created:</strong> {{$program['created_at']}}
                                                                </div>


                                                                <div class="col-sm-6">
                                                                    <strong>Created By:</strong> <span
                                                                            class="label label-success">You</span>
                                                                </div>

                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="view-program-contacts">
                                                    <div class="card">
                                                        <div class="card-body">


                                                            <h2 class="text-center">Assigned Contacts</h2>
                                                            <hr>
                                                            <div class="material-datatables">
                                                                <div id="DataTables_Table_0_wrapper"
                                                                     class="dataTables_wrapper dt-bootstrap4">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-6">
                                                                            <div class="dataTables_length"
                                                                                 id="DataTables_Table_0_length">
                                                                                <label>Show <select
                                                                                            name="DataTables_Table_0_length"
                                                                                            aria-controls="DataTables_Table_0"
                                                                                            class="custom-select custom-select-sm form-control form-control-sm">
                                                                                        <option value="10">10
                                                                                        </option>
                                                                                        <option value="25">25
                                                                                        </option>
                                                                                        <option value="50">50
                                                                                        </option>
                                                                                        <option value="-1">All
                                                                                        </option>
                                                                                    </select> entries</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-6">
                                                                            <div id="DataTables_Table_0_filter"
                                                                                 class="dataTables_filter">
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
                                                                                   cellspacing="0" width="100%"
                                                                                   style="width: 100%;"
                                                                                   id="DataTables_Table_0"
                                                                                   role="grid"
                                                                                   aria-describedby="DataTables_Table_0_info">
                                                                                <thead>
                                                                                <tr role="row">
                                                                                    <th class="sorting"
                                                                                        tabindex="0"
                                                                                        aria-controls="DataTables_Table_0"
                                                                                        rowspan="1" colspan="1"
                                                                                        style="width: 0px;"
                                                                                        aria-label="Assigned ID: activate to sort column ascending">
                                                                                        Assigned ID
                                                                                    </th>
                                                                                    <th class="sorting"
                                                                                        tabindex="0"
                                                                                        aria-controls="DataTables_Table_0"
                                                                                        rowspan="1" colspan="1"
                                                                                        style="width: 0px;"
                                                                                        aria-label="Contact: activate to sort column ascending">
                                                                                        Contact
                                                                                    </th>
                                                                                    <th class="sorting"
                                                                                        tabindex="0"
                                                                                        aria-controls="DataTables_Table_0"
                                                                                        rowspan="1" colspan="1"
                                                                                        style="width: 0px;"
                                                                                        aria-label="Assigned: activate to sort column ascending">
                                                                                        Assigned
                                                                                    </th>
                                                                                    <th class="text-right sorting"
                                                                                        tabindex="0"
                                                                                        aria-controls="DataTables_Table_0"
                                                                                        rowspan="1" colspan="1"
                                                                                        style="width: 0px;"
                                                                                        aria-label="Actions: activate to sort column ascending">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr class="odd">
                                                                                    <td valign="top" colspan="4"
                                                                                        class="dataTables_empty">
                                                                                        No data available in
                                                                                        table
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                                <tfoot>
                                                                                <tr>
                                                                                    <th rowspan="1" colspan="1">
                                                                                        Assigned ID
                                                                                    </th>
                                                                                    <th rowspan="1" colspan="1">
                                                                                        Contact
                                                                                    </th>
                                                                                    <th rowspan="1" colspan="1">
                                                                                        Assigned
                                                                                    </th>
                                                                                    <th class="text-right"
                                                                                        rowspan="1" colspan="1">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </tfoot>
                                                                                <tbody>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-5">
                                                                            <div class="dataTables_info"
                                                                                 id="DataTables_Table_0_info"
                                                                                 role="status"
                                                                                 aria-live="polite">Showing 0 to
                                                                                0 of 0 entries
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-7">
                                                                            <div class="dataTables_paginate paging_full_numbers"
                                                                                 id="DataTables_Table_0_paginate">
                                                                                <ul class="pagination">
                                                                                    <li class="paginate_button page-item first disabled"
                                                                                        id="DataTables_Table_0_first">
                                                                                        <a href="#"
                                                                                           aria-controls="DataTables_Table_0"
                                                                                           data-dt-idx="0"
                                                                                           tabindex="0"
                                                                                           class="page-link">First</a>
                                                                                    </li>
                                                                                    <li class="paginate_button page-item previous disabled"
                                                                                        id="DataTables_Table_0_previous">
                                                                                        <a href="#"
                                                                                           aria-controls="DataTables_Table_0"
                                                                                           data-dt-idx="1"
                                                                                           tabindex="0"
                                                                                           class="page-link">Prev</a>
                                                                                    </li>
                                                                                    <li class="paginate_button page-item next disabled"
                                                                                        id="DataTables_Table_0_next">
                                                                                        <a href="#"
                                                                                           aria-controls="DataTables_Table_0"
                                                                                           data-dt-idx="2"
                                                                                           tabindex="0"
                                                                                           class="page-link">Next</a>
                                                                                    </li>
                                                                                    <li class="paginate_button page-item last disabled"
                                                                                        id="DataTables_Table_0_last">
                                                                                        <a href="#"
                                                                                           aria-controls="DataTables_Table_0"
                                                                                           data-dt-idx="3"
                                                                                           tabindex="0"
                                                                                           class="page-link">Last</a>
                                                                                    </li>
                                                                                </ul>
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
                © 2020 Silko Funnels
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

                        <form id="re-login-form" onsubmit="return false;">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label for="re-login-email" class="bmd-label-floating"> Email <span
                                                    class="required">*</span></label>
                                        <input type="text" class="form-control" id="re-login-email" required="true"
                                               name="email" value="helenahillfit@gmail.com" maxlength="100">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label for="re-login-password" class="bmd-label-floating"> Password <span
                                                    class="required">*</span></label>
                                        <input type="password" class="form-control" name="password"
                                               id="re-login-password" maxlength="50" placeholder="Password">
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
    <!-- Add New Program -->
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
                                    <label for="new-program-name" class="bmd-label-floating"> Name <span
                                                class="required" aria-required="true">*</span></label>
                                    <input type="text" class="form-control" id="new-program-name" required="true"
                                           name="name" value="" maxlength="100" aria-required="true">
                                </div>
                            </div>
                        </div>

                        <h3 class="text-center">Default Price Configuration</h3>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="new-program-ccode" class="bmd-label-floating"> Currency <span
                                                class="required" aria-required="true">*</span></label>
                                    <div class="select2-container js-source-states-2 m-b" id="s2id_new-program-ccode"
                                         style="width: 100%"><a href="javascript:void(0)" class="select2-choice"
                                                                tabindex="-1">   <span class="select2-chosen"
                                                                                       id="select2-chosen-1">
										£ British Pound									</span><abbr
                                                    class="select2-search-choice-close"></abbr> <span
                                                    class="select2-arrow" role="presentation"><b
                                                        role="presentation"></b></span></a><label for="s2id_autogen1"
                                                                                                  class="select2-offscreen">
                                            Currency *</label><input class="select2-focusser select2-offscreen"
                                                                     type="text" aria-haspopup="true" role="button"
                                                                     aria-labelledby="select2-chosen-1"
                                                                     id="s2id_autogen1">
                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                            <div class="select2-search"><label for="s2id_autogen1_search"
                                                                               class="select2-offscreen"> Currency
                                                    *</label> <input type="text" autocomplete="off" autocorrect="off"
                                                                     autocapitalize="off" spellcheck="false"
                                                                     class="select2-input" role="combobox"
                                                                     aria-expanded="true" aria-autocomplete="list"
                                                                     aria-owns="select2-results-1"
                                                                     id="s2id_autogen1_search" placeholder=""></div>
                                            <ul class="select2-results" role="listbox" id="select2-results-1"></ul>
                                        </div>
                                    </div>
                                    <select class="js-source-states-2 m-b" name="currency" id="new-program-ccode"
                                            style="width: 100%; display: none;" tabindex="-1" title=" Currency *">
                                        <option value="" selected="">--- Select ---</option>
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
                            <div class="col-sm-6">
                                <div class="form-group bmd-form-group">
                                    <label for="new-program-price" class="bmd-label-floating"> Price <span
                                                class="required" aria-required="true">*</span></label>
                                    <input type="number" class="form-control" id="new-program-price" required="true"
                                           name="price" value="" min="1" step="0.01" aria-required="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="recurring_payment">
                                            Recurring Payment
                                            <span class="form-check-sign">
										  <span class="check"></span>
										</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row program-recurring-wrap">
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group">
                                    <label for="new-program-rec-n" class="bmd-label-floating"> Recurring <span
                                                class="required" aria-required="true">*</span></label>
                                    <input type="number" class="form-control" id="new-program-rec-n" required="true"
                                           name="recurring_every" value="" min="1" step="1" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="new-program-rec-t" class="bmd-label-floating"> Every <span
                                                class="required" aria-required="true">*</span></label>
                                    <div class="select2-container js-source-states-2 m-b" id="s2id_new-program-rec-t"
                                         style="width: 100%"><a href="javascript:void(0)" class="select2-choice"
                                                                tabindex="-1"> <span class="select2-chosen"
                                                                                     id="select2-chosen-2">Month</span><abbr
                                                    class="select2-search-choice-close"></abbr> <span
                                                    class="select2-arrow" role="presentation"><b
                                                        role="presentation"></b></span></a><label for="s2id_autogen2"
                                                                                                  class="select2-offscreen">
                                            Every *</label><input class="select2-focusser select2-offscreen" type="text"
                                                                  aria-haspopup="true" role="button"
                                                                  aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                                        <div class="select2-drop select2-display-none select2-with-searchbox">
                                            <div class="select2-search"><label for="s2id_autogen2_search"
                                                                               class="select2-offscreen"> Every
                                                    *</label> <input type="text" autocomplete="off" autocorrect="off"
                                                                     autocapitalize="off" spellcheck="false"
                                                                     class="select2-input" role="combobox"
                                                                     aria-expanded="true" aria-autocomplete="list"
                                                                     aria-owns="select2-results-2"
                                                                     id="s2id_autogen2_search" placeholder=""></div>
                                            <ul class="select2-results" role="listbox" id="select2-results-2"></ul>
                                        </div>
                                    </div>
                                    <select class="js-source-states-2 m-b" name="recurring_every_type"
                                            id="new-program-rec-t" style="width: 100%; display: none;" tabindex="-1"
                                            title=" Every *">
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
                                    <label for="new-program-contracts" class="bmd-label-floating"> Contracts</label>
                                    <div class="select2-container select2-container-multi js-source-states-2 m-b"
                                         id="s2id_new-program-contracts" style="width: 100%">
                                        <ul class="select2-choices">
                                            <li class="select2-search-field"><label for="s2id_autogen3"
                                                                                    class="select2-offscreen">
                                                    Contracts</label> <input type="text" autocomplete="off"
                                                                             autocorrect="off" autocapitalize="off"
                                                                             spellcheck="false" class="select2-input"
                                                                             id="s2id_autogen3" placeholder=""
                                                                             style="width: 20px;"></li>
                                        </ul>
                                        <div class="select2-drop select2-drop-multi select2-display-none">
                                            <ul class="select2-results">
                                                <li class="select2-no-results">No matches found</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <select class="js-source-states-2 m-b" name="contracts[]" id="new-program-contracts"
                                            style="width: 100%; display: none;" multiple="" tabindex="-1">
                                        <option value="296">
                                            owais uddin gilani (ID: 296)
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group bmd-form-group">
                                    <label for="new-contract-notes" class="bmd-label-floating"> Notes</label>
                                    <textarea rows="5" class="form-control" id="new-company-user-notes" name="notes"
                                              maxlength="2000"></textarea>
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
    <!-- /Add New Program -->


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
    <script src="https://www.clientfunnels.io/js/app-finance.js?v=1.1.0"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.dataTables.min.js"></script>
    <script src="https://www.clientfunnels.io/vendor/select2/select2.js"></script>

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
        $crisp.push(["set", "user:nickname", ["Helena Hill"]]);
        $crisp.push(["set", "user:avatar", ["https://www.clientfunnels.io/uploads/profile_image/236/profile_image.jpeg?1595497482"]]);
        $crisp.push(["set", "session:data", [
            [
                ["user_id", "236"],
                ["company_id", "192"],
            ]
        ]]);
    </script>


    <span role="status" aria-live="polite" class="select2-hidden-accessible"></span>
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
                                                       data-cshid="b0630b77-9ad1-a655-ca37-f3c1fc76fd59"><span
                            class="crisp-1059tj2"><span data-id="general_entice" data-with-helpdesk="true"
                                                        data-is-concealed="false" class="crisp-1xaupiq"
                                                        style="display: block !important;"><span
                                    class="crisp-1sa0919"><span class="crisp-1s66m5e crisp-9dgo7z"><span
                                            class="crisp-yzclt"><span class="crisp-5me80a"><span
                                                    class="crisp-bz13r8 crisp-i1yn7v"></span><span
                                                    data-has-avatar="true" class="crisp-1sd4dmd"><span
                                                        class="crisp-191rfs5"><span class="crisp-pkd0me crisp-13qutdl">Welcome to Silko Funnels Technical Support.</span><span
                                                            data-id="online" class="crisp-h99wdo crisp-9dgo7z">Support is online.</span><span
                                                            data-id="away" class="crisp-h99wdo crisp-9dgo7z">Support is away.</span></span><span
                                                        class="crisp-z83vpo"><span
                                                            class="crisp-bjk43g crisp-4oo1n4"><span
                                                                style="background-image: url('https://image.crisp.chat/avatar/operator/0d30b760-8a4c-42d4-961a-69c12fe53bae/240/?1597088119999') !important;"
                                                                class="crisp-2tz7y crisp-1mh9nm6"></span></span></span></span></span></span><span
                                            data-when="online" class="crisp-a1mko8"><span
                                                class="crisp-vz5ota crisp-1jrqqbm"><span class="crisp-4snher"><span
                                                        class="crisp-rvg3pe crisp-wcida4 crisp-13qutdl">Chat with Silko Funnels Team</span></span></span></span><span
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