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
                                                            <a href="javascript: void(0);" class="badge badge-soft-success font-size-11 m-1">Completed</a>
                                                        @else
                                                            <span class="badge bg-danger">Failed</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal-{{$item->id}}">
                                                            View Details
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
                                                                            <p class="mb-4">Deposit Address: <span class="text-primary">{{$item->address}}</span></p>
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
            </div>
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
    @endsection
