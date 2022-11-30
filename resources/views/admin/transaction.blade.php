@extends('layouts.admin-frontend')

@section('page-content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <!-- container-fluid -->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1 align-self-center">
                                <div class="text-muted">
                                    <h5>Transaction</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <i class="mdi mdi-account-circle text-primary h1"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <div class="text-muted">
                                        <h5>Admin</h5>
                                    </div>
                                </div>

                                <div class="dropdown ms-2">
                                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2">Available Balance</p>
                                        <h5>$ 9148.23</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-end mt-4 mt-sm-0">
                                        <p class="text-muted mb-2">Since last month</p>
                                        <h5>+ $ 248.35 <span class="badge bg-success ms-1 align-bottom">+ 1.3 %</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body border-top">
                            <p class="text-muted mb-4">In this month</p>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div>
                                            <div class="font-size-24 text-primary mb-2">
                                                <i class="bx bx-send"></i>
                                            </div>

                                            <p class="text-muted mb-2">Total Send</p>
                                            <h5>$ 654.42</h5>

                                            <div class="mt-3">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm w-md">Send</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-4 mt-sm-0">
                                            <div class="font-size-24 text-primary mb-2">
                                                <i class="bx bx-import"></i>
                                            </div>

                                            <p class="text-muted mb-2">Total Receive</p>
                                            <h5>$ 1054.32</h5>

                                            <div class="mt-3">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm w-md">Receive</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-4 mt-sm-0">
                                            <div class="font-size-24 text-primary mb-2">
                                                <i class="bx bx-wallet"></i>
                                            </div>

                                            <p class="text-muted mb-2">Total Withdraw</p>
                                            <h5>$ 824.34</h5>

                                            <div class="mt-3">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm w-md">Withdraw</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Card Details</h5>

                            <div class="card bg-primary text-white visa-card mb-0">
                                <div class="card-body">
                                    <div>
                                        <i class="bx bxl-visa visa-pattern"></i>

                                        <div class="float-end">
                                            <i class="bx bxl-visa visa-logo display-3"></i>
                                        </div>

                                        <div>
                                            <i class="bx bx-chip h1 text-warning"></i>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-4">
                                            <p>
                                                <i class="fas fa-star-of-life m-1"></i>
                                                <i class="fas fa-star-of-life m-1"></i>
                                                <i class="fas fa-star-of-life m-1"></i>
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p>
                                                <i class="fas fa-star-of-life m-1"></i>
                                                <i class="fas fa-star-of-life m-1"></i>
                                                <i class="fas fa-star-of-life m-1"></i>
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p>
                                                <i class="fas fa-star-of-life m-1"></i>
                                                <i class="fas fa-star-of-life m-1"></i>
                                                <i class="fas fa-star-of-life m-1"></i>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="text-white float-end mb-0">12/22</h5>
                                        <h5 class="text-white mb-0">Adeleke Money</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Activities</h4>

                            <ul class="nav nav-tabs nav-tabs-custom">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Total Deposit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Total Withdraw</a>
                                </li>
                            </ul>

                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID No</th>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Currency</th>
                                                <th>Amount</th>
                                                <th>Amount in USD</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#100k1</a></td>

                                                <td>01 Dec, 2021</td>
                                                <td>Deposit</td>
                                                <td>USDT</td>
                                                <td>1.00952</td>
                                                <td>$ 9067.62</td>
                                            </tr>

                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#100k2</a></td>

                                                <td>30 Nov, 2022</td>
                                                <td>Withdraw</td>
                                                <td>USDT</td>
                                                <td>0.00413</td>
                                                <td>$ 2123.01</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
@endsection