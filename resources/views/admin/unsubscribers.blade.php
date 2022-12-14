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
                                    <h5>View Unsubscribers</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 card-title flex-grow-1">Unsubscriber Lists</h5>
                                    <div class="col-xxl-2 col-lg-4 me-2">
                                        <input type="search" class="form-control " id="searchInput" placeholder="Search for ...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Billing Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Payment Status</th>
                                                <th scope="col">Payment Method</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Hamzat Developer</td>
                                                <td>29-11-2022</td>
                                                <td>$5000</td>
                                                <td>Pending</td>
                                                <td>USDT</td>
                                                <td><span class="badge bg-info">Fail</span></td>
                                                <td><span class="badge bg-danger">Not Paid</span></td>
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="#subscriberedit" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Activate">
                                                            <a class="btn btn-sm    btn-soft-success"><i class="bi bi-check2"></i></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Deactivate">
                                                            <a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-eye-slash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Greenmouse Technology</td>
                                                <td>29-11-2022</td>
                                                <td>$1000</td>
                                                <td>Pending</td>
                                                <td>USDT</td>
                                                <td><span class="badge bg-info">Fail</span></td>
                                                <td><span class="badge bg-danger">Not Paid</span></td>
                                                <td>
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
                                                        
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <a href="#" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Activate">
                                                            <a class="btn btn-sm    btn-soft-success"><i class="bi bi-check2"></i></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Deactivate">
                                                            <a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-eye-slash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-between align-items-center">
                                    <ul class="pagination pagination-rounded justify-content-center mt-4">
                                        <li class="page-item disabled">
                                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="javascript: void(0);" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
<!-- Modal -->
<div class="modal fade" id="jobDelete" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body px-4 text-center">
                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="avatar-sm mb-4 mx-auto">
                    <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                        <i class="mdi mdi-trash-can-outline"></i>
                    </div>
                </div>
                <p class="text-muted font-size-16 mb-4">Are you sure you want to permanently deactivate this User.</p>

                <div class="hstack gap-2 justify-content-center mb-0">
                    <button type="button" class="btn btn-danger">Deactivate Now</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection