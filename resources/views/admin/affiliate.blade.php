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
                                <h5>View Affiliate</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 card-title flex-grow-1">View Recent Affiliate</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle nowrap">
                                        <table class="table table-bordered align-middle nowrap">
                                            <thead>
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
                                                    <ul class="list-unstyled hstack gap-1 mb-0">
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
                                    </table>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection