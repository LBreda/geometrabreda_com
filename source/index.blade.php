@extends('_layouts.main')

@section('body')
    <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" style="background-image:url(assets/images/slider-main/bg1.jpg)">
            <div class="slider-content">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12 text-center">
                            <h2 class="slide-title" data-animation-in="slideInLeft">17 Years of excellence in</h2>
                            <h3 class="slide-sub-title" data-animation-in="slideInRight">Construction Industry</h3>
                            <p data-animation-in="slideInLeft" data-duration-in="1.2">
                                <a href="services.html" class="slider btn btn-primary">Our Services</a>
                                <a href="contact.html" class="slider btn btn-primary border">Contact Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(assets/images/slider-main/bg2.jpg)">
            <div class="slider-content text-start">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                            <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                            <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                            <p data-animation-in="slideInRight">
                                <a href="services.html" class="slider btn btn-primary border">Our Services</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(assets/images/slider-main/bg3.jpg)">
            <div class="slider-content text-end">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Engineers</h2>
                            <h3 class="slide-sub-title" data-animation-in="fadeIn">We believe sustainability</h3>
                            <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your
                                failure that determines how you achieve success.</p>
                            <div data-animation-in="slideInLeft">
                                <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Get
                                    Free Quote</a>
                                <a href="about.html" class="slider btn btn-primary border"
                                   aria-label="learn-more-about-us">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="call-to-action-box no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-start">
                        <div class="call-to-action-text">
                            <h3 class="action-title">We understand your needs on construction</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-dark" href="#">Request Quote</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action style box -->
        </div><!-- Container end -->
    </section><!-- Action end -->

    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ts-intro">
                        <h2 class="into-title">About Us</h2>
                        <h3 class="into-sub-title">We deliver landmark projects</h3>
                        <p>We are rethoric question ran over her cheek When she reached the first hills of the Italic
                            Mountains,
                            she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of
                            Alphabet Village
                            and the subline of her own road, the Line Lane.</p>
                    </div><!-- Intro box end -->

                    <div class="gap-20"></div>

                    <div class="row">
                        <div class="col-md-4">
                            <x-card-with-icon title="Caratteristica 1" icon="trophy" icon-style="--fa-primary-color: goldenrod; --fa-secondary-color: gold;">Testo 1</x-card-with-icon>
                        </div><!-- col end -->
                        <div class="col-md-4">
                            <x-card-with-icon title="Caratteristica 2" icon="heart" icon-style="--fa-primary-color: red; --fa-secondary-color: red;">Testo 2</x-card-with-icon>
                        </div><!-- col end -->
                        <div class="col-md-4">
                            <x-card-with-icon title="Caratteristica 3" icon="wrench" icon-style="--fa-primary-color: gray; --fa-secondary-color: orange; --fa-secondary-opacity: 1.0">Testo 3</x-card-with-icon>
                        </div><!-- col end -->
                        <div class="col-md-4">
                            <x-card-with-icon title="Caratteristica 4" icon="helmet-safety" icon-style="--fa-primary-color: orange; --fa-secondary-color: orange;">Testo 4</x-card-with-icon>
                        </div><!-- col end -->
                        <div class="col-md-4">
                            <x-card-with-icon title="Caratteristica 5" icon="toolbox" icon-style="--fa-primary-color: orange; --fa-secondary-color: black;">Testo 5</x-card-with-icon>
                        </div><!-- col end -->
                        <div class="col-md-4">
                            <x-card-with-icon title="Caratteristica 6" icon="memo-circle-check" icon-style="--fa-primary-color: green; --fa-secondary-color: light-blue;">Testo 6</x-card-with-icon>
                        </div><!-- col end -->
                    </div><!-- Content row 1 end -->
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="ts-service-area" class="ts-service-area pb-0 dark-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">We Are Specialists In</h2>
                    <h3 class="section-sub-title">What We Do</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-lg-4">
                    <x-card-with-icon title="Servizio 1" icon="buildings" icon-style="--fa-primary-color: #ffb600; --fa-secondary-color: #ffb600;" title-style="color: #ffb600">Testo 1</x-card-with-icon>
                    <x-card-with-icon title="Servizio 2" icon="screwdriver-wrench" icon-style="--fa-primary-color: #ffb600; --fa-secondary-color: #ffb600;" title-style="color: #ffb600">Testo 2</x-card-with-icon>
                    <x-card-with-icon title="Servizio 3" icon="pen-ruler" icon-style="--fa-primary-color: #ffb600; --fa-secondary-color: #ffb600;" title-style="color: #ffb600">Testo 3</x-card-with-icon>
                </div><!-- Col end -->

                <div class="col-lg-4 text-center">
                    <img loading="lazy" class="img-fluid" src="/assets/images/services/service-center.png" alt="service-avater-image">
                </div><!-- Col end -->

                <div class="col-lg-4">
                    <x-card-with-icon title="Servizio 4" icon="swatchbook" icon-style="--fa-primary-color: #ffb600; --fa-secondary-color: #ffb600;" title-style="color: #ffb600">Testo 4</x-card-with-icon>
                    <x-card-with-icon title="Servizio 5" icon="person-digging" icon-style="--fa-primary-color: #ffb600; --fa-secondary-color: #ffb600;" title-style="color: #ffb600">Testo 5</x-card-with-icon>
                    <x-card-with-icon title="Servizio 6" icon="user-helmet-safety" icon-style="--fa-primary-color: #ffb600; --fa-secondary-color: #ffb600;" title-style="color: #ffb600">Testo 6</x-card-with-icon>
                </div><!-- Col end -->
            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Service end -->

    <div class="gap-40"></div>

@endsection
