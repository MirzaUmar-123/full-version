@section('title', 'Categories')
@section('description', 'Manage product categories')
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Categories Management</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Categories Management</li>
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
                        <h6 class="mb-0">Product Categories</h6>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                            <i class="uil uil-plus"></i> Add Category
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
                                            placeholder="Search categories..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="userDatatable userDatatable--category">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th><span class="userDatatable-title">ID</span></th>
                                            <th><span class="userDatatable-title"> Name</span></th>
                                            <th><span class="userDatatable-title">Slug</span></th>
                                            <th><span class="userDatatable-title">Description</span></th>
                                            <th><span class="userDatatable-title">Status</span></th>
                                            <th><span class="userDatatable-title">Image</span></th>
                                            <th><span class="userDatatable-title">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr class="userDatatable-row">
                                            <td>
                                                <div class="userDatatable-content">
                                                    <h6>{{$category->id}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$category->name}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$category->slug}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$category->description}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$category->is_active ? 'Active' : 'Inactive'}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{$category->image}}
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="d-flex  gap-2">
                                                    <li>
                                                        <a href="#" class="btn btn-primary btn-sm" title="Edit">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="btn btn-danger btn-sm" title="Delete"
                                                            onclick="return confirm('Are you sure?');">
                                                            <i class="uil uil-trash"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-30">
                            <span class="fs-14">Showing 1 to 10 of 35 entries</span>
                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="#">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName"
                                placeholder="Enter category name" required>
                        </div>
                        <div class="mb-3">
                            <label for="parentCategory" class="form-label">Parent Category</label>
                            <select class="form-control" id="parentCategory">
                                <option value="">None (Top Level)</option>
                                <option value="1">Electronics</option>
                                <option value="2">Fashion</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="categoryDesc" class="form-label">Description</label>
                            <textarea class="form-control" id="categoryDesc" rows="3" placeholder="Enter category description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
