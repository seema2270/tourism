@extends('frontend.layout.main')
@section('content')

<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Blog</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ul>
        </div>
    </div>
</div>

<div class="blog-wrapper pt-80">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-alpha">
                    <div class="blog-thumb">
                        <a href="/blog-details/{{$blog->id}}">
                            <img src="{{asset( $blog->image )}}" alt>
                        </a>
                        <div class="blog-lavel">
                            <a href="#"><i class="bi bi-calendar3"></i> {{$blog->created_at->format('M d ,Y')}}</a>
                        </div>
                    </div>
                    <div class="blog-content">

                        <h4 class="blog-title"><a href="/blog-details/{{$blog->id}}">{{$blog->title}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection