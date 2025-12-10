@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Create New Brand</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">create Brand</li>
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
                            <h6>Add new Brands</h6>
                        </div>
                        <div class="card-body pb-md-50">
                            <form action="{{ route('storebrands') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mx-n15">
                                    <div class="col-md-6 mb-20 px-15">
                                        <label for="brand_id" class="il-gray fs-14 fw-500 align-center mb-10">Brand Name</label>
                                        <select name="brand_id"
                                            class="custom-select form-control select-arrow-none ih-medium radius-xs b-light shadow-none color-light fs-14"
                                            id="brand_id">
                                            <option selected disabled value="">Select Brand Name</option>
                                            @foreach ($brands ?? [] as $brand)
                                                <option value="{{ $brand->id }}"
                                                    {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                                    {{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-20 px-15">
                                        <label for="slug" class="il-gray fs-14 fw-500 align-center mb-10">Brand
                                            Slug</label>
                                        <input type="text" name="slug"
                                            class="form-control ih-medium ip-light radius-xs b-light" id="slug"
                                            placeholder="Enter brand slug" value="{{ old('slug') }}" required>
                                </div>
                                <div class="row mx-n15">
                                    <div class="col-md-12 mb-20 px-15">
                                        <label for="description"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Brand Description</label>
                                        <textarea name="description" class="form-control ih-medium ip-light radius-xs b-light" id="description"
                                            placeholder="Enter brand description" rows="4">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            <div class="d-flex  gap-2">
                                <button class="btn btn-secondary">Cancel</button>
                                <button class="btn btn-primary">Save </button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>
            </div>
        </div>
    </div>
@endsection
