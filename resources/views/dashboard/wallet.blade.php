@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <!-- container-fluid -->
        <div class="container-fluid">
            <!-- start page title -->

            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start">

                                <div class="flex-grow-1 align-self-center">
                                    <div class="text-muted">
                                        <h5>My Wallet</h5>

                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-wallet me-1"></i> <span class="d-none d-sm-inline-block">Wallet Balance <i class="mdi mdi-chevron-down"></i></span></button>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                        <div class="dropdown-item-text">
                                            <div>
                                                <p class="text-muted mb-2">Available Balance</p>
                                                <h5 class="mb-0">$ 9148.23</h5>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="#">
                                            BTC : <span class="float-end">1.02356</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            ETH : <span class="float-end">0.04121</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            LTC : <span class="float-end">0.00356</span>
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item text-primary text-center" href="#">
                                            Learn more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-3">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <i class="mdi mdi-account-circle text-primary h1"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <div class="text-muted">
                                        <h5>Hamzat</h5>
                                        <p class="mb-1">greenmouse@gmail.com</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2">Available Balance</p>
                                        <h5>$ 500</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-end mt-4 mt-sm-0">
                                        <p class="text-muted mb-2">Since last month</p>
                                        <h5>+ $ 100.35 <span class="badge bg-success ms-1 align-bottom">+ 1.3 %</span></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body border-top">
                            <p class="text-muted mb-3"></p>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <div class="font-size-24 text-primary mb-2">
                                                <i class="bx bx-import"></i>
                                            </div>

                                            <h5>Deposit</h5>
                                            <p class="text-muted mb-2">Click To Deposit</p>

                                            <div class="mt-3">
                                                <a href="{{route('user.deposit')}}" class="btn btn-primary btn-sm w-md">Deposit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-4 mt-sm-0">
                                            <div class="font-size-24 text-primary mb-2">
                                                <i class="bx bx-wallet"></i>
                                            </div>
                                            <h5>Withdraw</h5>
                                            <p class="text-muted mb-2">Click To Withdraw</p>

                                            <div class="mt-3">
                                                <a href="{{route('user.withdraw')}}" class="btn btn-primary btn-sm w-md">Withdraw</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Recent Transcation</h4>

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
                                                <th>USDT Amount</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK3215</a></td>

                                                <td>23 Dec, 2022</td>
                                                <td>Paid</td>
                                                <td>USDT</td>
                                                <td>$200</td>
                                                <td>$500</td>
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
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->
@endsection