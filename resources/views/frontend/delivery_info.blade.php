@extends('frontend.layouts.master')


@section('content')

<!-- steps -->
<section class="pt-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="row gutters-5 sm-gutters-10">
                        <div class="col done">
                            <div class="text-center border border-bottom-6px p-2 text-success">
                                <i class="la-3x mb-2 las la-shopping-cart"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">1. My Cart</h3>
                            </div>
                        </div>
                        <div class="col done">
                            <div class="text-center border border-bottom-6px p-2 text-success">
                                <i class="la-3x mb-2 las la-map"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">2. Shipping info
                                </h3>
                            </div>
                        </div>
                        <div class="col active">
                            <div class="text-center border border-bottom-6px p-2 text-primary">
                                <i class="la-3x mb-2 las la-truck cart-animate" style="margin: 0px; transition: all 2s ease 0s;"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">3. Delivery info
                                </h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center border border-bottom-6px p-2">
                                <i class="la-3x mb-2 opacity-50 las la-credit-card"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">4. Payment</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center border border-bottom-6px p-2">
                                <i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">5. Confirmation
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- cart details -->

<section class="py-4 gry-bg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-10 mx-auto">
                    <div class="border bg-white p-4 mb-4">
                        <form class="form-default" action="https://demo.activeitzone.com/ecommerce/checkout/payment-select" role="form" method="POST">
                            <input type="hidden" name="_token" value="KEF4LyOGuDWwy99weCBxjEOFiBdJO0lSrlP6hs5J">                            
                            <!-- Inhouse Products -->
                            
                            <!-- Seller Products -->
                                                                                                <div class="card mb-5 border-0 rounded-0 shadow-none">
                                        <div class="card-header py-3 px-0 border-bottom-0">
                                            <h5 class="fs-16 fw-700 text-dark mb-0">LOUIS VUITTON Products</h5>
                                        </div>
                                        <div class="card-body p-0">
                                            <!-- Product List -->
                                            <ul class="list-group list-group-flush border p-3 mb-3">
                                                                                                                                                                                                        <li class="list-group-item">
                                                        <div class="d-flex align-items-center">
                                                            <span class="mr-2 mr-md-3">
                                                                <img src="/frontend/uploads/all/HQboSmyuvf2TShvV4NfJAgeCwm6Qnx1y6xQ2B8gI.webp" class="img-fit size-60px" alt="Women's Embellished Tiered Sequin Jacket Dress" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                            </span>
                                                            <span class="fs-14 fw-400 text-dark">
                                                                Women's Embellished Tiered Sequin Jacket Dress
                                                                <br>
                                                                                                                                    <span class="fs-12 text-secondary">Variation: S</span>
                                                                                                                            </span>
                                                        </div>
                                                    </li>
                                                                                            </ul>
                                            <!-- Choose Delivery Type -->
                                                                                            <div class="row pt-3">
                                                    <div class="col-md-6">
                                                        <h6 class="fs-14 fw-700 mt-3">Choose Delivery Type</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row gutters-5">
                                                            <!-- Home Delivery -->
                                                                                                                        <div class="col-6">
                                                                <label class="aiz-megabox d-block bg-white mb-0">
                                                                    <input type="radio" name="shipping_type_23" value="home_delivery" onchange="show_pickup_point(this, 23)" data-target=".pickup_point_id_23" checked="">
                                                                    <span class="d-flex p-3 aiz-megabox-elem rounded-0" style="padding: 0.75rem 1.2rem;">
                                                                        <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                                                        <span class="flex-grow-1 pl-3 fw-600">Home Delivery</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <!-- Carrier -->
                                                                                                                        <!-- Local Pickup -->
                                                                                                                            <div class="col-6">
                                                                    <label class="aiz-megabox d-block bg-white mb-0">
                                                                        <input type="radio" name="shipping_type_23" value="pickup_point" onchange="show_pickup_point(this, 23)" data-target=".pickup_point_id_23">
                                                                        <span class="d-flex p-3 aiz-megabox-elem rounded-0" style="padding: 0.75rem 1.2rem;">
                                                                            <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                                                            <span class="flex-grow-1 pl-3 fw-600">Local Pickup</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                                                                    </div>

                                                        <!-- Pickup Point List -->
                                                                                                                    <div class="mt-4 pickup_point_id_23 d-none">
                                                                <div class="dropdown bootstrap-select form-control aiz- rounded-0"><select class="form-control aiz-selectpicker rounded-0" name="pickup_point_id_23" data-live-search="true" tabindex="-98">
                                                                    <option>Select your nearest pickup point</option>
                                                                                                                                                <option value="1" data-content="<span class='d-block'>
                                                                                            <span class='d-block fs-16 fw-600 mb-2'>Benedict Green</span>
                                                                                            <span class='d-block opacity-50 fs-12'><i class='las la-map-marker'></i> Dolor veniam velit</span>
                                                                                            <span class='d-block opacity-50 fs-12'><i class='las la-phone'></i>+1 (551) 565-88</span>
                                                                                        </span>">
                                                                        </option>
                                                                                                                                                <option value="2" data-content="<span class='d-block'>
                                                                                            <span class='d-block fs-16 fw-600 mb-2'>Robert C. Rieger</span>
                                                                                            <span class='d-block opacity-50 fs-12'><i class='las la-map-marker'></i> 4184 Boring Lane
San Francisco, CA 94107</span>
                                                                                            <span class='d-block opacity-50 fs-12'><i class='las la-phone'></i>415-737-5445</span>
                                                                                        </span>">
                                                                        </option>
                                                                                                                                        </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select your nearest pickup point"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select your nearest pickup point</div></div> </div></button><div class="dropdown-menu "><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list"></div><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                                            </div>
                                                                                                            </div>
                                                </div>
                                                
                                                <!-- Carrier Wise Shipping -->
                                                
                                                                                    </div>
                                    </div>
                                                            
                            <div class="pt-4 d-flex justify-content-between align-items-center">
                                <!-- Return to shop -->
                                <a href="" class="btn btn-link fs-14 fw-700 px-0">
                                    <i class="la la-arrow-left fs-16"></i>
                                    Return to shop
                                </a>
                                <!-- Continue to Payment -->
                                <a href="{{route('payment')}}" class="btn btn-primary fs-14 fw-700 rounded-0 px-4">Continue to Payment</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection