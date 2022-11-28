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
                <div class="col-12">
                    <div class="start">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="start-main">
                                    <h1>Admin Dashboard</h1>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="runtime">
                        <h1>Total number of Members</h1>
                        <p>
                            1000+
                        </p>
                        <h4>Members</h4>
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669119633/EProd%20Images/Iconn_t4lpdx.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="runtime">
                        <h1>Total number of Subscribers</h1>
                        <p>
                            500+
                        </p>
                        <h4>Subscribers</h4>
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669643778/EProd%20Images/Group_8868_vh92i8.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="runtime">
                        <h1>Total number of Trainings</h1>
                        <p>
                            10
                        </p>
                        <h4>Trainings</h4>
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669119628/EProd%20Images/Icon_pvw92p.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="runtime">
                        <h1>Total number of Affiliates</h1>
                        <p>
                            40
                        </p>
                        <h4>Affiliates</h4>
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669643778/EProd%20Images/Icon_jiiimn.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-hover">
                                        <h4 class="mb-3">Users</h4>
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 70px;">S/N</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Billing Name</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Activity</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Subscription</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle">
                                                            1
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    01/05/2022
                                                </td>
                                                <td>Hamzat Abdulazeez</td>
                                                <td>100 USDT</td>
                                                <td>Deposit</td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge badge-soft-success font-size-11 m-1">Completed</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="Activate">Approved</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle">
                                                            2
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    11/11/2022
                                                </td>
                                                <td>Adeleke Money</td>
                                                <td>400 USDT</td>
                                                <td>Deposit</td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge badge-soft-danger font-size-11 m-1">Pending</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="butt">Pending</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle">
                                                            3
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    22/11/2022
                                                </td>
                                                <td>Fuad Hill</td>
                                                <td>600 USDT</td>
                                                <td>Withdrawal</td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge badge-soft-success font-size-11 m-1">Pending</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="Activate">Approved</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle">
                                                            4
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    12/11/2022
                                                </td>
                                                <td>Promise</td>
                                                <td>1000 USDT</td>
                                                <td>Withdrawal</td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge badge-soft-success font-size-11 m-1">Completed</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="Activate">Approved</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle">
                                                            5
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    19/12/2022
                                                </td>
                                                <td>Chuka</td>
                                                <td>1500 USDT</td>
                                                <td>Deposit</td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge badge-soft-success font-size-11 m-1">Pending</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="butt">Pending</button>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
    @endsection