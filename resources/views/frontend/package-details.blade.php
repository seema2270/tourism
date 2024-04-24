@extends('frontend.layout.main')
@section('content')


<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Package Details</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/packages">Packages</a></li>
                <li class="breadcrumb-item active">{{$package->name}}</li>
            </ul>
        </div>
    </div>
</div>
<style>
    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
        text-align: end;
    }

    .rating input {
        display: none;
    }

    .rating label {
        display: inline-block;
        padding: 5px;
        font-size: 30px;
        color: #ccc;
        cursor: pointer;
    }

    .rating label:hover,
    .rating label:hover~label,
    .rating input:checked~label {
        color: #ffcc00;
    }
</style>
<div class="package-details-wrapper pt-76">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="tour-package-details">
                    <div class="pd-header">
                        <div class=" pd-top row row-cols-lg-4 row-cols-md-2 row-cols-2 gy-4">
                            <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                        <img src="{{asset('frontend/assets/images/icons/pd1.svg')}}" alt>
                                    </div>
                                    <div class="info">
                                        <h6>Duration</h6>
                                        <span>{{$package->duration}}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pd-thumb">
                            <img src="{{asset($package->image)}}" alt>
                        </div>
                        <div class="header-bottom">

                            <h2 class="pd-title">{{$package->name}}</h2>
                        </div>
                    </div>
                    <div class="package-details-tabs">
                        <ul class="nav nav-pills tab-switchers gap-xxl-1 gap-1" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-package1" data-bs-toggle="pill" data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1" aria-selected="true"><i class="bi bi-info-lg"></i> Information</button>
                            </li>


                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-package4" data-bs-toggle="pill" data-bs-target="#pill-body4" type="button" role="tab" aria-controls="pill-body4" aria-selected="false"><i class="bi bi-geo-alt"></i> Activity</button>
                            </li>


                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel" aria-labelledby="pills-package1">
                                <h3 class="d-subtitle">Package Details</h3>
                                <p>{!!$package->description!!}</p>


                                @if($giveReview == 1)
                                <form action="/user/submit-review/{{$package->id}}" id="comment_form" method="post">
                                    @csrf
                                    <div class="comment-form mt-110">
                                        <h4>Leave Your Comment</h4>
                                        @if(session('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                        @endif
                                        <div class="custom-input-group">
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5">
                                                <label for="star5">★</label>
                                                <input type="radio" id="star4" name="rating" value="4">
                                                <label for="star4">★</label>
                                                <input type="radio" id="star3" name="rating" value="3">
                                                <label for="star3">★</label>
                                                <input type="radio" id="star2" name="rating" value="2">
                                                <label for="star2">★</label>
                                                <input type="radio" id="star1" name="rating" value="1">
                                                <label for="star1">★</label>
                                            </div>
                                        </div>
                                        <div class="custom-input-group">
                                            <textarea cols="20" rows="7" name="review" placeholder="Write Message"></textarea>
                                        </div>

                                        <div class="custom-input-group">
                                            <div class="submite-btn">
                                                <button type="submit">Send Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @else
                                <h3>If you dont have any Confirmed Booking. You can not give review !!</h3>
                                @endif
                                <div class="comment-section">
                                    <ul class="comment-list">
                                        @foreach($reviews as $review)
                                        <li class="single-comment d-flex flex-sm-row flex-column ">
                                            <div class="commmentor">
                                                <img src="{{asset($review->user['image'])}}" alt>
                                            </div>
                                            <div class="comment mt-4 mt-sm-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="info">
                                                        <h6>{{$review->user['name']}}</h6>
                                                        <span>{{$review->created_at->format('M d, Y')}}</span>
                                                        <ul class="rating d-flex ">
                                                            @for ($i = 0; $i < $review->rating; $i++)
                                                                <li><i class="fa fa-star"></i></li>

                                                                @endfor

                                                        </ul>
                                                    </div>

                                                </div>
                                                <p>{{$review->review}} </p>

                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>


                            <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body4" role="tabpanel" aria-labelledby="pills-package4">
                                <p>{!!$package->weather_activity!!}</p>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="package-sidebar">
                    <aside class="package-widget-style-2 widget-form mt-30">
                        <div class="widget-title text-center d-flex justify-content-between">
                            <h4>Book This Tour</h4>
                            <h3 class="widget-lavel">Rs {{$package->budget}}</span></h3>
                        </div>
                        <div class="widget-body">
                            <form action="/user/book-package" method="post" id="booking-form">
                                @csrf
                                <input type="hidden" name="package_id" value="{{$package->id }}">

                                <div class="booking-form-wrapper">
                                    <div class="custom-input-group">
                                        <input type="text" name="name" placeholder="Your Full Name" id="name">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="email" name="email" placeholder="Your Email" id="email">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="tel" name="contact" placeholder="Phone" id="phone">
                                    </div>

                                    <div class="custom-input-group">
                                        <i class="bi bi-chevron-down"></i>
                                        <select id="ticket_type" name="no_of_people">
                                            <option selected>No of People</option>
                                            <option value="one person">1 Person</option>
                                            <option value="two person">2 Person</option>
                                            <option value="three person">3 Person</option>
                                            <option value="more then three">More Then 3 Person</option>
                                        </select>
                                    </div>

                                    <div class="custom-input-group">
                                        <i class="bi bi-calendar3"></i>
                                        <input placeholder="Select your date" type="date" name="date" min="<?php echo date('Y-m-d'); ?>" class="calendar">
                                    </div>
                                    <div class="custom-input-group">
                                        <textarea cols="20" rows="7" name="note" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="yes_no_option">Need Tour Guide?</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="need_guide" id="yes_option" value="yes" checked>
                                            <label class="form-check-label" for="yes_option">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="need_guide" id="no_option" value="no">
                                            <label class="form-check-label" for="no_option">No</label>
                                        </div>
                                        @error('yes_no_option')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="custom-input-group">
                                        <select id="" name="payment_method">
                                            <option selected disabled>Select the Payment Method</option>
                                            <option value="khalti">khalti</option>
                                            <option value="cash">Cash</option>
                                        </select>
                                    </div>
                                    <div class="custom-input-group">
                                        <div class="submite-btn">
                                            <button type="submit">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <aside class="package-widget-style-2 widget-recent-package-entries mt-30">
                        <div class="widget-title text-center">
                            <h4>Gallery</h4>
                        </div>
                        <div class="widget-body">
                            @foreach (json_decode($package->gallery_images) as $galleryImage)
                            <img src="{{ asset($galleryImage) }}" alt="Gallery Image" width="80">
                            @endforeach
                        </div>
                    </aside>
                    <aside class="package-widget-style-2 widget-recent-package-entries mt-30">
                        <div class="widget-title text-center">
                            <h4>ITINERARY</h4>
                        </div>
                        <div class="widget-body">
                            <div class="accordion" id="accordionExample">
                                @foreach($itinearies as $itinearie)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$itinearie->id}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$itinearie->id}}" aria-expanded="false" aria-controls="collapse{{$itinearie->id}}">
                                            {{$itinearie->name}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$itinearie->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$itinearie->id}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <img src="{{asset($itinearie->image)}}" width="50" alt=""><br>
                                            <p>
                                                {{$itinearie->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </aside>


                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<script>
    var map;
    var marker;

    function initMap() {
        var mapElement = document.getElementById('map');
        var locationsnow = {
            lat: parseFloat(mapElement.getAttribute('data-lat')),
            lng: parseFloat(mapElement.getAttribute('data-lng'))
        };

        // Initialize the map
        map = L.map('map').setView(locationsnow, 15);

        // Add a tile layer (you can choose a different provider)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Initialize the marker with the college location
        marker = L.marker(locationsnow, {
            draggable: true
        }).addTo(map);
    }

    // Make sure Leaflet is fully loaded before initializing the map
    window.onload = function() {
        initMap();
    };
</script>
@endsection