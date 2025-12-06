@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Create Coupon</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('createcoupons') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="code" class="form-label">Coupon Code</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Enter Coupon Code" required>
                            </div>
                            <div class="mb-3">
                                <label for="discount_amount" class="form-label">Discount Amount</label>
                                <input type="number" class="form-control" id="discount_amount" name="discount_amount" placeholder="Enter Discount Amount" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description here..." required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
                            </div>
                            <div class="mb-3">
                                <label for="usage_limit" class="form-label">Usage Limit</label>
                                <input type="number" class="form-control" id="usage_limit" name="usage_limit" placeholder="Enter Usage Limit" required>
                            </div>
                            <div class="mb-3">
                                <label for="min_order_amount" class="form-label">Minimum Order Amount</label>
                                <input type="number" class="form-control" id="min_order_amount" name="min_order_amount" placeholder="Enter Minimum Order Amount " required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="radio" class="form-check-input" id="active" name="status">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="radio" class="form-check-input" id="inactive" name="status">
                                <label class="form-check-label" for="inactive">In Active</label>
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
