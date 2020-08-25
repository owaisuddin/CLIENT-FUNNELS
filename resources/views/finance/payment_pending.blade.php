@extends('layouts.app')
<script src="https://www.clientfunnels.io/js/core/bootstrap-material-design.min.js"></script>
@section('content')

    <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12" id="page_messages"></div>
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
                                                    <a class="nav-link" href="/payments/successful" role="tablist">
                                                        <i class="fa fa-check"></i> <span class="text-success">Successful  (0)</span>										</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="/payments/pending" role="tablist">
                                                        <i class="fas fa-sync-alt"></i> <span class="text-warning">Pending (0)</span>										</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/payments/failed" role="tablist">
                                                        <i class="fas fa-times"></i> <span class="text-danger">Failed (0)</span>										</a>
                                                </li>
                                            </ul>

                                            <hr>
                                            <div class="tab-content tab-space tab-subcategories">

                                                <h3 class="text-center">Pending Payments</h3>

                                                <div class="material-datatables">
                                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search records" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-no-bordered table-hover default-datatables dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                                    <thead>
                                                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 67px;" aria-label="Pending Payment ID: activate to sort column ascending">Pending Payment ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 60px;" aria-label="Amount: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107px;" aria-label="For: activate to sort column ascending">For</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 316px;" aria-label="Description: activate to sort column ascending">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 72px;" aria-label="Recurring: activate to sort column ascending">Recurring</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 48px;" aria-label="Billing Cycle: activate to sort column ascending">Billing Cycle</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 67px;" aria-label="Next Payment: activate to sort column ascending">Next Payment</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 49px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 115px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    </tbody><tfoot>
                                                                    <tr><th rowspan="1" colspan="1">Pending Payment ID</th><th rowspan="1" colspan="1">Amount</th><th rowspan="1" colspan="1">For</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Recurring</th><th rowspan="1" colspan="1">Billing Cycle</th><th rowspan="1" colspan="1">Next Payment</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Actions</th></tr>
                                                                    </tfoot>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">First</a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">Prev</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li><li class="paginate_button page-item last disabled" id="DataTables_Table_0_last"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Last</a></li></ul></div></div></div></div>
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
                © 2020 Client Funnels					</div>
        </div>
    </footer>

    <script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>
    @endsection