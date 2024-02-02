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
                        <div class="col done">
                            <div class="text-center border border-bottom-6px p-2 text-success">
                                <i class="la-3x mb-2 las la-truck"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">3. Delivery info
                                </h3>
                            </div>
                        </div>
                        <div class="col active">
                            <div class="text-center border border-bottom-6px p-2 text-primary">
                                <i class="la-3x mb-2 las la-credit-card cart-animate" style="margin: 0px; transition: all 2s ease 0s;"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block">4. Payment</h3>
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


<section class="mb-4">
        <div class="container text-left">
            <div class="row">
                <div class="col-lg-8">
                    <form action="https://demo.activeitzone.com/ecommerce/checkout/payment" class="form-default" role="form" method="POST" id="checkout-form">
                        <input type="hidden" name="_token" value="eH5KDgG4Sd3IBkeLWHwewtGU6r53imHeeWfSlsgm">                        <input type="hidden" name="owner_id" value="23">

                        <div class="card rounded-0 border shadow-none">
                            <!-- Additional Info -->
                            <div class="card-header p-4 border-bottom-0">
                                <h3 class="fs-16 fw-700 text-dark mb-0">
                                    Any additional info?
                                </h3>
                            </div>
                            <div class="form-group px-4">
                                <textarea name="additional_info" rows="5" class="form-control rounded-0" placeholder="Type your text"></textarea>
                            </div>

                            <div class="card-header p-4 border-bottom-0">
                                <h3 class="fs-16 fw-700 text-dark mb-0">
                                    Select a payment option
                                </h3>
                            </div>
                            <!-- Payment Options -->
                            <div class="card-body text-center px-4 pt-0">
                                <div class="row gutters-10">
                                    <!-- Paypal -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="paypal" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/paypal.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Paypal</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!--Stripe -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="stripe" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/stripe.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Stripe</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- Mercadopago -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="mercadopago" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/mercadopago.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Mercadopago</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- sslcommerz -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="sslcommerz" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/sslcommerz.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">sslcommerz</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- instamojo -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="instamojo" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/instamojo.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Instamojo</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- razorpay -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="razorpay" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/rozarpay.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Razorpay</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- paystack -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="paystack" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/paystack.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Paystack</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- voguepay -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="voguepay" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/vogue.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">VoguePay</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- payhere -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="payhere" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/payhere.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">payhere</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- ngenius -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="ngenius" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/ngenius.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">ngenius</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- iyzico -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="iyzico" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/iyzico.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Iyzico</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- nagad -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="nagad" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/nagad.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Nagad</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- bkash -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="bkash" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/bkash.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Bkash</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- aamarpay -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="aamarpay" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/aamarpay.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Aamarpay</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- authorizenet -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="authorizenet" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/authorizenet.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Authorize Net</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- payku -->
                                                                            <div class="col-6 col-xl-3 col-md-4">
                                            <label class="aiz-megabox d-block mb-3">
                                                <input value="payku" class="online_payment" type="radio" name="payment_option" checked="">
                                                <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                    <img src="/frontend/uploads/all/payku.png" class="img-fit mb-2">
                                                    <span class="d-block text-center">
                                                        <span class="d-block fw-600 fs-15">Payku</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                                                        <!-- African Payment Getaway -->
                                                                            <!-- flutterwave -->
                                                                                    <div class="col-6 col-xl-3 col-md-4">
                                                <label class="aiz-megabox d-block mb-3">
                                                    <input value="flutterwave" class="online_payment" type="radio" name="payment_option" checked="">
                                                    <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                        <img src="/frontend/uploads/all/flutterwave.png" class="img-fit mb-2">
                                                        <span class="d-block text-center">
                                                            <span class="d-block fw-600 fs-15">flutterwave</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                                                                <!-- payfast -->
                                                                                    <div class="col-6 col-xl-3 col-md-4">
                                                <label class="aiz-megabox d-block mb-3">
                                                    <input value="payfast" class="online_payment" type="radio" name="payment_option" checked="">
                                                    <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                        <img src="/frontend/uploads/all/payfast.png" class="img-fit mb-2">
                                                        <span class="d-block text-center">
                                                            <span class="d-block fw-600 fs-15">payfast</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                                                                                                
                                    <!--paytm -->
                                                                                                                        <div class="col-6 col-xl-3 col-md-4">
                                                <label class="aiz-megabox d-block mb-3">
                                                    <input value="paytm" class="online_payment" type="radio" name="payment_option" checked="">
                                                    <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                        <img src="/frontend/uploads/all/paytm.jpg" class="img-fit mb-2">
                                                        <span class="d-block text-center">
                                                            <span class="d-block fw-600 fs-15">Paytm</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                                                                <!-- toyyibpay -->
                                                                                    <div class="col-6 col-xl-3 col-md-4">
                                                <label class="aiz-megabox d-block mb-3">
                                                    <input value="toyyibpay" class="online_payment" type="radio" name="payment_option" checked="">
                                                    <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                        <img src="/frontend/uploads/all/toyyibpay.png" class="img-fit mb-2">
                                                        <span class="d-block text-center">
                                                            <span class="d-block fw-600 fs-15">ToyyibPay</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                                                                <!-- myfatoorah -->
                                                                                    <div class="col-6 col-xl-3 col-md-4">
                                                <label class="aiz-megabox d-block mb-3">
                                                    <input value="myfatoorah" class="online_payment" type="radio" name="payment_option" checked="">
                                                    <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                        <img src="/frontend/uploads/all/myfatoorah.png" class="img-fit mb-2">
                                                        <span class="d-block text-center">
                                                            <span class="d-block fw-600 fs-15">MyFatoorah</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                                                                <!-- khalti -->
                                                                                <!-- phonepe -->
                                                                                                                <!-- Cash Payment -->
                                                                                                                                                                <div class="col-6 col-xl-3 col-md-4">
                                                <label class="aiz-megabox d-block mb-3">
                                                    <input value="cash_on_delivery" class="online_payment" type="radio" name="payment_option" checked="">
                                                    <span class="d-block aiz-megabox-elem rounded-0 p-3">
                                                        <img src="/frontend/uploads/all/cod.png" class="img-fit mb-2">
                                                        <span class="d-block text-center">
                                                            <span class="d-block fw-600 fs-15">Cash On Delivery</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                                                                                                                                        <!-- Offline Payment -->
                                                                                    
                                                                                                                                                        </div>

                                <!-- Offline Payment Fields -->
                                                                    <div class="d-none mb-3 rounded border bg-white p-3 text-left">
                                        <div id="manual_payment_description">

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Transaction ID <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control mb-3" name="trx_id" id="trx_id" placeholder="Transaction ID" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Photo</label>
                                            <div class="col-md-9">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                            Browse</div>
                                                    </div>
                                                    <div class="form-control file-amount">Choose image
                                                    </div>
                                                    <input type="hidden" name="photo" class="selected-files">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <!-- Wallet Payment -->
                                                                    <div class="py-4 px-4 text-center bg-soft-secondary-base mt-4">
                                        <div class="fs-14 mb-3">
                                            <span class="opacity-80">Or, Your wallet balance :</span>
                                            <span class="fw-700">$1,703.300</span>
                                        </div>
                                                                                    <button type="button" onclick="use_wallet()" class="btn btn-primary fs-14 fw-700 px-5 rounded-0">
                                                Pay with wallet
                                            </button>
                                                                            </div>
                                                            </div>

                            <!-- Agree Box -->
                            <div class="pt-3 px-4 fs-14">
                                <label class="aiz-checkbox">
                                    <input type="checkbox" required="" id="agree_checkbox">
                                    <span class="aiz-square-check"></span>
                                    <span>I agree to the</span>
                                </label>
                                <a href="https://demo.activeitzone.com/ecommerce/terms" class="fw-700">terms and conditions</a>,
                                <a href="https://demo.activeitzone.com/ecommerce/return-policy" class="fw-700">Return Policy</a> &amp;
                                <a href="https://demo.activeitzone.com/ecommerce/privacy-policy" class="fw-700">Privacy Policy</a>
                            </div>

                            <div class="row align-items-center pt-3 px-4 mb-4">
                                <!-- Return to shop -->
                                <div class="col-6">
                                    <a href="https://demo.activeitzone.com/ecommerce" class="btn btn-link fs-14 fw-700 px-0">
                                        <i class="las la-arrow-left fs-16"></i>
                                        Return to shop
                                    </a>
                                </div>
                                <!-- Complete Ordert -->
                                <div class="col-6 text-right">
                                    <a href="{{route('confirm_order')}}" class="btn btn-primary fs-14 fw-700 rounded-0 px-4">Complete Order</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Cart Summary -->
                <div class="col-lg-4 mt-lg-0 mt-4" id="cart_summary">
                    <div class="card rounded-0 border shadow-none">

    <div class="card-header pt-4 pb-1 border-bottom-0">
        <h3 class="fs-16 fw-700 mb-0">Summary</h3>
        <div class="text-right">
            <!-- Items Count -->
            <span class="badge badge-inline badge-primary fs-12 rounded-0 px-2">
                1
                Items
            </span>
            
            <!-- Minimum Order Amount -->
                                        
                                                    
                            
                                                                            
        </div>
    </div>

    <!-- Club point -->
        <div class="px-4 pt-1 w-100 d-flex align-items-center justify-content-between">
        <h3 class="fs-14 fw-700 mb-0">Total Clubpoint</h3>
        <div class="text-right">
            <span class="badge badge-inline badge-secondary-base fs-12 rounded-0 px-2 text-white">
                                                                    
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" class="mr-2">
                    <g id="Group_23922" data-name="Group 23922" transform="translate(-973 -633)">
                      <circle id="Ellipse_39" data-name="Ellipse 39" cx="6" cy="6" r="6" transform="translate(973 633)" fill="#fff"></circle>
                      <g id="Group_23920" data-name="Group 23920" transform="translate(973 633)">
                        <path id="Path_28698" data-name="Path 28698" d="M7.667,3H4.333L3,5,6,9,9,5Z" transform="translate(0 0)" fill="#f3af3d"></path>
                        <path id="Path_28699" data-name="Path 28699" d="M5.33,3h-1L3,5,6,9,4.331,5Z" transform="translate(0 0)" fill="#f3af3d" opacity="0.5"></path>
                        <path id="Path_28700" data-name="Path 28700" d="M12.666,3h1L15,5,12,9l1.664-4Z" transform="translate(-5.995 0)" fill="#f3af3d"></path>
                      </g>
                    </g>
                </svg>
                750
            </span>
        </div>
    </div>
    
    <div class="card-body">
        <!-- Products Info -->
        <table class="table">
            <thead>
                <tr>
                    <th class="product-name border-top-0 border-bottom-1 pl-0 fs-12 fw-400 opacity-60">Product</th>
                    <th class="product-total text-right border-top-0 border-bottom-1 pr-0 fs-12 fw-400 opacity-60">Total</th>
                </tr>
            </thead>
            <tbody>
                                                                        <tr class="cart_item">
                        <td class="product-name pl-0 fs-14 text-dark fw-400 border-top-0 border-bottom">
                            Women's Embellished Tiered Sequin Jacket Dress
                            <strong class="product-quantity">
                                × 1
                            </strong>
                        </td>
                        <td class="product-total text-right pr-0 fs-14 text-primary fw-600 border-top-0 border-bottom">
                            <span class="pl-4 pr-0">$99.000</span>
                        </td>
                    </tr>
                            </tbody>
        </table>

        <input type="hidden" id="sub_total" value="99">

        <table class="table" style="margin-top: 2rem!important;">
            <tfoot>
                <!-- Subtotal -->
                <tr class="cart-subtotal">
                    <th class="pl-0 fs-14 pt-0 pb-2 text-dark fw-600 border-top-0">Subtotal</th>
                    <td class="text-right pr-0 fs-14 pt-0 pb-2 fw-600 text-primary border-top-0">
                        <span class="fw-600">$99.000</span>
                    </td>
                </tr>
                <!-- Tax -->
                <tr class="cart-shipping">
                    <th class="pl-0 fs-14 pt-0 pb-2 text-dark fw-600 border-top-0">Tax</th>
                    <td class="text-right pr-0 fs-14 pt-0 pb-2 fw-600 text-primary border-top-0">
                        <span class="fw-600">$0.000</span>
                    </td>
                </tr>
                <!-- Total Shipping -->
                <tr class="cart-shipping">
                    <th class="pl-0 fs-14 pt-0 pb-2 text-dark fw-600 border-top-0">Total Shipping</th>
                    <td class="text-right pr-0 fs-14 pt-0 pb-2 fw-600 text-primary border-top-0">
                        <span class="fw-600">$0.000</span>
                    </td>
                </tr>
                <!-- Redeem point -->
                                <!-- Coupon Discount -->
                
                                <!-- Total -->
                <tr class="cart-total">
                    <th class="pl-0 fs-14 text-dark fw-600"><span class="strong-600">Total</span></th>
                    <td class="text-right pr-0 fs-14 fw-600 text-primary">
                        <strong><span>$99.000</span></strong>
                    </td>
                </tr>
            </tfoot>
        </table>

        <!-- Remove Redeem Point -->
                            
        <!-- Coupon System -->
                                    <div class="mt-3">
                    <form class="" id="apply-coupon-form" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="eH5KDgG4Sd3IBkeLWHwewtGU6r53imHeeWfSlsgm">                        <input type="hidden" name="owner_id" value="23">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-0" name="code" onkeydown="return event.key != 'Enter';" placeholder="Have coupon code? Apply here" required="">
                            <div class="input-group-append">
                                <button type="button" id="coupon-apply" class="btn btn-primary rounded-0">Apply</button>
                            </div>
                        </div>
                    </form>
                </div>
                    
    </div>
</div>
                </div>
            </div>
        </div>
    </section>

@endsection