@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Edit Carts</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Cart</li>
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
                        <h6 class="mb-0">Edit Cart</h6>
                    </div>
                    <div class="card-body pt-0">
                        <form  method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="userid">User ID</label>
                                <input type="number" class="form-control" id="userid" name="userid" value="{{$cart->user_id}}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="productid">Product ID</label>
                                <input type="number" class="form-control" id="productid" name="productid" value="{{$cart->product_id}}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="{{$cart->quantity}}" required>
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
