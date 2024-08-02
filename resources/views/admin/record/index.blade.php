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
                                <li class="breadcrumb-item active">Records</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12 text-right" style="padding-bottom: 20px;">
                    <a href="{{ route('admin-record-create') }}" class="btn btn-primary">+ Add New Record</a>
                </div>
                <div class="col-xl-12">
                    <div class="card">
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
                            <div class="live-preview">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered  align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col"> Description</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col"> Date</th>
                                                <th scope="col"> Type</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data as $value)
                                                <tr>
                                                    <td>{!! $value->description !!}</td>
                                                    <td>{{ $value->amount }}</td>
                                                    <td>{{ $value->date }}</td>
                                                    <td>{{ $value->type }}</td>

                                                    <td>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <a href="{{ url('admin/record/edit/' . Crypt::encrypt($value->id)) }}"
                                                                class="link-success fs-15"><i
                                                                    class="ri-edit-2-line"></i></a>
                                                            <a href="javascript:void(0);"
                                                                onclick="DeleteItems('../admin/record','delete','{{ Crypt::encrypt($value->id) }}')"
                                                                class="link-danger fs-15"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
