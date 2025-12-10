@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Edit Brands</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Brands</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        <form  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $brand->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Brand Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $brand->slug) }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $brand->description) }}" required>
            </div>
            <div class="mb-3">
                <label for="logopath" class="form-label">Logo Path</label>
                <input type="text" class="form-control" id="logopath" name="logopath" value="{{ old('logo_path', $brand->logo_path) }}">
            </div>
            <div class="mb-3">
                <label for="isactive" class="form-label">Is Active</label>
                <input type="text" class="form-control" id="isactive" name="isactive" value="{{ old('is_active', $brand->is_active) }}">
            </div>
                    <div class="d-flex  gap-2">
                        <button class="btn btn-secondary">Cancel</button>
                        <button class="btn btn-primary">Save </button>
                    </div>
        </form>
    </div>
@endsection
