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
                        <div class="d-flex align-transs-start">
                            <div class="flex-grow-1 align-self-center">
                                <div class="text-muted">
                                    <h5>Transaction</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                    <p class="mb-2">Transaction id: <span class="text-primary">#100k{{$trans->id}}</span></p>
                        @if ($trans->type == 'Subscription')
                            <p class="mb-4">Wallet Type: <span class="text-primary">{{$trans->method}}</span></p>
                        @endif
                        @if ($trans->type == 'Deposit')
                            <p class="mb-2">Deposit Address: <span class="text-primary">{{$trans->address}}</span></p>
                            <p class="mb-4">Deposit Trans HASH/ID: <span class="text-primary">{{$trans->trans_hash}}</span></p>
                        @endif
                        @if ($trans->type == 'Withdraw')
                            <p class="mb-2">Withdrawal Address: <span class="text-primary">{{$trans->address}}</span></p>
                            <p class="mb-4">Withdrawal Trans HASH/ID: <span class="text-primary">{{$trans->trans_hash}}</span></p>
                        @endif
                        @if ($trans->status == 1)
                            <p class="mb-2">Status: <span class="badge bg-success font-size-11">Approved</span></p>

                        @elseif($trans->status == 2)
                            <p class="mb-2">Status: <span class="badge bg-warning font-size-11">Pending</span></p>
                        @elseif($trans->status == 3)
                            <p class="mb-2">Status: <span class="badge bg-warning font-size-11">Declined</span></p>

                        @else
                        <p class="mb-2">Status: <span class="badge bg-danger">Failed</span></p>

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
                                            {{$trans->type}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Amount:</h6>
                                        </td>
                                        <td>
                                            ${{number_format($trans->amount, 2)}}
                                        </td>
                                    </tr>
                                    @if ($trans->type == 'Deposit' AND $trans->status == 2)
                                        <tr>
                                            <td colspan="2">
                                                <span data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                                                    <a href="#jobActive-{{$trans->id}}" data-bs-toggle="modal" class="btn btn-sm bg-success"><i class="bi bi-check2"></i></i>
                                                    </a>
                                                </span>
                                                <div class="modal fade" id="jobActive-{{$trans->id}}" tabindex="-1" aria-labelledby="jobActiveLabel" aria-hidden="true">
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
                                                                    <form action="{{route('transaction.deposit.approve', $trans->id)}}" method="post">
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
                                            </td>
                                            <td>
                                                <span data-bs-toggle="tooltip" data-bs-placement="top" title="Decline">
                                                    <a href="#jobDelete-{{$trans->id}}" data-bs-toggle="modal" class="btn btn-sm bg-danger"><i class="bi bi-eye-slash"></i></a>
                                                </span>
                                                <div class="modal fade" id="jobDelete-{{$trans->id}}" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
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
                                                                    <form action="{{route('transaction.deposit.decline', $trans->id)}}" method="post">
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
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($trans->type == 'Withdraw' AND $trans->status == 2)
                                        <tr>
                                            <td colspan="2">
                                                <span data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                                                    <a href="#withActive-{{$trans->id}}" data-bs-toggle="modal" class="btn btn-md bg-success"><i class="bi bi-check2"></i></i>
                                                    </a>
                                                </span>
                                                <div class="modal fade" id="withActive-{{$trans->id}}" tabindex="-1" aria-labelledby="jobActiveLabel" aria-hidden="true">
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
                                                                    <form action="{{route('transaction.withdraw.approve', $trans->id)}}" method="post">
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
                                            </td>
                                            <td>
                                                <span data-bs-toggle="tooltip" data-bs-placement="top" title="Decline">
                                                    <a href="#withDelete-{{$trans->id}}" data-bs-toggle="modal" class="btn btn-sm bg-danger"><i class="bi bi-eye-slash"></i></a>
                                                </span>
                                                <div class="modal fade" id="withDelete-{{$trans->id}}" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
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
                                                                    <form action="{{route('transaction.withdraw.decline', $trans->id)}}" method="post">
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

@endsection
