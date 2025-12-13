@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Create Review</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Review</li>
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
                        <h6 class="mb-0">Add New Review</h6>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('storereviews') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="userid" class="form-label">User ID</label>
                                <input type="number" class="form-control" id="userid" name="userid" placeholder="Enter User ID" required>
                            </div>
                            <div class="mb-3">
                                <label for="productid" class="form-label">Product ID</label>
                                <input type="number" class="form-control" id="productid" name="productid" placeholder="Enter Product ID" required>
                            </div>
                            <div class="mb-3">
                                <label for="orderid" class="form-label">Order ID</label>
                                <input type="number" class="form-control" id="orderid" name="orderid" placeholder="Enter Order ID" required>
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <select class="form-control" id="rating" name="rating" required>
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="reviewtitle" class="form-label">Review Title</label>
                                <input type="text" class="form-control" id="reviewtitle" name="reviewtitle" placeholder="Enter your Review Title" required>
                            </div>
                            <div class="mb-3">
                                <label for="reviewcomment" class="form-label">Review Comment</label>
                                <textarea class="form-control" id="reviewcomment" name="reviewcomment" rows="4" placeholder="Write your review comment here..." required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Satus</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="selectstatus">Select Status</option>
                                    <option value="proved">Proved</option>
                                    <option value="notproved">Not Proved</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="helpfulcount" class="form-label">Helpful Count</label>
                                <input type="number" class="form-control" id="helpfulcount" name="helpfulcount" placeholder="Enter Helpful Count" required>
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
