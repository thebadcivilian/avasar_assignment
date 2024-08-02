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
                        <h4 class="mb-sm-0">Record</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Record</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Add New Record</h4>

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
                            <form name="addNewsfrm" action="{{ route('admin-record-store') }}" method="POST">
                                @csrf
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <div class="col-md-12">
                                            <div>
                                                <label for="basiInput" class="form-label">Description</label>
                                                <textarea type="text" class="form-control tinymce" id="description" name="description" autofocus></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Amount</label>
                                                <input type="number" class="form-control" id="amount" name="amount">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Date</label>
                                                <input type="date" class="form-control" id="date" name="date">
                                            </div>
                                        </div>

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
                                                <label for="type" class="form-label">Type</label>
                                                <select class="form-select" id="type" name="type">
                                                    <option value="">Select</option>
                                                    <option value="income">Income</option>
                                                    <option value="expense">Expense</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div style="padding-top:25px;">
                                                <input type="Submit" class="btn btn-primary" value="Submit">
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
