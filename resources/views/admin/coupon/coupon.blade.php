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
                                <li class="breadcrumb-item active" aria-current="page">Coupons Management</li>
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
                        <h6 class="mb-0">Coupons List</h6>
                        <div class="action-btn">
                            <a href="{{route('createcoupons')}}" class="btn btn-primary">
                                <i class="las la-plus m-2"></i>Create New Coupon</a>
                        </div>
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
                                            <th><span class="userDatatable-title">ID</span></th>
                                            <th><span class="userDatatable-title">Created By</span></th>
                                            <th><span class="userDatatable-title">Code</span></th>
                                            <th><span class="userDatatable-title">Dicount Amount</span></th>
                                            <th><span class="userDatatable-title">Description</span></th>
                                            <th><span class="userDatatable-title">Expiry Date</span></th>
                                            <th><span class="userDatatable-title">Usage Limit</span></th>
                                            <th><span class="userDatatable-title">Min Order Amount</span></th>
                                            <th><span class="userDatatable-title">Is Active</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupons as $coupon)
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>{{$coupon->id}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    Mirza Umar Islam
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$coupon->code}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$coupon->discount_amount}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$coupon->description}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$coupon->expiry_date}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$coupon->usage_limit}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$coupon->min_order_amount}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$coupon->is_active ? 'Active' : 'Inactive'}}
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
                                                        <a href="{{ route('deletecoupons', ['id' => $coupon->id]) }}" class="btn btn-info btn-sm" title="delete"
                                                            onclick=" return confirm('Are you sure you want to delete this coupon?'); ">
                                                            <i class="uil uil-trash"></i>
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
@endsection
