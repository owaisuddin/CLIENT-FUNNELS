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
                                                    <a class="nav-link active" href="/payments" role="tablist">
                                                        <i class="fas fa-chart-bar"></i> Statistics										</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/payments/successful" role="tablist">
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

                                                <div class="tab-pane active">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h3 class="text-center">Payment Statistics</h3>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label class="form-label">Date Range</label>
                                                                    <form action="javascript:void(0)" method="post">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <span class="bmd-form-group is-filled"><input type="text" name="from" class="form-control datepicker" placeholder="From" value="01/08/2020" data-no-min="1" required=""></span>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <span class="bmd-form-group is-filled"><input type="text" name="to" class="form-control datepicker" placeholder="To" value="31/08/2020" data-no-min="1" required=""></span>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <button type="submit" class="btn btn-rose max-width">
                                                                                    Update <i class="fa fa-arrow-right"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <div class="card card-stats">
                                                                        <div class="card-header card-header-success card-header-icon payments-stats-card">
                                                                            <div class="card-icon">
                                                                                <i class="fa fa-check"></i>
                                                                            </div>
                                                                            <p class="card-category">Successfull</p>
                                                                            <h3 class="card-title">0</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <div class="card card-stats">
                                                                        <div class="card-header card-header-warning card-header-icon payments-stats-card">
                                                                            <div class="card-icon">
                                                                                <i class="fas fa-sync-alt"></i>
                                                                            </div>
                                                                            <p class="card-category">Pending</p>
                                                                            <h3 class="card-title">0</h3>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <div class="card card-stats">
                                                                        <div class="card-header card-header-danger card-header-icon payments-stats-card">
                                                                            <div class="card-icon">
                                                                                <i class="fa fa-times"></i>
                                                                            </div>
                                                                            <p class="card-category">Failed</p>
                                                                            <h3 class="card-title">0</h3>

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
    <script src="https://www.clientfunnels.io/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://www.clientfunnels.io/js/app-shared.js?v=1.1.0"></script>

    <script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>
@endsection