@extends('layouts.frontpage')

@section('title')
About Tea
@endsection

@section('content')

<section class="hero-coffee101" id="hero">
    <div class="container">
        <h2 class="sub-headline welcome">
            <span class="first-letter">C</span>offee 101
        </h2>
        <!-- <h2 class="headline">Maharaja Tea</h2> -->

    </div>
</section>
<!-- Hero Ends -->

<section class="tea101-story">
    <div class="container">
        <div class="info">
            <div class="description padding-right animate-left my-auto">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">D</span>rinking
                    </h2>
                    <h1 class="headline headline-dark">Coffee Culture</h1>

                </div>
                <p>Did you know that Indonesia is currently number 4 coffee producer in the world? The country has a
                    long history of growing coffee In 1699 when Indonesia was still under Dutch colony, VOC (Verininging
                    Oogst-Indies Company) brought in Arabica coffee plants to break the worldwide Arab monopoly in
                    coffee trade. The Dutch Colonial Government initially planted coffee around Batavia (today Jakarta).
                    More coffee plantations were established in East Java, Central Java, and West Java. Indonesia was
                    the first place outside of Arabia and Ethiopia where coffee was widely cultivated. VOC monopolised
                    coffee trading in 1725 to 1780. The plantations on Java were nationalised at independence and
                    revitalised with new varieties of coffee arabica in the 1950s. These varieties were also adopted by
                    smallholders through the government and various development programs. Today, more than 90% of
                    Indonesia’s coffee is grown by smallholders on farms averaging one hectare or less. Much of the
                    production is organic and at least 19 farmers’ cooperatives and exporters are internationally
                    certified to market organic coffee.
                </p>
            </div>
            <div class="info-img animate-right">
                <img src="{{ asset('img/coffee101-1.jpeg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="tea101-story">
    <div class="container">
        <div class="info">
            <div class="info-img padding-right animate-left my-auto">
                <img src="{{ asset('img/coffee101-2.jpeg') }}" alt="">
            </div>
            <div class="description animate-right">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">T</span>radition
                    </h2>
                    <h2 class="headline headline-dark">of Coffee</h2>

                </div>
                <p>Ever since its initial introduction in the 17th & 18th century era, Indonesians have been attached to
                    coffee. Drinking coffee has become a tradition and part of everyday life of Indonesian people that
                    can not be skipped. In major cities like Jakarta, Bandung, Surabaya and Medan, numerous
                    International coffee shop chains and cafes operate in shopping malls and office buildings. But the
                    genuine coffee culture is observable on the street level.
                </p>
                <p>
                    Street vendors sell coffee candies to
                    instant coffee for those who missed out on their morning coffee routines. Almost in every street
                    corner, roadside "stalls" or warung kopi are often packed with visitors. They serve unrestrained
                    brewed coffee in a glass. Most Indonesians prefer to drink black coffee with sugar. Besides this
                    plain coffee, people also serve coffee with herbs and spices.
                </p>
                <p>
                    Some areas in Sumatra, the villages community like West Sumatra, drink coffee from coffee leaves -
                    brewed with hot water - creating a subtle coffee flavor in a cup. They call it Kopi Kahwa. In Aceh,
                    served in a manner that is filtered by the filter length or so-called coffee attraction. They call
                    it Kopi Tarik or Coffee Pull. Below is some examples of Indonesia's coffee culture. May this be an
                    inspiration for coffee connoisseurs to bring Indonesia's coffee culture into America.

                </p>
            </div>
        </div>
    </div>
</section>

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

<section class="tea101-story">
    <div class="container">
        <div class="info">
            <div class="description">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">B</span>enefit
                    </h2>
                    <h2 class="headline headline-dark">of Coffee</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="animate-left">
                            <div class=" benefit">
                                <div class="numberCircle">1</div>
                                <p>Preventing serious illness</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="animate-left">
                            <div class=" benefit">
                                <div class="numberCircle">2</div>
                                <p>Source of Antioxidants</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class=" animate-left">
                            <div class=" benefit">
                                <div class="numberCircle">3</div>
                                <p>Reduce Stress</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class=" animate-left">
                            <div class=" benefit">
                                <div class="numberCircle">4</div>
                                <p>Increase stamina</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class=" animate-right">
                            <div class=" benefit">
                                <div class="numberCircle">5</div>
                                <p>Improve brain function</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class=" animate-right">
                            <div class=" benefit">
                                <div class="numberCircle">6</div>
                                <p>Increase productivity</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class=" animate-right ">
                            <div class=" benefit">
                                <div class="numberCircle">7</div>
                                <p>Make you happier</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class=" animate-right ">
                            <div class=" benefit">
                                <div class="numberCircle">8</div>
                                <p>Overcoming oily face</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection