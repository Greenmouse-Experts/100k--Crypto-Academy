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

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label >Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label>Details</label>
                                    <input type="text" class="form-control" placeholder="Details">
                                </div>
                                <div class="mb-3">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" placeholder="Amount">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
@endsection