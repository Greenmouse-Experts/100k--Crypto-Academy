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
                                <h5>View Training</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="runtown">
                        <h1>
                            Available Trainings
                        </h1>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="calling">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122219/EProd%20Images/Image_fczwzs.png" draggable="false" alt="">
                        <p>
                            Training
                        </p>
                        <div class="die">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122591/EProd%20Images/Combined_Shape_jnlms8.png" draggable="false" alt="">
                            <span>15 Lessons (10h 5m)</span> <span class="paint">$140</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="calling">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122592/EProd%20Images/Imagge_o56jat.png" draggable="false" alt="">
                        <p>
                            Trainings
                        </p>
                        <div class="die">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122591/EProd%20Images/Combined_Shape_jnlms8.png" draggable="false" alt="">
                            <span>20 Lessons (10h 5m)</span> <span class="paint">$150</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="calling">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122219/EProd%20Images/Imae_jvgt5e.png" draggable="false" alt="">
                        <p>
                            Trainings
                        </p>
                        <div class="die">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122591/EProd%20Images/Combined_Shape_jnlms8.png" draggable="false" alt="">
                            <span>10 Lessons (10h 5m)</span> <span class="paint">$100</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="calling">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669125140/EProd%20Images/Image_cnjzfq.png" draggable="false" alt="">
                        <p>
                            Trainings
                        </p>
                        <div class="die">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122591/EProd%20Images/Combined_Shape_jnlms8.png" draggable="false" alt="">
                            <span>10 Lessons (8h 6m)</span> <span class="paint">$200</span>
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