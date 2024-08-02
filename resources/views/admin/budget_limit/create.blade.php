@php
    $active_menu = 'budget_limit';
@endphp
@extends('layouts.admin_master')

@section('page')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Budget Limit</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Budget Limit</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Add New Budget Limit</h4>
                        </div>
                        <!-- end card header -->

                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="las la-thumbs-up"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="las la-thumbs-down"></i>
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form name="addNewsfrm" action="{{ route('admin-budget_limit-store') }}" method="POST">
                                @csrf
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="col-md-4">
                                            <div>
                                                <label for="category_id" class="form-label">Category</label>
                                                <select class="form-select" id="category_id" name="category_id">
                                                    <option value="">Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div>
                                                <label for="limit_amount" class="form-label">Limit Amount</label>
                                                <input type="number" name="limit_amount" id="limit_amount"
                                                    class="form-control" step="0.01" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div style="padding-top: 25px;">
                                                <input type="submit" class="btn btn-primary" value="Set Budget Limit">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
