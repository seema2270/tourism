@extends('frontend.layout.main')
@section('content')

<div class="hero-area hero-style-one overflow-hidden">
    <div class="container-fluid p-0">
        <div class="swiper hero-slider-one">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-single-slide">
                        <div class="hero-highlighted-bg">
                            <img src="{{asset('frontend/assets/images/banner/bg-highlight1.png')}}" alt>
                        </div>
                        <div class="hero-content-bg">
                            <div class="hero-content position-relative">
                                <h2 class="hero-title">Explore the World with Adventure Seekers</h2>
                                <p>Embark on a journey like no other with Adventure Seekers. Discover the thrill of exploring new destinations, immersing yourself in diverse cultures, and creating memories that will last a lifetime.</p>

                                <div class="hero-btns">
                                    <a href="/packages" class="button-fill-primary">View Our Packages</a>
                                    <a href="/gallery" class="button-outlined-primary">Plan Your Adventure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-single-slide">
                        <div class="hero-highlighted-bg">
                            <img src="{{asset('frontend/assets/images/banner/bg-highlight2.png')}}" alt>
                        </div>
                        <div class="hero-content-bg">
                            <div class="hero-content position-relative">
                                <h2 class="hero-title">Experience the Wonders of Nature</h2>
                                <p>Step into the heart of nature and witness its awe-inspiring beauty. From majestic mountains to lush forests, let Adventure Seekers guide you on an unforgettable journey through some of the world's most breathtaking natural wonders.</p>
                                <div class="hero-btns">
                                    <a href="/packages" class="button-fill-primary">View Our Packages</a>
                                    <a href="/gallery" class="button-outlined-primary">Plan Your Adventure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-single-slide">
                        <div class="hero-highlighted-bg">
                            <img src="{{asset('frontend/assets/images/banner/bg-highlight3.png')}}" alt>
                        </div>
                        <div class="hero-content-bg">
                            <div class="hero-content position-relative">
                                <h2 class="hero-title">Indulge in Exotic Destinations</h2>
                                <p>Escape to paradise with Adventure Seekers. Whether you dream of relaxing on sun-drenched beaches or exploring vibrant cities, our exotic destinations offer the perfect blend of relaxation and adventure.</p>

                                <div class="hero-btns">
                                    <a href="/packages" class="button-fill-primary">View Our Packages</a>
                                    <a href="/gallery" class="button-outlined-primary">Plan Your Adventure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-arrows text-center d-lg-flex d-none">
        <div class="hero-prev" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-arrow-left"></i> Prev </div>
        <div class="hero-next" tabindex="0" role="button" aria-label="Next slide">Next <i class="bi bi-arrow-right"></i></div>
    </div>
    <div class="hero-pagination d-block w-auto">
    </div>
</div>


<div class="package-area package-style-one pt-110 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-head-alpha">
                    <h2>Popular Tour Package</h2>
                   
                </div>
            </div>
            <div class="col-lg-4">
                <div class="package-btn text-lg-end">
                    <a href="/packages" class="button-fill-primary">View All Tour</a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($packages as $package)
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
                                <h6>Rs.{{$package->budget}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<div class="testimonial-area testimonial-style-one mt-120">
    <div class="testimonial-shape-group"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-head-alpha">
                    <h2>What Our Clients Say About Us</h2>
                    <p>At Adventure Seekers, we take pride in providing unforgettable experiences for our clients. Here's what some of them have to say:</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="slider-arrows text-center d-lg-flex d-none justify-content-end mb-3">
                    <div class="testi-prev custom-swiper-prev" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-chevron-left"></i> </div>
                    <div class="testi-next custom-swiper-next" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-chevron-right"></i></div>
                </div>
            </div>
        </div>
        <div class="swiper testimonial-slider-one position-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card testimonial-card-alpha">
                        <div class="testimonial-overlay-img">
                            <img src="{{asset('frontend/assets/images/reviewer/reviewer-1.png')}}" alt="Reviewer Image">
                        </div>
                        <div class="testimonial-card-top">
                            <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                            <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm1.png" alt="Reviewer Thumbnail"></div>
                            <h3 class="testimonial-count">01</h3>
                        </div>
                        <div class="testimonial-body">
                            <p>"Adventure Seekers made my dream vacation a reality! The guides were knowledgeable, the accommodations were top-notch, and the experiences were unforgettable. I can't wait to book my next adventure with them!"</p>
                            <div class="testimonial-bottom">
                                <div class="reviewer-info">
                                    <h4 class="reviewer-name">Shwan Pull</h4>
                                    <h6>Traveller</h6>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card testimonial-card-alpha">
                        <div class="testimonial-overlay-img">
                            <img src="{{asset('frontend/assets/images/reviewer/reviewer-2.png')}}" alt="Reviewer Image">
                        </div>
                        <div class="testimonial-card-top">
                            <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                            <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm2.png" alt="Reviewer Thumbnail"></div>
                            <h3 class="testimonial-count">02</h3>
                        </div>
                        <div class="testimonial-body">
                            <p>"I've traveled with Adventure Seekers multiple times, and each trip has exceeded my expectations. Their attention to detail and commitment to customer satisfaction truly sets them apart. I highly recommend them to anyone seeking adventure!"</p>
                            <div class="testimonial-bottom">
                                <div class="reviewer-info">
                                    <h4 class="reviewer-name">Adam Groff</h4>
                                    <h6>Explorer</h6>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card testimonial-card-alpha">
                        <div class="testimonial-overlay-img">
                            <img src="{{asset('frontend/assets/images/reviewer/reviewer-3.png')}}" alt="Reviewer Image">
                        </div>
                        <div class="testimonial-card-top">
                            <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                            <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm3.png" alt="Reviewer Thumbnail"></div>
                            <h3 class="testimonial-count">03</h3>
                        </div>
                        <div class="testimonial-body">
                            <p>"Adventure Seekers exceeded all my expectations. From the moment I booked my trip, everything was seamless. The guides were knowledgeable, the accommodations were comfortable, and the experiences were truly unforgettable. I can't recommend them enough!"</p>
                            <div class="testimonial-bottom">
                                <div class="reviewer-info">
                                    <h4 class="reviewer-name">Lilyan Danclark</h4>
                                    <h6>Wanderer</h6>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gallary-area gallary-style-one pt-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-head-alpha section-padding-15 text-center mx-auto">
                    <h2>Travel Gallery</h2>
                   
                </div>
            </div>
        </div>
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

<div class="guide-area guide-style-one pt-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-head-alpha text-center mx-auto">
                    <h2>Tour Guide</h2>
                    
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($guides as $guide)
            <div class="col-lg-4 col-md-6">
                <div class="guide-card-alpha">
                    <div class="guide-image">
                        <img src="{{asset($guide->image)}}" alt>

                    </div>
                    <div class="guide-content">
                        <h4 class="guide-name">{{$guide->name}}</h4>
                        <h6 class="guide-designation">{{$guide->contact}}</h6>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


<div class="blog-area blog-style-one pt-110  ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-head-alpha text-center mx-auto">
                    <h2>Latest News</h2>
                    
                </div>
            </div>
        </div>
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