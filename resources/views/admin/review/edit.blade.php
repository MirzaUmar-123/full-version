@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container">
        <h1 class="my-4">{{ $title }}</h1>
        <form  method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="userid">User ID</label>
                <input type="number" class="form-control" id="userid" name="userid" value="{{ old('user_id', $review->user_id) }}" required>
            </div>
            <div class="form-group">
                <label for="productid">Product ID</label>
                <input type="number" class="form-control" id="productid" name="productid" value="{{ old('product_id', $review->product_id) }}" required>
            </div>
            <div class="form-group">
                <label for="orderid">Order ID</label>
                <input type="number" class="form-control" id="orderid" name="orderid" value="{{ old('order_id', $review->order_id) }}" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <select class="form-select" id="rating" name="rating">
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ old('rating', $review->rating) == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label for="title">Review Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $review->title) }}" required>
            </div>
            <div class="form-group">
                <label for="body">Review Body</label>
                <input type="text" class="form-control" id="body" name="body" value="{{ old('body', $review->body) }}" required>
            </div>
            <div class="form-group">
                                <label for="status" class="form-label">Satus</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="selectstatus">Select Status</option>
                                    <option value="proved">Proved</option>
                                    <option value="notproved">Not Proved</option>
                                </select>
                            </div>
            <div class="form-group">
                <label for="helpfulcount">Helpful Count</label>
                <input type="number" class="form-control" id="helpfulcount" name="helpfulcount" value="{{ old('helpful_count', $review->helpful_count) }}" required>
            </div>
            <div class="d-flex  gap-2">
                <button class="btn btn-secondary">Cancel</button>
                <button class="btn btn-primary">Save </button>
            </div>
        </form>
    </div>
@endsection
