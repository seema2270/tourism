@extends('frontend.layout.main')
@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">About Us</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ul>
        </div>
    </div>
</div>

<div class="about-main-wrappper pt-100">
    <div class="container">
        <div class="about-tab-wrapper">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="about-tab-image-grid text-center">
                        <div class="about-video d-inline-block">
                            <img src="{{asset('frontend/assets/images/about/about-g2.png')}}" alt="About Video">
                            <div class="video-overlay">
                                <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-icon video-popup">
                                    <i class="bi bi-play-fill"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row float-images g-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about-image">
                                    <img src="{{asset('frontend/assets/images/about/about-g1.png')}}" alt="About Image 1">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about-image">
                                    <img src="{{asset('frontend/assets/images/about/about-g3.png')}}" alt="About Image 2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="about-tab-wrap">
                        <h2 class="about-wrap-title">
                            About Our Company And <span>What We Offer.</span>
                        </h2>
                        <div class="about-tab-switcher">
                            <ul class="nav nav-pills mb-3 justify-content-md-between justify-content-center" id="about-tab-pills" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link active" id="pills-about1" data-bs-toggle="pill" data-bs-target="#about-pills1" role="tab" aria-controls="about-pills1" aria-selected="true">
                                        <h3>10</h3>
                                        <h6>Years Experience</h6>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link" id="pills-about2" data-bs-toggle="pill" data-bs-target="#about-pills2" role="tab" aria-controls="about-pills2" aria-selected="false">
                                        <h3>100+</h3>
                                        <h6>Tour Guides</h6>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link" id="pills-about3" data-bs-toggle="pill" data-bs-target="#about-pills3" role="tab" aria-controls="about-pills3" aria-selected="false">
                                        <h3>500+</h3>
                                        <h6>Traveler Connect</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content about-tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="about-pills1" role="tabpanel" aria-labelledby="pills-about1">
                                <p>Adventure Seekers is a premier travel company with over a decade of experience in providing unforgettable journeys to travelers worldwide. Our expertise lies in crafting personalized travel experiences tailored to meet the unique preferences and desires of each client.</p>
                            </div>
                            <div class="tab-pane fade" id="about-pills2" role="tabpanel" aria-labelledby="pills-about2">
                                <p>With a team of over 100 experienced tour guides, we ensure that every aspect of your journey is meticulously planned and executed. Our guides are passionate about sharing their knowledge and expertise, ensuring that you have an enriching and immersive travel experience.</p>
                            </div>
                            <div class="tab-pane fade" id="about-pills3" role="tabpanel" aria-labelledby="pills-about3">
                                <p>At Adventure Seekers, we've connected with over 500 travelers from around the globe, fostering a vibrant community of like-minded individuals who share a passion for exploration and adventure. Join us on our journey to discover the wonders of the world.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
