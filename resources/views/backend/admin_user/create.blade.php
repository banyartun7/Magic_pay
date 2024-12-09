@extends('backend.layouts.app')
@section('title', 'Create Admin User')
@section('admin_user_active', 'active')
@section('header')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Create Admin Users</h3>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('admin.admin_user.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-2">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                        placeholder="Enter Name...">
                    @error('name')
                        <div class="mt-3 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Enter Email...">
                    @error('email')
                        <div class="mt-3 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"
                        placeholder="Enter Phone...">
                    @error('phone')
                        <div class="mt-3 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password...">
                    @error('password')
                        <div class="mt-3 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-secondary back-btn" style="margin-right:7px">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('extra-js')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".Datatable").DataTable();
        });
    </script>
@endsection
