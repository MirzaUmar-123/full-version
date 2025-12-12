@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Shipment Payments</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shipment Payment</li>
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
                        <h6 class="mb-0">Shipment Payment</h6>
                    </div>
                    <div class="card-body pt-0">
                        <form>
                            <div class="form-group">
                                <label for="userid">User ID</label>
                                <input type="number" class="form-control" id="userid"  value="{{ $shipment->user_id }}">
                            </div>
                            <div class="form-group">
                                <label for="orderid">Order ID</label>
                                <input type="number" class="form-control" id="orderid"  value="{{ $shipment->order_id }}">
                            </div>
                            <div class="form-group">
                                <label for="tracking_number">Tracking Number</label>
                                <input type="text" class="form-control" id="tracking_number"  value="{{ $shipment->tracking_number }}">
                            </div><div class="form-group">
                                <label for="carrier">Carrier</label>
                                <input type="text" class="form-control" id="carrier" value="{{ $shipment->carrier }}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="pending" {{ $shipment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="completed" {{ $shipment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="failed" {{ $shipment->status == 'failed' ? 'selected' : '' }}>Failed</option>
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
