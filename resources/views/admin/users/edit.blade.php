@extends('layout.app')
@section('title',$title)
@section('description',$description)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Edit User</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-30">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="Name" value="{{old('name',$user->name)}}" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="{{old('email',$user->email)}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email_verified_at" class="form-label">Email Verified At</label>
                            <input type="datetime-local" class="form-control" id="email_verified_at" value="{{old('email_verified_at',$user->email_verified_at)}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" value="{{old('password',$user->password)}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="remembertoken" class="form-label">Remember Token</label>
                            <input type="text" class="form-control" id="remembertoken" value="{{old('remember_token',$user->remember_token)}}" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>
                    </div>
                </div>
            </div>
@endsection
