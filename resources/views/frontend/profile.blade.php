@extends('frontend.layout.main')
@section('content')

<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Profile</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-wrapper pt-100">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Profile Details</h5>

                            </div>
                            <div class="col">
                                <a href="/edit-profile" class="btn btn-primary">Edit Profile</a>
                            </div>
                        </div>
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Image:</strong> <img src="{{asset($user->image)}}" alt="" width="50"></p>
                        <p><strong>Contact:</strong> {{ $user->contact }}</p>
                        <p><strong>Address:</strong> {{ $user->address }}</p>
                        <p><strong>Description:</strong> {{ $user->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection