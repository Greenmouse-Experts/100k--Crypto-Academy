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
                                            <th style="width: 20px;">
                                                <div class="form-check font-size-16 align-middle">
                                                    <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                                    <label class="form-check-label" for="transactionCheck01"></label>
                                                </div>
                                            </th>
                                            <th class="align-middle">ID</th>
                                            <th class="align-middle">Billing Name</th>
                                            <th class="align-middle">Date</th>
                                            <th class="align-middle">Total</th>
                                            <th class="align-middle">Payment Status</th>
                                            <th class="align-middle">Payment Method</th>
                                            <th class="align-middle">View Details</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribeModal -->
<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="custom-validation call" action="#">
                <div class="mb-3">
                        <label class="form-label">Names</label>
                        <div>
                            <input type="text" class="form-control" required parsley-type="email" placeholder="Enter your name" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Symbol</label>
                        <select class="form-select" id="validationCustom03" required>
                            <option selected disabled value="">Choose...</option>
                            <option>USDT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chain Name</label>
                        <div>
                            <input type="text" class="form-control" required parsley-type="email" placeholder="TRC-20" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <div>
                            <input type="text" class="form-control" required parsley-type="email" value="$100" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Wallet</label>
                        <div>
                            <input type="text" class="form-control" required parsley-type="email" />
                        </div>
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
<!-- end modal -->
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<!-- end modal -->
@endsection