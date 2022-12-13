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
                                                <p class="text-muted mb-2">$500</p>
                                                <div class="mt-3">
                                                    <a href="{{route('user.deposit')}}" class="btn btn-primary btn-sm w-md">Total Deposit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-4 mt-sm-0">
                                                <div class="font-size-24 text-primary mb-2">
                                                    <i class="bx bx-wallet"></i>
                                                </div>
                                                <h5>Withdraw</h5>
                                                <p class="text-muted mb-2">$1500</p>

                                                <div class="mt-3">
                                                    <a href="{{route('user.withdraw')}}" class="btn btn-primary btn-sm w-md">Total Withdraw</a>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">Activities</h4>
                            <div class="col-xxl-2 col-lg-4 float-end">
                                <input type="search" class="form-control" id="searchInput" placeholder="Search for ...">

                            </div>
                            <ul class="nav nav-tabs nav-tabs-custom">
                                <div class="mt-1"></div>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">List of Transactions</a>
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
                                                <th>USDT Amount</th>
                                                <th>Action</th>
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
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                                            <a href="{{route('admin.viewdetails')}}" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-eye-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#100k2</a></td>
                                                <td>30 Nov, 2022</td>
                                                <td>Withdraw</td>
                                                <td>USDT</td>
                                                <td>0.00413</td>
                                                <td>$ 2123.01</td>
                                                <td>
                                                <ul class="list-unstyled hstack gap-1 mb-0">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                                            <a href="#" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-eye-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
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