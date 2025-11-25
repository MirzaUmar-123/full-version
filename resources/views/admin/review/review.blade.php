@section('title', 'Reviews')
@section('description', 'Manage product reviews')
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Reviews Management</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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
                        <h6 class="mb-0">Customer Reviews</h6>
                    </div>
                    <div class="card-body pt-0">
                        <div
                            class="support-form datatable-support-form d-flex justify-content-between align-items-center flex-wrap mb-30">
                            <div class="support-form__search">
                                <div class="support-order-search">
                                    <form action="#" class="support-order-search__form">
                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                        <input class="form-control border-0 box-shadow-none" type="search"
                                            placeholder="Search reviews..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                            <div class="support-form__input">
                                <div class="dm-select">
                                    <select name="filter" class="select-search form-control">
                                        <option value="">All Ratings</option>
                                        <option value="5">5 Stars</option>
                                        <option value="4">4 Stars</option>
                                        <option value="3">3 Stars</option>
                                        <option value="2">2 Stars</option>
                                        <option value="1">1 Star</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--review">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">Product</span></th>
                                            <th><span class="userDatatable-title">Customer</span></th>
                                            <th><span class="userDatatable-title">Rating</span></th>
                                            <th><span class="userDatatable-title">Review Text</span></th>
                                            <th><span class="userDatatable-title">Status</span></th>
                                            <th><span class="userDatatable-title">Date</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>Premium Headphones</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    John Doe
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="color-warning">★★★★★</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Great quality and excellent sound...
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-success">Approved</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    15 Nov 2024
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
                                                    <h6>Wireless Mouse</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Jane Smith
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="color-warning">★★★★</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Very responsive and comfortable to use...
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-warning">Pending</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    14 Nov 2024
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
                                                    <h6>USB-C Cable</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Mike Johnson
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="color-warning">★★</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Cable broke after 2 weeks of use...
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-danger">Rejected</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    13 Nov 2024
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
                            <span class="fs-14">Showing 1 to 10 of 87 entries</span>
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
