@section('title', 'Order Items')
@section('description', 'Manage order items')
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Order Items Management</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order Items Management</li>
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
                        <h6 class="mb-0">Order Items List</h6>
                    <div class="action-btn">
                            <a href="{{route('createorderitems')}}" class="btn btn-primary">
                                <i class="las la-plus m-2"></i>Create New Order Items</a>
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
                                            placeholder="Search items..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--orderitem">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">ID</span></th>
                                            <th><span class="userDatatable-title">Order ID</span></th>
                                            <th><span class="userDatatable-title">Product ID</span></th>
                                            <th><span class="userDatatable-title">Price</span></th>
                                            <th><span class="userDatatable-title">Quantity</span></th>
                                            <th><span class="userDatatable-title">Total Price</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderitems as $orderitem)
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>{{$orderitem->id}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>{{$orderitem->order_id}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>{{$orderitem->product_id}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$orderitem->price}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$orderitem->quantity}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$orderitem->total}}
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex  gap-2">
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
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-30">
                            <span class="fs-14">Showing 1 to 10 of 342 entries</span>
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
