@extends('frontend.layout.main')
@section('content')

<div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-wrapper pt-100">
        <div class="container">
            <div class="row align-items-center justify-content-lg-center gy-5">
                <div class="col-lg-6">
                    <div class="contatc-intro-figure">
                        <img src="https://www.k12.com/wp-content/uploads/2024/01/Contact-K12-@3x.png" alt class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3>Contact Info.</h3>
                        <ul>
                            <li>
                                <h6>Let’s Talk</h6>
                                <a href="">+977-9800000000</a>
                            </li>
                            <li>
                                <h6>Loacation.</h6>
                                <a href="#">Itahari-8, Sunsari, BP Chok, Nepal</a>
                            </li>
                            <li>
                                <h6>Visit Us.</h6>
                                <a href="#">Facebook: https://www.facebook.com/seema.tamang.16100</a>
                                <a href="#">Instagram: https://www.facebook.com/seema.tamang.16100</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="contact-map mt-120">
                <div class="mapouter">
                    <div class="gmap_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114086.57397269196!2d87.26519955!3d26.673911399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6c66e80fbfa9%3A0x38094d1a7c974283!2sItahari!5e0!3m2!1sen!2snp!4v1713158831233!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-120">
            <form action="/user/store-contact" id="contact_form" method="post">
                @csrf
                <div class="contact-form-wrap">
                    <h4>Get a free Keystroke quote now</h4>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Your name" id="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" placeholder="Your contact" id="contact">
                            </div>
                        </div>
                    </div>
                    <div class="custom-input-group">
                        <textarea cols="20" rows="7" name="message" placeholder="Your message"></textarea>
                    </div>
                    <div class="custom-input-group">
                        <div class="submite-btn">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection