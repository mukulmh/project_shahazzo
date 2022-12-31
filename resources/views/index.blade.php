@extends('master')
@section('content')

<!-- Start Main Banner Area -->
<div class="main-banner bg-four">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="main-banner-content">
                    <h1>Need a Service?</h1>
                    <p>Need a professional cleaning, appliance repair, home shifting, handyman or any kind of maintenance services today? Just pick from the list, we do the rest. Just like that!</p>

                    <div class="banner-btn">
                        <a href="services.html" class="default-btn">
                            Services
                            <span></span>
                        </a>

                        <a href="contact.html" class="default-btn-two">
                            Contact Us
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="image-sliders owl-carousel owl-theme">
                    <div class="image-item">
                        <img src="assets/img/slider1.jpg" alt="image">
                    </div>

                    <div class="image-item">
                        <img src="assets/img/slider2.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Emergency Area -->
<section class="emergency-area two pb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="emergency-item">
                    <div class="image">
                        <img src="assets/img/emergency.jpg" alt="image">
                    </div>
                    <div class="content">
                        <h3>Emergency Blood Test in 30 Minutes</h3>
                        <p>
                            <a href="tel:+8801757069807"><b>Contact Us:</b> +8801757069807</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="emergency-form two">
                    <div class="content">
                        <h3>
                            <i class="flaticon-calendar"></i>
                            Make A Request
                        </h3>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Name" placeholder="Enter Your Name">
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter Mobile">
                                    <i class="flaticon-call"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <i class="fa fa-tools"></i>
                                    <select>
                                        <option value="">Select Service</option>
                                        <option value="">Electrician</option>
                                        <option value="">Plumber</option>
                                        <option value="">Thai & Glass Works</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="appointment-btn">
                                    <button type="submit" class="default-btn">
                                        Submit Application
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Emergency Area -->

<!-- Start Services Area -->
<section class="services-area two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
            <p>To do any of your household chores, our Handymen will reach your door! Shahazzo provides professional Carpentry Services, Computer Services, Electrical Services, and Plumbing services.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="services-item-three">
                    <div class="icon">
                        <i class="flaticon-bacteria"></i>
                    </div>
                    <a href="#">
                        <h3>Electricians for Electrical Service</h3>
                    </a>
                    <p>This service provides the basic electrical repairing services such as fixing the wiring system of fans, switches, fuses, lights, meters etc.</p>
                    <a href="#" class="read-btn">Read More +</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item-three">
                    <div class="icon">
                        <i class="flaticon-shield"></i>
                    </div>
                    <a href="#">
                        <h3>Plumbing & Sanitary Services</h3>
                    </a>
                    <p>All your Plumbing and Sanitary-related problems will be taken care of by Shahazzo platform. We have trusted professionals who are experts in fitting, installations, and drainage related issues.</p>
                    <a href="#" class="read-btn">Read More +</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item-three">
                    <div class="icon">
                        <i class="flaticon-beauty-treatment"></i>
                    </div>
                    <a href="#">
                        <h3>Thai Aluminium, Glass & Grill Work</h3>
                    </a>
                    <p>Our solutions are available in framed and frame less glass wall styles. From curves to straight lines, customization, partitions come in a range of design options. Efficient service quality to ensure safety and long lasting finish.</p>
                    <a href="#" class="read-btn">Read More +</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item-three">
                    <div class="icon">
                        <i class="flaticon-mental-health"></i>
                    </div>
                    <a href="#">
                        <h3>Furniture Paint & Polish Service</h3>
                    </a>
                    <p>Looking for the best wood painting service near you? Shahazzo platform has high skilled wood painters for wooden furniture painting & polishing services in Bangladesh. </p>
                    <a href="#" class="read-btn">Read More +</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item-three">
                    <div class="icon">
                        <i class="flaticon-crutches"></i>
                    </div>
                    <a href="#">
                        <h3>Renovation, Construction & Tile Work</h3>
                    </a>
                    <p>Shahazzo platform provides brings the best solution by introducing verified service provider for this work with convenient delivery where you can one stop solution for any renovation, remodeling, Decor and repair work.</p>
                    <a href="#" class="read-btn">Read More +</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-item-three">
                    <div class="icon">
                        <i class="flaticon-pregnancy"></i>
                    </div>
                    <a href="#">
                        <h3>Gynecological</h3>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
                    <a href="" class="read-btn">Read More +</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

@endsection