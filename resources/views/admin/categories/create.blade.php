@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Create New Category</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Category</h5>
                </div>
                <form method="POST" action="#">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="category_id" class="il-gray fs-14 fw-500 align-center mb-10">Category Name </label>
                                        <select name="category_id"
                                            class="custom-select form-control select-arrow-none ih-medium radius-xs b-light shadow-none color-light fs-14"
                                            id="category_id" required>
                                            <option selected disabled value="">Select Category Name</option>
                                            @foreach ($categories ?? [] as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Enter category slug" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryDesc" class="form-label">Description</label>
                            <textarea class="form-control" id="categoryDesc" rows="3" placeholder="Enter category description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>
                </form>
@endsection
