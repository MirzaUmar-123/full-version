@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Create Payments</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Payment</li>
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
                        <h6 class="mb-0">Add New Payment</h6>
                    </div>
                    <div class="card-body pt-0">
                        <form>
                            <div class="form-group">
                                <label for="userid">User ID</label>
                                <input type="number" class="form-control" id="userid" placeholder="Enter user ID">
                            </div>
                            <div class="form-group">
                                <label for="orderid">Order ID</label>
                                <input type="number" class="form-control" id="orderid" placeholder="Enter order ID">
                            </div>
                            <div class="form-group">
                                <label for="paymentmethod">Payment Method</label>
                                <select class="form-control" id="paymentmethod">
                                    <option value="Selectpaymentmethod">Select Payment Method</option>
                                    <option value="creditcard">Credit Card</option>
                                    <option value="paypal">Paypal</option>
                                    <option value="debitcard">Debit Card</option>
                                    <option value="cashondelivery">Cash On Delivery</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="transactionid">Transaction ID</label>
                                <input type="text" class="form-control" id="transactionid" placeholder="Enter Transaction ID">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount" placeholder="Enter amount">
                            </div>
                            <div class="form-group">
                                <label for="paymentstatus">Payment Status</label>
                                <select class="form-control" id="status">
                                    <option value="selectpaymentstatus">Select Payment Status</option>
                                    <option value="completed">Completed</option>
                                    <option value="pending">Pending</option>
                                    <option value="cancelled">Cancelled</option>
                                    <option value="failed">Failed</option>
                                    <option value="refunded">Refunded</option>
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
