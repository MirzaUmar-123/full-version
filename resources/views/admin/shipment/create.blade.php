@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ $title }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Shipment</h5>
                </div>
                <form method="POST" action="#">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="userID" class="form-label">User ID</label>
                            <input type="number" class="form-control" id="userID" placeholder="Enter user ID"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="orderID" class="form-label">Order ID</label>
                            <input type="number" class="form-control" id="orderID" placeholder="Enter order ID"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="trackingNumber" class="form-label">Tracking Number</label>
                            <input type="text" class="form-control" id="trackingNumber"
                                placeholder="Enter tracking number" required>
                        </div>
                        <div class="mb-3">
                            <label for="carrier" class="form-label">Carrier</label>
                            <select class="form-control" id="carrier" required>
                                <option value="">Select Carrier</option>
                                <option value="fedex">FedEx</option>
                                <option value="ups">UPS</option>
                                <option value="dhl">DHL</option>
                                <option value="usps">USPS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="shippedDate" class="form-label">Shipment Date</label>
                            <input type="date" class="form-control" id="shippedDate" required>
                        </div>
                        <div class="mb-3">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="pending">Select Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="cancelled">Failed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Shipment</button>
                    </div>
                </form>
            </div>
@endsection
