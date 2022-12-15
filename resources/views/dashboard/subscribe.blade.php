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
                                <h5>Subscribe</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Transaction Histroy</h4>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            {{-- <th style="width: 20px;">
                                                <div class="form-check font-size-16 align-middle">
                                                    <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                                    <label class="form-check-label" for="transactionCheck01"></label>
                                                </div>
                                            </th> --}}
                                            <th class="align-middle">ID</th>
                                            <th class="align-middle">Date</th>
                                            <th class="align-middle">Type</th>
                                            <th class="align-middle">Total</th>
                                            <th class="align-middle">Payment Status</th>
                                            <th class="align-middle">Payment Method</th>
                                            <th class="align-middle">View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sub->count() > 0)
                                            @foreach ($sub as $item)
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
                                                    Noo Data Yet
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
                                {{ $sub->links('layouts.custom-paginate') }}
                            </div>
                            <!-- end table-responsive -->
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
<!-- subscribeModal -->
@if (Auth::user()->subscribe == 0)
    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="custom-validation call" method="POST" action="{{route('user.subscribe.post')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Accepted Currency</label>
                            <div>
                                <input type="text" class="form-control" required parsley-type="email" readonly value="USDT" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Chain Name</label>
                            <div>
                                <input type="text" class="form-control" required parsley-type="email" value="TRC-20" readonly />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount (USDT)</label>
                            <div>
                                <input type="text" class="form-control" readonly name="amount" parsley-type="amount" value="100" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Wallet</label>
                            <div>
                                <select name="wallet_type" parsley-type="wallet_type" id="" class="form-control">
                                    <option value="">Select Wallet</option>
                                    <option value="main_wallet">Main Wallet Balance</option>
                                    <option value="ref_bonus">Referral Bonus</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <button type="submit">
                                    Subscribe Now
                                </button>
                            </div>
                            <div class="col-md-4">
                                <button type="reset" style="background-color:red ;" class="btn btn-danger">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- end modal -->
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<!-- end modal -->
@endsection
