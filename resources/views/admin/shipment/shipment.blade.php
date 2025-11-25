@section('title', 'Shipments')
@section('description', 'Manage order shipments')
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Shipments Management</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shipments</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-30">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Shipment List</h6>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addShipmentModal">
                            <i class="uil uil-plus"></i> Add Shipment
                        </button>
                    </div>
                    <div class="card-body pt-0">
                        <div
                            class="support-form datatable-support-form d-flex justify-content-between align-items-center flex-wrap mb-30">
                            <div class="support-form__search">
                                <div class="support-order-search">
                                    <form action="#" class="support-order-search__form">
                                        <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                        <input class="form-control border-0 box-shadow-none" type="search"
                                            placeholder="Search shipments..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                            <div class="support-form__input">
                                <div class="dm-select">
                                    <select name="filter" class="select-search form-control">
                                        <option value="">All Status</option>
                                        <option value="pending">Pending</option>
                                        <option value="processing">Processing</option>
                                        <option value="shipped">Shipped</option>
                                        <option value="delivered">Delivered</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--shipment">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">Shipment ID</span></th>
                                            <th><span class="userDatatable-title">Order ID</span></th>
                                            <th><span class="userDatatable-title">Carrier</span></th>
                                            <th><span class="userDatatable-title">Tracking Number</span></th>
                                            <th><span class="userDatatable-title">Shipped Date</span></th>
                                            <th><span class="userDatatable-title">Status</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>SHP-001</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    #ORD-001
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-primary">FedEx</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    1234567890
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    18 Nov 2024
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-success">Delivered</span>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="Track">
                                                            <i class="uil uil-map-marker"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-info btn-sm" title="Edit">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>SHP-002</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    #ORD-002
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-info">UPS</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    9876543210
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    17 Nov 2024
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-info">Shipped</span>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="Track">
                                                            <i class="uil uil-map-marker"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-info btn-sm" title="Edit">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>SHP-003</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    #ORD-003
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-warning">DHL</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    5555666677
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    16 Nov 2024
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    <span class="badge bg-light-warning">Processing</span>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-center gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="Track">
                                                            <i class="uil uil-map-marker"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-info btn-sm" title="Edit">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-30">
                            <span class="fs-14">Showing 1 to 10 of 156 entries</span>
                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Shipment Modal -->
    <div class="modal fade" id="addShipmentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Shipment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="#">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="orderID" class="form-label">Order ID</label>
                            <input type="text" class="form-control" id="orderID" placeholder="Enter order ID"
                                required>
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
                            <label for="trackingNumber" class="form-label">Tracking Number</label>
                            <input type="text" class="form-control" id="trackingNumber"
                                placeholder="Enter tracking number" required>
                        </div>
                        <div class="mb-3">
                            <label for="shippedDate" class="form-label">Shipped Date</label>
                            <input type="date" class="form-control" id="shippedDate" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Shipment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
