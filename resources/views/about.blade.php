@extends('master')
@section('content')
<!-- Start About Area -->
<section class="about-area pt-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="assets/img/about-3.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <h3>Connect to Call a Doctor by Video or Audio During the COVID-19 Pandemic</h3>
                    <p>Many healthcare systems around the world together with government agencies and startup companies are building and delivering Telehealth solutions the future of non-emergency and routine healthcare delivery</p>

                    <ul class="about-features two">
                        <li>
                            <span>
                                <i class='flaticon-doctor'></i>
                                Orthopedic Solutions
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class='flaticon-worm'></i>
                                Chronic Disease
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class='flaticon-cough'></i>
                                COVID-19 Test
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class='flaticon-blood-test'></i>
                                Diabetic Test
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class='flaticon-family'></i>
                                Family Solutions
                            </span>
                        </li>
                        <li>
                            <span>
                                <i class='flaticon-insurance'></i>
                                Medical Questions
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Appointment Area -->
<section class="appointment-area ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="2700">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Care Locations</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="2.7">00</span>
                                <span class="sign-icon">K</span>
                            </h3>
                            <p>Virtual Care Solutions</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="99.60">00</span>
                                <span class="sign-icon">%</span>
                            </h3>
                            <p>Connections Success Rate</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="30">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Award Winning</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="appointment-form">
                    <div class="content">
                        <span>Call to Action</span>
                        <h3>Make An Appointment</h3>
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
                                    <input type="text" class="form-control" id="Email" placeholder="Enter Email">
                                    <i class="flaticon-email"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter Phone Number">
                                    <i class="flaticon-call"></i>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <select>
                                        <option value="">Select Category</option>
                                        <option value="">Cardiologists</option>
                                        <option value="">Dermatologists</option>
                                        <option value="">Endocrinologists</option>
                                        <option value="">Gastroenterologists</option>
                                        <option value="">Allergists</option>
                                        <option value="">Immunologists</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <select>
                                        <option value="">Select Doctor</option>
                                        <option value="">Dr. James Adult</option>
                                        <option value="">Dr. James Alison</option>
                                        <option value="">Dr. Peter Adlock</option>
                                        <option value="">Dr. Jelin Alis</option>
                                        <option value="">Dr. Josh Taylor</option>
                                        <option value="">Dr. Steven Smith</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker">
                                        <input type="text" class="form-control" placeholder="Date">
                                        <span class="input-group-addon"></span>
                                    </div>
                                    <i class="flaticon-calendar"></i>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="appointment-btn">
                                    <button type="submit" class="default-btn">
                                        Confirm Appointment
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
<!-- End Appointment Area -->

<!-- Start Partner Area -->
<section class="partner-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Partners</span>
            <h2>Featured Customer & Partners</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
        </div>

        <div class="partner-list">
            <div class="partner-item">
                <a href="partner.html">
                    <img src="assets/img/partner/1.jpg" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="partner.html">
                    <img src="assets/img/partner/2.jpg" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="partner.html">
                    <img src="assets/img/partner/3.jpg" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="partner.html">
                    <img src="assets/img/partner/4.jpg" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="partner.html">
                    <img src="assets/img/partner/5.jpg" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="partner.html">
                    <img src="assets/img/partner/5.jpg" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="partner.html">
                    <img src="assets/img/partner/6.jpg" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="partner.html">
                    <img src="assets/img/partner/7.jpg" alt="image">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Partner Area -->

<!-- Start Consult Area -->
<section class="consult-area ptb-100">
    <div class="container-fluid pl-0">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="consult-image">
                    <img src="assets/img/consult.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="consult-content">
                    <span>Online Consult</span>
                    <h3>Get 24/7 Care Right From Your Phone</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>

                    <ul class="list">
                        <li>
                            <i class="flaticon-check-1"></i>
                            Get unlimited 24/7 Video Chat with a provider at no extra cost
                        </li>
                        <li>
                            <i class="flaticon-check-1"></i>
                            Easily book appointments and renew prescriptions
                        </li>
                        <li>
                            <i class="flaticon-check-1"></i>
                            Skip unnecessary trips to the ER or urgent care
                        </li>
                        <li>
                            <i class="flaticon-check-1"></i>
                            Have a Remote Visit with your primary care provider over video
                        </li>
                        <li>
                            <i class="flaticon-check-1"></i>
                            Message with your provider
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Consult Area -->

@endsection