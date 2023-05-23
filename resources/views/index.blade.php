@extends('layouts.app')

@section('title',
    'Adida Spices | Lebanese herbs and spices | whole sale food product in Lebanon | Proudly Lebanese products, Wholesale
    spices in Lebanon, Wholesale tea & herbs in Lebanon, Oriental and multinational blends in Lebanon, Quality herbs and
    spices in Lebanon, Lebanese herbs and spices with ISO 22000 certified, Lebanese Spices, Lebanese flavors, Top 10 best
    Lebanese herbs, Top 5 best spices in Lebanon, 100% healthy Lebanese herbs, Healthy herbs in Lebanon, Lebanese herb
    manufacturing, Lebanese Spices manufacturing, Food safety Lebanon, Food flavors, Traditional Lebanese herbs and spices,
    Shop for Spices online, Lebanese cuisine flavors, Lebanese food, Spices Lebanon, Lebanese flavors, Middle Eastern spice
    blends, Ground spices, Lebanese dishes, Bahar, Baharat, Lebanese seven spice, Seven spice, Spice blends, Levantine
    cuisine, Mediterranean cuisine, Middle Eastern cuisine, Spice companies in Lebanon, Lebanese spices online, Food
    distributors in Lebanon, Spices factories in Lebanon, Culinary herbs, List of all herbs and spices, Best Spice & Herbs
    traders in Lebanon, Best Spice & Herbs manufactures in Lebanon, Instant ready mixes.')

@section('description',
    'Welcome to Adida Spices a world of flavors! We manufacture & sell quality Spices, Herbs,
    Oriental and multinational blends of all kinds. Cook in confidence with our ISO 22000 certified products.')

@section('content')

    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-6 swiper-nav-1" data-loop="true">
        <div class="swiper-wrapper text-sm-left">
            <div class="swiper-slide" data-slide-bg="/images/slide-1.png">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="swiper-box">
                            <h5 class="swiper-title-3" data-caption-animate="fadeInRight" data-caption-delay="200">Providing
                                quality products</h5>
                            <h2 class="swiper-title-1 mob-title1" data-caption-animate="fadeInLeft"
                                data-caption-delay="100">Taste. Enjoy. Repeat.</h2>
                            <h3 class="swiper-title-2 mob-title2" data-caption-animate="fadeInRight"
                                data-caption-delay="200">100% healthy</h3>
                            <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300">
                                <a class="button button-lg button-shadow-2 button-primary button-zakaria"
                                    href="{{ route('products_path') }}">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="/images/slide-2.jpg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="swiper-box">
                            <h5 class="swiper-title-3" data-caption-animate="fadeInRight" data-caption-delay="200">Since
                                2007</h5>
                            <h2 class="swiper-title-1 mob-title1" data-caption-animate="fadeInLeft"
                                data-caption-delay="100">A Wide Variety</h2>
                            <h3 class="swiper-title-2 mob-title2" data-caption-animate="fadeInRight"
                                data-caption-delay="200">Of Different<br>Spices</h3>
                            <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300">
                                <a class="button button-lg button-shadow-2 button-primary button-zakaria"
                                    href="{{ route('products_path') }}">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>

    <section class="section bg-default">
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-style-13" data-items="1" data-sm-items="2" data-lg-items="2" data-xxl-items="2"
            data-dots="true" data-mouse-drag="false">
            <!-- Product Dawn-->
            <a class="product-dawn product-dawn-bg-1" href="{{ route('products_path') }}">
                <div class="unit unit-spacing-0 align-items-center">
                    <div class="unit-left">
                        <div class="product-dawn-figure"><img src="/images/product-1-234x362.png" alt=""
                                width="500" height="362" /></div>
                    </div>
                    <div class="unit-body">
                        <div class="product-dawn-title">
                            <div class="heading-3 product-dawn-title-big">Herbs</div>
                        </div>
                        <div class="button button-sm button-icon-3 product-dawn-button"><span
                                class="mdi mdi-arrow-right"></span></div>
                    </div>
                </div>
            </a>
            <!-- Product Dawn-->
            <a class="product-dawn product-dawn-bg-2" href="{{ route('products_path') }}">
                <div class="unit unit-spacing-0 align-items-center">
                    <div class="unit-left">
                        <div class="product-dawn-figure"><img src="/images/product-2-200x362.png" alt=""
                                width="500" height="362" /></div>
                    </div>
                    <div class="unit-body">
                        <div class="product-dawn-title">
                            <div class="heading-3 product-dawn-title-big">Spices</div>
                        </div>
                        <div class="button button-sm button-icon-3 product-dawn-button"><span
                                class="mdi mdi-arrow-right"></span></div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Featured Events-->
    <section class="section section-xxl section-bottom-0 section-inset-5 bg-gray-100 text-sm-left bg-image"
        style="background-image: url(/images/bg-image-1.jpg);">
        <div class="container">
            <div class="row justify-content-sm-end">
                <div class="col-sm-9 col-md-8 col-lg-7 col-xl-6">
                    <h2 class="title-style-3 wow fadeInRight"><span class="title-decor-1">Why</span> Adida?</h2>
                    <div class="swiper-container swiper-slider swiper-slider-custom swiper-slider-7 swiper-scrollbar-1"
                        data-autoplay="5000" data-direction="vertical" data-margin="25" data-slides="auto"
                        data-simulate-touch="true" data-mousewheel="true">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="box-icon-kelly block-1">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-left">
                                        <div class="unit-left">
                                            <img src="/images/4.jpg" class="img-fluid">
                                        </div>
                                        <div class="unit-body">
                                            <h4 class="box-icon-kelly-title">Purity</h4>
                                            <p class="box-icon-kelly-text">Never mixed with other ingredients in order to
                                                reduce the cost.</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="box-icon-kelly block-1">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-left">
                                        <div class="unit-left">
                                            <img src="/images/1.jpg" class="img-fluid">
                                        </div>
                                        <div class="unit-body">
                                            <h4 class="box-icon-kelly-title">100% Natural</h4>
                                            <p class="box-icon-kelly-text">Without artificial flavor enhancers and
                                                additives.</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="box-icon-kelly block-1">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-left">
                                        <div class="unit-left">
                                            <img src="/images/2.jpg" class="img-fluid">
                                        </div>
                                        <div class="unit-body">
                                            <h4 class="box-icon-kelly-title">Always Fresh</h4>
                                            <p class="box-icon-kelly-text">Delivered as per the FIFO requirement (First In
                                                First Out).</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="box-icon-kelly block-1">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-left">
                                        <div class="unit-left">
                                            <div class="box-icon-kelly-svg">
                                                <img src="/images/3.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="unit-body">
                                            <h4 class="box-icon-kelly-title">Quality</h4>
                                            <p class="box-icon-kelly-text">Based on abiding the QMS ISO 22000 for food
                                                safety management.</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide swiper-slide-last"></div>
                        </div>
                        <!-- Siwper Scrollbar-->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New products-->
    <section class="section section-xxl bg-default">
        <div class="container">
            <h2 class="title-style-3 wow fadeScale">Top products</h2>
            <div class="row row-30 justify-content-center align-items-center">
                <div class="col-md-9 col-lg-6">
                    <div class="owl-nav-1 owl-nav-2">
                        <div class="owl-style-14">
                            <!-- Owl Carousel-->
                            <div class="owl-carousel" data-items="1" data-autoplay="true" data-mouse-drag="true"
                                data-navigation-class=".owl-nav-1">
                                @foreach ($crispy as $c)
                                    <!-- Product Terri-->
                                    <article class="product-terri">
                                        @if ($c->image)
                                            <div class="product-figure"><img src="/images/products/{{ $c->image }}"
                                                    alt="{{ $c->name }}" width="350" height="250" /></div>
                                        @else
                                            <div class="product-figure"><img src="{{ asset('images/default.png') }}"
                                                    alt="{{ $c->name }}" width="250" height="250" /></div>
                                        @endif
                                        <h3 class="product-terri-title">{{ $c->name }}</h3>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="row row-30 row-md-40">
                        @foreach ($top as $t)
                            <div class="col-sm-6 wow fadeInDown">
                                <!-- Product-->
                                <article class="product product-3">
                                    <div class="product-body">
                                        @if ($t->image)
                                            <div class="product-figure"><img src="/images/products/{{ $t->image }}"
                                                    alt="{{ $t->name }}" width="350" height="250" /></div>
                                        @else
                                            <div class="product-figure"><img src="{{ asset('images/default.png') }}"
                                                    alt="{{ $t->name }}" width="350" height="250" /></div>
                                        @endif
                                        <h5 class="product-title">{{ $t->name }}</h5>
                                    </div>
                                    <div class="product-button-wrap"></div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <a class="button button-lg button-shadow-2 button-primary button-zakaria wow fadeInUp"
                href="{{ route('products_path') }}">View more</a>
        </div>
    </section>

    <!-- Our gallery-->
    <section class="section section-xxl bg-image-1">
        <div class="container">
            <h2 class="title-style-3 wow fadeScale">Featured recipes</h2>
            <div class="card-columns mt-5">
                <div class="card border-0">
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="/images/recipes/crispy-chicken.png"
                                alt="Chicken crispy recipe" width="370" height="239" /></div>
                        <div class="post-classic-content">
                            <h5 class="post-classic-title">Chicken crispy recipe</h5>
                            <p class="post-classic-text">Ingredients: 1 kilo crispy seasoning + 10 kilograms of flour + 500
                                grams of salt, mix the mixture well, then sifted to make the mixture well
                                homogeneous.<br>Method of preparation: The pulled chicken breast is cut into one and a half
                                finger width. We put two bowls: one bowl with water to drink and the second with a crispy
                                flour mixture<br>Then we put the chicken pieces in the mixture and they are well mixed in
                                the fingers and then we carry the chicken pieces and they are quickly loaded into the water
                                container, then put them in a crispy flour<br>It is mixed again and ready to be fried.</p>
                        </div>
                    </article>
                </div>
                <div class="card border-0">
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="/images/recipes/biryani.png" alt="Biryani recipe"
                                width="370" height="239" /></div>
                        <div class="post-classic-content">
                            <h5 class="post-classic-title">Biryani recipe</h5>
                            <p class="post-classic-text">Boil the sliced meat with flavors for 45 minutes, meanwhile cut
                                the onions and tomatoes into small pieces, wash the rice and set aside then the meat is
                                ready. We roast the onions and put them over the meat with spices, yogurt, tomatoes and
                                chopped potatoes, and leave on heat for 5 minutes, then add tomato paste to the meat and
                                cover for 10 minutes. Boil the rice until it is half ripe, then put the mixture on the rice
                                on low heat and cover the pot for 10-20 minutes until it is ready to serve.</p>
                        </div>
                    </article>
                </div>
                <div class="card border-0">
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="/images/recipes/chineese-with-veggies.png"
                                alt="Chinese food with vegetables recipe" width="370" height="239" /></div>
                        <div class="post-classic-content">
                            <h5 class="post-classic-title">Chinese food with vegetables recipe</h5>
                            <p class="post-classic-text">1 kilo chicken breast cut into slices and add two tablespoons of
                                spices and 3 tablespoons of white vinegar and a small cup of vegetable oil, half a cup of
                                fresh lemon juice, two tablespoons of soy sauce, and half a tablespoon of hot chili, and two
                                lobes of garlic, ground and two grated carrots, two peppers Red and green in color,
                                mushrooms and onions, cut into slices and then mix well, then cook until the chicken is well
                                cooked.</p>
                        </div>
                    </article>
                </div>
            </div>
            <a class="button button-lg button-shadow-2 button-primary button-zakaria wow fadeInUp"
                href="{{ route('recipes_path') }}">View more</a>
        </div>
    </section>

    <!-- Our blog-->
    <section class="section section-xxl bg-default">
        <div class="container">
            <h2 class="title-style-3 wow fadeScale">Latest News</h2>
            <div class="row row-lg row-30">
                <div class="col-sm-6 wow fadeInLeft">
                    <!-- Post Creative-->
                    <article class="post post-lisa block-2">
                        <div class="post-lisa-content">
                            <div class="post-lisa-tag">News</div>
                            <h4 class="post-lisa-title">Adida Co. never compromises on Quality and Business ethics, we are
                                ISO 22000 certified.</h4>
                        </div>
                        <div class="post-lisa-figure"><img src="/images/iso-22000.jpg" alt="ISO 22000" width="550"
                                height="247" /></div>
                    </article>
                </div>
                <div class="col-sm-6 wow fadeInRight">
                    <!-- Post Creative-->
                    <article class="post post-lisa block-2">
                        <div class="post-lisa-content">
                            <div class="post-lisa-tag">Events</div>
                            <h4 class="post-lisa-title">Join us to the Gulfood Exhibition from 16 to 21 Feb 2020 at Dubai
                                World Trade Center and Taste few of our most delicious recipes with a live cooking station
                                on site.</h4>
                        </div>
                        <div class="post-lisa-figure"><img src="/images/gulf.jpg" alt="Gulfood" width="550"
                                height="247" /></div>
                    </article>
                </div>
            </div>
            <!-- <a class="button button-lg button-shadow-2 button-primary button-zakaria wow fadeInUp" href="{{ route('news_path') }}">View more</a> -->
        </div>
    </section>

@endsection
