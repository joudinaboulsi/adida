@extends('layouts.app')

@section('title', 'Order | Online shopping Lebanon | Online spices and herbs Lebanon, Spice store online, Buy spices online, Savory Spice Shop online, Buy spices and herbs online, Buy Adida Spices online')

@section('description', 'Order: Taste. Enjoy. Repeat! Order desired Adida products from a wide variety, Select quantity and packaging, and Fill out the information form. All done, we will contact you soon.')

@section('content')

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="/images/bg-order.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              	<h2 class="breadcrumbs-custom-title">Order</h2>
                <h5 class="breadcrumbs-custom-text"><span class="link-primary">“Taste. Enjoy. Repeat.”</span> stems from the roots of high quality customer service, <br>the continuous innovation and Taste creation.</h5>
            </div>
        </div>
    </div>
</section>
<!-- Section About-->

<!-- Get in touch-->
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center">
                    <h4>Follow the steps and send your order, we will contact you shortly after to prepare it.</h4>
                </div>
            </div>
        </div>
        {!! Form::open(array('route' => 'place_order_path', 'id' => 'order_form', 'class' => 'rd-form')) !!}
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <!-- Nav tabs-->
            <div class="nav-tabs-wrap">
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a id="st1" class="nav-link active" href="#tabs-1-1" data-toggle="tab"><b>1.</b> Products</a></li>
                    <li class="nav-item" role="presentation"><a id="st2" class="nav-link" href="" data-toggle="tab"><b>2.</b> Quantity and Packaging</a></li>
                    <li class="nav-item" role="presentation"><a id="st3" class="nav-link" href="#tabs-1-3" data-toggle="tab"><b>3.</b> Information</a></li>
                </ul>
            </div>
            <!-- Tab panes-->
            <div class="tab-content">
                <div class="tab-pane text-center fade show active" id="tabs-1-1">
                    <h4>Choose your products</h4>
                    <hr class="mb-3">
                    <table class="table table-striped table-bordered text-left display" id="example" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Type</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $p)
                            <tr>
                                <td>{{ $p->product_id }}</td>
                                <th>
                                    @if($p->category == 1)
                                    Spices
                                    @elseif($p->category == 2)
                                    Spices Blends
                                    @elseif($p->category == 3)
                                    Herbs
                                    @elseif($p->category == 4)
                                    Desserts
                                    @elseif($p->category == 5)
                                    Flavors
                                    @endif
                                </th>
                                <td class="text-left">
                                    @if($p->image)<img src="/images/products/{{$p->image}}" alt="{{ $p->name }}" width="204" height="156"/>@endif
                                    &nbsp;
                                    {{ $p->name }}
                                </td>
                            </tr>
                            @endforeach
                       </tbody>
                    </table>
                    <div class="text-center mt-3 prod-select">
                        <a id="msform1" class="button button-primary continue">Continue</a>
                    </div>
                </div>
                <div class="tab-pane text-center fade" id="tabs-1-2">
                    <h4>Quantity and Packaging</h4>
                    <div class="cart-inline-body" id="quantities_block">
                        
                    </div>
                    <div class="text-center mt-3">
                        <a id="msform2" class="button button-primary continue">Continue</a>
                    </div>
                </div>
                <div class="tab-pane text-center fade" id="tabs-1-3">
                    <h4>Personal Information</h4>
                    <hr>
                    <div class="row row-20 row-md-30">
                        <div class="col-lg-8">
                            <div class="row row-20 row-md-30">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-full-name-2" type="text" name="fullname" data-constraints="@Required" required/>
                                        <label class="form-label" for="contact-full-name-2">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required" required/>
                                        <label class="form-label" for="contact-email-2">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric" required/>
                                        <label class="form-label" for="contact-phone-2">Phone</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-country-2" type="text" name="country" data-constraints="@Required" required/>
                                        <label class="form-label" for="contact-country-2">Country</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-wrap text-left">
                                        <select class="form-input" id="contact-sector-2" name="sector" data-constraints="@Required" required>
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
                                        <label class="form-label" for="contact-sector-2">Sector</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-2">Message</label>
                                <textarea class="form-input textarea-xl" id="contact-message-2" name="message" data-constraints="@Required" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}"></div>
                                <input type="hidden" class="hiddenRecaptcha required show-error-msg" name="hiddenRecaptcha" id="hiddenRecaptcha">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="button button-primary" type="submit">Order</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div id="push"></div>
</section>

@endsection