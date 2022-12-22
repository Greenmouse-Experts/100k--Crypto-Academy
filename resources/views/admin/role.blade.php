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
