@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Create New Product</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">create product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Add new Products</h6>
                        </div>
                        <div class="card-body pb-md-50">
                            <form action="{{ route('storeproducts') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mx-n15">
                                    <div class="col-md-6 mb-20 px-15">
                                        <label for="name" class="il-gray fs-14 fw-500 align-center mb-10">Product
                                            Name</label>
                                        <input type="text" name="name"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="name"
                                            placeholder="Enter product name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="col-md-6 mb-20 px-15">
                                        <label for="slug" class="il-gray fs-14 fw-500 align-center mb-10">Product
                                            Slug</label>
                                        <input type="text" name="slug"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="slug"
                                            placeholder="Enter product slug" value="{{ old('slug') }}" required>
                                </div>
                                <div class="row mx-n15">
                                    <div class="col-md-6 mb-20 px-15">
                                        <label for="category_id"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Category</label>
                                        <select name="category_id"
                                            class="custom-select form-control select-arrow-none ih-medium radius-xs b-light shadow-none color-light fs-14"
                                            id="category_id" required>
                                            <option selected disabled value="">Select Category</option>
                                            @foreach ($categories ?? [] as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-20 px-15">
                                        <label for="brand_id" class="il-gray fs-14 fw-500 align-center mb-10">Brand</label>
                                        <select name="brand_id"
                                            class="custom-select form-control select-arrow-none ih-medium radius-xs b-light shadow-none color-light fs-14"
                                            id="brand_id">
                                            <option selected disabled value="">Select Brand</option>
                                            @foreach ($brands ?? [] as $brand)
                                                <option value="{{ $brand->id }}"
                                                    {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                                    {{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mx-n15">
                                    <div class="col-md-12 mb-20 px-15">
                                        <label for="description"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Description</label>
                                        <textarea name="description" class="form-control ih-medium ip-light radius-xs b-light" id="description"
                                            placeholder="Enter product description" rows="4">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="row mx-n15">
                                    <div class="col-md-3 mb-20 px-15">
                                        <label for="price" class="il-gray fs-14 fw-500 align-center mb-10">Price</label>
                                        <input type="number" name="price"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="price"
                                            placeholder="0.00" step="0.01" value="{{ old('price') }}" required>
                                    </div>
                                    <div class="col-md-3 mb-20 px-15">
                                        <label for="discount_price" class="il-gray fs-14 fw-500 align-center mb-10">Discount
                                            Price</label>
                                        <input type="number" name="discount_price"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="discount_price"
                                            placeholder="0.00" step="0.01" value="{{ old('discount_price') }}">
                                    </div>
                                    <div class="col-md-3 mb-20 px-15">
                                        <label for="stock" class="il-gray fs-14 fw-500 align-center mb-10">Stock
                                            Quantity</label>
                                        <input type="number" name="stock"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="stock"
                                            placeholder="0" min="0" value="{{ old('stock', 0) }}" required>
                                    </div>
                                    <div class="col-md-3 mb-20 px-15">
                                        <label for="status"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Status</label>
                                        <select name="status"
                                            class="custom-select form-control select-arrow-none ih-medium radius-xs b-light shadow-none color-light fs-14"
                                            id="status" required>
                                            <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mx-n15">
                                    <div class="col-md-12 mb-20 px-15">
                                        <label for="image" class="il-gray fs-14 fw-500 align-center mb-10">Product
                                            Image</label>
                                        <input type="file" name="image"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="image"
                                            accept="image/*">
                                        <small class="text-muted">Accepted formats: JPG, PNG, GIF (Max 2MB)</small>
                                    </div>
                                </div>
                                <div class="form-group mb-25 mt-1">
                                    <div class="form-check ps-0">
                                        <div class="checkbox-theme-default custom-checkbox">
                                            <input class="checkbox" type="checkbox" id="check-1" name="agree"
                                                required>
                                            <label for="check-1">
                                                <span class="checkbox-text color-gray">
                                                    I confirm that all information is correct
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary px-30" type="submit">Cancel</button><br>
                                <button class="btn btn-primary m-5 px-30" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>

            </div>
        </div>
    </div>
@endsection
