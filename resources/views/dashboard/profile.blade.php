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
                                <h5>Edit Profile</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Your Personal Settings</h4>
                            <p class="card-title-desc"></p>
                            <form class="custom-validation" action="#">
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" required placeholder="Enter Your First Name" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">First Last</label>
                                    <input type="text" class="form-control" required placeholder="Enter Your First Last" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" required placeholder="Enter Your Email" />
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Update Profile
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Reset Your Password</h4>
                            <p class="card-title-desc"></p>
                            <form class="custom-validation" action="#">
                                <div class="mb-3">
                                    <label class="form-label">Old Password</label>
                                    <input type="password" class="form-control" required placeholder="Enter Old Password" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="text" class="form-control" required placeholder="Enter Your New Password" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="text" class="form-control" required placeholder="Enter Your Confirm Password" />
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Update Password
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Upload Profile</h4>
                            <p class="card-title-desc"></p>
                            <div class="div text-center">
                                <div class="bg-img m-auto">
                                    <img class="rounded-circle profile-user" src="{{URL::asset('dash/assets/images/users/avatar-5.jpg')}}" alt="Header Avatar" />
                                </div>
                                <div class="profile pt-2 mb-2">
                                    <h4 class="mb-3">Hamzat</h4>
                                    <input type="file" class="form-control mb-3">
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Upload Avatar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>

<!-- end modal -->
@endsection