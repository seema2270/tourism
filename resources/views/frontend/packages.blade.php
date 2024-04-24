@extends('frontend.layout.main')
@section('content')

<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Tour Package</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Tour Package</li>
            </ul>
        </div>
    </div>
</div>

<div class="package-wrapper pt-80">
    <div class="container">
        <div class="row">
            @foreach ($packages as $package)
            <div class="col-lg-4 col-md-6">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="/package-details/{{$package->id}}"><img src="{{asset($package->image)}}" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>{{$package->duration}}</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="/package-details/{{$package->id}}">{{$package->name}}</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="/package-details/{{$package->id}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>Rs {{$package->budget}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection