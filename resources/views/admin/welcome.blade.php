@extends('layouts.admin-frontend')

@section('page-content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="start">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="start-main">
                                    <h1>Admin Dashboard</h1>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="runtime">
                            <h1>Total number of Members</h1>
                            <p>
                                {{$users->count()}}+
                            </p>
                            <h4>Members</h4>
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669119633/EProd%20Images/Iconn_t4lpdx.png" draggable="false" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="runtime">
                            <h1>Total number of Subscribers</h1>
                            <p>
                                {{$subscriber->count()}}
                            </p>
                            <h4>Subscribers</h4>
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669643778/EProd%20Images/Group_8868_vh92i8.png" draggable="false" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="runtime">
                            <h1>Total number of Unsubscribers</h1>
                            <p>
                                {{$unSubscriber->count()}}
                            </p>
                            <h4>Unsubscribers</h4>
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669119628/EProd%20Images/Icon_pvw92p.png" draggable="false" alt="">
                        </div>
                    </div>
                </div>
                @if(Auth::guard('admin')->user()->type == 'super admin')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-hover">
                                        <h4 class="mb-3">Member Latest Transaction</h4>
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 70px;">OrderID</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Billing Email</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Activity</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if ($trans->count() > 0)
                                            @foreach ($trans as $item)
                                                <tr>
                                                    {{-- <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                                            <label class="form-check-label" for="transactionCheck02"></label>
                                                        </div>
                                                    </td> --}}
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold"></a>
                                                            <span class="">
                                                                #100k{{$item->id}}
                                                            </span>
                                                    </td>
                                                    <td>
                                                        {{$item->created_at->format('d M Y')}} at {{$item->created_at->format('h:m:s a')}}
                                                    </td>
                                                    <td>{{\App\Models\User::where('id', $item->user_id)->first()->name ?? ''}}</td>

                                                    <td>
                                                        {{number_format($item->amount, 2)}} USDT
                                                    </td>
                                                    <td>
                                                        {{$item->type}}
                                                    </td>
                                                    <td>
                                                        @if ($item->status == 1)
                                                            <span class="badge badge-pill badge-soft-success font-size-11">Approved</span>
                                                        @elseif($item->status == 2)
                                                            <span class="badge badge-pill badge-soft-warning font-size-11">Pending</span>
                                                        @elseif($item->status == 3)
                                                            <span class="badge badge-pill badge-soft-danger font-size-11">Declined</span>
                                                        @else
                                                            <span class="badge bg-danger">Failed</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal-{{$item->id}}">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                        <div class="modal fade transaction-detailModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p class="mb-2">Transaction id: <span class="text-primary">#100k{{$item->id}}</span></p>
                                                                        @if ($item->type == 'Subscription')
                                                                            <p class="mb-4">Wallet Type: <span class="text-primary">{{$item->method}}</span></p>
                                                                        @endif
                                                                        @if ($item->type == 'Deposit')
                                                                            <p class="mb-2">Deposit Address: <span class="text-primary">{{$item->address}}</span></p>
                                                                            <p class="mb-4">Deposit Trans HASH/ID: <span class="text-primary">{{$item->trans_hash}}</span></p>
                                                                        @endif
                                                                        @if ($item->type == 'Withdraw')
                                                                            <p class="mb-4">Withdrawal Address: <span class="text-primary">{{$item->address}}</span></p>
                                                                        @endif

                                                                        <div class="table-responsive">
                                                                            <table class="table align-middle table-nowrap">

                                                                                <tbody>

                                                                                    <tr>
                                                                                        <td colspan="2">
                                                                                            <h6 class="m-0 text-right">Chain:</h6>
                                                                                        </td>
                                                                                        <td>
                                                                                            TRC20
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2">
                                                                                            <h6 class="m-0 text-right">Type:</h6>
                                                                                        </td>
                                                                                        <td>
                                                                                            {{$item->type}}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2">
                                                                                            <h6 class="m-0 text-right">Amount:</h6>
                                                                                        </td>
                                                                                        <td>
                                                                                            ${{number_format($item->amount, 2)}}
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if ($item->type == 'Deposit' AND $item->status == 2)

                                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                                                                <a href="#jobActive-{{$item->id}}" data-bs-toggle="modal" class="btn btn-sm btn-soft-success"><i class="bi bi-check2"></i></i>
                                                                </a>
                                                            </span>
                                                            <div class="modal fade" id="jobActive-{{$item->id}}" tabindex="-1" aria-labelledby="jobActiveLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body px-5 text-center">
                                                                            <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <div class="avatar-sm mb-4 mx-auto">
                                                                                <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                                                                                    <i class="mdi mdi-check"></i>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted font-size-16 mb-4">Are you sure you want to Approve this Transaction?.</p>

                                                                            <div class="hstack gap-2 justify-content-center mb-0">
                                                                                <form action="{{route('transaction.deposit.approve', $item->id)}}" method="post">
                                                                                @csrf
                                                                                    <input type="hidden" name="status" value="active">
                                                                                    <button type="submit" class="btn btn-success">Approve Now</button>
                                                                                </form>

                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Decline">
                                                                <a href="#jobDelete-{{$item->id}}" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-eye-slash"></i></a>
                                                            </span>
                                                            <div class="modal fade" id="jobDelete-{{$item->id}}" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body px-4 text-center">
                                                                            <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <div class="avatar-sm mb-4 mx-auto">
                                                                                <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                                                                                    <i class="mdi mdi-cancel"></i>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted font-size-16 mb-4">Are you sure you want to Decline this deposit transaction.</p>

                                                                            <div class="hstack gap-2 justify-content-center mb-0">
                                                                                <form action="{{route('transaction.deposit.decline', $item->id)}}" method="post">
                                                                                @csrf
                                                                                    <input type="hidden" name="status" value="inactive">
                                                                                    <button type="submit" class="btn btn-danger">Decline Now</button>
                                                                                </form>

                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endif
                                                        @if ($item->type == 'Withdraw' AND $item->status == 2)

                                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                                                                <a href="#withActive-{{$item->id}}" data-bs-toggle="modal" class="btn btn-sm btn-soft-success"><i class="bi bi-check2"></i></i>
                                                                </a>
                                                            </span>
                                                            <div class="modal fade" id="withActive-{{$item->id}}" tabindex="-1" aria-labelledby="jobActiveLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body px-5 text-center">
                                                                            <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <div class="avatar-sm mb-4 mx-auto">
                                                                                <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                                                                                    <i class="mdi mdi-check"></i>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted font-size-16 mb-4">Are you sure you want to Approve this Withdrawal Transaction?.</p>

                                                                            <div class="gap-2 justify-content-center mb-0">
                                                                                <form action="{{route('transaction.withdraw.approve', $item->id)}}" method="post">
                                                                                @csrf
                                                                                    <div class="form-group">
                                                                                        <label for="">Transaction Hash/ID</label>
                                                                                        <input type="" class="form-control col-md-12 mb-4" required name="trans_hash" value="" placeholder="Transfer Transaction Hash">
                                                                                    </div>

                                                                                    <button type="submit" class="btn btn-success">Approve Now</button>
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                </form>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Decline">
                                                                <a href="#withDelete-{{$item->id}}" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="bi bi-eye-slash"></i></a>
                                                            </span>
                                                            <div class="modal fade" id="withDelete-{{$item->id}}" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body px-4 text-center">
                                                                            <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <div class="avatar-sm mb-4 mx-auto">
                                                                                <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                                                                                    <i class="mdi mdi-cancel"></i>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted font-size-16 mb-4">Are you sure you want to Decline this withdrawal transaction.</p>

                                                                            <div class="hstack gap-2 justify-content-center mb-0">
                                                                                <form action="{{route('transaction.withdraw.decline', $item->id)}}" method="post">
                                                                                @csrf
                                                                                    <input type="hidden" name="status" value="inactive">
                                                                                    <button type="submit" class="btn btn-danger">Decline Now</button>
                                                                                </form>

                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td>

                                                </td>
                                                <td> </td>
                                                <td></td>
                                                <td>
                                                    No Data Yet
                                                </td>
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

                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <h5>Search Subscriber</h5>
                        <form action="{{route('subscriber.search')}}" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="email" class="form-control" name='email' placeholder="Enter subscriber email to search">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>

                        @if (\Session::has('search'))
                            @if (\Session::get('search') == 'no')
                                <h6 style="
                                font-size: 17px;
                                text-align: center;
                                text-transform: capitalize;
                                margin-top: 20px;
                                color: red;
                            ">User is not subscribed</h6>
                            @else
                                <h6 style="
                                font-size: 17px;
                                text-align: center;
                                text-transform: capitalize;
                                margin-top: 20px;
                                color: green;
                            ">User is subscribed</h6>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
    @endsection
