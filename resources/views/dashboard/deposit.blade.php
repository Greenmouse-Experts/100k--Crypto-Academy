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
            <div class="start card">
                <div class="row">
                    <div class="col-md-12">
                        <div class="start-main">
                            <h4 class="card-title mb-4">Deposit</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body border-bottom">
                            <div class="float-end dropdown ms-2">

                            </div>

                            <div>
                                <div class="mb-4 me-3">
                                    <i class="mdi mdi-account-circle text-primary h1"></i>
                                </div>

                                <div>
                                    <h5 class="">{{Auth::user()->name}}</h5>
                                    <p class="text-muted mb-1">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-bottom">
                            <div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <p class="text-muted mb-2">Available Balance</p>
                                            <h5>${{number_format(Auth::user()->wallet->bal, 2)}}</h5>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-6">
                                        <div class="text-sm-end mt-4 mt-sm-0">
                                            <p class="text-muted mb-2">Since last month</p>
                                            <h5>0<span class="badge bg-success ms-1 align-bottom">+ 1.3 %</span></h5>

                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Deposits</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="border p-3 rounded mt-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                    <i class="bi bi-credit-card-fill"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-14 mb-0">USDT</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-muted mt-3">
                                                    <p>Subscribe</p>
                                                    @if (Auth::user()->subscribe == 1)
                                                        <h4 class="badge badge-pill badge-soft-success font-size-11">Subscribed</h4>
                                                    @else
                                                        <h4 class="badge bg-danger">Not Subscribe</h4>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-lg-6 align-self-end">
                                                <div class="float-end mt-3" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                    <b class="btn btn-outline-success">
                                                        Deposit Now
                                                    </b>
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
                            <h4 class="card-title mb-4">Recent Deposit</h4>
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
                                                <th class="align-middle">Currency</th>
                                                <th class="align-middle">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @if ($deposit->count() > 0)
                                            @foreach ($deposit as $item)
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
                                                                            <p class="mb-4">Deposit Address: <span class="text-primary">{{$item->address}}</span></p>
                                                                            <p class="mb-4">Deposit Trans Hash: <span class="text-primary">{{$item->trans_hash}}</span></p>
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
                                    {{ $deposit->links('layouts.custom-paginate') }}
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
<!-- Transaction Modal -->
<div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaction-detailModalLabel">Kindly Fill To Deposit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card">
                <div class="card-body">
                    <form class="custom-validation call" method="POST" action="{{route('user.deposit.post')}}">
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
                                <input type="text" class="form-control" required parsley-type="email" readonly value="TRC-20" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deposit Amount</label>
                            <div>
                                <input type="text" class="form-control" name="amount" required parsley-type="amount" placeholder="Enter Amount To Deposit" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deposit Address</label>
                            <div>
                                <input type="text" class="form-control" name="address" readonly parsley-type="address" value="{{json_decode($response)->address_in}}" placeholder="Enter Your Deposit Address" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Transaction Hash/ID</label>
                            <div>
                                <input type="text" class="form-control" name="trans_hash" required parsley-type="trans_hash" placeholder="Enter Your Deposit Transaction Hash" />
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            {{-- <img class="srt" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669306824/EProd%20Images/image_1_ywbvl5.png"> --}}
                            <img class="srt" src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=usdt%3A{{ json_decode($response)->address_in }}"
                                                        style="" title="Scan Me"
                                                        alt="{{ json_decode($response)->address_in }}">
                            {{-- <img src='data:image/png;base64,{{ json_decode($response)->qr_code }}' alt='Payment QR Code'/> --}}
                        </div>
                        <!-- <div class="mb-3">
                            <label class="form-label">Textarea</label>
                            <div>
                                <textarea required class="form-control" rows="3"></textarea>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-8">
                                <button type="submit">
                                    Deposit Now
                                </button>
                            </div>
                            <div class="col-md-4" >
                                <button type="reset" style="background-color:red ;" class="btn btn-danger">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-Success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- end modal -->
@endsection
