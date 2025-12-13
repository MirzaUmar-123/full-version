@extends('layout.app')
@section('title', $title)
@section('description', $description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Edit Transaction</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Transaction</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Transaction</h5>
        </div>
        <form method="POST" action="#">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="userID" class="form-label">User ID</label>
                    <input type="number" class="form-control" id="userID"
                        value="{{ old('user_id', $transaction->user_id) }}" required>
                </div>
                <div class="mb-3">
                    <label for="orderID" class="form-label">Order ID</label>
                    <input type="number" class="form-control" id="orderID"
                        value="{{ old('order_id', $transaction->order_id) }}" required>
                </div>
                <div class="mb-3">
                    <label for="paymentID" class="form-label">Payment ID</label>
                    <input type="number" class="form-control" id="paymentID"
                        value="{{ old('payment_id', $transaction->payment_id) }}" required>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount"
                        value="{{ old('amount', $transaction->amount) }}" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" class="form-control">
                        <option value="charge" <?= $transaction->type == 'charge' ? 'selected' : '' ?>>Charge</option>
                        <option value="refund" <?= $transaction->type == 'refund' ? 'selected' : '' ?>>Refund</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gateway" class="form-label">Gateway</label>
                    <select name="gateway" class="form-control">
                        <option value="stripe" <?= $transaction->gateway == 'stripe' ? 'selected' : '' ?>>Stripe</option>
                        <option value="paypal" <?= $transaction->gateway == 'paypal' ? 'selected' : '' ?>>Paypal</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="reference" class="form-label">Reference</label>
                    <input type="text" class="form-control" id="reference" value="{{ old('', $transaction->reference) }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="success" <?= $transaction->status == 'success' ? 'selected' : '' ?>>Success</option>
                        <option value="pending" <?= $transaction->status == 'pending' ? 'selected' : '' ?>>Pending</option>
                        <option value="failed" <?= $transaction->status == 'failed' ? 'selected' : '' ?>>Failed</option>
                        <option value="cancelled" <?= $transaction->status == 'cancelled' ? 'selected' : '' ?>>Cancelled
                        </option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
