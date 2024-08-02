@extends('layouts.master-layouts')
@section('content')
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

    <section style="background:#f4f4f4;padding-top:20px;padding-bottom:20px;">
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3" style="background:#fff;padding:20px;min-height:430px;">
                        <h2 class="ltn__widget-title ltn__widget-title-border-2">Courses</h2>
                        <div class="box">
                            @if ($courseDetails != null)
                                {!! $courseDetails->post_desc !!}
                            @endif
                        </div>
                        <hr>
                        <h2 class="ltn__widget-title ltn__widget-title-border-2">Subjects</h2>
                        <div class="box">
                            @if ($subjectsDetails != null)
                                {!! $subjectsDetails->post_desc !!}
                            @endif
                        </div>
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="mb-3" style="background:#fff;padding:20px;min-height:430px;">
                        <h2 class="ltn__widget-title ltn__widget-title-border-2">Latest News</h2>
                        <div class="box">

                            <ul class="list">
                                @foreach ($posts as $index => $item)
                                    @if ($index < 9)
                                        <li>

                                            <i class="far fa-calendar-alt"></i>
                                            <i
                                                style="font-size:14px;">{{ \Carbon\Carbon::parse($item->post_date)->format('d/m/Y') }}</i><br>

                                            <a href="javascript:void(0)"
                                                onclick="showNews('{{ $item->id }}')">{{ $item->post_name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            {{-- @if (count($posts) > 9)
                                    <a href="{{ route('news-showAll') }}">
                                        <button class="btnShowMore">Show
                                            more...</button>
                                    </a>
                                @endif --}}

                            @if (count($posts) > 9)
                                <a href="{{ route('news-showAll') }}">
                                    <button class="btnShowMore">Show
                                        more...</button>
                                </a>
                            @endif


                        </div>
                    </div>
                </div>
                {{-- <div class="box"> --}}
                <div class="col-md-4">
                    <div class="mb-3" style="background:#fff;padding:20px;min-height:430px;">
                        <h2 class="ltn__widget-title ltn__widget-title-border-2">Stay In Touch</h2>

                        <form action="{{ route('enquiry-submit') }}" method="POST">
                            @csrf
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Your name..">
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Your Address..">
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Your Email..">
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Your Phone Number..">

                            <textarea id="enquiry" class="form-control" name="enquiry" placeholder="How can we help you?" style="height:80px"></textarea>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
