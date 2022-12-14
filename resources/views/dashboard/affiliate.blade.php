@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1 align-self-center">
                            <div class="text-muted">
                                <h5>My Affiliate Program</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="avatar-sm mx-auto mb-4">
                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">

                                    </span>
                                </div>
                                <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">0</a></h5>
                                <p class="text-muted">Direct Affiliates</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">My Affiliate Link</h5>
                            <div class="hstack gap-3">
                                <input class="form-control me-auto" type="text" value="lorem/affilatelink/1ook" id="myInput"">
                                <button type=" button" class="btn btn-secondary" onclick="myFunction()">copyText</button>
                                <div class="vr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h4 class="card-title mb-3">Indirect Affiliate</h4>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@endsection