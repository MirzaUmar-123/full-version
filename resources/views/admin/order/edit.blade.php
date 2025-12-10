@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Edit Order</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit order</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <form  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="userid">User ID</label>
                <input type="number" class="form-control" id="userid" name="userid" value="{{ old('userid', $order->user_id) }}" required>
            </div>
            <div class="form-group">
                <label for="status">Order Number</label>
                <input type="text" class="form-control" id="ordernumber" name="ordernumber" value="{{ old('order_number', $order->order_number) }}" required>
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
            <div class="form-group">
                <label for="totalamount">Total Amount</label>
                <input type="number" class="form-control" id="totalamount" name="totalamount" value="{{ old('total_amount', $order->total_amount) }}" required>
            </div>
            <div class="form-group">
                                <label for="paymentmethod">Payment Method</label>
                                <select class="form-control" id="paymentmethod" name="paymentmethod" required>
                                    <option value="selectpaymentmethod">Select payment Mathod</option>
                                    <option value="paypal">Paypal</option>
                                    <option value="creditcard">Credit Card</option>
                                    <option value="debitcard">Debit Card</option>
                                </select>
                            </div>
            <div class="form-group">
                <label for="shippingaddress">Shipping Address</label>
                <input type="text" class="form-control" id="shippingaddress" name="shippingaddress" value="{{ old('shipping_address', $order->shipping_address) }}" required>
            </div>
            <div class="form-group">
                <label for="billingaddress">Billing Address</label>
                <input type="text" class="form-control" id="billingaddress" name="billingaddress" value="{{ old('billing_address', $order->billing_address) }}" required>
            </div>
            <div class="d-flex  gap-2">
                <button class="btn btn-secondary">Cancel</button>
                <button class="btn btn-primary">Save </button>
            </div>
        </form>
    </div>
@endsection
