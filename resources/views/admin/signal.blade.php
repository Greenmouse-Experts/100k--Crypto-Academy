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
            <div class="card mt-2">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1 align-self-center">
                            <div class="text-muted">
                                <h5>Signal Room</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Signal link</h5>
                            <div class="hstack gap-3">
                                <input class="form-control me-auto" type="text" value="100kcrytpo/signal2022" readonly id="myInput"">
                                <button type=" button" class="btn btn-secondary" onclick="myFunction()">JoinLink</button>
                                <div class="vr"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Create Signal Room</h5>
                            <div class="hstack gap-3">
                                <input class="form-control me-auto" type="text" placeholder="" id="myInput"">
                                <button type=" button" class="btn btn-success">Create</button>
                                <div class="vr"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 card-title flex-grow-1">View Recent Link</h5>
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
                                                <th scope="col">Date</th>
                                                <th scope="col">Link Created</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>29-11-2022</td>
                                                <td>#100k/link29</td>
                                                <td><span class="badge bg-success">active</span></td>
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
                                                <td>29-21-2022</td>
                                                <td>#100k/link29</td>
                                                <td><span class="badge bg-success">active</span></td>
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
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-between align-items-center">
                                    <ul class="pagination pagination-rounded justify-content-center mt-4">
                                        <li class="page-item disabled">
                                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="javascript: void(0);" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
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
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 70px;">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Tags</th>
                                                <th scope="col">Active</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle">
                                                            D
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Hamzat</a></h5>
                                                </td>
                                                <td>greenmouse@gmail.com</td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge badge-soft-primary font-size-11 m-1">joinlink</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                                        <li class="list-inline-item px-2">
                                                            <a href="javascript: void(0);" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                        </li>
                                                        <li class="list-inline-item px-2">
                                                            <a href="javascript: void(0);" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection