@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@inject('uc', 'App\Http\Controllers\DashboardController')
@php
    $array = \App\Models\User::all();
    $usr = Auth::user()->id;
@endphp
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
                                <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">{{$uc->getdownCount($array,$usr)}}</a></h5>
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
                                <input class="form-control me-auto" type="text" value="{{URL::to('').'/ref/'.Auth::user()->affiliate_id}}" id="myInput">
                                <button type=" button" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy" class="btn btn-secondary" onclick="copyFunction()"><i class="mdi mdi-content-copy"></i></button>
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
                                    <h4 class="card-title mb-3">My Affiliates</h4>
                                    <div class="col-xxl-4 col-lg-6 float-end mb-3">
                                        <input type="search" class="form-control" id="myInpuAA2" placeholder="Search...">
                                    </div>
                                    <table id="sampleTableA" class="table paginated align-middle table-nowrap table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 170px;">Name</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Level</th>
                                                <th scope="col">Parent</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Joined Date</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            {!! $uc->getdownlines($array,$usr) !!}
                                        </tbody>
                                    </table>
                                </div>

                                {{-- <div class="row">
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
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyFunction() {
  // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        }
    </script>
    <script>
        $(document).ready(function(){
            $("#myInpuAA2").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $('td', 'table').each(function (i) {

            });
  // for demo  //


            $('table.paginated').each(function () {
                var currentPage = 0;
                var numPerPage = 10; // number of items
                var $table = $(this);
                //var $tableBd = $(this).find("tbody");

                $table.bind('repaginate', function () {
                    $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
                });
                $table.trigger('repaginate');
                var numRows = $table.find('tbody tr').length;
                var numPages = Math.ceil(numRows / numPerPage);
                var $pager = $('<ul class="pagination pagination-rounded justify-content-center mt-4"></ul>');
                for (var page = 0; page < numPages; page++) {
                    $('<li class="page-item page-link"><a href="javascript: void(0);" class="page-link"></a></li>').text(page + 1).bind('click', {
                        newPage: page
                    }, function (event) {
                        currentPage = event.data['newPage'];
                        $table.trigger('repaginate');
                        $(this).addClass('active').siblings().removeClass('active');
                    }).appendTo($pager).addClass('clickable');
                }
                if (numRows > numPerPage) {
                    $pager.insertAfter($table).find('li a.page-link:first').addClass('active');
                }
            });
        });
    </script>
</div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@endsection
