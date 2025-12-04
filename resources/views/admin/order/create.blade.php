@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Create New Order</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Order</li>
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
                        <h6 class="mb-0">New Order Details</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('storeorders') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="customer_name">User ID</label>
                                <input type="number" class="form-control" id="customer_name" name="customer_name" required>
                            </div>
                            <div class="form-group">
                                <label for="product">Product Name</label>
                                <input type="text" class="form-control" id="product" name="product" required>
                            </div>
                            <div class="form-group">
                                <label for="product">Order Number</label>
                                <input type="text" class="form-control" id="order" name="order" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Total Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Shipping Adress</label>
                                <input type="text" class="form-control" id="adress" name="adress" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Billing Adress</label>
                                <input type="text" class="form-control" id="ba" name="ba" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="pending">Select Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
