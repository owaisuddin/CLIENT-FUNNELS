@extends('layouts.app')
<script src="https://www.clientfunnels.io/js/core/bootstrap-material-design.min.js"></script>
@section('content')

    <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12" id="page_messages" style="display: none;"></div>
                </div><div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary card-header-icon">
                                <div class="card-icon">
                                    <i class="fas fa-pound-sign"></i>
                                </div>
                                <h4 class="card-title">Payments</h4>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12 ml-auto mr-auto">
                                        <div class="page-categories">

                                            <ul class="nav nav-pills nav-pills-rose nav-pills-icons justify-content-center" role="tablist">

                                                <li class="nav-item">
                                                    <a class="nav-link" href="/payments" role="tablist">
                                                        <i class="fas fa-chart-bar"></i> Statistics										</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="/payments/successful" role="tablist">
                                                        <i class="fa fa-check"></i> <span class="text-success">Successful  (0)</span>										</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/payments/pending" role="tablist">
                                                        <i class="fas fa-sync-alt"></i> <span class="text-warning">Pending (0)</span>										</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/payments/failed" role="tablist">
                                                        <i class="fas fa-times"></i> <span class="text-danger">Failed (0)</span>										</a>
                                                </li>
                                            </ul>

                                            <hr>
                                            <div class="tab-content tab-space tab-subcategories">

                                                <h3 class="text-center">Successful Payments</h3>

                                                <div id="view-payments-actions-template" style="display: none">
                                                    <button class="btn btn-info view-contact-payment" data-payment-id="">
                                                        <i class="fas fa-receipt"></i> View Payment
                                                    </button>
                                                    <a href="javascript:void(0)" class="btn btn-warning">
                                                        <i class="fas fa-user"></i> View Contact
                                                    </a>
                                                </div>

                                                <div class="material-datatables">
                                                    <div id="dt-list-payments-table_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dt-list-payments-table_length"><label>Show <select name="dt-list-payments-table_length" aria-controls="dt-list-payments-table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dt-list-payments-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dt-list-payments-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dt-list-payments-table" data-type="successful" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width:100%" role="grid" aria-describedby="dt-list-payments-table_info">
                                                                    <thead>
                                                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="dt-list-payments-table" rowspan="1" colspan="1" aria-label="Contact Payment ID: activate to sort column ascending">Contact Payment ID</th><th class="sorting" tabindex="0" aria-controls="dt-list-payments-table" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending">Contact</th><th class="sorting" tabindex="0" aria-controls="dt-list-payments-table" rowspan="1" colspan="1" aria-label="Program: activate to sort column ascending">Program</th><th class="sorting" tabindex="0" aria-controls="dt-list-payments-table" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="dt-list-payments-table" rowspan="1" colspan="1" aria-label="Card Used: activate to sort column ascending">Card Used</th><th class="sorting" tabindex="0" aria-controls="dt-list-payments-table" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending">Description</th><th class="sorting" tabindex="0" aria-controls="dt-list-payments-table" rowspan="1" colspan="1" aria-label="Payment Made: activate to sort column ascending">Payment Made</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th></tr>
                                                                    </thead>
                                                                    <tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr></tbody>
                                                                    <tfoot>
                                                                    <tr><th rowspan="1" colspan="1">Contact Payment ID</th><th rowspan="1" colspan="1">Contact</th><th rowspan="1" colspan="1">Program</th><th rowspan="1" colspan="1">Amount</th><th rowspan="1" colspan="1">Card Used</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Payment Made</th><th rowspan="1" colspan="1">Actions</th></tr>
                                                                    </tfoot>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table><div id="dt-list-payments-table_processing" class="dataTables_processing card" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dt-list-payments-table_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dt-list-payments-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dt-list-payments-table_previous"><a href="#" aria-controls="dt-list-payments-table" data-dt-idx="0" tabindex="0" class="page-link">Prev</a></li><li class="paginate_button page-item next disabled" id="dt-list-payments-table_next"><a href="#" aria-controls="dt-list-payments-table" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>			</div>
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
                © 2020 Silko Funnels					</div>
        </div>
    </footer>


    <script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>
@endsection