@extends('layouts.app')

@section('title',
    'About Us | Adida Spices | Lebanese herbs and spices | whole sale food product in Lebanon, Proudly
    Lebanese products')

@section('description',
    '“Adida” was founded in 2007, in Dawhet Aramoun-Lebanon, We Manufacture & sells quality Spices,
    Herbs, Oriental and multinational blends of all kinds. We build up our brand’s success in the country and abroad
    delivering the highest quality!')

@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="/images/bg-about.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">About Us</h2>
                    <h5 class="breadcrumbs-custom-text"><span class="link-primary">“Taste. Enjoy. Repeat.”</span> stems from
                        the roots of high quality customer service, <br>the continuous innovation and Taste creation.</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About-->

    <section class="section section-xxl bg-default text-md-left">
        <div class="container">
            <div class="row row-40 row-md-60 justify-content-center align-items-xl-center">
                <div class="col-md-11 col-lg-5">
                    <h5 class="title-style-2 wow fadeInRight">Best spices since 2007</h5>
                    <h2 class="title-style-3 wow fadeInRight" data-wow-delay=".2s">Who we are</h2>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!-- Nav tabs-->
                        <div class="nav-tabs-wrap">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                        data-toggle="tab">Company</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                        data-toggle="tab">Vision</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                        data-toggle="tab">Values</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4"
                                        data-toggle="tab">Strategy</a></li>
                            </ul>
                        </div>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <p>“Adida” was founded in 2007, in Dawhet Aramoun-Lebanon, and is engaged in the field of
                                    manufacturing and selling spices, herbs and special oriental and multinational blends of
                                    all kinds.</p>
                                <p>With confident moves, we’ve been able to build up our brand’s success in the country and
                                    abroad.</p>
                                <p>Delivering the highest quality customer service is what drives every employee from the
                                    boardroom to the warehouse. What differentiates Adida, “the Best from the Rest”, is the
                                    <b>Purity</b> of our spices.
                                </p>
                                <p>Our quality policy is based on abiding by the QMS ISO 22000 certificate for food safety
                                    management, which covers all Adida Co. operations and activities.</p>
                                <p>Our customers range from individuals who order by grams, to restaurants, catering,
                                    butcheries, bakeries, food stores and country agents who market our products abroad.</p>
                                <p>Commitment, Innovation, Partnership, High Quality requirements and a Pioneering Spirit
                                    are the core of our success.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <p>To become the Ultimate Destination for Spices, Spice Blends & Seasonings across the
                                    retail and food service segments, constantly innovating to provide customers across the
                                    globe with high quality product, unique taste and value for money. This is by producing
                                    the highest and the best quality spices by using top of the line raw materials,
                                    production machinery and packaging equipment.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <p>Since 2007, the culture of Adida Spices has been consistently adherent to an unwavering
                                    commitment to quality and service by providing continuous training and development for
                                    our staff to offer the best flavorful cooking experience.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-4">
                                <p>We rely on <b>longstanding partnerships</b>. </p>
                                <p>Fair and longstanding supplier relationships with certified contract partners enable
                                    extensive traceability and ensure reliable and sustainable procurement. We develop
                                    customer-friendly solutions and tailor-made products to meet every requirement for our
                                    customers in the food trade, food service segments and the food industry.</p>
                                <p>“Adida” follows a special policy in selling its spices <b>by teaching “the Art of
                                        Cooking”</b>.</p>
                                <p>A well trained team is accountable to teach your Chefs or concerned parties the best way
                                    you can use Adida Spices and special Blends in order to get the best taste ever.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 pl-0">
                        <a class="button button-primary button-xs" href="/company-profile.pdf" target="_blank">Company
                            Profile</a>
                    </div>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-7">
                    <div class="slick-slider-1 inset-xl-left-35">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent slick-nav-1 slick-nav-2" id="carousel-parent"
                            data-items="1" data-autoplay="true" data-slide-effect="true" data-child="#child-carousel"
                            data-for="#child-carousel" data-arrows="true">
                            <div class="item"><img src="images/about-8-634x373.jpg" alt="" width="634"
                                    height="373" /></div>
                            <div class="item"><img src="images/about-1-634x373.jpg" alt="" width="634"
                                    height="373" /></div>
                            <div class="item"><img src="images/about-2-634x373.jpg" alt="" width="634"
                                    height="373" /></div>
                            <div class="item"><img src="images/about-3-634x373.jpg" alt="" width="634"
                                    height="373" /></div>
                        </div>
                        <div class="slick-slider child-carousel" id="child-carousel" data-items="3" data-sm-items="4"
                            data-md-items="4" data-lg-items="4" data-xl-items="4" data-xxl-items="4"
                            data-for="#carousel-parent">
                            <div class="item"><img src="images/about-8-143x114.jpg" alt="" width="143"
                                    height="114" /></div>
                            <div class="item"><img src="images/about-1-143x114.jpg" alt="" width="143"
                                    height="114" /></div>
                            <div class="item"><img src="images/about-2-143x114.jpg" alt="" width="143"
                                    height="114" /></div>
                            <div class="item"><img src="images/about-3-143x114.jpg" alt="" width="143"
                                    height="114" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Modern-->
    <section class="parallax-container" data-parallax-img="images/parallax-2.jpg" style="background-attachment: fixed;">
        <div class="parallax-content section-xxl context-dark">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-6 col-sm-4">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">1348</span></h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">Satisfied Clients</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">158</span></h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">Seasonings and Special Blends</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">4760</span></h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">Days of experience, dedication, creation and Customer support
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Services-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-30 box-ordered">
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon fl-bigmug-line-big104"></div>
                        </div>
                        <h4 class="box-icon-modern-title">Unique Taste</h4>
                        <p class="box-icon-modern-text">We choose the highest quality raw material to ensure a unique taste
                            to your dishes.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon fl-bigmug-line-shopping199"></div>
                        </div>
                        <h4 class="box-icon-modern-title">Brand expansion</h4>
                        <p class="box-icon-modern-text">A specialized team works continuously on a brand development plan
                            based on the multinational market needs. We develop customer-friendly solutions and tailor-made
                            products to meet every requirement.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon fl-bigmug-line-like51"></div>
                        </div>
                        <h4 class="box-icon-modern-title">Teaching the “Art of Cooking”</h4>
                        <p class="box-icon-modern-text">A well trained team teaches your Chef or concerned party the best
                            way to use Adida spices and special blends in order to get the best taste ever.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon fl-bigmug-line-giftbox54"></div>
                        </div>
                        <h4 class="box-icon-modern-title">Private Label</h4>
                        <p class="box-icon-modern-text">We offer our existing product portfolio to you according to your
                            requirements and specifications.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Clients-->
    <section class="section section-lg bg-image-1">
        <div class="container">
            <div class="owl-carousel owl-style-2" data-items="2" data-sm-items="3" data-md-items="4" data-lg-items="4"
                data-margin="30" data-dots="true">
                <a class="clients-classic" href="/images/certificates/iso.jpg" data-lightgallery="item"><img
                        src="/images/certificates/iso.jpg" alt="" width="200" height="283" /></a>
                <a class="clients-classic" href="/images/certificates/boecker-pest.png" data-lightgallery="item"><img
                        src="/images/certificates/boecker-pest.png" alt="" width="200" height="267" /></a>
                <a class="clients-classic" href="/images/certificates/boecker-quality.png" data-lightgallery="item"><img
                        src="/images/certificates/boecker-quality.png" alt="" width="200"
                        height="144" /></a>
                <a class="clients-classic" href="/images/certificates/choueifat.png" data-lightgallery="item"><img
                        src="/images/certificates/choueifat.png" alt="" width="200" height="142" /></a>


                <a class="button button-primary button-xs"
                    href="{{ asset('images/certificates/Adida Certificates.pdf') }}" target="_blank">Adida
                    Certificates</a>
                <a class="button button-primary button-xs"
                    href="{{ asset('images/certificates/ADIDA SPICES - FSSC 22000 CERTIFICATE.pdf') }}" target="_blank">
                    FSSC 22000 </a>
                <a class="button button-primary button-xs"
                    href="{{ asset('images/certificates/ADIDA SPICES - ISO 22000 CERTIFICATE.pdf') }}" target="_blank">
                    ISO 22000</a>

            </div>

        </div>

    </section>

@endsection
