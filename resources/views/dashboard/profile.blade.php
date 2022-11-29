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
                            <form class="custom-validation" method="POST" action="{{ route('user.profile.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" required placeholder="Enter Your First Name" value="{{Auth::user()->first_name}}"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" required placeholder="Enter Your Last Name" value="{{Auth::user()->last_name}}"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" required placeholder="Enter Your Email" value="{{Auth::user()->email}}" />
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
                            <form class="custom-validation" method="POST" action="{{ route('user.password.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Old Password</label>
                                    <input type="password" class="form-control" value="{{Auth::user()->password}}" readonly/>
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
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Upload Profile</h4>
                            <p class="card-title-desc"></p>
                            <div class="div text-center">
                            <form class="custom-validation" method="POST" action="{{ route('user.profile.upload.picture')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="bg-img m-auto">
                                    @if(Auth::user()->photo)
                                    <img class="rounded-circle " src="{{Auth::user()->photo}}" alt="{{Auth::user()->first_name}}" width="200" />
                                    @else
                                    <span class="rounded-circle profile-user" style="font-size: 3rem; width: 140px; height: 140px; vertical-align: middle; align-items: center; background: #556ee6; color: #fff; display: flex; justify-content: center;">{{ ucfirst(substr(Auth::user()->first_name, 0, 1)) }} {{ ucfirst(substr(Auth::user()->last_name, 0, 1)) }}</span>
                                    @endif
                                    <!-- <img class="rounded-circle profile-user" src="{{URL::asset('dash/assets/images/users/avatar-5.jpg')}}" alt="Header Avatar" /> -->
                                </div>
                                <div class="profile pt-2 mb-2">
                                    <h4 class="mb-3">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h4>
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
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>

<!-- end modal -->
@endsection