@extends('frontend.layout.main')
@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Blog Details</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/blogs">Blog</a></li>
                <li class="breadcrumb-item active">{{$blog->title}}</li>
            </ul>
        </div>
    </div>
</div>

<div class="blog-details-wrapper pt-80">
    <div class="container">
        <div class="row p-4">
            <div class="col-lg-12">
                <div class="blog-details">
                    <div class="post-header">
                        <h2 class="post-title">
                            {{$blog->title}}
                        </h2>
                        <div class="post-meta">
                            <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> {{$blog->created_at->format('M d, Y')}}</a>
                        </div>
                    </div>
                    <div class="post-thumb">
                        <img src="{{asset($blog->image)}}" alt>
                    </div>
                    <div class="post-body">
                        <p>
                            {!! $blog->description !!}
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </div>

    @endsection