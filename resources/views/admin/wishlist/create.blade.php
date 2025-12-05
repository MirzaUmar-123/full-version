@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Creat New Wishlist</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Wishlist</li>
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
                        <h6 class="mb-0">Add New Wishlist</h6>
                    </div>
                    <div class="card-body pt-0">
                        <form>
                            <div class="form-group">
                                <label for="userid">User ID</label>
                                <input type="number" class="form-control" id="userid" placeholder="Enter User ID">
                            </div>
                            <div class="form-group">
                                <label for="productid">Product ID</label>
                                <input type="number" class="form-control" id="productid" placeholder="Enter Product ID">
                            </div>
                            <div class="modal-footer justify-content-start">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
