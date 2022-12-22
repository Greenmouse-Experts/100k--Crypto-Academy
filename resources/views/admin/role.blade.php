@extends('layouts.admin-frontend')

@section('page-content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1 align-self-center">
                                <div class="text-muted">
                                    <h5>Sub Admin</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="text-align: right">
                    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Sub Admin
                      </button>

                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Joined Date</th>
                                            <th scope="col">Status</th>
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
                                                                {{$item->name[0]}}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">{{$item->name}}</a></h5>
                                                        {{-- <p class="text-muted mb-0">UI/UX Designer</p> --}}
                                                    </td>
                                                    <td>{{$item->email}}</td>
                                                    <td>
                                                        <div>
                                                            <a href="javascript: void(0);" class="font-size-11 m-1">{{$item->created_at->format('D d, M Y')}} at {{$item->created_at->format('h:m a')}}</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($item->is_admin == 1)
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
                                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body px-4 text-center">
                                                                            <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <div class="avatar-sm mb-4 mx-auto">
                                                                                <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                                                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted font-size-16 mb-4">Are you sure you want to activate this Sub Admin.</p>

                                                                            <div class="hstack gap-2 justify-content-center mb-0">
                                                                                <form action="{{route('admin.change_type', $item->id)}}" method="post">
                                                                                @csrf
                                                                                    <input type="hidden" name="status" value="1">
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
                                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body px-4 text-center">
                                                                            <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <div class="avatar-sm mb-4 mx-auto">
                                                                                <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                                                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted font-size-16 mb-4">Are you sure you want to permanently deactivate this Sub Admin.</p>

                                                                            <div class="hstack gap-2 justify-content-center mb-0">
                                                                                <form action="{{route('admin.change_type', $item->id)}}" method="post">
                                                                                @csrf
                                                                                    <input type="hidden" name="status" value="2">
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
                                            <tr>
                                                <td>

                                                </td>
                                                <td>

                                                </td>
                                                <td>No Data Yet</td>
                                                <td>

                                                </td>
                                                <td>

                                                </td>
                                                <td>
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
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('admin.create')}}" method="post">
                @csrf
                <div class="form-group mt-2">
                    <label for="">Name:</label>
                    <input type="text" required name="name" id="" class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group mt-2">
                    <label for="">Email:</label>
                    <input type="email" required name="email" id="" class="form-control" placeholder="Enter Email">
                </div>
                <button class="btn btn-primary mt-4" type="submit">Create Admin</button>
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
<script>
    var el = document.querySelector('.pag');
    el.innerHTML = el.innerHTML.replace(/&nbsp;/g,'');
</script>
@endsection
