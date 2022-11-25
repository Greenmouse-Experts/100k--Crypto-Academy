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
            <div class="card mt-2">
                <div class="card-body">
                    <div class="d-flex align-items-start">

                        <div class="flex-grow-1 align-self-center">
                            <div class="text-muted">
                                <h5>Withdraw</h5>

                            </div>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-wallet me-1"></i> <span class="d-none d-sm-inline-block">Wallet Balance <i class="mdi mdi-chevron-down"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                <div class="dropdown-item-text">
                                    <div>
                                        <p class="text-muted mb-2">Available Balance</p>
                                        <h5 class="mb-0">$ 1483</h5>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#">
                                    USDT : <span class="float-end">1.02356</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Withdrawal Information</h4>
                    <p class="card-title-desc">Fill all information below to complete your Withdrawal</p>

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Withdrawal name</label>
                                    <input type="text" class="form-control" placeholder="TRC-20">
                                </div>
                                <div class="mb-3">
                                    <label>Chain name</label>
                                    <input type="text" class="form-control" placeholder="TRC-20">
                                </div>
                                <div class="mb-3">
                                    <label>Number of withdrawals</label>
                                    <input type="number" class="form-control" placeholder="1">
                                </div>
                                <div class="mb-3">
                                    <label>Address where withdraw</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Amount to withdraw</label>
                                    <input type="tel" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Phone number</label>
                                    <input type="tel" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Confirm Withdrawal</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<!-- end modal -->
@endsection