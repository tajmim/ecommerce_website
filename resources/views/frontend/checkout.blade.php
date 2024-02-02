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
                        <div class="col active">
                            <div class="text-center border border-bottom-6px p-2 text-primary">
                                <i class="la-3x mb-2 las la-map cart-animate" style="margin: 0px; transition: all 2s ease 0s;"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">2. Shipping info
                                </h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center border border-bottom-6px p-2">
                                <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">3. Delivery info
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

<section class="mb-4 gry-bg">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-xxl-8 col-xl-10 mx-auto">
                    <form class="form-default" data-toggle="validator" action="https://demo.activeitzone.com/ecommerce/checkout/delivery-info" role="form" method="POST">
                        <input type="hidden" name="_token" value="4S2F3cFkG7wS0Lmmy7nyM0IsZjmyE26k2m7D9zFT">                                                    <div class="border bg-white p-4 mb-4">
                                                                <div class="border mb-4">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="aiz-megabox d-block bg-white mb-0">
                                                <input type="radio" name="address_id" value="1" checked="" required="">
                                                <span class="d-flex p-3 aiz-megabox-elem border-0">
                                                    <!-- Checkbox -->
                                                    <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                                    <!-- Address -->
                                                    <span class="flex-grow-1 pl-3 text-left">
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">Address</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">3947 West Side Avenue
Hackensack, NJ 07601</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">Postal Code</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">1254</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">City</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">College</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">State</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">Alaska</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">Country</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">United States</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">Phone</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">201-287-7714</span>
                                                        </div>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <!-- Edit Address Button -->
                                        <div class="col-md-4 p-3 text-right">
                                            <a class="btn btn-sm btn-secondary-base text-white mr-4 rounded-0 px-4" onclick="edit_address('1')">Change</a>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="border mb-4">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="aiz-megabox d-block bg-white mb-0">
                                                <input type="radio" name="address_id" value="10" required="">
                                                <span class="d-flex p-3 aiz-megabox-elem border-0">
                                                    <!-- Checkbox -->
                                                    <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                                    <!-- Address -->
                                                    <span class="flex-grow-1 pl-3 text-left">
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">Address</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">Demo</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">Postal Code</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">2250</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">City</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">Gilberdyke</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">State</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">Aberdeen</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">Country</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">United Kingdom</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="fs-14 text-secondary col-3">Phone</span>
                                                            <span class="fs-14 text-dark fw-500 ml-2 col">123456789</span>
                                                        </div>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <!-- Edit Address Button -->
                                        <div class="col-md-4 p-3 text-right">
                                            <a class="btn btn-sm btn-secondary-base text-white mr-4 rounded-0 px-4" onclick="edit_address('10')">Change</a>
                                        </div>
                                    </div>
                                </div>
                                                                
                                <input type="hidden" name="checkout_type" value="logged">
                                <!-- Add New Address -->
                                <div class="mb-5">
                                    <div class="border p-3 c-pointer text-center bg-light has-transition hov-bg-soft-light h-100 d-flex flex-column justify-content-center" onclick="add_new_address()">
                                        <i class="las la-plus la-2x mb-3"></i>
                                        <div class="alpha-7 fw-700">Add New Address</div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <!-- Return to shop -->
                                    <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                                        <a href="" class="btn btn-link fs-14 fw-700 px-0">
                                            <i class="las la-arrow-left fs-16"></i>
                                            Return to shop
                                        </a>
                                    </div>
                                    <!-- Continue to Delivery Info -->
                                    <div class="col-md-6 text-center text-md-right">
                                        <!-- <button type="submit" class="btn btn-primary fs-14 fw-700 rounded-0 px-4">Continue to Delivery Info
                                    </button></div> -->
                                        <a href="{{route('delivery_info')}}" class="btn btn-primary fs-14 fw-700 rounded-0 px-4">Continue to Delivery Info
                                    </a></div>
                                </div>
                            </div>
                                            </form>
                </div>
            </div>
        </div>
    </section>


@endsection