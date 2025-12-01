@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">{{ $title }}</h4>
                </div>
                <div class="box-body">
                    <form action="{{ route('storebrands') }}" method="POST">
                        @csrf
                        <div class="row mx-n15">
                            <div class="col-md-6 mb-20 px-15">
                                <label for="name" class="il-gray fs-14 fw-500 align-center mb-10">Brand Name</label>
                                <input type="text" name="name"
                                    class="form-control ih-medium ip-light radius-xs b-light" id="name"
                                    placeholder="Enter brand name" value="{{ old('name') }}" required>
                            </div>
                            <div class="col-md-6 mb-20 px-15">
                                <label for="slug" class="il-gray fs-14 fw-500 align-center mb-10">Brand Slug</label>
                                <input type="text" name="slug"
                                    class="form-control ih-medium ip-light radius-xs b-light" id="slug"
                                    placeholder="Enter brand slug" value="{{ old('slug') }}" required>
                            </div>
                        </div>
                        <div class="row mx-n15">
                            <div class="col-12 px-15">
                                <button type="submit" class="btn btn-primary">Create Brand</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
