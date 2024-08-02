@php
    $active_menu = 'record';
@endphp
@extends('layouts.admin_master')
@section('page')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Records</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit Record</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Edit Record</h4>

                        </div><!-- end card header -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible alert-fixed">
                                <i class="las la-thumbs-up"></i>
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible alert-fixed">
                                <i class="las la-thumbs-down"></i>
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <form name="addNewsfrm" action="{{ route('admin-category-update', Crypt::encrypt($data->id)) }}"
                                method="POST">
                                @csrf
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <div class="col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Category name</label>
                                                <input type="text" value="{{ $data->category_name }}"
                                                    class="form-control" id="category_name" name="category_name">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div style="padding-top:25px;">
                                                <input type="Submit" class="btn btn-primary" value="Update">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
