@extends('frontend.layouts.master')


@section('content')

<!-- steps -->
<section class="pt-5 mb-0">
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
                        <div class="col done">
                            <div class="text-center border border-bottom-6px p-2 text-success">
                                <i class="la-3x mb-2 las la-truck"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">3. Delivery info
                                </h3>
                            </div>
                        </div>
                        <div class="col done">
                            <div class="text-center border border-bottom-6px p-2 text-success">
                                <i class="la-3x mb-2 las la-credit-card"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">4. Payment</h3>
                            </div>
                        </div>
                        <div class="col active">
                            <div class="text-center border border-bottom-6px p-2 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32.001" viewBox="0 0 32 32.001" class="cart-rotate mb-3 mt-1" style="transform: rotate(360deg);">
                                    <g id="Group_23976" data-name="Group 23976" transform="translate(-282 -404.889)">
                                      <path class="cart-ok has-transition" id="Path_28723" data-name="Path 28723" d="M313.283,409.469a1,1,0,0,0-1.414,0l-14.85,14.85-5.657-5.657a1,1,0,1,0-1.414,1.414l6.364,6.364a1,1,0,0,0,1.414,0l.707-.707,14.85-14.849A1,1,0,0,0,313.283,409.469Z" fill="#ffffff" style="fill: rgb(212, 53, 51);"></path>
                                      <g id="LWPOLYLINE">
                                        <path id="Path_28724" data-name="Path 28724" d="M313.372,416.451,311.72,418.1a14,14,0,1,1-5.556-8.586l1.431-1.431a16,16,0,1,0,5.777,8.365Z" fill="#d43533"></path>
                                      </g>
                                    </g>
                                </svg>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">5. Confirmation
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- cart details -->

<section class="py-4">
        <div class="container text-left">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                                        <!-- Order Confirmation Text-->
                    <div class="text-center py-4 mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" class=" mb-3">
                            <g id="Group_23983" data-name="Group 23983" transform="translate(-978 -481)">
                              <circle id="Ellipse_44" data-name="Ellipse 44" cx="18" cy="18" r="18" transform="translate(978 481)" fill="#85b567"></circle>
                              <g id="Group_23982" data-name="Group 23982" transform="translate(32.439 8.975)">
                                <rect id="Rectangle_18135" data-name="Rectangle 18135" width="11" height="3" rx="1.5" transform="translate(955.43 487.707) rotate(45)" fill="#fff"></rect>
                                <rect id="Rectangle_18136" data-name="Rectangle 18136" width="3" height="18" rx="1.5" transform="translate(971.692 482.757) rotate(45)" fill="#fff"></rect>
                              </g>
                            </g>
                        </svg>
                        <h1 class="mb-2 fs-28 fw-500 text-success">Thank You for Your Order!</h1>
                        <p class="fs-13 text-soft-dark">A copy or your order summary has been sent to <strong>customer@example.com</strong></p>
                    </div>
                    <!-- Order Summary -->
                    <div class="mb-4 bg-white p-4 border">
                        <h5 class="fw-600 mb-3 fs-16 text-soft-dark pb-2 border-bottom">Order Summary</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table fs-14 text-soft-dark">
                                    <tbody><tr>
                                        <td class="w-50 fw-600 border-top-0 pl-0 py-2">Order date:</td>
                                        <td class="border-top-0 py-2">23-12-2023 16:38 PM</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600 border-top-0 pl-0 py-2">Name:</td>
                                        <td class="border-top-0 py-2">Paul K. Jensen</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600 border-top-0 pl-0 py-2">Email:</td>
                                        <td class="border-top-0 py-2">customer@example.com</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600 border-top-0 pl-0 py-2">Shipping address:</td>
                                        <td class="border-top-0 py-2">3947 West Side Avenue
Hackensack, NJ 07601, College, United States</td>
                                    </tr>
                                </tbody></table>
                            </div>
                            <div class="col-md-6">
                                <table class="table">
                                    <tbody><tr>
                                        <td class="w-50 fw-600 border-top-0 py-2">Order status:</td>
                                        <td class="border-top-0 pr-0 py-2">Pending</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600 border-top-0 py-2">Total order amount:</td>
                                        <td class="border-top-0 pr-0 py-2">$99.000</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600 border-top-0 py-2">Shipping:</td>
                                        <td class="border-top-0 pr-0 py-2">Flat shipping rate</td>
                                    </tr>
                                    <tr>
                                        <td class="w-50 fw-600 border-top-0 py-2">Payment method:</td>
                                        <td class="border-top-0 pr-0 py-2">Cash On Delivery</td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                    </div>

                    <!-- Orders Info -->
                                            <div class="card shadow-none border rounded-0">
                            <div class="card-body">
                                <!-- Order Code -->
                                <div class="text-center py-1 mb-4">
                                    <h2 class="h5 fs-20">Order Code: <span class="fw-700 text-primary">20231223-16385685</span></h2>
                                </div>
                                <!-- Order Details -->
                                <div>
                                    <h5 class="fw-600 text-soft-dark mb-3 fs-16 pb-2">Order Details</h5>
                                    <!-- Product Details -->
                                    <div>
                                        <table class="table table-responsive-md text-soft-dark fs-14">
                                            <thead>
                                                <tr>
                                                    <th class="opacity-60 border-top-0 pl-0">#</th>
                                                    <th class="opacity-60 border-top-0" width="30%">Product</th>
                                                    <th class="opacity-60 border-top-0">Variation</th>
                                                    <th class="opacity-60 border-top-0">Quantity</th>
                                                    <th class="opacity-60 border-top-0">Delivery Type</th>
                                                    <th class="text-right opacity-60 border-top-0 pr-0">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                    <tr>
                                                        <td class="border-top-0 border-bottom pl-0">1</td>
                                                        <td class="border-top-0 border-bottom">
                                                                                                                            <a href="https://demo.activeitzone.com/ecommerce/product/womens-embellished-tiered-sequin-jacket-dress-uv7kp" target="_blank" class="text-reset">
                                                                    Women's Embellished Tiered Sequin Jacket Dress
                                                                                                                                    </a>
                                                                                                                    </td>
                                                        <td class="border-top-0 border-bottom">
                                                            S
                                                        </td>
                                                        <td class="border-top-0 border-bottom">
                                                            1
                                                        </td>
                                                        <td class="border-top-0 border-bottom">
                                                                                                                            Home Delivery
                                                                                                                    </td>
                                                        <td class="border-top-0 border-bottom pr-0 text-right">$99.000</td>
                                                    </tr>
                                                                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Order Amounts -->
                                    <div class="row">
                                        <div class="col-xl-5 col-md-6 ml-auto mr-0">
                                            <table class="table ">
                                                <tbody>
                                                    <!-- Subtotal -->
                                                    <tr>
                                                        <th class="border-top-0 py-2">Subtotal</th>
                                                        <td class="text-right border-top-0 pr-0 py-2">
                                                            <span class="fw-600">$99.000</span>
                                                        </td>
                                                    </tr>
                                                    <!-- Shipping -->
                                                    <tr>
                                                        <th class="border-top-0 py-2">Shipping</th>
                                                        <td class="text-right border-top-0 pr-0 py-2">
                                                            <span>$0.000</span>
                                                        </td>
                                                    </tr>
                                                    <!-- Tax -->
                                                    <tr>
                                                        <th class="border-top-0 py-2">Tax</th>
                                                        <td class="text-right border-top-0 pr-0 py-2">
                                                            <span>$0.000</span>
                                                        </td>
                                                    </tr>
                                                    <!-- Coupon Discount -->
                                                    <tr>
                                                        <th class="border-top-0 py-2">Coupon Discount</th>
                                                        <td class="text-right border-top-0 pr-0 py-2">
                                                            <span>$0.000</span>
                                                        </td>
                                                    </tr>
                                                    <!-- Total -->
                                                    <tr>
                                                        <th class="py-2"><span class="fw-600">Total</span></th>
                                                        <td class="text-right pr-0">
                                                            <strong><span>$99.000</span></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                                    </div>
            </div>
        </div>
    </section>


@endsection