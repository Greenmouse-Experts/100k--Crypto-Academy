@extends('layouts.admin-frontend')

@section('page-content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@php
    $default = URL::current().'/dash/assets/images/users/avatar-5.jpg';
@endphp
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
                                    <h5>View Members Details</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Members Details</h4>
                    <p class="card-title-desc">View information below</p>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="text-center">
                                <img src="{{($user->photo) ?? $default}}" alt="" class="rounded" width="150px" height="150px">
                                <h6 class="text-secondary font-weight-light">{{$user->email}}</h6>
                                @if ($user->status != 'disabled')
                                    <form action="{{route('users.change_type', $user->id)}}" method="post">
                                    @csrf
                                        <input type="hidden" name="status" value="disabled">
                                        <button type="submit" class="btn btn-danger">Disable User</button>
                                    </form>
                                @else
                                    <form action="{{route('users.change_type', $user->id)}}" method="post">
                                        @csrf
                                        <input type="hidden" name="status" value="enabled">
                                        <button type="submit" class="btn btn-success">Enable User</button>
                                    </form>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-9">
                            <legend>
                                <h4>User Information</h4>
                            </legend>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <h4> {{$user->name}}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <h4> {{$user->email}}</h4>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    
                                    <div class="form-group">
                                        <label for="name">Joined At</label>
                                        <h4> {{$user->created_at}}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Wallet Balance</label>
                                        <h4> ₦0.00</h4>
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
</div>
@endsection