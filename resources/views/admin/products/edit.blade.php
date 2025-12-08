@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Edit Product</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <form  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
            </div>
            <div class="form-group">
                <label for="slu">Slug</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('slug', $product->slug) }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ old('description', $product->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" required>
            </div>
            <div class="form-group">
                <label for="discountprice">Dicount Price</label>
                <input type="number" class="form-control" id="discountprice" name="discountprice" value="{{ old('discount_price', $product->discount_price) }}" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $product->stock) }}" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                @endif
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="number" class="form-control" id="status" name="status" value="{{ old('status', $product->status) }}" required>
            </div>
            <div class="d-flex  gap-2">
                <button class="btn btn-secondary">Cancel</button>
                <button class="btn btn-primary">Save </button>
            </div>
        </form>
    </div>
@endsection
