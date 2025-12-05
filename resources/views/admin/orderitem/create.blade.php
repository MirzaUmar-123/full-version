@extends('layout.app')
@section('title', $title)
@section('description', $description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Create Order Items</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Order Items</li>
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
                        <h6 class="mb-0">Create New Order Items</h6>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('storeorderitems') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="order_id">Order ID</label>
                                <input type="number" class="form-control" id="order_id" name="order_id" required>
                            </div>
                            <div class="form-group">
                                <label for="product_id">Product ID</label>
                                <input type="number" class="form-control" id="product_id" name="product_id" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="form-group  ">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="total_price">Total Price</label>
                                <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" required>
                            </div>
                            <div class="d-flex  gap-2">
                                    <button class="btn btn-secondary">Cancel</button>
                                    <button class="btn btn-primary">Save Order Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
