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

            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start">

                                <div class="flex-grow-1 align-self-center">
                                    <div class="text-muted">
                                        <h5>My Wallet</h5>

                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-wallet me-1"></i> <span class="d-none d-sm-inline-block">Wallet Balance <i class="mdi mdi-chevron-down"></i></span></button>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                        <div class="dropdown-item-text">
                                            <div>
                                                <p class="text-muted mb-2">Available Balance</p>
                                                <h5 class="mb-0">${{number_format(Auth::user()->wallet->bal, 2)}}</h5>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="#">
                                            Ref Bonus : <span class="float-end">${{number_format(Auth::user()->wallet->ref_bonus, 2)}}</span>
                                        </a>
                                        <!--<a class="dropdown-item" href="#">
                                            ETH : <span class="float-end">0.04121</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            LTC : <span class="float-end">0.00356</span>
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item text-primary text-center" href="#">
                                            Learn more
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-3">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <i class="mdi mdi-account-circle text-primary h1"></i>
                                </div>

                                <div class="flex-grow-1">
                                    <div class="text-muted">
                                        <h5>{{Auth::user()->name}}</h5>
                                        <p class="mb-1">{{Auth::user()->email}}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="text-muted mb-2">Available Balance</p>
                                        <h5>${{number_format(Auth::user()->wallet->bal, 2)}}</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-end mt-4 mt-sm-0">
                                        <p class="text-muted mb-2">Refferal Bonus</p>
                                        <h5> ${{number_format(Auth::user()->wallet->ref_bonus, 2)}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body border-top">
                            <p class="text-muted mb-3"></p>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <div class="font-size-24 text-primary mb-2">
                                                <i class="bx bx-import"></i>
                                            </div>

                                            <h5>Deposit</h5>
                                            <p class="text-muted mb-2">Click To Deposit</p>

                                            <div class="mt-3">
                                                <a href="{{route('user.deposit')}}" class="btn btn-primary btn-sm w-md">Deposit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-4 mt-sm-0">
                                            <div class="font-size-24 text-primary mb-2">
                                                <i class="bx bx-wallet"></i>
                                            </div>
                                            <h5>Withdraw</h5>
                                            <p class="text-muted mb-2">Click To Withdraw</p>

                                            <div class="mt-3">
                                                <a href="{{route('user.withdraw')}}" class="btn btn-primary btn-sm w-md">Withdraw</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Recent Transcation</h4>

                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">Order ID</th>
                                                <th class="align-middle">Type</th>
                                                <th class="align-middle">Date</th>
                                                <th class="align-middle">Amount (USDT)</th>
                                                <th class="align-middle">Payment Status</th>
                                                <th class="align-middle">Currency</th>
                                                <th class="align-middle">Action</th>
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
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#100k{{$item->id}}</a> </td>
                                                    <td>{{$item->type}}</td>
                                                    <td>
                                                        {{$item->created_at->format('d M Y')}} at {{$item->created_at->format('h:m:s a')}}
                                                    </td>
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
                                                        Crypto
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
                                                                            <p class="mb-4">Billing Address: <span class="text-primary">{{$item->address}}</span></p>
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
                                    {{ $trans->links('layouts.custom-paginate') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- End Page-content -->
    <script>
        var el = document.querySelector('.pag');
        el.innerHTML = el.innerHTML.replace(/&nbsp;/g,'');
    </script>
</div>
<!-- end main content-->
@endsection
