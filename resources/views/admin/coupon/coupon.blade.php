@section('title', 'Coupons')
@section('description', 'Manage discount coupons')
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Coupons Management</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Coupons</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Discount Coupons</h6>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCouponModal">
                            <i class="uil uil-plus"></i> Add Coupon
                        </button>
                    </div>
                    <div class="card-body pt-0">
                        <div
                            class="support-form datatable-support-form d-flex justify-content-between align-items-center flex-wrap mb-30">
                            <div class="support-form__search">
                                <div class="support-order-search">
                                    <form action="#" class="support-order-search__form">
                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                        <input class="form-control border-0 box-shadow-none" type="search"
                                            placeholder="Search coupons..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                            <div class="support-form__input">
                                <div class="dm-select">
                                    <select name="filter" class="select-search form-control">
                                        <option value="">All Status</option>
                                        <option value="active">Active</option>
                                        <option value="expired">Expired</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--coupon">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">Coupon Code</span></th>
                                            <th><span class="userDatatable-title">Discount</span></th>
                                            <th><span class="userDatatable-title">Valid From</span></th>
                                            <th><span class="userDatatable-title">Valid To</span></th>
                                            <th><span class="userDatatable-title">Usage Count</span></th>
                                            <th><span class="userDatatable-title">Status</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>SAVE20</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    20% OFF
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    01 Jan 2024
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    31 Dec 2024
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-info">245</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-success">Active</span>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="Edit">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-danger btn-sm" title="Delete"
                                                            onclick="return confirm('Are you sure?');">
                                                            <i class="uil uil-trash"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>WINTER15</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    15% OFF
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    15 Dec 2023
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    31 Jan 2024
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-info">512</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-warning">Expired</span>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="Edit">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-danger btn-sm" title="Delete"
                                                            onclick="return confirm('Are you sure?');">
                                                            <i class="uil uil-trash"></i>
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
                            <span class="fs-14">Showing 1 to 10 of 28 entries</span>
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

    <!-- Add Coupon Modal -->
    <div class="modal fade" id="addCouponModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Coupon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="#">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="couponCode" class="form-label">Coupon Code</label>
                            <input type="text" class="form-control" id="couponCode" placeholder="e.g., SAVE20"
                                required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="discountType" class="form-label">Discount Type</label>
                                <select class="form-control" id="discountType" required>
                                    <option value="percentage">Percentage (%)</option>
                                    <option value="fixed">Fixed Amount ($)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="discountValue" class="form-label">Discount Value</label>
                                <input type="number" class="form-control" id="discountValue" placeholder="20" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validFrom" class="form-label">Valid From</label>
                                <input type="date" class="form-control" id="validFrom" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validTo" class="form-label">Valid To</label>
                                <input type="date" class="form-control" id="validTo" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Coupon</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
