@section('title', 'Wishlist')
@section('description', 'Manage customer wishlists')
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Wishlist Management</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
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
                        <h6 class="mb-0">Customer Wishlists</h6>
                    </div>
                    <div class="card-body pt-0">
                        <div
                            class="support-form datatable-support-form d-flex justify-content-between align-items-center flex-wrap mb-30">
                            <div class="support-form__search">
                                <div class="support-order-search">
                                    <form action="#" class="support-order-search__form">
                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                        <input class="form-control border-0 box-shadow-none" type="search"
                                            placeholder="Search wishlists..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--wishlist">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">Customer Name</span></th>
                                            <th><span class="userDatatable-title">Product</span></th>
                                            <th><span class="userDatatable-title">Product Price</span></th>
                                            <th><span class="userDatatable-title">Current Price</span></th>
                                            <th><span class="userDatatable-title">Added Date</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>John Doe</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Premium Headphones
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    $89.99
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-success">$79.99</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    10 Nov 2024
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="View">
                                                            <i class="uil uil-eye"></i>
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
                                                    <h6>Jane Smith</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Wireless Mouse
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    $29.99
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-success">$24.99</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    08 Nov 2024
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="View">
                                                            <i class="uil uil-eye"></i>
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
                                                    <h6>Mike Johnson</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    USB-C Cable
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    $12.99
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-danger">$14.99</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    05 Nov 2024
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="View">
                                                            <i class="uil uil-eye"></i>
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
                                                    <h6>Sarah Williams</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Laptop Stand
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    $45.50
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-success">$39.99</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    03 Nov 2024
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="View">
                                                            <i class="uil uil-eye"></i>
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
                            <span class="fs-14">Showing 1 to 10 of 167 entries</span>
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
