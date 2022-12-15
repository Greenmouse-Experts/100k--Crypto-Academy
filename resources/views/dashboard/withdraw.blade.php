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
                                <h5>Withdraw</h5>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-wallet me-1"></i> <span class="d-none d-sm-inline-block">Wallet Balance <i class="mdi mdi-chevron-down"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                <div class="dropdown-item-text">
                                    <div>
                                        <p class="text-muted mb-2">Available Balance</p>
                                        <h5 class="mb-0">$ 1483</h5>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#">
                                    USDT : <span class="float-end">1.02356</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Withdrawal Information</h4>
                    <p class="card-title-desc">Fill all information below to complete your Withdrawal</p>

                    <form method="POST" action="{{route('user.withdraw.post')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Wallet</label>
                                    <div>
                                        <select required name="wallet_type" id="" class="form-control">
                                            <option value="">Select Wallet</option>
                                            <option value="main_wallet">Main Wallet Balance</option>
                                            <option value="ref_bonus">Referral Bonus</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Amount to withdraw</label>
                                    <input type="tel" required name="amount" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label>Withdraw Address</label>
                                    <input type="text" required name="address" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Chain name</label>
                                    <input type="text" class="form-control" readonly value="TRC-20">
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <input type="password" required name="password" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Confirm Withdrawal</button>
                                <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Recent Withdrawal</h4>
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">Order ID</th>
                                                <th class="align-middle">Date</th>
                                                <th class="align-middle">Type</th>
                                                <th class="align-middle">Amount (USDT)</th>
                                                <th class="align-middle">Payment Status</th>
                                                <th class="align-middle">Method</th>
                                                <th class="align-middle">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if ($with->count() > 0)
                                            @foreach ($with as $item)
                                                <tr>
                                                    {{-- <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                                            <label class="form-check-label" for="transactionCheck02"></label>
                                                        </div>
                                                    </td> --}}
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#100k{{$item->id}}</a> </td>

                                                    <td>
                                                        {{$item->created_at->format('d M Y')}} at {{$item->created_at->format('h:m:s a')}}
                                                    </td>
                                                    <td>{{$item->type}}</td>
                                                    <td>
                                                        ${{number_format($item->amount, 2)}}
                                                    </td>
                                                    <td>
                                                        @if ($item->status == 1)
                                                            <span class="badge badge-pill badge-soft-success font-size-11">Successful</span>
                                                        @else
                                                            <span class="badge bg-danger">Failed</span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        {{$item->method}}
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
                                                                        @else
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
                                <div class="row justify-content-between align-items-center pag">
                                    {{ $with->links('layouts.custom-paginate') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        var el = document.querySelector('.pag');
        el.innerHTML = el.innerHTML.replace(/&nbsp;/g,'');
    </script>
</div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<!-- end modal -->
@endsection
