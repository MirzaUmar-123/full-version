@section('title', 'Transactions')
@section('description', 'Manage financial transactions')
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Transactions Management</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Transactions</li>
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
                        <h6 class="mb-0">Transaction History</h6>
                    </div>
                    <div class="card-body pt-0">
                        <div
                            class="support-form datatable-support-form d-flex justify-content-between align-items-center flex-wrap mb-30">
                            <div class="support-form__search">
                                <div class="support-order-search">
                                    <form action="#" class="support-order-search__form">
                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                        <input class="form-control border-0 box-shadow-none" type="search"
                                            placeholder="Search transactions..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                            <div class="support-form__input">
                                <div class="dm-select">
                                    <select name="filter" class="select-search form-control">
                                        <option value="">All Types</option>
                                        <option value="debit">Debit</option>
                                        <option value="credit">Credit</option>
                                        <option value="refund">Refund</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--transaction">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">Transaction ID</span></th>
                                            <th><span class="userDatatable-title">Reference</span></th>
                                            <th><span class="userDatatable-title">Type</span></th>
                                            <th><span class="userDatatable-title">Amount</span></th>
                                            <th><span class="userDatatable-title">Balance</span></th>
                                            <th><span class="userDatatable-title">Description</span></th>
                                            <th><span class="userDatatable-title">Date</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>TXN-2024-001</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    ORD-001
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-success">Credit</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    +$245.99
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    $50,245.99
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Order payment received
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    18 Nov 2024
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
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>TXN-2024-002</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    REF-001
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-danger">Refund</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    -$50.00
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    $50,195.99
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Refund processed
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    17 Nov 2024
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
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>TXN-2024-003</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    ORD-002
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-success">Credit</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    +$512.45
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    $50,708.44
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Order payment received
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    16 Nov 2024
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
                                </table>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-30">
                            <span class="fs-14">Showing 1 to 10 of 523 entries</span>
                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
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
