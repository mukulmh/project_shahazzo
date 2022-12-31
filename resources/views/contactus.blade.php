@extends('master')
@section('content')
<!-- Start Contact Area -->
<section class="contact-area pt-100 pb-100">
    <div class="container">
        <div class="section-title mt-0">
            <h2>Drop us Message for any Query</h2>
        </div>

        <div class="contact-form">
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 mb-3">
                        <button type="submit" class="default-btn">
                            Send Message
                            <span></span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='flaticon-email'></i>
                    </div>

                    <h3>Email</h3>
                    <p>info@shahazzo.com</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='flaticon-pin'></i>
                    </div>

                    <h3>Location</h3>
                    <p>Manikganj Sadar</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class='flaticon-phone-call'></i>
                    </div>

                    <h3>Call</h3>
                    <p><a href="tel:+8801757069807">+8801757069807</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

@endsection