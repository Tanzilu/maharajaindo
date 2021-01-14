@extends('layouts.frontpage')

@section('title')
Our Team
@endsection

@section('content')

<section class="hero-team" id="hero">
    <div class="container">
        <h2 class="sub-headline welcome">
            <span class="first-letter">I</span>ntroducing
        </h2>
        <h1 class="headline">Our Team</h1>

        <div class="headline-description">

        </div>
    </div>
</section>
<!-- Hero Ends -->

<section class="team">
    <div class="container">
        <div class="info animate-top">
            <div class="single-team">
                <div class="image-team">
                    <img src="{{ asset('img/dzul.jpeg') }}" alt="">
                </div>
                <div class="content-team">
                    <h2>Dzul Fauzi Auzan</h2>
                    <p>Director</p>
                </div>
            </div>

            <div class="single-team">
                <div class="image-team">
                    <img src="{{ asset('img/rangga.jpeg') }}" alt="">
                </div>
                <div class="content-team">
                    <h2>Rangga Agung Susilo</h2>
                    <p>Vice Director</p>
                </div>
            </div>

            <div class="single-team">
                <div class="image-team">
                    <img src="{{ asset('img/baida.jpeg') }}" alt="">
                </div>
                <div class="content-team">
                    <h2>Baida Iqlima</h2>
                    <p>Account Executive</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Discover Our Team Ends  -->


@endsection