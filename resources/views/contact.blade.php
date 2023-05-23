@extends('layouts.app')

@section('title', 'Contact us | Share Your feedback | Leave ADIDA your message, Let us know your comments, customer service')

@section('description', 'We aim to provide great customer service. Your feedback is important to us. Share with us your comments, compliments, questions, product inquiries. Fill the form, leave your message, and we are ready to help!')

@section('content')

@if ($message = Session::get('success'))
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Notice</h4>
            </div>
            <div class="modal-body">
                <p>{{ $message }}</p>
            </div>
        </div>
    </div>
</div>
@endif

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="/images/bg-contact.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              	<h2 class="breadcrumbs-custom-title">Contact Us</h2>
              	<h5 class="breadcrumbs-custom-text">Adida qualified team is here to provide you with more information, <br>answer your questions and create a memory out of your dishes.</h5>
            </div>
        </div>
    </div>
</section>
<!-- Section About-->

<!-- Get in touch-->
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="title-classic">
            <h3 class="title-classic-title">Get in touch</h3>
            <p class="title-classic-subtitle">We are available 24/7 by e-mail or by phone. You can also use our <br class="d-none d-lg-block">quick contact form to ask a question about our products.</p>
        </div>
        {!! Form::open(array('route' => 'contact_path', 'id' => 'contact', 'class' => 'rd-form')) !!}
            <input id="check" type="text" name="check"/>
            <div class="row row-20 row-md-30">
                <div class="col-lg-8">
                    <div class="row row-20 row-md-30">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="fullname" type="text" name="fullname" required/>
                                <label class="form-label" for="fullname">Full Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="email" type="email" name="email" required/>
                                <label class="form-label" for="email">E-mail</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="phone" type="text" name="phone"/>
                                <label class="form-label" for="phone">Phone</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="country" type="text" name="country"/>
                                <label class="form-label" for="country">Country</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-wrap">
                                <select class="form-input" id="sector" name="sector" required>
                                    <option value="Select Sector" disabled selected>Select Sector</option>
                                    <option value="Food Industry">Food Industry</option>
                                    <option value="Food Service (Diet Center, Bakery, Butchery, Canteen, etc..)">Food Service (Diet Center, Bakery, Butchery, Canteen, etc..)</option>
                                    <option value="Caterer">Caterer</option>
                                    <option value="Bar/Café/Restaurant">Bar/Café/Restaurant</option>
                                    <option value="Wholesaler/Retailer">Wholesaler/Retailer</option>
                                    <option value="Distributor/Reseller">Distributor/Reseller</option>
                                    <option value="Private label">Private label</option>
                                    <option value="Other">Other (Please Specify)</option>
                                </select>
                                <label class="form-label" for="sector">Sector</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}"></div>
                                <input type="hidden" class="hiddenRecaptcha required show-error-msg" name="hiddenRecaptcha" id="hiddenRecaptcha">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-wrap">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-input textarea-xl" id="message" name="message" required></textarea>
                    </div>
                </div>
            </div>
            <button class="button button-lg button-primary button-zakaria" type="submit">Send Request</button>
        {!! Form::close() !!}
    </div>
</section>

<!-- Get in touch-->
<section class="section section-xl bg-gray-4">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-4">
              	<h4>Phones</h4>
              	<ul class="contacts-classic">
            		<li><a href="tel:+9615803209">+961 5 803 209</a></li>
            		<li><a href="tel:+9613561189">+961 3 561 189</a></li>
              	</ul>
            </div>
            <div class="col-sm-6 col-md-4">
              	<h4>Address</h4>
              	<div class="contacts-classic"><a href="#">Beirut Dawhet Aramoun - Venicia Street <br> Beirut - Lebanon</a></div>
            </div>
            <div class="col-sm-6 col-md-4">
              	<h4>E-mails</h4>
              	<ul class="contacts-classic">
              		<li><p>info [at] adidaspices [dot] com</p></li>
              	</ul>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <!-- RD Google Map-->
    <div class="google-map-container" data-key="AIzaSyBBWmuzra9J1f1PyeLLxEdjUy5gHzHQNyc" data-zoom="17" data-center="Beirut Dawhet Aramoun - Venicia Street" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
    	<div class="google-map"></div>
      	<ul class="google-map-markers">
            <li data-location="Beirut Dawhet Aramoun - Venicia Street" data-description="Beirut Dawhet Aramoun - Venicia Street" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
      	</ul>
    </div>
</section>

@endsection