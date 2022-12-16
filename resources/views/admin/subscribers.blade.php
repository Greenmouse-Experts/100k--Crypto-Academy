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
                                    <h5>View Subscribers</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 card-title flex-grow-1">Subscriber Lists</h5>
                                    <div class="col-xxl-2 col-lg-4 me-2">
                                        <input type="search" class="form-control " id="searchInput" placeholder="Search for ...">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">UserID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date Suscribe</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Payment Status</th>
                                                <th scope="col">Payment Method</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="myTable">
                                            @if ($users->count() > 0)
                                                @foreach ($users as $item)
                                                    <tr>
                                                        <th scope="row">{{$item->id}}</th>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->email}}</td>
                                                        <td>{{$item->updated_at->format('d M Y')}} at {{$item->updated_at->format('h:m:s a')}}</td>
                                                        <td>$100</td>
                                                        <td>Approved</td>
                                                        <td>USDT</td>
                                                        <td>
                                                            @if ($item->status == 'active')
                                                                <span class="badge bg-success">Active</span>
                                                            @else
                                                                <span class="badge bg-danger">Inactive</span>
                                                            @endif

                                                        </td>
                                                        <td>
                                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Activate">
                                                                    <a href="#jobActive-{{$item->id}}" data-bs-toggle="modal" class="btn btn-sm btn-soft-success"><i class="bi bi-check2"></i></i>
                                                                    </a>
                                                                </li>
                                                                <div class="modal fade" id="jobActive-{{$item->id}}" tabindex="-1" aria-labelledby="jobActiveLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body px-4 text-center">
                                                                                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                <div class="avatar-sm mb-4 mx-auto">
                                                                                    <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                                                                                        <i class="mdi mdi-trash-can-outline"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-muted font-size-16 mb-4">Are you sure you want to activate this Subscriber.</p>

                                                                                <div class="hstack gap-2 justify-content-center mb-0">
                                                                                    <form action="{{route('users.change_type', $item->id)}}" method="post">
                                                                                    @csrf
                                                                                        <input type="hidden" name="status" value="active">
                                                                                        <button type="submit" class="btn btn-success">Activate Now</button>
                                                                                    </form>

                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Deactivate">
                                                                    <a href="#jobDelete-{{$item->id}}" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-eye-slash"></i></a>
                                                                </li>
                                                                <div class="modal fade" id="jobDelete-{{$item->id}}" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body px-4 text-center">
                                                                                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                <div class="avatar-sm mb-4 mx-auto">
                                                                                    <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                                                                                        <i class="mdi mdi-trash-can-outline"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="text-muted font-size-16 mb-4">Are you sure you want to permanently deactivate this Subscriber.</p>

                                                                                <div class="hstack gap-2 justify-content-center mb-0">
                                                                                    <form action="{{route('users.change_type', $item->id)}}" method="post">
                                                                                    @csrf
                                                                                        <input type="hidden" name="status" value="inactive">
                                                                                        <button type="submit" class="btn btn-danger">Deactivate Now</button>
                                                                                    </form>

                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-between align-items-center pag">
                                    {{ $users->links('layouts.custom-paginate') }}
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>
        </div>
        <!-- End Page-content -->
        <script>
            $(document).ready(function(){
                $(".searchInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
    </div>
    <script>
        var el = document.querySelector('.pag');
        el.innerHTML = el.innerHTML.replace(/&nbsp;/g,'');
    </script>
    <!-- end main content-->
</div>
<!-- Modal -->

@endsection
