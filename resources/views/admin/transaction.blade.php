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
                                    <h5>Transaction</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    {{-- <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-4">
                                        <i class="mdi mdi-account-circle text-primary h1"></i>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="text-muted">
                                            <h5>Hamzat</h5>
                                            <p class="mb-1">greenmouse@gmail.com</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <p class="text-muted mb-2">Available Balance</p>
                                            <h5>$ 500</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end mt-4 mt-sm-0">
                                            <p class="text-muted mb-2">Since last month</p>
                                            <h5>+ $ 100.35 <span class="badge bg-success ms-1 align-bottom">+ 1.3 %</span></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body border-top">
                                <p class="text-muted mb-3"></p>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div>
                                                <div class="font-size-24 text-primary mb-2">
                                                    <i class="bx bx-import"></i>
                                                </div>

                                                <h5>Deposit</h5>
                                                <p class="text-muted mb-2">${{$tcredit}}</p>
                                                <div class="mt-3">
                                                    <a href="javascript: void(0);" class="btn btn-primary btn-sm w-md">Total Deposit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <div class="font-size-24 text-primary mb-2">
                                                    <i class="bx bx-import"></i>
                                                </div>

                                                <h5>Balance</h5>
                                                <p class="text-muted mb-2">${{$tcredit - $tdebit}}</p>
                                                <div class="mt-3">
                                                    <a href="javascript: void(0);" class="btn btn-primary btn-sm w-md">Total Balance</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mt-4 mt-sm-0">
                                                <div class="font-size-24 text-primary mb-2">
                                                    <i class="bx bx-wallet"></i>
                                                </div>
                                                <h5>Withdraw</h5>
                                                <p class="text-muted mb-2">${{$tdebit}}</p>

                                                <div class="mt-3">
                                                    <a href="javascript: void(0);" class="btn btn-primary btn-sm w-md">Total Withdraw</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">Activities</h4>
                            {{-- <div class="col-xxl-2 col-lg-4 float-end">
                                <input type="search" class="form-control" id="searchInput" placeholder="Search for ...">

                            </div> --}}
                            <ul class="nav nav-tabs nav-tabs-custom">
                                <div class="mt-1"></div>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">List of Transactions</a>
                                </li>
                            </ul>

                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID No</th>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Currency</th>
                                                <th>Amount (USDT)</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($trans->count() > 0)
                                                @foreach ($trans as $item)
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#100k{{$item->id}}</a></td>
                                                        <td>{{$item->created_at->format('D M, Y')}}</td>
                                                        <td>{{$item->type}}</td>
                                                        <td>Crypto</td>
                                                        <td>
                                                            {{number_format($item->amount, 2)}}
                                                        </td>
                                                        <td>
                                                            @if ($item->status == 1)
                                                                <span class="badge bg-success">Successful</span>
                                                            @else
                                                                <span class="badge bg-danger">Failed</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal-{{$item->id}}">
                                                                <i class="mdi mdi-eye-outline"></i>
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
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>No Data Yet</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>

                                <div class="row justify-content-between align-items-center pag">
                                    {!! $trans->links('layouts.custom-paginate') !!}
                                    <!--end col-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
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
