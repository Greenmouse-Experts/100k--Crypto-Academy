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
            <div class="start card">
                <div class="row">
                    <div class="col-md-12">
                        <div class="start-main">
                            <h4 class="card-title mb-4">Deposit</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="float-end dropdown ms-2">
                                <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                            <div>
                                <div class="mb-4 me-3">
                                    <i class="mdi mdi-account-circle text-primary h1"></i>
                                </div>

                                <div>
                                    <h5 class="">Hamzat</h5>
                                    <p class="text-muted mb-1">greenmouse@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-bottom">
                            <div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <p class="text-muted mb-2">Available Balance</p>
                                            <h5>$ 100</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end mt-4 mt-sm-0">
                                            <p class="text-muted mb-2">Since last month</p>
                                            <h5>0<span class="badge bg-success ms-1 align-bottom">+ 1.3 %</span></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Deposits</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="border p-3 rounded mt-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                    <i class="bi bi-credit-card-fill"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-14 mb-0">USDT</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-muted mt-3">
                                                    <p>Subscribe</p>
                                                    <h4>4.05 %</h4>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 align-self-end">
                                                <div class="float-end mt-3" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                    <b class="btn btn-sucess">
                                                        Deposit Now
                                                    </b>
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
                            <h4 class="card-title mb-4">Recent Deposit</h4>
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID No</th>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Chain Name</th>
                                                <th>USDT Amount</th>
                                                <th>Deposit address</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">215</a></td>

                                                <td>21 Dec, 2022</td>
                                                <td>Deposit</td>
                                                <td>TRC 20</td>
                                                <td>$ 1000</td>
                                                <td>tqyngq9Ls...</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<!-- Transaction Modal -->
<div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaction-detailModalLabel">Kindly Fill To Deposit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card">
                <div class="card-body">
                    <form class="custom-validation call" action="#">
                        <div class="mb-3">
                            <label class="form-label">Accepted Currency</label>
                            <div>
                                <input type="text" class="form-control" required parsley-type="email" readonly value="USDT" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Chain Name</label>
                            <div>
                                <input type="text" class="form-control" required parsley-type="email" readonly value="TRC-20" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deposit Address</label>
                            <div>
                                <input type="text" class="form-control" required parsley-type="email" placeholder="Enter Your Deposit Address" />
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <img class="srt" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669306824/EProd%20Images/image_1_ywbvl5.png">
                        </div>
                        <!-- <div class="mb-3">
                            <label class="form-label">Textarea</label>
                            <div>
                                <textarea required class="form-control" rows="3"></textarea>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-8">
                                <button type="submit">
                                    Deposit Now
                                </button>
                            </div>
                            <div class="col-md-4" >
                                <button type="reset" style="background-color:red ;" class="btn btn-danger">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-Success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- end modal -->
@endsection