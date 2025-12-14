@extends('layout.app')
@section('title', $title)
@section('description', $description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Edit Payments</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Payment</li>
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
                        <h6 class="mb-0">Edit Payment</h6>
                    </div>
                    <div class="card-body pt-0">
                        <form>
                            <div class="form-group">
                                <label for="userid">User ID</label>
                                <input type="number" class="form-control" id="userid" value="{{ $payment->user_id }}">
                            </div>
                            <div class="form-group">
                                <label for="orderid">Order ID</label>
                                <input type="number" class="form-control" id="orderid" value="{{ $payment->order_id }}">
                            </div>
                            <div class="form-group">
                                <label for="paymentmethod">Payment Method</label>
                                <select class="form-control" id="paymentmethod">
                                    <option value="Selectpaymentmethod" {{ $payment->method == '' ? 'selected' : '' }}>
                                        Select Payment Method</option>
                                    <option value="creditcard" {{ $payment->method == 'creditcard' ? 'selected' : '' }}>
                                        Credit Card</option>
                                    <option value="paypal" {{ $payment->method == 'paypal' ? 'selected' : '' }}>Paypal
                                    </option>
                                    <option value="debitcard" {{ $payment->method == 'debitcard' ? 'selected' : '' }}>Debit
                                        Card</option>
                                    <option value="cashondelivery"
                                        {{ $payment->method == 'cashondelivery' ? 'selected' : '' }}>Cash On Delivery
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="transactionid">Transaction ID</label>
                                <input type="text" class="form-control" id="transactionid" value="{{ $payment->transaction_id }}">
                            </div>
                            <div class="form-group ">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount" value="{{ $payment->amount }}">
                            </div>
                            <div class="form-group">
                                <label for="paymentstatus">Payment Status</label>
                                <select class="form-control" id="status">
                                    <option value="selectpaymentstatus" {{ $payment->status == '' ? 'selected' : '' }}>
                                        Select Payment Status</option>
                                    <option value="completed" {{ $payment->status == 'completed' ? 'selected' : '' }}>
                                        Completed</option>
                                    <option value="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="failed" {{ $payment->status == 'failed' ? 'selected' : '' }}>Failed
                                    </option>
                                </select>
                            </div>
                            <div class="d-flex  gap-2">
                                <button class="btn btn-secondary">Cancel</button>
                                <button class="btn btn-primary">Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
