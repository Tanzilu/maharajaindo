@extends('layouts.frontpage')

@section('title')
Home
@endsection

@section('content')

<section class="hero-index" id="hero">
    <div class="container">
        <h2 class="sub-headline welcome">
            <span class="first-letter">W</span>elcome To
        </h2>
        <h1 class="headline">Maharaja Indonesia</h1>

        <div class="headline-description">
            <!-- Separator -->
            <div class="separator">
            </div>

            <!-- Single Animation -->
            <div class="single-animation">
                <a href="{{ route('about') }}" class="cta-btn">About Us</a>
            </div>
        </div>
    </div>
</section>
<!-- Hero Ends -->

<section class="premium-collections">
    <div class="container">
        <div class="info">
            <div class="info-img animate-left index-product-1">
                <img src="{{ asset('img/index_coffee1.png') }}" alt="">
            </div>
            <div class="description">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">D</span>iscover
                    </h2>
                    <h2 class="headline headline-dark">Our Collections</h2>
                    <!--   -->
                </div>
                <p>
                    We only present the finest quality coffee in the world, our coffee is grown in very fertile land
                    with high rainfall coupled with the beautiful rural air which makes our coffee has large beans, very
                    delicious taste and fragrant aroma.
                </p>
                <a href="{{ route('products') }}" class="body-btn">View products</a>
            </div>
            <div class="info-img animate-right index-product-2">
                <img src="{{ asset('img/index_coffee2.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Premium Collections Ends -->


<section class="tasteful-recipes between">
    <div class="container">
        <div class="global-headline">
            <div class="animate-top">
                <h2 class="sub-headline">
                    <span class="first-letter">T</span>he Finest
                </h2>
            </div>
            <div class="animate-bottom">
                <h2 class="headline">Coffee in Town</h2>
            </div>
        </div>
    </div>
</section>
<!-- Tasteful recipes ends -->

<section class="get-to-know">
    <div class="container">
        <div class="info">
            <div class="col-lg-12 col-12">
                <div class="description animate-top">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">L</span>ets
                        </h2>
                        <h2 class="headline headline-dark">Get To know</h2>
                    </div>
                    <p>
                        Many interesting things that we can discuss about coffee and its derivatives
                    </p>
                </div>
                <div class="image-get-to-know">
                    <div class="col-lg-12 col-12">
                        <div class="row">
                            <div class="tea101 animate-left col-lg-4 margin">
                                <img src="{{ asset('img/get_coffee2.jpeg') }}" alt="">
                                <a href="{{ route('coffee') }}" class="cta-btn-2">Coffee 101</a>
                            </div>
                            <div class="about-us animate-bottom col-lg-4 margin">
                                <img src=" {{ asset('img/get_coffee2.jpeg') }}" alt="">
                                <a href="{{ route('about') }}" class="cta-btn-2">About Us</a>
                            </div>
                            <div class="our-team animate-right col-lg-4 margin">
                                <img src="{{ asset('img/get_coffee2.jpeg') }}" alt="">
                                <a href="{{ route('team') }}" class="cta-btn-2">Our Team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Discover Our Menu Ends  -->

@endsection