@section('title', 'Payments')
@section('description', 'Manage customer payments')
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Payments Management</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Payments</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-30">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Payment List</h6>
                    </div>
                    <div class="card-body pt-0">
                        <div
                            class="support-form datatable-support-form d-flex justify-content-between align-items-center flex-wrap mb-30">
                            <div class="support-form__search">
                                <div class="support-order-search">
                                    <form action="#" class="support-order-search__form">
                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                        <input class="form-control border-0 box-shadow-none" type="search"
                                            placeholder="Search payments..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                            <div class="support-form__input">
                                <div class="dm-select">
                                    <select name="filter" class="select-search form-control">
                                        <option value="">All Status</option>
                                        <option value="completed">Completed</option>
                                        <option value="pending">Pending</option>
                                        <option value="failed">Failed</option>
                                        <option value="refunded">Refunded</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--payment">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">ID</span></th>
                                            <th><span class="userDatatable-title">user ID</span></th>
                                            <th><span class="userDatatable-title">Order ID</span></th>
                                            <th><span class="userDatatable-title">Payment Method</span></th>
                                            <th><span class="userDatatable-title">Transaction ID</span></th>
                                            <th><span class="userDatatable-title">Amount</span></th>
                                            <th><span class="userDatatable-title">Status</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $payment)
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>{{$payment->id}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$payment->user_id}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$payment->order_id}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$payment->payment_method}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$payment->transaction_id}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$payment->amount}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$payment->status}}
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="View">
                                                            <i class="uil uil-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-30">
                            <span class="fs-14">Showing 1 to 10 of 128 entries</span>
                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
