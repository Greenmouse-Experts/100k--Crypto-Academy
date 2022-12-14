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
                                    <h5>View All Members</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 70px;">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Joined Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($users->count() > 0)
                                                @foreach ($users as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle">
                                                                    D
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">{{$item->name}}</a></h5>
                                                            {{-- <p class="text-muted mb-0">UI/UX Designer</p> --}}
                                                        </td>
                                                        <td>{{$item->email}}</td>
                                                        <td>
                                                            <a href="javascript: void(0);" class="badge badge-soft-primary font-size-11 m-1">Subscribed</a>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a href="javascript: void(0);" class="font-size-11 m-1">{{$item->created_at->format('D M Y')}} at {{$item->created_at->format('h:m a')}}</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                    <a href="{{route('admin.viewmembers', $item->id)}}" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-eye-outline"></i></a>
                                                                </li>
                                                                {{-- <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                    <a href="#subscriberedit" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                    <a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                                </li>
                                                            </ul> --}}
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            @else
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <img class="rounded-circle avatar-xs" src="{{URL::asset('dash/assets/images/users/avatar-2.jpg')}}" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Frank Kirk</a></h5>
                                                        {{-- <p class="text-muted mb-0">Frontend Developer</p> --}}
                                                    </td>
                                                    <td>frank@skote.com</td>
                                                    <td>
                                                        <div>
                                                            <a href="javascript: void(0);" class="badge badge-soft-danger font-size-11 m-1">Not Subscribe</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="javascript: void(0);" class="font-size-11 m-1">22 oct 2022 at 12:00am</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <a href="{{route('admin.viewmembers')}}" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-eye-outline"></i></a>
                                                            </li>
                                                            {{-- <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                <a href="#subscriberedit" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                <a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                            </li> --}}
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-between align-items-center pag">
                                    {{ $users->links('layouts.custom-paginate') }}
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
<script>
    var el = document.querySelector('.pag');
    el.innerHTML = el.innerHTML.replace(/&nbsp;/g,'');
</script>
@endsection
