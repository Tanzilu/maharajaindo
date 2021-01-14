@extends('layouts.frontpage')

@section('title')
Our Products
@endsection

@section('content')

<section class="hero-products" id="hero">
    <div class="container">
        <h1 class="sub-headline welcome">
            <span class="first-letter">P</span>roducts
        </h1>
        <!-- <h2 class="headline">Maharaja Tea</h2> -->
    </div>
</section>
<!-- Hero Ends -->

<section class="products">
    <div class="container">
        <div class="info">
            <div class="description">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">P</span>roduct
                    </h2>
                    <h2 class="headline headline-dark">Description</h2>

                </div>
                <p class="animate-left">
                    Our company is dedicated to continuing to build a network of coffee plantations with our coffee
                    farmers to build more jobs, supported by Indonesia's tropical climate with high rainfall, making our
                    plantations able to produce high quality coffee and have a fragrant aroma.

                    We only present high quality coffee which has gone through several stages of strict sorting of
                    shapes, sizes and aromas to ensure the quality of the coffee we serve.
                </p>
                <p>
                    Our Product : <br>
                    • Gold Robusta Central Java Collective Grade AA(18,5-20), and A(16-18) . <br>
                    • Arabica Java Preanger West Java Specialty Grade and Collective Grade 1, 2, 3 <br>
                    • Customized Roast Beans and Ground Coffee.

                </p>
                <p>
                    Packaging : <br>
                    • Green Coffee Beans Export - outer jute bag, inner grainpro. <br>
                    • Green Coffee Beans Domestic - double layer. <br>
                    • Roasted Coffee - by request.
                </p>

            </div>
        </div>
    </div>
</section>
<section class="tasteful-recipes between">
    <div class="container">
        <div class="global-headline">
            <div class="animate-top">
                <h2 class="sub-headline">
                    <span class="first-letter">T</span>asteful
                </h2>
            </div>
            <div class="animate-bottom">
                <h2 class="headline">Recipes</h2>
            </div>
        </div>
    </div>
</section>
<!-- Tasteful recipes ends -->

<section class="products">
    <div class="container">
        <div class="info">
            <div class="row">
                @foreach ($items as $item)
                <div class="col-lg-4 col-12 my-3">
                    <div class="animate-left">
                        <img src="{{ asset($item->photo)}}" alt="">
                        <h2>{{ $item->name }}</h2>
                        <p>{{ $item->characteristic}}</p>
                        <a class="cta-btn-2" data-toggle="modal" data-target="#product{{ $item->id }}">
                            Details
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Discover Our Menu Ends  -->

<section class="perfect-blend between">
    <div class="container">
        <div class="global-headline">
            <div class="animate-top">
                <h2 class="sub-headline">
                    <span class="first-letter">T</span>he Perfect
                </h2>
            </div>
            <div class="animate-bottom">
                <h2 class="headline">Blend</h2>
            </div>
        </div>
    </div>
</section>

<section class="products">
    <div class="container">
        <div class="info">
            <div class="description">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">T</span>he
                    </h2>
                    <h2 class="headline headline-dark">Process</h2>
                </div>

                <!-- 1st Process -->
                <div class="process">
                    <div class="info">
                        <div class="description padding-right animate-left">
                            <h3 class="headline headline-dark">Washed Process</h3 class="headline headline-dark">

                            <p>The hand picking of the cherries that have reached optimum maturity level before
                                separating defective beans in water tanks. The next step is to pulp the cherries' outer
                                skin with pulping machine on running water. After the pulping is done, the fermentation
                                of the parchment beans take place and soaked in natural clean water for 24 to 36 hours
                                before washing the residues with natural clean water. After they are clean, the beans
                                are then sent for pre-drying processes.</p>
                        </div>
                        <div class="info-img animate-right my-auto">
                            <img src="{{ asset('img/wash.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>


                <!-- 2nd Process -->
                <div class="process">
                    <div class="info">
                        <div class="info-img animate-left padding-right my-auto">
                            <img src="{{ asset('img/dry.jpeg') }}" alt="">
                        </div>
                        <div class="description animate-right">
                            <h3 class="headline headline-dark">Dry Process</h3 class="headline headline-dark">

                            <p>Also called natural process, is when the well-picked and floater-free pulped cherries are
                                dried directly under the sun.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('modal')
@foreach ($items as $item)
<div class="modal fade" id="product{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="product{{ $item->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-5 text-justify">
                <img src="{{ asset($item->photo)}}" alt="">
                <h2 class="font-weight-bold mt-4">{{ $item->name }}</h2>
                <div class="line-modal"></div>
                <p>{{$item->description}}</p>
            </div>
            <div class="modal-footer border-0">
                <a class="cta-btn-2" data-dismiss="modal">Close</a>
                <div class="dropdown d-inline-block">
                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                        class="cta-btn-2">Contact us</button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" style="font-size: 18px">
                        <a href="https://api.whatsapp.com/send?phone=6285156877047&text=Hi%20mr.%20dzul%20i%20intrested%20with%20your%20coffee"
                            tabindex="0" class="dropdown-item">Mr. Dzul (English)</a>
                        <a href="https://api.whatsapp.com/send?phone=6281210373063&text=%D8%A7%D8%B1%D9%8A%D8%AF%20%D8%A7%D9%86%20%D8%A7%D8%B4%D8%AA%D8%B1%D9%8A%20%D9%82%D9%87%D9%88%D8%AA%D9%83
                        " tabindex="0" class="dropdown-item">Mr. Rangga (Arabic)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection