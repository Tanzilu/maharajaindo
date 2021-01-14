@extends('layouts.frontpage')

@section('title')
Contact Us
@endsection

@section('content')

<section class="hero-contact" id="hero">
    <div class="container">
        <h2 class="sub-headline">
            <span class="first-letter">S</span>tay
        </h2>
        <h2 class="headline">in Touch</h2>

        <div class="headline-description">

            <!-- Single Animation -->
            <div class="single-animation">
                <h5>with Maharaja Indonesia</h5>
            </div>
        </div>
    </div>
</section>
<!-- Hero Ends -->

<section class="contact">
    <div class="container">
        <div class="info">
            <div class="description">
                <div class="global-headline">
                    <h1 class="headline headline-dark">Contact Us</h1>
                </div>
                <div class="contactInfo">
                    <div class="row">
                        <div class="contact-box col-12 col-lg-6 animate-top">
                            <div class="contact-info">
                                <h3>Phone</h3>
                                <p>+62 85156877047</p>
                            </div>
                            <div class="contact-info">
                                <h3>Email</h3>
                                <p>info@maharajaindo.com</p>
                            </div>
                            <div class="contact-info">
                                <h3>Address</h3>
                                <p>st.Durian Utara III/1 b.
                                    <br>
                                    Pedalangan Banyumanik
                                    <br>
                                    distric Semarang city, indonesia
                                </p>
                            </div>
                        </div>
                        <div class="contact-form col-12 col-lg-6 animate-bottom">
                            <div class="form" id="form">
                                <h2>Send Message</h2>
                                <div class="inputBox">
                                    <input type="text" placeholder="Name">
                                </div>

                                <div class="inputBox">
                                    <input type="email" placeholder="Email">
                                </div>

                                <div class="inputBox">
                                    <textarea type="text" placeholder="Send your Message"></textarea>
                                </div>

                                <button type="submit" form="form" value="Submit" class="cta-btn-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- <div class="image-group">
          <img src="img/delight-group-1.jpg" alt="" class="animate-top">
          <img src="img/delight-group-2.jpg" alt="" class="animate-bottom">
        </div> -->
        </div>
    </div>
</section>

@endsection