@extends('backend.layouts.app')
@section('title', 'Admin User')
@section('admin_user_active', 'active')
@section('header')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Admin Users</h3>
                </div>
                <div class="col-sm-6">

                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header-->
@endsection
@section('content')
    <div class="pb-3">
        <a href="{{ route('admin.admin_user.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"
                style="margin-right:5px"></i>Create
            Admin
            User</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="display table table-bordered Datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adminUsers as $adminUser)
                        <tr>
                            <td>{{ $adminUser->name }}</td>
                            <td>{{ $adminUser->email }}</td>
                            <td>{{ $adminUser->phone }}</td>
                            <td>
                                <div class="icon-action"><a class="text-warning"
                                        href="{{ route('admin.admin_user.edit', $adminUser->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a> <a class="text-danger"
                                        href=""><i class="far fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
