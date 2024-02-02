@extends('frontend.layouts.master')


@section('content')

<!-- steps -->
<section class="pt-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="row gutters-5 sm-gutters-10">
                        <div class="col active">
                            <div class="text-center border border-bottom-6px p-2 text-primary">
                                <i class="la-3x mb-2 las la-shopping-cart cart-animate" style="margin: 0px; transition: all 2s ease 0s;"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">1. My Cart</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center border border-bottom-6px p-2">
                                <i class="la-3x mb-2 opacity-50 las la-map"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">2. Shipping info
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

<section class="mb-4" id="cart-summary">
        <div class="container">
            <div class="row">
            <div class="col-xxl-8 col-xl-10 mx-auto">
                <div class="border bg-white p-3 p-lg-4 text-left">
                    <div class="mb-4">
                        <!-- Headers -->
                        <div class="row gutters-5 d-none d-lg-flex border-bottom mb-3 pb-3 text-secondary fs-12">
                            <div class="col col-md-1 fw-600">Qty</div>
                            <div class="col-md-5 fw-600">Product</div>
                            <div class="col fw-600">Price</div>
                            <div class="col fw-600">Tax</div>
                            <div class="col fw-600">Total</div>
                            <div class="col-auto fw-600">Remove</div>
                        </div>
                        <!-- Cart Items -->
                        <ul class="list-group list-group-flush">
                                                                                                                        <li class="list-group-item px-0">
                                    <div class="row gutters-5 align-items-center">
                                        <!-- Quantity -->
                                        <div class="col-md-1 col order-1 order-md-0">
                                                                                            <div class="d-flex flex-column align-items-start aiz-plus-minus mr-2 ml-0">
                                                    <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="quantity[50]">
                                                        <i class="las la-plus"></i>
                                                    </button>
                                                    <input type="number" name="quantity[50]" class="col border-0 text-left px-0 flex-grow-1 fs-14 input-number" placeholder="1" value="1" min="1" max="499" onchange="updateQuantity(50, this)" style="padding-left:0.75rem !important;">
                                                    <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantity[50]" disabled="disabled">
                                                        <i class="las la-minus"></i>
                                                    </button>
                                                </div>
                                                                                    </div>
                                        <!-- Product Image & name -->
                                        <div class="col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                            <span class="mr-2 ml-0">
                                                <img src="/frontend/uploads/all/HQboSmyuvf2TShvV4NfJAgeCwm6Qnx1y6xQ2B8gI.webp" class="img-fit size-70px" alt="Women's Embellished Tiered Sequin Jacket Dress" onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                            </span>
                                            <span class="fs-14">Women's Embellished Tiered Sequin Jacket Dress - S</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="col-md col-4 order-2 order-md-0 my-3 my-md-0">
                                            <span class="opacity-60 fs-12 d-block d-md-none">Price</span>
                                            <span class="fw-700 fs-14">$99.000</span>
                                        </div>
                                        <!-- Tax -->
                                        <div class="col-md col-4 order-3 order-md-0 my-3 my-md-0">
                                            <span class="opacity-60 fs-12 d-block d-md-none">Tax</span>
                                            <span class="fw-700 fs-14">$0.000</span>
                                        </div>
                                        <!-- Total -->
                                        <div class="col-md col-5 order-4 order-md-0 my-3 my-md-0">
                                            <span class="opacity-60 fs-12 d-block d-md-none">Total</span>
                                            <span class="fw-700 fs-16 text-primary">$99.000</span>
                                        </div>
                                        <!-- Remove From Cart -->
                                        <div class="col-md-auto col-6 order-5 order-md-0 text-right">
                                            <a href="javascript:void(0)" onclick="removeFromCartView(event, 50)" class="btn btn-icon btn-sm btn-soft-primary bg-soft-secondary-base hov-bg-primary btn-circle">
                                                <i class="las la-trash fs-16"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                                                                            <li class="list-group-item px-0">
                                    <div class="row gutters-5 align-items-center">
                                        <!-- Quantity -->
                                        <div class="col-md-1 col order-1 order-md-0">
                                                                                            <div class="d-flex flex-column align-items-start aiz-plus-minus mr-2 ml-0">
                                                    <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="quantity[51]">
                                                        <i class="las la-plus"></i>
                                                    </button>
                                                    <input type="number" name="quantity[51]" class="col border-0 text-left px-0 flex-grow-1 fs-14 input-number" placeholder="1" value="1" min="1" max="1000" onchange="updateQuantity(51, this)" style="padding-left:0.75rem !important;">
                                                    <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantity[51]" disabled="disabled">
                                                        <i class="las la-minus"></i>
                                                    </button>
                                                </div>
                                                                                    </div>
                                        <!-- Product Image & name -->
                                        <div class="col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                            <span class="mr-2 ml-0">
                                                <img src="/frontend/uploads/all/5hObtdAm7iV4AD4Fln9EM4UjiPzdqvFzayZNneLo.webp" class="img-fit size-70px" alt="ESR for iPhone 15 Pro Max Case with MagSafe, Supports Magnetic Charging, Slim Liquid Silicone Case, Shock Absorbing, Screen and Camera Protection, Cloud Series, Light Tan" onerror="this.onerror=null;this.src='/public/assets/img/placeholder.jpg';">
                                            </span>
                                            <span class="fs-14">ESR for iPhone 15 Pro Max Case with MagSafe, Supports Magnetic Charging, Slim Liquid Silicone Case, Shock Absorbing, Screen and Camera Protection, Cloud Series, Light Tan - 64GB</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="col-md col-4 order-2 order-md-0 my-3 my-md-0">
                                            <span class="opacity-60 fs-12 d-block d-md-none">Price</span>
                                            <span class="fw-700 fs-14">$379.050</span>
                                        </div>
                                        <!-- Tax -->
                                        <div class="col-md col-4 order-3 order-md-0 my-3 my-md-0">
                                            <span class="opacity-60 fs-12 d-block d-md-none">Tax</span>
                                            <span class="fw-700 fs-14">$0.000</span>
                                        </div>
                                        <!-- Total -->
                                        <div class="col-md col-5 order-4 order-md-0 my-3 my-md-0">
                                            <span class="opacity-60 fs-12 d-block d-md-none">Total</span>
                                            <span class="fw-700 fs-16 text-primary">$379.050</span>
                                        </div>
                                        <!-- Remove From Cart -->
                                        <div class="col-md-auto col-6 order-5 order-md-0 text-right">
                                            <a href="javascript:void(0)" onclick="removeFromCartView(event, 51)" class="btn btn-icon btn-sm btn-soft-primary bg-soft-secondary-base hov-bg-primary btn-circle">
                                                <i class="las la-trash fs-16"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                                    </ul>
                    </div>

                    <!-- Subtotal -->
                    <div class="px-0 py-2 mb-4 border-top d-flex justify-content-between">
                        <span class="opacity-60 fs-14">Subtotal</span>
                        <span class="fw-700 fs-16">$478.050</span>
                    </div>
                    <div class="row align-items-center">
                        <!-- Return to shop -->
                        <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                            <a href="" class="btn btn-link fs-14 fw-700 px-0">
                                <i class="las la-arrow-left fs-16"></i>
                                Return to shop
                            </a>
                        </div>
                        <!-- Continue to Shipping -->
                        <div class="col-md-6 text-center text-md-right">
                                                            <a href="{{route('checkout')}}" class="btn btn-primary fs-14 fw-700 rounded-0 px-4">
                                    Continue to Shipping
                                </a>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    AIZ.extra.plusMinus();
</script>
    </section>


@endsection