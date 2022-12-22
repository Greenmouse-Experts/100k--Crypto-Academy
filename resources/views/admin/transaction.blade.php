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
                            <div class="row">
                                <div class="col filter-handle">
                                    <select class="form-control select-table-filter" data-table="order-table">
                                        <option value="">Filter by Status</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Declined">Declined</option>
                                        <option value="Failed">Failed</option>
                                      </select>
                                </div>
                                <div class="col">
                                    <select class="inputxlg form-control" id="rangeval">
                                        <option value="">Filter by Date Range</option>
                                        <option value="15">15 Days</option>
                                        <option value="30">30 Days</option>
                                        <option value="90">90 Days</option>
                                        <option value="365">Last Year</option>
                                        <option value="Single Date">Single Date</option>
                                        <option value="Custom Date Range">Custom Date Range</option>
                                    </select>

                                    <input id="selectDate" class="form-control" name="selectDate" type="text">
                                    <input id="selectDate2" class="form-control" name="selectDate" type="text">
                                </div>
                                <div class="col">
                                    <input type="search" class="form-control light-table-filter" data-table="order-table" placeholder="Search...">
                                </div>
                            </div>

                            <ul class="nav nav-tabs nav-tabs-custom">
                                <div class="mt-1"></div>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">List of Transactions</a>
                                </li>
                            </ul>

                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table class="table table-hover dt-responsive nowrap order-table paginated"  id="userTable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID No</th>
                                                <th>filter Date</th>
                                                <th>Type</th>
                                                <th>Date</th>
                                                <th>Currency</th>
                                                <th>Amount (USDT)</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="mainBody">
                                            @if ($trans->count() > 0)
                                                @foreach ($trans as $item)
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#100k{{$item->id}}</a></td>
                                                        <td>{{$item->created_at->format('m-d-y')}}</td>
                                                        <td>{{$item->type}}</td>
                                                        <td>{{$item->created_at->format('D M Y')}} at {{$item->created_at->format('h:m a')}}</td>
                                                        <td>Crypto</td>
                                                        <td>
                                                            {{number_format($item->amount, 2)}}
                                                        </td>
                                                        <td>
                                                            @if ($item->status == 1)
                                                                <span class="badge badge-soft-success font-size-11">Approved</span>
                                                            @elseif($item->status == 2)
                                                                <span class="badge badge-pill badge-soft-warning font-size-11">Pending</span>
                                                            @elseif($item->status == 3)
                                                                <span class="badge badge-pill badge-soft-danger font-size-11">Declined</span>
                                                            @else
                                                                <span class="badge bg-danger">Failed</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{route('transaction.details', $item->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                <i class="mdi mdi-eye-outline"></i>
                                                            </a>
                                                            {{-- <div class="modal fade transaction-detailModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
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
                                                                                <p class="mb-4">Withdrawal Trans HASH/ID: <span class="text-primary">{{$item->trans_hash}}</span></p>
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
                                                            </div> --}}
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

                                {{-- <div class="row justify-content-between align-items-center pag">
                                    {!! $trans->links('layouts.custom-paginate') !!}
                                    <!--end col-->
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <script>
            $(function(){
    // Initialise the inputs on page load:
                var today = new Date().toJSON().replace(/..(..)-(..)-(..).*/, '$2/$3/$1');
                $("#selectDate").datepicker({ dateFormat: 'mm/dd/yy' }).val(today).change(applyFilter);
                $("#selectDate2").datepicker({ dateFormat: 'mm/dd/yy' }).val(today).change(applyFilter);
                $("#rangeval").change(applyFilter);

                $.fn.date = function () {
                    return new Date((this.is(':input') ? this.val() : this.text()).replace(/\/(..)$/, '/20$1'));
                }

                function applyFilter() {
                    var filterType = $("#rangeval").val(),
                        start, end;
                    // Set the visibility of the two date fields:
                    $("#selectDate").toggle(["Single Date", "Custom Date Range"].indexOf(filterType) > -1);
                    $("#selectDate2").toggle(filterType === "Custom Date Range");
                    // Depending on the type of filter, set the range of dates (start, end):
                    if (filterType === "") {
                        // Show all: choose extreme dates
                        start = new Date('1000-01-01');
                        end = new Date('3000-01-01');
                    } else if (!parseInt(filterType)) {
                        // Use data entry:
                        start = $("#selectDate").date();
                        end = filterType === "Custom Date Range" ? $("#selectDate2").date() : start;
                    } else {
                        // Show last X days:
                        start = new Date();
                        start.setHours(0,0,0,0);
                        start.setDate(start.getDate() - parseInt(filterType));
                        end = new Date(); // today
                    }
                    // For each row: set the visibility depending on the date range
                    $(".mainBody tr").each(function () {
                        var date = $("td:nth-child(2)", this).date();
                        $(this).toggle(date >= start && date <= end);
                    });
                }
                applyFilter();


                $('table.paginated').each(function () {
                    var currentPage = 0;
                    var numPerPage = 15; // number of items
                    var $table = $(this);
                    //var $tableBd = $(this).find("tbody");

                    $table.bind('repaginate', function () {
                        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
                    });
                    $table.trigger('repaginate');
                    var numRows = $table.find('tbody tr').length;
                    var numPages = Math.ceil(numRows / numPerPage);
                    var $pager = $('<ul class="pagination pagination-rounded justify-content-center mt-4"></ul>');
                    for (var page = 0; page < numPages; page++) {
                        $('<li class="page-item page-link"><a href="javascript: void(0);" class="page-link"></a></li>').text(page + 1).bind('click', {
                            newPage: page
                        }, function (event) {
                            currentPage = event.data['newPage'];
                            $table.trigger('repaginate');
                            $(this).addClass('active').siblings().removeClass('active');
                        }).appendTo($pager).addClass('clickable');
                    }
                    if (numRows > numPerPage) {
                        $pager.insertAfter($table).find('li a.page-link:first').addClass('active');
                    }
                });// Execute also on page load
            });
        </script>
        <!-- End Page-content -->
        <script>
            (function(document) {
                'use strict';

                var LightTableFilter = (function(Arr) {

                    var _input;
                    var _select;

                    function _onInputEvent(e) {
                        _input = e.target;
                        var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                        Arr.forEach.call(tables, function(table) {
                            Arr.forEach.call(table.tBodies, function(tbody) {
                                Arr.forEach.call(tbody.rows, _filter);
                            });
                        });
                    }

                    function _onSelectEvent(e) {
                        _select = e.target;
                        var tables = document.getElementsByClassName(_select.getAttribute('data-table'));
                        Arr.forEach.call(tables, function(table) {
                            Arr.forEach.call(table.tBodies, function(tbody) {
                                Arr.forEach.call(tbody.rows, _filterSelect);
                            });
                        });
                    }

                    function _filter(row) {

                        var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                        row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';

                    }

                    function _filterSelect(row) {

                        var text_select = row.textContent.toLowerCase(), val_select = _select.options[_select.selectedIndex].value.toLowerCase();
                        row.style.display = text_select.indexOf(val_select) === -1 ? 'none' : 'table-row';

                    }

                    return {
                        init: function() {
                            var inputs = document.getElementsByClassName('light-table-filter');
                            var selects = document.getElementsByClassName('select-table-filter');
                            Arr.forEach.call(inputs, function(input) {
                                input.oninput = _onInputEvent;
                            });
                            Arr.forEach.call(selects, function(select) {
                    select.onchange  = _onSelectEvent;
                            });
                        }
                    };
                })(Array.prototype);

                document.addEventListener('readystatechange', function() {
                    if (document.readyState === 'complete') {
                        LightTableFilter.init();
                    }
                });

            })(document);
        </script>
        <script>
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".filter-table-data tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        </script>
    </div>
    <!-- end main content-->
    <script>
        var el = document.querySelector('.pag');
        el.innerHTML = el.innerHTML.replace(/&nbsp;/g,'');
    </script>
</div>


@endsection
