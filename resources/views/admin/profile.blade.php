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
                            <form class="custom-validation" method="POST" action="{{ route('admin.profile.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Enter Your First Name" value="{{Auth::guard('admin')->user()->name}}"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" readonly class="form-control" name="email" required placeholder="Enter Your Email" value="{{Auth::guard('admin')->user()->email}}" />
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="form-btn btn btn-primary waves-effect waves-light">
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
                            <form class="custom-validation" method="POST" action="{{ route('admin.password.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Old Password</label>
                                    <input type="password" name="old_password" class="form-control" placeholder="***********" required/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new_password" required placeholder="Enter Your New Password" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="new_password_confirmation"required placeholder="Enter Your Confirm Password" />
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="form-btn btn btn-primary waves-effect waves-light">
                                        Update Password
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Upload Profile</h4>
                            <p class="card-title-desc"></p>
                            <div class="div text-center">
                                <form class="custom-validation" enctype="multipart/form-data">
                                    <div class="bg-img m-auto">
                                        <img class="rounded-circle "width="200"  />
                                        <span class="rounded-circle profile-user" style="font-size: 3rem; width: 140px; height: 140px; vertical-align: middle; align-items: center; background: #556ee6; color: #fff; display: flex; justify-content: center;"></span>

                                    </div>
                                    <div class="profile pt-2 mb-2">
                                        <h4 class="mb-3"></h4>
                                        <input type="file" accept="image/*" name="photo" class="form-control mb-3">
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Upload Avatar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col --> --}}
            </div>
        </div>
    </div>
</div>
@endsection
