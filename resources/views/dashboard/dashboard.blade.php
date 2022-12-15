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
            <div class="row">
                <div class="col-12">
                    <div class="start">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="start-main">
                                    <h1>Welcome, {{Auth::user()->first_name}} {{Auth::user()->last_name}} 👋</h1>
                                    <p>
                                        Get personal learning recommendations
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="runtime">
                        <h1>Total Members</h1>
                        <p>
                            {{$users->count()}}+
                        </p>
                        <h4>Members</h4>
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669119633/EProd%20Images/Iconn_t4lpdx.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="runtime">
                        <h1>Total Subscribers</h1>
                        <p>
                            {{$subscribe->count()}}
                        </p>
                        <h4>Subscribers</h4>
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669119628/EProd%20Images/Icon_pvw92p.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="runtime">
                        <h1>Total Balance</h1>
                        <p>
                            ${{number_format(Auth::user()->wallet->bal, 2)}}
                        </p>
                        <h4>wallet</h4>
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669119628/EProd%20Images/Iconnn_zk4z7z.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="runtime">
                        <h1>Video Guide</h1>
                        <p>
                            1
                        </p>
                        <h4>Guide Tutorial</h4>
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669119626/EProd%20Images/Group_8833_xn6qme.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="runtown">
                        <h1>
                            User Guide
                        </h1>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="calling">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122219/EProd%20Images/Image_fczwzs.png" draggable="false" alt="">

                        <div class="die mt-4">
                            <span>Guide</span> <span class="paint"><a href="{{route('user.guide')}}">View Guide</a></span>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="calling">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122592/EProd%20Images/Imagge_o56jat.png" draggable="false" alt="">
                        <p>
                            Trainings
                        </p>
                        <div class="die">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122591/EProd%20Images/Combined_Shape_jnlms8.png" draggable="false" alt="">
                            <span>20 Lessons (10h 5m)</span> <span class="paint">$150</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="calling">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122219/EProd%20Images/Imae_jvgt5e.png" draggable="false" alt="">
                        <p>
                            Trainings
                        </p>
                        <div class="die">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122591/EProd%20Images/Combined_Shape_jnlms8.png" draggable="false" alt="">
                            <span>10 Lessons (10h 5m)</span> <span class="paint">$100</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="calling">
                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669125140/EProd%20Images/Image_cnjzfq.png" draggable="false" alt="">
                        <p>
                            Trainings
                        </p>
                        <div class="die">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1669122591/EProd%20Images/Combined_Shape_jnlms8.png" draggable="false" alt="">
                            <span>10 Lessons (8h 6m)</span> <span class="paint">$200</span>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Latest Transaction</h4>
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
                                            <th class="align-middle">Order ID</th>
                                            <th class="align-middle">Type</th>
                                            <th class="align-middle">Date</th>
                                            <th class="align-middle">Amount (USDT)</th>
                                            <th class="align-middle">Payment Status</th>
                                            <th class="align-middle">Currency</th>
                                            <th class="align-middle">View Details</th>
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
                                                        <i class="fab fa-cc-mastercard me-1"></i> Crypto
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
                            <!-- end table-responsive -->
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
    <!-- End Page-content -->
    <!-- Transaction Modal -->
    <!-- end modal -->

    <!-- end modal -->
    <!-- subscribeModal -->
        <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-1">
                        <h4>Video Guide</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 all">
                                <iframe src="https://drive.google.com/file/d/1m_Gv8NS-KWcJ3rAo242yeMXAy-9Z7aby/preview" width="100%" height="300"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end modal -->
</div>
<!-- end main content-->
@endsection
