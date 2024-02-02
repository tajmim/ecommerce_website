@extends('frontend.layouts.master')

@section('content')

<section class="mb-4 pt-3">
            <div class="container">
                <div class="bg-white py-3">
                    <div class="row">
                        <!-- Product Image Gallery -->
                        <div class="col-xl-5 col-lg-6 mb-4">
                            <div class="sticky-top z-3 row gutters-10">
                                <!-- Gallery Images -->
                                <div class="col-12">
                                    <div class="aiz-carousel product-gallery arrow-inactive-transparent arrow-lg-none" data-nav-for=".product-gallery-thumb" data-fade="true" data-auto-height="true" data-arrows="true">

                                        <div class="carousel-box img-zoom rounded-0">
                                            <img class="img-fluid h-auto lazyload mx-auto" src="images/placeholder.jpg" data-src="/frontend/uploads/all/LKIBmCxRe3M0ESC7g9SjJuQ6zgHdZZb3bZMajS1E.webp" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </div>
                                        <div class="carousel-box img-zoom rounded-0">
                                            <img class="img-fluid h-auto lazyload mx-auto" src="images/placeholder.jpg" data-src="/frontend/uploads/all/9w8dW4JRK9DyDU3jl0KduUe72PIjAY3Y7lY7RCi3.webp" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </div>
                                        <div class="carousel-box img-zoom rounded-0">
                                            <img class="img-fluid h-auto lazyload mx-auto" src="images/placeholder.jpg" data-src="/frontend/uploads/all/54Rgq2bYg3IGFIOpKWrpsf8xUnRxoePVe1eztsXd.webp" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </div>

                                    </div>
                                </div>
                                <!-- Thumbnail Images -->
                                <div class="col-12 mt-3 d-none d-lg-block">
                                    <div class="aiz-carousel half-outside-arrow product-gallery-thumb" data-items="7" data-nav-for=".product-gallery" data-focus-select="true" data-arrows="true" data-vertical="false" data-auto-height="true">


                                        <div class="carousel-box c-pointer rounded-0">
                                            <img class="lazyload mw-100 size-60px mx-auto border p-1" src="images/placeholder.jpg" data-src="/frontend/uploads/all/LKIBmCxRe3M0ESC7g9SjJuQ6zgHdZZb3bZMajS1E.webp" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </div>
                                        <div class="carousel-box c-pointer rounded-0">
                                            <img class="lazyload mw-100 size-60px mx-auto border p-1" src="images/placeholder.jpg" data-src="/frontend/uploads/all/9w8dW4JRK9DyDU3jl0KduUe72PIjAY3Y7lY7RCi3.webp" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </div>
                                        <div class="carousel-box c-pointer rounded-0">
                                            <img class="lazyload mw-100 size-60px mx-auto border p-1" src="images/placeholder.jpg" data-src="/frontend/uploads/all/54Rgq2bYg3IGFIOpKWrpsf8xUnRxoePVe1eztsXd.webp" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Product Details -->
                        <div class="col-xl-7 col-lg-6">
                            <div class="text-left">
                                <!-- Product Name -->
                                <h2 class="mb-4 fs-16 fw-700 text-dark">
                                    Women's Slim-Fit Layering Long Sleeve Knit Rib Crew Neck (Available in Plus Size), Pack of 2
                                </h2>

                                <div class="row align-items-center mb-3">
                                    <!-- Review -->
                                    <div class="col-12">
                                        <span class="rating rating-mr-1">
                                            <i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                        </span>
                                        <span class="ml-1 opacity-50 fs-14">(0
                                            reviews)</span>
                                    </div>
                                    <!-- Estimate Shipping Time -->
                                    <!-- In stock -->
                                </div>
                                <div class="row align-items-center">
                                    <!-- Ask about this product -->
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 mb-3">
                                        <a href="javascript:void();" onclick="goToView('product_query')" class="text-primary fs-14 fw-600 d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                                <g id="Group_25571" data-name="Group 25571" transform="translate(-975 -411)">
                                                    <g id="Path_32843" data-name="Path 32843" transform="translate(975 411)" fill="#fff">
                                                        <path d="M 16 31 C 11.9933500289917 31 8.226519584655762 29.43972969055176 5.393400192260742 26.60659980773926 C 2.560270071029663 23.77347946166992 1 20.00665092468262 1 16 C 1 11.9933500289917 2.560270071029663 8.226519584655762 5.393400192260742 5.393400192260742 C 8.226519584655762 2.560270071029663 11.9933500289917 1 16 1 C 20.00665092468262 1 23.77347946166992 2.560270071029663 26.60659980773926 5.393400192260742 C 29.43972969055176 8.226519584655762 31 11.9933500289917 31 16 C 31 20.00665092468262 29.43972969055176 23.77347946166992 26.60659980773926 26.60659980773926 C 23.77347946166992 29.43972969055176 20.00665092468262 31 16 31 Z" stroke="none"></path>
                                                        <path d="M 16 2 C 12.26045989990234 2 8.744749069213867 3.456249237060547 6.100500106811523 6.100500106811523 C 3.456249237060547 8.744749069213867 2 12.26045989990234 2 16 C 2 19.73954010009766 3.456249237060547 23.2552490234375 6.100500106811523 25.89949989318848 C 8.744749069213867 28.54375076293945 12.26045989990234 30 16 30 C 19.73954010009766 30 23.2552490234375 28.54375076293945 25.89949989318848 25.89949989318848 C 28.54375076293945 23.2552490234375 30 19.73954010009766 30 16 C 30 12.26045989990234 28.54375076293945 8.744749069213867 25.89949989318848 6.100500106811523 C 23.2552490234375 3.456249237060547 19.73954010009766 2 16 2 M 16 0 C 24.8365592956543 0 32 7.163440704345703 32 16 C 32 24.8365592956543 24.8365592956543 32 16 32 C 7.163440704345703 32 0 24.8365592956543 0 16 C 0 7.163440704345703 7.163440704345703 0 16 0 Z" stroke="none" fill="#f3af3d"></path>
                                                    </g>
                                                    <path id="Path_32842" data-name="Path 32842" d="M28.738,30.935a1.185,1.185,0,0,1-1.185-1.185,3.964,3.964,0,0,1,.942-2.613c.089-.095.213-.207.361-.344.735-.658,2.252-2.032,2.252-3.555a2.228,2.228,0,0,0-2.37-2.37,2.228,2.228,0,0,0-2.37,2.37,1.185,1.185,0,1,1-2.37,0,4.592,4.592,0,0,1,4.74-4.74,4.592,4.592,0,0,1,4.74,4.74c0,2.577-2.044,4.432-3.028,5.333l-.284.255a1.89,1.89,0,0,0-.243.948A1.185,1.185,0,0,1,28.738,30.935Zm0,3.561a1.185,1.185,0,0,1-.835-2.026,1.226,1.226,0,0,1,1.671,0,1.061,1.061,0,0,1,.148.184,1.345,1.345,0,0,1,.113.2,1.41,1.41,0,0,1,.065.225,1.138,1.138,0,0,1,0,.462,1.338,1.338,0,0,1-.065.219,1.185,1.185,0,0,1-.113.207,1.06,1.06,0,0,1-.148.184A1.185,1.185,0,0,1,28.738,34.5Z" transform="translate(962.004 400.504)" fill="#f3af3d"></path>
                                                </g>
                                            </svg>
                                            <span class="ml-2 text-primary animate-underline-blue">Product Inquiry</span>
                                        </a>
                                    </div>
                                    <div class="col mb-3">
                                        <div class="d-flex">
                                            <!-- Add to wishlist button -->
                                            <a href="javascript:void(0)" onclick="addToWishList(1)" class="mr-3 fs-14 text-dark opacity-60 has-transitiuon hov-opacity-100">
                                                <i class="la la-heart-o mr-1"></i>
                                                Add to wishlist
                                            </a>
                                            <!-- Add to compare button -->
                                            <a href="javascript:void(0)" onclick="addToCompare(1)" class="fs-14 text-dark opacity-60 has-transitiuon hov-opacity-100">
                                                <i class="las la-sync mr-1"></i>
                                                Add to compare
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <!-- Brand Logo & Name -->
                                <div class="d-flex flex-wrap align-items-center mb-3">
                                    <span class="text-secondary fs-14 fw-400 mr-4 w-50px">Brand</span><br>
                                    <a href="https://demo.activeitzone.com/ecommerce/brand/the-crystal-bride" class="text-reset hov-text-primary fs-14 fw-700">The Crystal Bride</a>
                                </div>

                                <!-- Seller Info -->
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="d-flex align-items-center mr-4">
                                        <!-- Shop Name -->
                                        <p class="mb-0 fs-14 fw-700">Inhouse product</p>
                                    </div>
                                    <!-- Messase to seller -->
                                    <div class="">
                                        <button class="btn btn-sm btn-soft-secondary-base btn-outline-secondary-base hov-svg-white hov-text-white rounded-4" onclick="show_chat_modal()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mr-2 has-transition">
                                                <g id="Group_23918" data-name="Group 23918" transform="translate(1053.151 256.688)">
                                                    <path id="Path_3012" data-name="Path 3012" d="M134.849,88.312h-8a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2v3l2.4-3h5.6a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2m1,7a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-5a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z" transform="translate(-1178 -341)" fill="#f4b650"></path>
                                                    <path id="Path_3013" data-name="Path 3013" d="M134.849,81.312h8a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1h-.5a.5.5,0,0,0,0,1h.5a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v.5a.5.5,0,0,0,1,0v-.5a1,1,0,0,1,1-1" transform="translate(-1182 -337)" fill="#f4b650"></path>
                                                    <path id="Path_3014" data-name="Path 3014" d="M131.349,93.312h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(-1181 -343.5)" fill="#f4b650"></path>
                                                    <path id="Path_3015" data-name="Path 3015" d="M131.349,99.312h5a.5.5,0,1,1,0,1h-5a.5.5,0,1,1,0-1" transform="translate(-1181 -346.5)" fill="#f4b650"></path>
                                                </g>
                                            </svg>

                                            Message Seller
                                        </button>
                                    </div>
                                </div>

                                <hr>

                                <!-- For auction product -->
                                <!-- Without auction product -->
                                <!-- Without Wholesale -->
                                <div class="row no-gutters mb-3">
                                    <div class="col-sm-2">
                                        <div class="text-secondary fs-14 fw-400">Price</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="d-flex align-items-center">
                                            <!-- Discount Price -->
                                            <strong class="fs-16 fw-700 text-primary">
                                                $114.000
                                            </strong>
                                            <!-- Home Price -->
                                            <del class="fs-14 opacity-60 ml-2">
                                                $120.000
                                            </del>
                                            <!-- Unit -->
                                            <span class="opacity-70 ml-1">/pc</span>
                                            <!-- Discount percentage -->
                                            <span class="bg-primary ml-2 fs-11 fw-700 text-white w-35px text-center p-1" style="padding-top:2px;padding-bottom:2px;">-5%</span>
                                            <!-- Club Point -->
                                            <div class="ml-2 bg-secondary-base d-flex justify-content-center align-items-center px-3 py-1" style="width: fit-content;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                                    <g id="Group_23922" data-name="Group 23922" transform="translate(-973 -633)">
                                                        <circle id="Ellipse_39" data-name="Ellipse 39" cx="6" cy="6" r="6" transform="translate(973 633)" fill="#fff"></circle>
                                                        <g id="Group_23920" data-name="Group 23920" transform="translate(973 633)">
                                                            <path id="Path_28698" data-name="Path 28698" d="M7.667,3H4.333L3,5,6,9,9,5Z" transform="translate(0 0)" fill="#f3af3d"></path>
                                                            <path id="Path_28699" data-name="Path 28699" d="M5.33,3h-1L3,5,6,9,4.331,5Z" transform="translate(0 0)" fill="#f3af3d" opacity="0.5"></path>
                                                            <path id="Path_28700" data-name="Path 28700" d="M12.666,3h1L15,5,12,9l1.664-4Z" transform="translate(-5.995 0)" fill="#f3af3d"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <small class="fs-11 fw-500 text-white ml-2">Club Point:
                                                    600</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form id="option-choice-form">
                                    <input type="hidden" name="_token" value="Gv4M9VTAjRqeBHWih9s4reip8yqs2Fi1gDHDj1Qh"> <input type="hidden" name="id" value="1">

                                    <!-- Choice Options -->

                                    <!-- Color Options -->
                                    <div class="row no-gutters mb-3">
                                        <div class="col-sm-2">
                                            <div class="text-secondary fs-14 fw-400 mt-2">Color</div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="aiz-radio-inline">
                                                <label class="aiz-megabox pl-0 mr-2 mb-0" data-toggle="tooltip" data-title="AliceBlue">
                                                    <input type="radio" name="color" value="AliceBlue" checked="">
                                                    <span class="aiz-megabox-elem rounded-0 d-flex align-items-center justify-content-center p-1">
                                                        <span class="size-25px d-inline-block rounded" style="background: #F0F8FF;"></span>
                                                    </span>
                                                </label>
                                                <label class="aiz-megabox pl-0 mr-2 mb-0" data-toggle="tooltip" data-title="Amethyst">
                                                    <input type="radio" name="color" value="Amethyst">
                                                    <span class="aiz-megabox-elem rounded-0 d-flex align-items-center justify-content-center p-1">
                                                        <span class="size-25px d-inline-block rounded" style="background: #9966CC;"></span>
                                                    </span>
                                                </label>
                                                <label class="aiz-megabox pl-0 mr-2 mb-0" data-toggle="tooltip" data-title="AntiqueWhite">
                                                    <input type="radio" name="color" value="AntiqueWhite">
                                                    <span class="aiz-megabox-elem rounded-0 d-flex align-items-center justify-content-center p-1">
                                                        <span class="size-25px d-inline-block rounded" style="background: #FAEBD7;"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quantity + Add to cart -->
                                    <div class="row no-gutters mb-3">
                                        <div class="col-sm-2">
                                            <div class="text-secondary fs-14 fw-400 mt-2">Quantity</div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="product-quantity d-flex align-items-center">
                                                <div class="row no-gutters align-items-center aiz-plus-minus mr-3" style="width: 130px;">
                                                    <button class="btn col-auto btn-icon btn-sm btn-light rounded-0" type="button" data-type="minus" data-field="quantity" disabled="">
                                                        <i class="las la-minus"></i>
                                                    </button>
                                                    <input type="number" name="quantity" class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1" value="1" min="1" max="10" lang="en">
                                                    <button class="btn col-auto btn-icon btn-sm btn-light rounded-0" type="button" data-type="plus" data-field="quantity">
                                                        <i class="las la-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="avialable-amount opacity-60">
                                                    (<span id="available-quantity">299</span>
                                                    available)
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Total Price -->
                                    <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                        <div class="col-sm-2">
                                            <div class="text-secondary fs-14 fw-400 mt-1">Total Price</div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="product-price">
                                                <strong id="chosen_price" class="fs-20 fw-700 text-primary">

                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <!-- Add to cart & Buy now Buttons -->
                                <div class="mt-3">
                                    <a href="{{route('cart')}}" class="btn btn-secondary-base mr-2 add-to-cart fw-600 min-w-150px rounded-0 text-white">
                                        <i class="las la-shopping-bag"></i> Add to cart
                                    </a>
                                    <!-- <button type="button" class="btn btn-secondary-base mr-2 add-to-cart fw-600 min-w-150px rounded-0 text-white" onclick="showLoginModal()">
                                        <i class="las la-shopping-bag"></i> Add to cart
                                    </button> -->
                                    <button type="button" class="btn btn-primary buy-now fw-600 add-to-cart min-w-150px rounded-0" onclick="showLoginModal()">
                                        <i class="la la-shopping-cart"></i> Buy Now
                                    </button>
                                    <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none" disabled="">
                                        <i class="la la-cart-arrow-down"></i> Out of Stock
                                    </button>
                                </div>

                                <!-- Promote Link -->
                                <div class="d-table width-100 mt-3">
                                    <div class="d-table-cell">
                                    </div>
                                </div>

                                <!-- Refund -->
                                <div class="row no-gutters mt-3">
                                    <div class="col-sm-2">
                                        <div class="text-secondary fs-14 fw-400 mt-2">Refund</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <a href="https://demo.activeitzone.com/ecommerce/return-policy" target="_blank">
                                            <img src="images/refund-sticker.jpg" height="36">
                                        </a>
                                        <a href="https://demo.activeitzone.com/ecommerce/return-policy" class="text-blue hov-text-primary fs-14 ml-3" target="_blank">View Policy</a>
                                    </div>
                                </div>

                                <!-- Seller Guarantees -->

                                <!-- Share -->
                                <div class="row no-gutters mt-4">
                                    <div class="col-sm-2">
                                        <div class="text-secondary fs-14 fw-400 mt-2">Share</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="aiz-share"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <div class="container">
                <div class="row gutters-16">
                    <!-- Left side -->
                    <div class="col-lg-3">
                        <!-- Seller Info -->

                        <!-- Top Selling Products -->
                        <div class="d-none d-lg-block">
                            <div class="bg-white border mb-4">
                                <div class="p-3 p-sm-4 fs-16 fw-600">
                                    Top Selling Products
                                </div>
                                <div class="px-3 px-sm-4 pb-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/analog-black-dial-mens-watch-32-bk-ck" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/70TVd2OrhelP4B9bqY9SIK3TnUpCtXkSLntYP5O4.webp" alt="Disney Men's Mickey and Friends Button Down Shirt" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/analog-black-dial-mens-watch-32-bk-ck" class="d-block text-reset hov-text-primary">Disney Men's Mickey and Friends Button Down Shirt</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$450.000</span>
                                                        <!-- Home Price -->
                                                        <del class="fs-14 fw-700 opacity-60 ml-1 ml-lg-0 ml-xl-1">
                                                            $600.000
                                                        </del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/bracelet-o0ru1952-rose-gold" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/7vRqfDlqK8EgqbFznmSfu3PP0Y1GCaAtJNEwAelo.webp" alt="Kate Spade New York Lady Marmalade Bracelet O0RU1952 Rose Gold" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/bracelet-o0ru1952-rose-gold" class="d-block text-reset hov-text-primary">Kate Spade New York Lady Marmalade Bracelet O0RU1952 Rose Gold</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$72.000</span>
                                                        <!-- Home Price -->
                                                        <del class="fs-14 fw-700 opacity-60 ml-1 ml-lg-0 ml-xl-1">
                                                            $90.000
                                                        </del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/hp-stream-14-inch-laptop-intel-celeron-n4000-4-gb-ram-64-gb-emmc-windows-10-home-in-s-mode-with-office-365-personal-gtre8" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/4tq17O5lc0hXSnlVqnyYjbI8Fjs0v9Ppl1TtrRoi.webp" alt="Anivia Computer Headsets Over Ear Headphones Wired Gaming Headset with Mic for PC Mac PS4 PS5 Xbox One, Stereo Surround Sound, Purple" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/hp-stream-14-inch-laptop-intel-celeron-n4000-4-gb-ram-64-gb-emmc-windows-10-home-in-s-mode-with-office-365-personal-gtre8" class="d-block text-reset hov-text-primary">Anivia Computer Headsets Over Ear Headphones Wired Gaming Headset with Mic for PC Mac PS4 PS5 Xbox One, Stereo Surround Sound, Purple</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$1,222.000</span>
                                                        <!-- Home Price -->
                                                        <del class="fs-14 fw-700 opacity-60 ml-1 ml-lg-0 ml-xl-1">
                                                            $1,300.000
                                                        </del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/mens-machine-stainless-steel-quartz-chronograph-watch-2gns4" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/GQTEvStCif0VCOgtjERfuvsMowSHybRWFuS7GxlE.webp" alt="SWAROVSKI Lifelong Heart Necklace, Earrings, and Bracelet Crystal Jewelry Collection, Rose Gold &amp; Rhodium Tone Finish" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/mens-machine-stainless-steel-quartz-chronograph-watch-2gns4" class="d-block text-reset hov-text-primary">SWAROVSKI Lifelong Heart Necklace, Earrings, and Bracelet Crystal Jewelry Collection, Rose Gold &amp; Rhodium Tone Finish</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$190.000</span>
                                                        <!-- Home Price -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/calvin-klein-womens-scuba-sleeveless-princess-seamed-sheath-dress-mnluo" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/vmN7CrCxHvCDwLGzTnIBo0iDTjCI7CaxWvTqy5w2.webp" alt="Jessica Simpson Womens Cropped Crewneck Blouse" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/calvin-klein-womens-scuba-sleeveless-princess-seamed-sheath-dress-mnluo" class="d-block text-reset hov-text-primary">Jessica Simpson Womens Cropped Crewneck Blouse</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$145.000</span>
                                                        <!-- Home Price -->
                                                        <del class="fs-14 fw-700 opacity-60 ml-1 ml-lg-0 ml-xl-1">
                                                            $150.000
                                                        </del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/adobe-photoshop-cc-68450" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/d6zJ0hqqTczvV4AgXJX3cFyu1TIFi6kNcHRh1L5I.webp" alt="Adobe Illustrator | Vector graphic design software | 12-month Subscription with auto-renewal, PC/Mac" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/adobe-photoshop-cc-68450" class="d-block text-reset hov-text-primary">Adobe Illustrator | Vector graphic design software | 12-month Subscription with auto-renewal, PC/Mac</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$32.000</span>
                                                        <!-- Home Price -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right side -->
                    <div class="col-lg-9">

                        <!-- Reviews & Ratings -->
                        <div class="bg-white border mb-4">
                            <div class="p-3 p-sm-4">
                                <h3 class="fs-16 fw-700 mb-0">
                                    <span class="mr-4">Reviews &amp; Ratings</span>
                                </h3>
                            </div>
                            <!-- Ratting -->
                            <div class="px-3 px-sm-4 mb-4">
                                <div class="border border-secondary-base bg-soft-secondary-base p-3 p-sm-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-8 mb-3">
                                            <div class="d-flex align-items-center justify-content-between justify-content-md-start">
                                                <div class="w-100 w-sm-auto">
                                                    <span class="fs-36 mr-3">0</span>
                                                    <span class="fs-14 mr-3">out of 5.0</span>
                                                </div>
                                                <div class="mt-sm-3 w-100 w-sm-auto d-flex flex-wrap justify-content-end justify-content-md-start">
                                                    <span class="rating rating-mr-1">
                                                        <i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                                    </span>
                                                    <span class="ml-1 fs-14">(0
                                                        reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="javascript:void(0);" onclick="product_review('1')" class="btn btn-secondary-base fw-400 rounded-0 text-white">
                                                <span class="d-md-inline-block"> Rate this Product</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Reviews -->
                            <div class="py-3 reviews-area">
                                <ul class="list-group list-group-flush">
                                </ul>

                                <div class="text-center fs-18 opacity-70">
                                    There have been no reviews for this product yet.
                                </div>

                                <!-- Pagination -->
                                <div class="aiz-pagination product-reviews-pagination py-2 px-4 d-flex justify-content-end">

                                </div>
                            </div>
                        </div>
                        <!-- Description, Video, Downloads -->
                        <div class="bg-white mb-4 border p-3 p-sm-4">
                            <!-- Tabs -->
                            <div class="nav aiz-nav-tabs">
                                <a href="#tab_default_1" data-toggle="tab" class="mr-5 pb-2 fs-16 fw-700 text-reset active show">Description</a>
                                <a href="#tab_default_2" data-toggle="tab" class="mr-5 pb-2 fs-16 fw-700 text-reset">Video</a>
                            </div>

                            <!-- Description -->
                            <div class="tab-content pt-0">
                                <!-- Description -->
                                <div class="tab-pane fade active show" id="tab_default_1">
                                    <div class="py-5">
                                        <div class="mw-100 overflow-hidden text-left aiz-editor-data">
                                            <ul class="a-unordered-list a-vertical a-spacing-mini" style="margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(17, 17, 17); padding: 0px; font-family: " amazon="" ember",="" arial,="" sans-serif;="" font-size:="" 14px;"="">
                                                <li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">95% Viscose, 5% Elastane</span></li>
                                                <li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">Imported</span></li>
                                                <li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">Machine Wash</span></li>
                                                <li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">Made in Vietnam</span></li>
                                                <li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">This essential T-shirt dress features a high crewneck and a relaxed cut for an effortless look that's ready to style</span></li>
                                                <li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">Luxe Jersey - Perfectly rich, smooth fabric that beautifully drapes</span></li>
                                                <li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">Start every outfit with Daily Ritual's range of elevated basics</span></li>
                                                <li style="list-style: disc; overflow-wrap: break-word; margin: 0px;"><span class="a-list-item" style="overflow-wrap: break-word; display: block;">Model is 5'11" and wearing a size Small</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Video -->
                                <div class="tab-pane fade" id="tab_default_2">
                                    <div class="py-5">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8bsA4vzDbvg"></iframe>
                                        </div>
                                    </div>
                                </div>

                                <!-- Download -->
                                <div class="tab-pane fade" id="tab_default_3">
                                    <div class="py-5 text-center ">
                                        <a href="/frontend/assets/img/placeholder.jpg" class="btn btn-primary">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Related products -->
                        <div class="bg-white border">
                            <div class="p-3 p-sm-4">
                                <h3 class="fs-16 fw-700 mb-0">
                                    <span class="mr-4">Related products</span>
                                </h3>
                            </div>
                            <div class="px-4">
                                <div class="aiz-carousel gutters-5 half-outside-arrow" data-items="5" data-xl-items="3" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows="true" data-infinite="true">
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/calvin-klein-womens-scuba-sleeveless-princess-seamed-sheath-dress-mnluo" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/vmN7CrCxHvCDwLGzTnIBo0iDTjCI7CaxWvTqy5w2.webp" alt="Jessica Simpson Womens Cropped Crewneck Blouse" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/calvin-klein-womens-scuba-sleeveless-princess-seamed-sheath-dress-mnluo" class="d-block text-reset hov-text-primary">Jessica Simpson Womens Cropped Crewneck Blouse</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$145.000</span>
                                                    <del class="fw-700 opacity-60 ml-1">$150.000</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/anne-klein-womens-classic-v-neck-faux-wrap-dress-jsokg" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/4bJDGEhFarQe88k1D7T8ycJKzCZftQ9vKYp01Jcb.webp" alt="Anne Klein Women's Classic V-Neck Faux Wrap Dress" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/anne-klein-womens-classic-v-neck-faux-wrap-dress-jsokg" class="d-block text-reset hov-text-primary">Anne Klein Women's Classic V-Neck Faux Wrap Dress</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$100.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/basil-leaf-off-white-chiffon-asymmetrical-hemline-kurti-eeipg" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/rBBfojyACSTmQBpcJ5Z7jlBZ6a3fxdcONgBmYi4D.webp" alt="Elina fashion Indian Stitched Kurti for Womens With Pant | Readymade Rayon Printed Kurtis Kurta For Women" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/basil-leaf-off-white-chiffon-asymmetrical-hemline-kurti-eeipg" class="d-block text-reset hov-text-primary">Elina fashion Indian Stitched Kurti for Womens With Pant | Readymade Rayon Printed Kurtis Kurta For Women</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$117.600</span>
                                                    <del class="fw-700 opacity-60 ml-1">$120.000</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/sportoli-maxi-dresses-for-women-solid-lightweight-long-racerback-sleeveless-wpocket-z3kgv" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/qdHr9b6l6C6rmtHoqvthJGqMloN5QPtFmzcKsyKB.webp" alt="Sportoli Maxi Dresses for Women Solid Lightweight Long Racerback Sleeveless W/Pocket" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/sportoli-maxi-dresses-for-women-solid-lightweight-long-racerback-sleeveless-wpocket-z3kgv" class="d-block text-reset hov-text-primary">Sportoli Maxi Dresses for Women Solid Lightweight Long Racerback Sleeveless W/Pocket</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$99.400</span>
                                                    <del class="fw-700 opacity-60 ml-1">$140.000</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/Cream-Silk-Banarasi-Sarees-rJ5Jb" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/R6p8ERrpybFfVmZ9eLnitCjnEE87NXmmShuwGMM3.webp" alt="Cream Silk Banarasi Sarees" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/Cream-Silk-Banarasi-Sarees-rJ5Jb" class="d-block text-reset hov-text-primary">Cream Silk Banarasi Sarees</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$70.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/ZLTdream-Belly-Dance-Chiffon-Long-Sleeves-6SRgm" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/WKLjoJC4njGdqaB9Z0J0KzZIl00l9nwNZdlKhbQo.webp" alt="ZLTdream Belly Dance Chiffon Long Sleeves" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/ZLTdream-Belly-Dance-Chiffon-Long-Sleeves-6SRgm" class="d-block text-reset hov-text-primary">ZLTdream Belly Dance Chiffon Long Sleeves</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$85.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/SHELY-Womens-Floral-Print-Maxi-Dresses-tLvvf" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/JoyxNCAie1mgghNozWlCBkFe2366zGIrVgufjfn5.webp" alt="SHELY Women's Floral Print Maxi Dresses" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/SHELY-Womens-Floral-Print-Maxi-Dresses-tLvvf" class="d-block text-reset hov-text-primary">SHELY Women's Floral Print Maxi Dresses</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$26.550</span>
                                                    <del class="fw-700 opacity-60 ml-1">$45.000</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/Wrangler-Womens-Long-Sleeve-Denim-Shirtdress-Lp73k" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/dE5em1mz7BVkLi7f128AtCNGSj3B4SU6mI9J8jO0.webp" alt="Wrangler Women's Long-Sleeve Denim Shirtdress" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/Wrangler-Womens-Long-Sleeve-Denim-Shirtdress-Lp73k" class="d-block text-reset hov-text-primary">Wrangler Women's Long-Sleeve Denim Shirtdress</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$75.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/NioBe-Clothing-Womens-Juniors-Rolled-Cuffs-Ankle-Length-Distressed-Denim-Overalls-6YDZr" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/L1mIeXeqfp0WdkUGb3XxwmKYdmgF1MtCxOIB9rQU.webp" alt="NioBe Clothing Women's Juniors Rolled Cuffs Ankle Length Distressed Denim Overalls" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/NioBe-Clothing-Womens-Juniors-Rolled-Cuffs-Ankle-Length-Distressed-Denim-Overalls-6YDZr" class="d-block text-reset hov-text-primary">NioBe Clothing Women's Juniors Rolled Cuffs Ankle Length Distressed Denim Overalls</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$80.000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box hov-shadow-md my-2 has-transition hov-scale-img">
                                            <div class="">
                                                <a href="https://demo.activeitzone.com/ecommerce/product/Elegant-Shrug-With-Lacework-Not-An-Abaya-DSi8G" class="d-block">
                                                    <img class="img-fit lazyload mx-auto h-140px h-md-190px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/Sz1dCurT5OI3cftxUazbJVONeR5px3gbDtgq4h1P.webp" alt="Elegant Shrug With Lacework-Not An Abaya" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                </a>
                                            </div>
                                            <div class="p-md-3 p-2 text-center">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/Elegant-Shrug-With-Lacework-Not-An-Abaya-DSi8G" class="d-block text-reset hov-text-primary">Elegant Shrug With Lacework-Not An Abaya</a>
                                                </h3>
                                                <div class="fs-14 mt-3">
                                                    <span class="fw-700 text-primary">$38.500</span>
                                                    <del class="fw-700 opacity-60 ml-1">$50.000</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Query -->
                        <div class="bg-white border mt-4 mb-4" id="product_query">
                            <div class="p-3 p-sm-4">
                                <h3 class="fs-16 fw-700 mb-0">
                                    <span>Product Queries (0)</span>
                                </h3>
                            </div>

                            <!-- Login & Register -->
                            <p class="fs-14 fw-400 mb-0 px-3 px-sm-4 mt-3"><a href="https://demo.activeitzone.com/ecommerce/users/login">Login</a> Or <a class="mr-1" href="https://demo.activeitzone.com/ecommerce/users/registration">Register</a>to submit your questions to seller
                            </p>

                            <!-- Query Submit -->

                            <!-- Others Queries -->
                            <div class="queries-area my-4 mb-0 px-3 px-sm-4">
                                <div class="py-3">
                                    <h3 class="fs-16 fw-700 mb-0">
                                        <span>Other Questions</span>
                                    </h3>
                                </div>

                                <!-- Product queries -->
                                <p>No none asked to seller yet</p>

                                <!-- Pagination -->
                                <div class="aiz-pagination product-queries-pagination py-2 d-flex justify-content-end">

                                </div>
                            </div>
                        </div>

                        <!-- Top Selling Products -->
                        <div class="d-lg-none">
                            <div class="bg-white border mb-4">
                                <div class="p-3 p-sm-4 fs-16 fw-600">
                                    Top Selling Products
                                </div>
                                <div class="px-3 px-sm-4 pb-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/analog-black-dial-mens-watch-32-bk-ck" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/70TVd2OrhelP4B9bqY9SIK3TnUpCtXkSLntYP5O4.webp" alt="Disney Men's Mickey and Friends Button Down Shirt" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/analog-black-dial-mens-watch-32-bk-ck" class="d-block text-reset hov-text-primary">Disney Men's Mickey and Friends Button Down Shirt</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$450.000</span>
                                                        <!-- Home Price -->
                                                        <del class="fs-14 fw-700 opacity-60 ml-1 ml-lg-0 ml-xl-1">
                                                            $600.000
                                                        </del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/bracelet-o0ru1952-rose-gold" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/7vRqfDlqK8EgqbFznmSfu3PP0Y1GCaAtJNEwAelo.webp" alt="Kate Spade New York Lady Marmalade Bracelet O0RU1952 Rose Gold" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/bracelet-o0ru1952-rose-gold" class="d-block text-reset hov-text-primary">Kate Spade New York Lady Marmalade Bracelet O0RU1952 Rose Gold</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$72.000</span>
                                                        <!-- Home Price -->
                                                        <del class="fs-14 fw-700 opacity-60 ml-1 ml-lg-0 ml-xl-1">
                                                            $90.000
                                                        </del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/hp-stream-14-inch-laptop-intel-celeron-n4000-4-gb-ram-64-gb-emmc-windows-10-home-in-s-mode-with-office-365-personal-gtre8" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/4tq17O5lc0hXSnlVqnyYjbI8Fjs0v9Ppl1TtrRoi.webp" alt="Anivia Computer Headsets Over Ear Headphones Wired Gaming Headset with Mic for PC Mac PS4 PS5 Xbox One, Stereo Surround Sound, Purple" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/hp-stream-14-inch-laptop-intel-celeron-n4000-4-gb-ram-64-gb-emmc-windows-10-home-in-s-mode-with-office-365-personal-gtre8" class="d-block text-reset hov-text-primary">Anivia Computer Headsets Over Ear Headphones Wired Gaming Headset with Mic for PC Mac PS4 PS5 Xbox One, Stereo Surround Sound, Purple</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$1,222.000</span>
                                                        <!-- Home Price -->
                                                        <del class="fs-14 fw-700 opacity-60 ml-1 ml-lg-0 ml-xl-1">
                                                            $1,300.000
                                                        </del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/mens-machine-stainless-steel-quartz-chronograph-watch-2gns4" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/GQTEvStCif0VCOgtjERfuvsMowSHybRWFuS7GxlE.webp" alt="SWAROVSKI Lifelong Heart Necklace, Earrings, and Bracelet Crystal Jewelry Collection, Rose Gold &amp; Rhodium Tone Finish" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/mens-machine-stainless-steel-quartz-chronograph-watch-2gns4" class="d-block text-reset hov-text-primary">SWAROVSKI Lifelong Heart Necklace, Earrings, and Bracelet Crystal Jewelry Collection, Rose Gold &amp; Rhodium Tone Finish</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$190.000</span>
                                                        <!-- Home Price -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/calvin-klein-womens-scuba-sleeveless-princess-seamed-sheath-dress-mnluo" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/vmN7CrCxHvCDwLGzTnIBo0iDTjCI7CaxWvTqy5w2.webp" alt="Jessica Simpson Womens Cropped Crewneck Blouse" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/calvin-klein-womens-scuba-sleeveless-princess-seamed-sheath-dress-mnluo" class="d-block text-reset hov-text-primary">Jessica Simpson Womens Cropped Crewneck Blouse</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$145.000</span>
                                                        <!-- Home Price -->
                                                        <del class="fs-14 fw-700 opacity-60 ml-1 ml-lg-0 ml-xl-1">
                                                            $150.000
                                                        </del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 px-0 list-group-item border-0">
                                            <div class="row gutters-10 align-items-center hov-scale-img hov-shadow-md overflow-hidden has-transition">
                                                <div class="col-xl-4 col-lg-6 col-4">
                                                    <!-- Image -->
                                                    <a href="https://demo.activeitzone.com/ecommerce/product/adobe-photoshop-cc-68450" class="d-block text-reset">
                                                        <img class="img-fit lazyload h-80px h-md-150px h-lg-80px has-transition" src="images/placeholder.jpg" data-src="/frontend/uploads/all/d6zJ0hqqTczvV4AgXJX3cFyu1TIFi6kNcHRh1L5I.webp" alt="Adobe Illustrator | Vector graphic design software | 12-month Subscription with auto-renewal, PC/Mac" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                                    </a>
                                                </div>
                                                <div class="col text-left">
                                                    <!-- Product name -->
                                                    <div class="d-lg-none d-xl-block mb-3">
                                                        <h4 class="fs-14 fw-400 text-truncate-2">
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/adobe-photoshop-cc-68450" class="d-block text-reset hov-text-primary">Adobe Illustrator | Vector graphic design software | 12-month Subscription with auto-renewal, PC/Mac</a>
                                                        </h4>
                                                    </div>
                                                    <div class="">
                                                        <!-- Price -->
                                                        <span class="fs-14 fw-700 text-primary">$32.000</span>
                                                        <!-- Home Price -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

@endsection