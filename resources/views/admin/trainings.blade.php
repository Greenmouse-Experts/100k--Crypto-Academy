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
                                    <h5>Create Trainings</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Create New Training</h4>
                                <form class="outer-repeater" method="post">
                                    <div data-repeater-list="outer-group" class="outer">
                                        <div data-repeater-item class="outer">
                                            <div class="form-group row mb-4">
                                                <label for="taskname" class="col-form-label col-lg-2">Training Name</label>
                                                <div class="col-lg-10">
                                                    <input id="taskname" name="taskname" type="text" class="form-control" placeholder="Enter Task Name...">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label col-lg-2">Training Description</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label col-lg-2">Training Date</label>
                                                <div class="col-lg-10">
                                                    <div class="input-daterange input-group" data-provide="datepicker">
                                                        <input type="text" class="form-control" placeholder="Start Date" name="start" />
                                                        <input type="text" class="form-control" placeholder="End Date" name="end" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="inner-repeater mb-4">
                                                <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                                    <label class="col-form-label col-lg-2">Add Team Member</label>
                                                    <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                                                        <div class="mb-3 row align-items-center">
                                                            <div class="col-md-6">
                                                                <input type="text" class="inner form-control" placeholder="Enter Name..." />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mt-4 mt-md-0">
                                                                    <input class="form-control" type="file">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="mt-2 mt-md-0 d-grid">
                                                                    <input data-repeater-delete type="button" class="btn btn-primary inner" value="Delete" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-lg-10">
                                                        <input data-repeater-create type="button" class="btn btn-success inner" value="Add User" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="taskbudget" class="col-form-label col-lg-2">Budget</label>
                                                <div class="col-lg-10">
                                                    <input id="taskbudget" name="taskbudget" type="text" placeholder="Enter Task Budget..." class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row justify-content-end">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary">Create Trainings</button>
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