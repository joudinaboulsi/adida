@extends('layouts.app')

@section('title',
    'Our Products | Wide variety of Spices and herbs | Blends of spices and herbs in Lebanon, Quality
    spices and herbs in Lebanon')

@section('description',
    'Spice it up with the PURITY of our products! Which includes Spices, Spice blends, Herbs,
    Desserts, and Flavors. The entire spectrum of spices and their derivatives processed and blended as per the requirements
    of the customer.')

@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="/images/bg-products.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Products</h2>
                    <h5 class="breadcrumbs-custom-text">Our product range encompasses the entire spectrum of spices and their
                        derivatives <br>processed and blended as per the requirements of the customer.</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About-->

    <!-- Section Shop-->
    <section class="section section-xxl bg-default">
        <div class="container-fluid isotope-wrap">
            <div class="isotope-filters">
                <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline"
                    data-custom-toggle=".isotope-filters-list" data-custom-toggle-disable-on-blur="true"
                    data-custom-toggle-hide-on-blur="true"><span class="icon mdi mdi-chevron-down"></span>Filter</button>
                <div class="isotope-filters-list-wrap">
                    <ul class="isotope-filters-list">
                        <li><a class="active" href="#" data-isotope-filter="*">All</a></li>
                        <li><a href="#" data-isotope-filter="Type 1">Spices</a></li>
                        <li><a href="#" data-isotope-filter="Type 2">Spices Blends</a></li>
                        <li><a href="#" data-isotope-filter="Type 3">Herbs</a></li>
                        <li><a href="#" data-isotope-filter="Type 4">Desserts</a></li>
                        <li><a href="#" data-isotope-filter="Type 5">Flavors</a></li>
                    </ul>
                </div>
            </div>
            <div class="row row-30 isotope" data-lightgallery="group">
                @foreach ($products as $p)
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 isotope-item p-1 p-sm-auto"
                        data-filter="Type {{ $p->category }}">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                @if ($p->image != null)
                                    <div class="product-figure"><img src="/images/products/{{ $p->image }}"
                                            alt="{{ $p->name }}" width="350" height="250" /></div>
                                @else
                                    <div class="product-figure"><img src="{{ asset('images/default.png') }}"
                                            alt="{{ $p->name }}" width="350" height="250" /></div>
                                @endif
                                <h5 class="product-title">{{ $p->name }}</h5>
                            </div>
                            <div class="product-button-wrap"></div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
