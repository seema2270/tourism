@extends('frontend.layout.main')
@section('content')

<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Gallery</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ul>
        </div>
    </div>
</div>
<div class="gallery-wrapper pt-80">
    <div class="container">
        <div class="row">
            <div class="row">
                @foreach($galleries as $gallery)
                <div class="col-lg-4 col-md-4">
                    <div class="gallary-item">
                        <img src="{{asset($gallery->image)}}" alt="Image Gallery">
                        <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="{{asset($gallery->image)}}">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection