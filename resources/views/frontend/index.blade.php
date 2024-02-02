@extends('frontend.layouts.master')


@section('content')


<!-- Sliders -->
<div class="home-banner-area mb-3" style="">
    <div class="container">
        <div class="d-flex flex-wrap position-relative">
            <div class="position-static d-none d-xl-block">
                <div class="aiz-category-menu bg-white rounded-0 border-top" id="category-sidebar" style="width:270px;">
                    <ul class="list-unstyled categories no-scrollbar mb-0 text-left">
                        <li class="category-nav-element border border-top-0" data-id="1">
                            <a href="category/women-clothing-fashion" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="{{ asset('frontend/assets/img/placeholder.jpg') }}" data-src="{{ asset('frontend/uploads/all/46v0RI8PXlQa4Yy0IftaGaK9rZUQdLOAFkpnjRXT.webp') }}" width="16" alt="Women Clothing &amp; Fashion" onerror="this.onerror=null;this.src='{{ asset('frontend/assets/img/owa7P9YOaVWC.jpg') }}';">

                                <span class="cat-name has-transition">Women Clothing &amp; Fashion</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="2">
                            <a href="category/men-clothing-fashion" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/LHUk7AM6okO07NvMOkVB35JbQBCLGLjfbRBuUNHc.webp" width="16" alt="Men Clothing &amp; Fashion" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Men Clothing &amp; Fashion</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="3">
                            <a href="category/computer-accessories" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/kTwoR2hUnTf1y6kAOmt9FUidF6Qo8IK0RkvGVMbi.webp" width="16" alt="Computer &amp; Accessories" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Computer &amp; Accessories</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="4">
                            <a href="category/automobile-motorcycle" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/vafdWTltz6NGVOA2BOaSC3Y7PPFmxmSHX6KBhn4Z.webp" width="16" alt="Automobile &amp; Motorcycle" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Automobile &amp; Motorcycle</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="5">
                            <a href="category/kids-toy" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/7Hpz9FWvKRNENKEXd13gqNPlFxz8LFJgCTFzlZbR.webp" width="16" alt="Kids &amp; toy" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Kids &amp; toy</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="6">
                            <a href="category/sports-outdoor" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/jNdturV05yXj1UsPHurYFoJs410G39D5C2bnPGor.webp" width="16" alt="Sports &amp; outdoor" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Sports &amp; outdoor</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="7">
                            <a href="category/jewelry-watches" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/R6AnVQNPd89NvPZelfi4F8rfkbFIiu8XteN74BFz.webp" width="16" alt="Jewelry &amp; Watches" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Jewelry &amp; Watches</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="8">
                            <a href="category/cellphones-tabs" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/JjUx7LIwj97wFpsgffYGwYxtdEiQLVGPtBWYE4wq.webp" width="16" alt="Cellphones &amp; Tabs" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Cellphones &amp; Tabs</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="9">
                            <a href="category/beauty-health-hair" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/KHQpABDau3b7oMyDFNSJYSMgprsQ1Kq5uij9fw3U.webp" width="16" alt="Beauty, Health &amp; Hair" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Beauty, Health &amp; Hair</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                        <li class="category-nav-element border border-top-0" data-id="10">
                            <a href="category/home-improvement-tools" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/9hMfQOGGQrpmFO1KEbTJ9SijUxM8p8TEsm6o4FVp.webp" width="16" alt="Home Improvement &amp; Tools" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <span class="cat-name has-transition">Home Improvement &amp; Tools</span>
                            </a>

                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                <div class="c-preloader text-center absolute-center">
                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sliders -->
            <div class="home-slider">
                <div class="aiz-carousel dots-inside-bottom" data-autoplay="true" data-infinite="true">
                    <div class="carousel-box">
                        <a>
                            <!-- Image -->
                            <img class="d-block mw-100 img-fit overflow-hidden h-180px h-md-320px h-lg-460px overflow-hidden" src="frontend/uploads/all/dbZvNvIJbghWindaOQxhrM0isq5twF9cRX0RBmJA.webp" alt="Active eCommerce CMS promo" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a>
                            <!-- Image -->
                            <img class="d-block mw-100 img-fit overflow-hidden h-180px h-md-320px h-lg-460px overflow-hidden" src="frontend/uploads/all/sY9upW7zlKDDx3CTxnE3h1uv89fbPU9JBGbbnjF2.webp" alt="Active eCommerce CMS promo" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a>
                            <!-- Image -->
                            <img class="d-block mw-100 img-fit overflow-hidden h-180px h-md-320px h-lg-460px overflow-hidden" src="frontend/uploads/all/K11jEaa22um8nGJD5niqHNNTHYZtV0iGLng26x2Y.webp" alt="Active eCommerce CMS promo" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a>
                            <!-- Image -->
                            <img class="d-block mw-100 img-fit overflow-hidden h-180px h-md-320px h-lg-460px overflow-hidden" src="frontend/uploads/all/f9Ja3KaY5iDcYDen8vTvorlP926Y8JCKt4LSzLeF.webp" alt="Active eCommerce CMS promo" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                    </div>
                    <div class="carousel-box">
                        <a>
                            <!-- Image -->
                            <img class="d-block mw-100 img-fit overflow-hidden h-180px h-md-320px h-lg-460px overflow-hidden" src="frontend/uploads/all/1YZAY1dFiqBXZtEbHIBSBeKyTM5n6Ylk9fVSsJTO.webp" alt="Active eCommerce CMS promo" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Flash Deal -->
<section class="mb-2 mb-md-3 mt-2 mt-md-3" id="flash_deal">
    <div class="container">
        <!-- Top Section -->
        <div class="d-flex flex-wrap mb-2 mb-md-3 align-items-baseline justify-content-between">
            <!-- Title -->
            <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                <span class="d-inline-block">Flash Sale</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24" class="ml-3">
                    <path id="Path_28795" data-name="Path 28795" d="M30.953,13.695a.474.474,0,0,0-.424-.25h-4.9l3.917-7.81a.423.423,0,0,0-.028-.428.477.477,0,0,0-.4-.207H21.588a.473.473,0,0,0-.429.263L15.041,18.151a.423.423,0,0,0,.034.423.478.478,0,0,0,.4.2h4.593l-2.229,9.683a.438.438,0,0,0,.259.5.489.489,0,0,0,.571-.127L30.9,14.164a.425.425,0,0,0,.054-.469Z" transform="translate(-15 -5)" fill="#fcc201"></path>
                </svg>
            </h3>
            <!-- Links -->
            <div>
                <div class="text-dark d-flex align-items-center mb-0">
                    <a href="flash-deals" class="fs-10 fs-md-12 fw-700 text-reset has-transition opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary mr-3">View All Flash Sale</a>
                    <span class=" border-left border-soft-light border-width-2 pl-3">
                        <a href="flash-deal/falsh-sale-k7qpu" class="fs-10 fs-md-12 fw-700 text-reset has-transition opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary">View All Products from This Flash Sale</a>
                    </span>
                </div>
            </div>
        </div>

        <!-- Countdown for small device -->
        <div class="bg-white mb-3 d-md-none">
            <div class="aiz-count-down-circle" end-date="2025/01/01 00:00:00"></div>
        </div>

        <div class="row gutters-5 gutters-md-16">
            <!-- Flash Deals Baner & Countdown -->
            <div class="col-xxl-4 col-lg-5 col-6 h-200px h-md-400px h-lg-475px">
                <div class="h-100 w-100 w-xl-auto" style="background-image: url('frontend/uploads/all/vFdr4HrQUc9xyw96AHQ4INLZfWo4cPdAB15y9DS6.webp'); background-size: cover; background-position: center center;">
                    <div class="py-5 px-md-3 px-xl-5 d-none d-md-block">
                        <div class="bg-white">
                            <div class="aiz-count-down-circle" end-date="2025/01/01 00:00:00"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Flash Deals Products -->
            <div class="col-xxl-8 col-lg-7 col-6">
                <div class="aiz-carousel border-top  border-right  arrow-inactive-none arrow-x-0" data-items="5" data-xxl-items="5" data-xl-items="3.5" data-lg-items="3" data-md-items="2" data-sm-items="2.5" data-xs-items="2" data-arrows="true" data-dots="false">
                    <div class="carousel-box   border-left ">

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  border-right  has-transition hov-shadow-out z-1">
                            <a href="product/daily-ritual-womens-jersey-short-sleeve-boxy-pocket-t-shirt-dress-s6bhs" class="d-block py-md-3 overflow-hidden hov-scale-img" title="Women's Slim-Fit Layering Long Sleeve Knit Rib Crew Neck (Available in Plus Size), Pack of 2">
                                <!-- Image -->
                                <img src="frontend/uploads/all/9w8dW4JRK9DyDU3jl0KduUe72PIjAY3Y7lY7RCi3.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="Women's Slim-Fit Layering Long Sleeve Knit Rib Crew Neck (Available in Plus Size), Pack of 2" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$114.000</span>
                                    <del class="d-block fw-400 text-secondary">$120.000</del>
                                </div>
                            </a>
                        </div>

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  border-right  has-transition hov-shadow-out z-1">
                            <a href="product/calvin-klein-womens-scuba-sleeveless-princess-seamed-sheath-dress-mnluo" class="d-block py-md-3 overflow-hidden hov-scale-img" title="Jessica Simpson Womens Cropped Crewneck Blouse">
                                <!-- Image -->
                                <img src="frontend/uploads/all/vmN7CrCxHvCDwLGzTnIBo0iDTjCI7CaxWvTqy5w2.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="Jessica Simpson Womens Cropped Crewneck Blouse" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$145.000</span>
                                    <del class="d-block fw-400 text-secondary">$150.000</del>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="carousel-box  ">

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  border-right  has-transition hov-shadow-out z-1">
                            <a href="product/bracelet-o0ru1952-rose-gold" class="d-block py-md-3 overflow-hidden hov-scale-img" title="Kate Spade New York Lady Marmalade Bracelet O0RU1952 Rose Gold">
                                <!-- Image -->
                                <img src="frontend/uploads/all/7vRqfDlqK8EgqbFznmSfu3PP0Y1GCaAtJNEwAelo.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="Kate Spade New York Lady Marmalade Bracelet O0RU1952 Rose Gold" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$72.000</span>
                                    <del class="d-block fw-400 text-secondary">$90.000</del>
                                </div>
                            </a>
                        </div>

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  border-right  has-transition hov-shadow-out z-1">
                            <a href="product/basil-leaf-off-white-chiffon-asymmetrical-hemline-kurti-eeipg" class="d-block py-md-3 overflow-hidden hov-scale-img" title="Elina fashion Indian Stitched Kurti for Womens With Pant | Readymade Rayon Printed Kurtis Kurta For Women">
                                <!-- Image -->
                                <img src="frontend/uploads/all/rBBfojyACSTmQBpcJ5Z7jlBZ6a3fxdcONgBmYi4D.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="Elina fashion Indian Stitched Kurti for Womens With Pant | Readymade Rayon Printed Kurtis Kurta For Women" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$117.600</span>
                                    <del class="d-block fw-400 text-secondary">$120.000</del>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="carousel-box  ">

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  border-right  has-transition hov-shadow-out z-1">
                            <a href="product/oneplus-buds-white-headphones-headphones-mics-ovxsj" class="d-block py-md-3 overflow-hidden hov-scale-img" title="ESR for iPhone 15 Pro Max Case with MagSafe, Supports Magnetic Charging, Slim Liquid Silicone Case, Shock Absorbing, Screen and Camera Protection, Cloud Series, Light Tan">
                                <!-- Image -->
                                <img src="frontend/uploads/all/5hObtdAm7iV4AD4Fln9EM4UjiPzdqvFzayZNneLo.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="ESR for iPhone 15 Pro Max Case with MagSafe, Supports Magnetic Charging, Slim Liquid Silicone Case, Shock Absorbing, Screen and Camera Protection, Cloud Series, Light Tan" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$379.050</span>
                                    <del class="d-block fw-400 text-secondary">$399.000</del>
                                </div>
                            </a>
                        </div>

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  border-right  has-transition hov-shadow-out z-1">
                            <a href="product/johnsons-baby-cream-prwc2" class="d-block py-md-3 overflow-hidden hov-scale-img" title="The Children's Place Baby Girls' One Size and Toddler Sweater Dress">
                                <!-- Image -->
                                <img src="frontend/uploads/all/wKpZsiHN7USJpolZc2tBG9aMukVkRPr3g04Qut0m.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="The Children's Place Baby Girls' One Size and Toddler Sweater Dress" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$10.800</span>
                                    <del class="d-block fw-400 text-secondary">$12.000</del>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="carousel-box  ">

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  border-right  has-transition hov-shadow-out z-1">
                            <a href="product/johnsons-baby-bathing-combo-eiqhx" class="d-block py-md-3 overflow-hidden hov-scale-img" title="Spasilk Washcloth Wipes Set for Newborn Boys and Girls, Soft Terry Washcloth Set, Pack of 10, Aqua Bubbles, (010-1201)">
                                <!-- Image -->
                                <img src="frontend/uploads/all/BL3izG8xEFo9KsZHe58S2Mx5DTpk4cxOeAn0Jguf.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="Spasilk Washcloth Wipes Set for Newborn Boys and Girls, Soft Terry Washcloth Set, Pack of 10, Aqua Bubbles, (010-1201)" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$26.600</span>
                                    <del class="d-block fw-400 text-secondary">$35.000</del>
                                </div>
                            </a>
                        </div>

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  border-right  has-transition hov-shadow-out z-1">
                            <a href="product/oneplus-8t-5g-kb2000-128gb-8gb-ram-international-version-x753k" class="d-block py-md-3 overflow-hidden hov-scale-img" title="STREBITO Spudger Pry Tool Kit 23pcs for iPhone, Laptop, iPad, Cell Phone, MacBook, Tablet, Computer, Electronics Repair">
                                <!-- Image -->
                                <img src="frontend/uploads/all/C3FaVRL6z27DicThBqSHkvBJtG4LjztmX7TqeBxZ.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="STREBITO Spudger Pry Tool Kit 23pcs for iPhone, Laptop, iPad, Cell Phone, MacBook, Tablet, Computer, Electronics Repair" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$899.000</span>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="carousel-box  ">

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  has-transition hov-shadow-out z-1">
                            <a href="product/hp-stream-14-inch-laptop-intel-celeron-n4000-4-gb-ram-64-gb-emmc-windows-10-home-in-s-mode-with-office-365-personal-gtre8" class="d-block py-md-3 overflow-hidden hov-scale-img" title="Anivia Computer Headsets Over Ear Headphones Wired Gaming Headset with Mic for PC Mac PS4 PS5 Xbox One, Stereo Surround Sound, Purple">
                                <!-- Image -->
                                <img src="frontend/uploads/all/4tq17O5lc0hXSnlVqnyYjbI8Fjs0v9Ppl1TtrRoi.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="Anivia Computer Headsets Over Ear Headphones Wired Gaming Headset with Mic for PC Mac PS4 PS5 Xbox One, Stereo Surround Sound, Purple" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$1,222.000</span>
                                    <del class="d-block fw-400 text-secondary">$1,300.000</del>
                                </div>
                            </a>
                        </div>

                        <div class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom  has-transition hov-shadow-out z-1">
                            <a href="product/johnsons-baby-care-collection-baby-gift-set-with-organic-cotton-baby-dress-wef7q" class="d-block py-md-3 overflow-hidden hov-scale-img" title="Happy Bum Bum Diaper Baby Balm - 100% Natural - Calendula, Chamomile, Lavender Herbal Infused Moisturizer for Eczema, Dry Skin - Cruelty Free, Salve, With Organics, Handmade, Delizioso Skincare - 2 oz">
                                <!-- Image -->
                                <img src="frontend/uploads/all/mAhIYubNNWSQ3wYz2fiFY09WxEtQTwAxeuHAFc1S.webp" class="lazyload h-60px h-md-100px h-lg-140px mw-100 mx-auto has-transition" alt="Happy Bum Bum Diaper Baby Balm - 100% Natural - Calendula, Chamomile, Lavender Herbal Infused Moisturizer for Eczema, Dry Skin - Cruelty Free, Salve, With Organics, Handmade, Delizioso Skincare - 2 oz" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                <!-- Price -->
                                <div class="fs-10 fs-md-14 mt-md-3 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                    <span class="d-block text-primary fw-700">$26.600</span>
                                    <del class="d-block fw-400 text-secondary">$28.000</del>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Today's deal -->
<div id="todays_deal" class="mb-2 mb-md-3 mt-2 mt-md-3">

</div>

<!-- Featured Categories -->
<section class="mb-2 mb-md-3 mt-2 mt-md-3">
    <div class="container">
        <div class="bg-white">
            <!-- Top Section -->
            <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                    <span class="">Featured Categories</span>
                </h3>
                <!-- Links -->
                <div class="d-flex">
                    <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary" href="categories">View All Categories</a>
                </div>
            </div>
        </div>
        <!-- Categories -->
        <div class="bg-white px-3">
            <div class="row border-top border-right">
                <div class="col-xl-4 col-md-6 border-left border-bottom py-3 py-md-2rem">
                    <div class="d-sm-flex">
                        <div class="mb-3">
                            <img src="frontend/uploads/all/nZI9U43Qh0eGER5tcaWbQ9y2yJzHhFmK2edZ4T0R.webp" class="lazyload w-150px h-auto mx-auto has-transition" alt="Women Clothing &amp; Fashion" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        </div>
                        <div class="px-2 px-lg-4">
                            <h6 class="text-dark mb-0 text-truncate-2">
                                <a class="text-reset fw-700 fs-14 hov-text-primary" href="category/women-clothing-fashion" title="Women Clothing &amp; Fashion">
                                    Women Clothing &amp; Fashion
                                </a>
                            </h6>
                            <p class="mb-0 mt-3">
                                <a href="category/Hot-Categories" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Hot Categories
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Wedding-&amp;-events" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Wedding &amp; events
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Bottom" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Bottom
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Tops-&amp;-sets" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Tops &amp; sets
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Accessories" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Accessories
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-left border-bottom py-3 py-md-2rem">
                    <div class="d-sm-flex">
                        <div class="mb-3">
                            <img src="frontend/uploads/all/huj0Q3hBncctLYsiLeQg5mObSIPk8s1NGi1JdsmP.webp" class="lazyload w-150px h-auto mx-auto has-transition" alt="Men Clothing &amp; Fashion" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        </div>
                        <div class="px-2 px-lg-4">
                            <h6 class="text-dark mb-0 text-truncate-2">
                                <a class="text-reset fw-700 fs-14 hov-text-primary" href="category/men-clothing-fashion" title="Men Clothing &amp; Fashion">
                                    Men Clothing &amp; Fashion
                                </a>
                            </h6>
                            <p class="mb-0 mt-3">
                                <a href="category/Hot-Categories" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Hot Categories
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Outwear-&amp;-jackets" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Outwear &amp; jackets
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Bottom" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Bottom
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Underwear-&amp;-Loungewear-Accessories" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Underwear &amp; Loungewear Accessories
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Accessories" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Accessories
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-left border-bottom py-3 py-md-2rem">
                    <div class="d-sm-flex">
                        <div class="mb-3">
                            <img src="frontend/uploads/all/D43CcOyIu7rhylJCZYsj8XV5Y5QjXpv4KU0sEqUQ.webp" class="lazyload w-150px h-auto mx-auto has-transition" alt="Computer &amp; Accessories" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        </div>
                        <div class="px-2 px-lg-4">
                            <h6 class="text-dark mb-0 text-truncate-2">
                                <a class="text-reset fw-700 fs-14 hov-text-primary" href="category/computer-accessories" title="Computer &amp; Accessories">
                                    Computer &amp; Accessories
                                </a>
                            </h6>
                            <p class="mb-0 mt-3">
                                <a href="category/Laptop-&amp;-Accessories" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Laptop &amp; Accessories
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Gaming-pc" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Gaming pc
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Official-Equipment" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Official Equipment
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Components-&amp;-Peripherals" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Components &amp; Peripherals
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/TV--Soundbox-svgxA" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    TV $ Soundbox
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-left border-bottom py-3 py-md-2rem">
                    <div class="d-sm-flex">
                        <div class="mb-3">
                            <img src="frontend/uploads/all/C1PmfXyvOmZveOTwuT6PBdX4FRFxVKhLU6TcSJTF.webp" class="lazyload w-150px h-auto mx-auto has-transition" alt="Automobile &amp; Motorcycle" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        </div>
                        <div class="px-2 px-lg-4">
                            <h6 class="text-dark mb-0 text-truncate-2">
                                <a class="text-reset fw-700 fs-14 hov-text-primary" href="category/automobile-motorcycle" title="Automobile &amp; Motorcycle">
                                    Automobile &amp; Motorcycle
                                </a>
                            </h6>
                            <p class="mb-0 mt-3">
                                <a href="category/Racing-car" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Racing car
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Four-Seater-sedan" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Four Seater sedan
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/SUV" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    SUV
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Motor-bike" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Motor bike
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-left border-bottom py-3 py-md-2rem">
                    <div class="d-sm-flex">
                        <div class="mb-3">
                            <img src="frontend/uploads/all/ym8I9Gxtc99vYJMrUKG32X30QDEe47AtlZjAXb63.webp" class="lazyload w-150px h-auto mx-auto has-transition" alt="Kids &amp; toy" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        </div>
                        <div class="px-2 px-lg-4">
                            <h6 class="text-dark mb-0 text-truncate-2">
                                <a class="text-reset fw-700 fs-14 hov-text-primary" href="category/kids-toy" title="Kids &amp; toy">
                                    Kids &amp; toy
                                </a>
                            </h6>
                            <p class="mb-0 mt-3">
                                <a href="category/Baby-Clothing" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Baby Clothing
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Boys-Clothing" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Boys Clothing
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Girls-Clothing" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Girls Clothing
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Shoes-&amp;-Bag" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Shoes &amp; Bag
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Baby-&amp;-Mother" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Baby &amp; Mother
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-left border-bottom py-3 py-md-2rem">
                    <div class="d-sm-flex">
                        <div class="mb-3">
                            <img src="frontend/uploads/all/vpDNiGh3ayL5ng2UrX9p5qWvN2VWHgHqmATQnnS7.webp" class="lazyload w-150px h-auto mx-auto has-transition" alt="Jewelry &amp; Watches" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        </div>
                        <div class="px-2 px-lg-4">
                            <h6 class="text-dark mb-0 text-truncate-2">
                                <a class="text-reset fw-700 fs-14 hov-text-primary" href="category/jewelry-watches" title="Jewelry &amp; Watches">
                                    Jewelry &amp; Watches
                                </a>
                            </h6>
                            <p class="mb-0 mt-3">
                                <a href="category/Wedding-&amp;-Engagement" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Wedding &amp; Engagement
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Men%C3%A2s-watch" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Menâs watch
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Women-watch" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Women watch
                                </a>
                            </p>
                            <p class="mb-0 mt-3">
                                <a href="category/Fashion-Jewelry" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                    Fashion Jewelry
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Banner section 1 -->
<div class="mb-2 mb-md-3 mt-2 mt-md-3">
    <div class="container">
        <div class="w-100">
            <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="3" data-xxl-items="3" data-xl-items="3" data-lg-items="2" data-md-items="2" data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">
                <div class="carousel-box overflow-hidden hov-scale-img">
                    <a href="flash-deals" class="d-block text-reset overflow-hidden">
                        <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/2cXgUZDtznvdWIguw3yRTo5owCO9ncHrFgqroExR.webp" alt="Active eCommerce CMS promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                    </a>
                </div>
                <div class="carousel-box overflow-hidden hov-scale-img">
                    <a href="flash-deals" class="d-block text-reset overflow-hidden">
                        <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/0kqPaHuzguK8upEc2VZbEzeETXjDQb9ESwXbQx4A.webp" alt="Active eCommerce CMS promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                    </a>
                </div>
                <div class="carousel-box overflow-hidden hov-scale-img">
                    <a href="flash-deals" class="d-block text-reset overflow-hidden">
                        <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/V5YBT7JikIwE3o2SdPHxh5t2dMPgnE3R4QR04jwY.webp" alt="Active eCommerce CMS promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Featured Products -->
<div id="section_featured">
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <!-- Top Section -->
            <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                    <span class="">Featured Products</span>
                </h3>
                <!-- Links -->
                <div class="d-flex">
                    <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2" onclick="clickToSlide('slick-prev','section_featured')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                    <a type="button" class="arrow-next slide-arrow text-secondary ml-2" onclick="clickToSlide('slick-next','section_featured')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                </div>
            </div>
            <!-- Products Section -->
            <div class="px-sm-3">
                <div class="aiz-carousel sm-gutters-16 arrow-none slick-initialized slick-slider" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows="true" data-infinite="false"><button type="button" class="slick-prev slick-arrow slick-disabled" aria-disabled="true" style="display: inline-block;"><i class="las la-angle-left"></i></button>
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 2748px; transform: translate3d(0px, 0px, 0px);">
                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 229px;">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom  border-left " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="/product/shirt" class="d-block h-100" tabindex="0">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/Q5sQEK1nCCHi8bjMK0kIcS3N5PncM2XuBJBjWbC7.webp" alt="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women" title="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(170)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(170)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="0">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/like-dreams-large-sherpa-tote-bag-inner-pocket-vegan-leather-large-tote-hand-bags-for-women" class="d-block text-reset hov-text-primary" title="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women" tabindex="0">Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$72.120</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 229px;">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/insight-cosmetics-3d-highlighter" class="d-block h-100" tabindex="0">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/mG4K0TiQAXxg1sOILVVyoNdECruuN5IvMufG9yWF.webp" alt="Insight Cosmetics 3D Highlighter" title="Insight Cosmetics 3D Highlighter" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-2%</span>
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(169)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0" data-original-title="" title="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(169)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="0" data-original-title="" title="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="0">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/insight-cosmetics-3d-highlighter" class="d-block text-reset hov-text-primary" title="Insight Cosmetics 3D Highlighter" tabindex="0">Insight Cosmetics 3D Highlighter</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$60.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$58.800</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 229px;">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/womens-plain-dress-one-piece-for-girls" class="d-block h-100" tabindex="0">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/mdNKoKdJXd2FZ38TgpgVI0OpWetrezEQSD6qNdKN.webp" alt="Women's Plain Dress One Piece for Girls" title="Women's Plain Dress One Piece for Girls" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-5%</span>
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(168)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(168)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="0">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/womens-plain-dress-one-piece-for-girls" class="d-block text-reset hov-text-primary" title="Women's Plain Dress One Piece for Girls" tabindex="0">Women's Plain Dress One Piece for Girls</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$49.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$46.550</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 229px;">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/nescafe-clasico-dark-roast-instant-coffee-jar-105-oz" class="d-block h-100" tabindex="0">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/vlH5gK4oe3IGl3BmfyCmrWew8w9FICzc7157BFiC.png" alt="Nescafé Clasico, Dark Roast Instant Coffee Jar, 10.5 oz" title="Nescafé Clasico, Dark Roast Instant Coffee Jar, 10.5 oz" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(167)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(167)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="0">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/nescafe-clasico-dark-roast-instant-coffee-jar-105-oz" class="d-block text-reset hov-text-primary" title="Nescafé Clasico, Dark Roast Instant Coffee Jar, 10.5 oz" tabindex="0">Nescafé Clasico, Dark Roast Instant Coffee Jar, 10.5 oz</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$10.390</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 229px;">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/premium-executive-estate-with-plenty-of-cargo-capacity" class="d-block h-100" tabindex="0">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/eSs4yaJTsRhGgiv7NKOWhhA5pIDMDCVsXOTy9eep.webp" alt="Premium executive estate with plenty of cargo capacity" title="Premium executive estate with plenty of cargo capacity" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(166)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(166)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="0">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/premium-executive-estate-with-plenty-of-cargo-capacity" class="d-block text-reset hov-text-primary" title="Premium executive estate with plenty of cargo capacity" tabindex="0">Premium executive estate with plenty of cargo capacity</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$12,346.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$12,336.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 229px;">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/plasticolor-008669r01-marvel-deadpool-repeater-low-back-universal-fit-car-truck-suv-seat-cover-brand-plasticolor" class="d-block h-100" tabindex="0">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/SKlez5eK0jFJvnmbOtCTeDn8SrFTK5bHDNvUtTfk.webp" alt="Plasticolor 008669R01 Marvel Deadpool Repeater Low Back Universal Fit Car Truck SUV Seat Cover Brand: Plasticolor" title="Plasticolor 008669R01 Marvel Deadpool Repeater Low Back Universal Fit Car Truck SUV Seat Cover Brand: Plasticolor" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-5%</span>
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(165)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(165)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="0">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/plasticolor-008669r01-marvel-deadpool-repeater-low-back-universal-fit-car-truck-suv-seat-cover-brand-plasticolor" class="d-block text-reset hov-text-primary" title="Plasticolor 008669R01 Marvel Deadpool Repeater Low Back Universal Fit Car Truck SUV Seat Cover Brand: Plasticolor" tabindex="0">Plasticolor 008669R01 Marvel Deadpool Repeater Low Back Universal Fit Car Truck SUV Seat Cover Brand: Plasticolor</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$50.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$47.500</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 229px;" tabindex="-1">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/zagg-pro-keys-wireless-keyboard-detachable-case-for-apple-ipad-109-10th-gen-2022" class="d-block h-100" tabindex="-1">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/cJLH3YGg5OBTzgiDvMVE4Bw6d4jDM6l4gbTSCq4R.webp" alt="ZAGG - Pro Keys Wireless Keyboard &amp; Detachable Case for Apple iPad 10.9&quot; 10th Gen (2022)" title="ZAGG - Pro Keys Wireless Keyboard &amp; Detachable Case for Apple iPad 10.9&quot; 10th Gen (2022)" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-10%</span>
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(164)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(164)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="-1">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/zagg-pro-keys-wireless-keyboard-detachable-case-for-apple-ipad-109-10th-gen-2022" class="d-block text-reset hov-text-primary" title="ZAGG - Pro Keys Wireless Keyboard &amp; Detachable Case for Apple iPad 10.9&quot; 10th Gen (2022)" tabindex="-1">ZAGG - Pro Keys Wireless Keyboard &amp; Detachable Case for Apple iPad 10.9" 10th Gen (2022)</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$100.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$90.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 229px;" tabindex="-1">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/apple-iphone-14-128gb-unlocked" class="d-block h-100" tabindex="-1">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/B1hum7tEVbTF5SOV0eQdwB6NgyLUPO1wif5QtaO8.webp" alt="Apple - iPhone 14 128GB (Unlocked)" title="Apple - iPhone 14 128GB (Unlocked)" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-10%</span>
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(163)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(163)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="-1">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/apple-iphone-14-128gb-unlocked" class="d-block text-reset hov-text-primary" title="Apple - iPhone 14 128GB (Unlocked)" tabindex="-1">Apple - iPhone 14 128GB (Unlocked)</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$579.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$521.100</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="8" aria-hidden="true" style="width: 229px;" tabindex="-1">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/microsoft-xbox-series-x-1tb-console" class="d-block h-100" tabindex="-1">
                                                        <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="frontend/uploads/all/gC0Q2JfK6lG7CHedYEGcYJoutbDE4sWmHpBxmIqd.webp" alt="Microsoft - Xbox Series X 1TB Console" title="Microsoft - Xbox Series X 1TB Console" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-10%</span>
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(162)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(162)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="-1">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/microsoft-xbox-series-x-1tb-console" class="d-block text-reset hov-text-primary" title="Microsoft - Xbox Series X 1TB Console" tabindex="-1">Microsoft - Xbox Series X 1TB Console</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$399.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$359.100</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="9" aria-hidden="true" style="width: 229px;" tabindex="-1">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/apple-iphone-14-pro-128gb-512gb-deep-purple-unlocked" class="d-block h-100" tabindex="-1">
                                                        <img class="lazyload mx-auto img-fit has-transition" src="frontend/uploads/all/vxCXmeSpPOpczUjh0RVX1I0jXrFPUFTdZCXNNReY.webp" alt="SAMSUNG Galaxy S23+ Plus Cell Phone, Unlocked Android Smartphone, 512GB, 50MP Camera, Night Mode, 8K Video, Long Battery Life, Fastest Mobile Processor, Adaptive Display, US Version, 2023, Green" title="SAMSUNG Galaxy S23+ Plus Cell Phone, Unlocked Android Smartphone, 512GB, 50MP Camera, Night Mode, 8K Video, Long Battery Life, Fastest Mobile Processor, Adaptive Display, US Version, 2023, Green" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-5%</span>
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(161)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(161)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="-1">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/apple-iphone-14-pro-128gb-512gb-deep-purple-unlocked" class="d-block text-reset hov-text-primary" title="SAMSUNG Galaxy S23+ Plus Cell Phone, Unlocked Android Smartphone, 512GB, 50MP Camera, Night Mode, 8K Video, Long Battery Life, Fastest Mobile Processor, Adaptive Display, US Version, 2023, Green" tabindex="-1">SAMSUNG Galaxy S23+ Plus Cell Phone, Unlocked Android Smartphone, 512GB, 50MP Camera, Night Mode, 8K Video, Long Battery Life, Fastest Mobile Processor, Adaptive Display, US Version, 2023, Green</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$999.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$949.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="10" aria-hidden="true" style="width: 229px;" tabindex="-1">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/analog-black-dial-mens-watch-32-bk-ck" class="d-block h-100" tabindex="-1">
                                                        <img class="lazyload mx-auto img-fit has-transition" src="frontend/uploads/all/70TVd2OrhelP4B9bqY9SIK3TnUpCtXkSLntYP5O4.webp" alt="Disney Men's Mickey and Friends Button Down Shirt" title="Disney Men's Mickey and Friends Button Down Shirt" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-25%</span>
                                                    <!-- Wholesale tag -->
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(132)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(132)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="-1">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/analog-black-dial-mens-watch-32-bk-ck" class="d-block text-reset hov-text-primary" title="Disney Men's Mickey and Friends Button Down Shirt" tabindex="-1">Disney Men's Mickey and Friends Button Down Shirt</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <div class="disc-amount has-transition">
                                                            <del class="fw-400 text-secondary mr-1">$600.000</del>
                                                        </div>
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$450.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide" data-slick-index="11" aria-hidden="true" style="width: 229px;" tabindex="-1">
                                <div>
                                    <div class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom " style="width: 100%; display: inline-block;">
                                        <div class="px-3">
                                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                    <!-- Image -->
                                                    <a href="product/mens-one-and-only-textured-short-sleeve-button-up-qmn5g" class="d-block h-100" tabindex="-1">
                                                        <img class="lazyload mx-auto img-fit has-transition" src="frontend/uploads/all/6QoZodxZuTdhNFwN0v0OueDKaCmHuWgaBJkAig0T.webp" alt="Mens Zip Up Hoodie Winter Fleece Lined Graphic Jacket Heavy Big And Tall Warm Coat Thermal Graphic Tie Dye Outwear" title="Mens Zip Up Hoodie Winter Fleece Lined Graphic Jacket Heavy Big And Tall Warm Coat Thermal Graphic Tie Dye Outwear" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                                    </a>
                                                    <!-- Discount percentage tag -->
                                                    <!-- Wholesale tag -->
                                                    <span class="absolute-top-left fs-11 text-white fw-700 px-2 lh-1-8 ml-1 mt-1" style="background-color: #455a64; ">
                                                        Wholesale
                                                    </span>
                                                    <!-- wishlisht & compare icons -->
                                                    <div class="absolute-top-right aiz-p-hov-icon">
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(130)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                                <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                                    <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                    <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(130)" data-toggle="tooltip" data-title="Add to compare" data-placement="left" tabindex="-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <!-- add to cart -->
                                                    <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()" tabindex="-1">
                                                        <span class="cart-btn-text">
                                                            Add to cart
                                                        </span>
                                                        <span><i class="las la-2x la-shopping-cart"></i></span>
                                                    </a>
                                                </div>

                                                <div class="p-2 p-md-3 text-left">
                                                    <!-- Product name -->
                                                    <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                        <a href="product/mens-one-and-only-textured-short-sleeve-button-up-qmn5g" class="d-block text-reset hov-text-primary" title="Mens Zip Up Hoodie Winter Fleece Lined Graphic Jacket Heavy Big And Tall Warm Coat Thermal Graphic Tie Dye Outwear" tabindex="-1">Mens Zip Up Hoodie Winter Fleece Lined Graphic Jacket Heavy Big And Tall Warm Coat Thermal Graphic Tie Dye Outwear</a>
                                                    </h3>
                                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                                        <!-- Previous price -->
                                                        <!-- price -->
                                                        <div class="">
                                                            <span class="fw-700 text-primary">$30.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><button type="button" class="slick-next slick-arrow" style="display: inline-block;" aria-disabled="false"><i class="las la-angle-right"></i></button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Section 2 -->
<div class="mb-2 mb-md-3 mt-2 mt-md-3">
    <div class="container">
        <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="1" data-xxl-items="1" data-xl-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">
            <div class="carousel-box overflow-hidden hov-scale-img">
                <a href="blog" class="d-block text-reset overflow-hidden">
                    <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/JRkXIMV6dmHE4HkMsHYnbFQDgwpn3lCWWDRwGiy4.webp" alt="Active eCommerce CMS promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Best Selling  -->
<div id="section_best_selling">

</div>

<!-- New Products -->
<div id="section_newest">

</div>

<!-- Banner Section 3 -->
<div class="mb-2 mb-md-3 mt-2 mt-md-3">
    <div class="container">
        <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="3" data-xxl-items="3" data-xl-items="3" data-lg-items="2" data-md-items="2" data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">
            <div class="carousel-box overflow-hidden hov-scale-img">
                <a href="flash-deals" class="d-block text-reset overflow-hidden">
                    <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/YHHPDJbJXOk4QQq5VWQfueDGCAl2Nco684jsJbYr.webp" alt="Active eCommerce CMS promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                </a>
            </div>
            <div class="carousel-box overflow-hidden hov-scale-img">
                <a href="flash-deals" class="d-block text-reset overflow-hidden">
                    <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/gaXwdpVAcyz0SNYFLu6EiofoCzbx0pbvUDtgeuLp.webp" alt="Active eCommerce CMS promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                </a>
            </div>
            <div class="carousel-box overflow-hidden hov-scale-img">
                <a href="flash-deals" class="d-block text-reset overflow-hidden">
                    <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/EkWRwDYvmRy1BGYQvuV3DNR8MU4dHkrgPdX8OEsY.webp" alt="Active eCommerce CMS promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Auction Product -->
<div id="auction_products">

</div>

<!-- Cupon -->
<div class="mb-2 mb-md-3 mt-2 mt-md-3" style="background-color: #292933">
    <div class="container">
        <div class="row py-5">
            <div class="col-xl-8 text-center text-xl-left">
                <div class="d-lg-flex">
                    <div class="mb-3 mb-lg-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="109.602" height="93.34" viewBox="0 0 109.602 93.34">
                            <defs>
                                <clipPath id="clip-pathcup">
                                    <path id="Union_10" data-name="Union 10" d="M12263,13778v-15h64v-41h12v56Z" transform="translate(-11966 -8442.865)" fill="none" stroke="#fff" stroke-width="2"></path>
                                </clipPath>
                            </defs>
                            <g id="Group_24326" data-name="Group 24326" transform="translate(-274.201 -5254.611)">
                                <g id="Mask_Group_23" data-name="Mask Group 23" transform="translate(-3652.459 1785.452) rotate(-45)" clip-path="url(#clip-pathcup)">
                                    <g id="Group_24322" data-name="Group 24322" transform="translate(207 18.136)">
                                        <g id="Subtraction_167" data-name="Subtraction 167" transform="translate(-12177 -8458)" fill="none">
                                            <path d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z" stroke="none"></path>
                                            <path d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z" stroke="none" fill="#fff"></path>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group_24321" data-name="Group 24321" transform="translate(-3514.477 1653.317) rotate(-45)">
                                    <g id="Subtraction_167-2" data-name="Subtraction 167" transform="translate(-12177 -8458)" fill="none">
                                        <path d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z" stroke="none"></path>
                                        <path d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z" stroke="none" fill="#fff"></path>
                                    </g>
                                    <g id="Group_24325" data-name="Group 24325">
                                        <rect id="Rectangle_18578" data-name="Rectangle 18578" width="8" height="2" transform="translate(120 5287)" fill="#fff"></rect>
                                        <rect id="Rectangle_18579" data-name="Rectangle 18579" width="8" height="2" transform="translate(132 5287)" fill="#fff"></rect>
                                        <rect id="Rectangle_18581" data-name="Rectangle 18581" width="8" height="2" transform="translate(144 5287)" fill="#fff"></rect>
                                        <rect id="Rectangle_18580" data-name="Rectangle 18580" width="8" height="2" transform="translate(108 5287)" fill="#fff"></rect>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-lg-3">
                        <h5 class="fs-36 fw-400 text-white mb-3">Save Upto 50% with our Coupons</h5>
                        <h5 class="fs-20 fw-400 text-gray">Get huge discount in products or save money by using coupons while checkout</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 text-center text-xl-right mt-4">
                <a href="coupons" class="btn text-white hov-bg-white hov-text-dark border border-width-2 fs-16 px-4" style="border-radius: 28px;background: rgba(255, 255, 255, 0.2);box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.16);">View All Coupons</a>
            </div>
        </div>
    </div>
</div>

<!-- Category wise Products -->
<div id="section_home_categories" class="mb-2 mb-md-3 mt-2 mt-md-3">

</div>

<!-- Classified Product -->
<section class="mb-2 mb-md-3 mt-2 mt-md-3">
    <div class="container">
        <!-- Top Section -->
        <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
            <!-- Title -->
            <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                <span class="">Classified Ads</span>
            </h3>
            <!-- Links -->
            <div class="d-flex">
                <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary" href="customer-products">View All Products</a>
            </div>
        </div>
        <!-- Banner -->
        <div class="mb-3 overflow-hidden hov-scale-img d-none d-md-block">
            <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/VIRjESGG7nena4r3KbOexIooQaj7IeBwox6v6LAv.webp" alt="Active eCommerce CMS promo" class="lazyload img-fit h-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
        </div>
        <div class="mb-3 overflow-hidden hov-scale-img d-md-none">
            <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/MON1VQDVpwIyvuRyLighTqfFRrFy2oohID23reqY.webp" alt="Active eCommerce CMS promo" class="lazyload img-fit h-100 has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
        </div>
        <!-- Products Section -->
        <div class="bg-white">
            <div class="row no-gutters border-top border-left">
                <div class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                    <div class="aiz-card-box p-2 has-transition bg-white">
                        <div class="row hov-scale-img">
                            <div class="col-4 col-md-5 mb-3 mb-md-0">
                                <a href="customer-product/canon-eos-1500drebel-t7-dslr-camera-with-ef-s-18-55-mm-f35-56-is-ii-lens-rkdnw" class="d-block overflow-hidden h-auto h-md-150px text-center">
                                    <img class="img-fluid lazyload mx-auto has-transition" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/4IsovvLOBxuVdT03mApxSCkfBH5L1oZlT7vqjdqG.webp" alt="Canon EOS 1500D/Rebel T7 DSLR Camera with EF-S 18-55 mm f/3.5-5.6 is II Lens" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                    <a href="customer-product/canon-eos-1500drebel-t7-dslr-camera-with-ef-s-18-55-mm-f35-56-is-ii-lens-rkdnw" class="d-block text-reset hov-text-primary">Canon EOS 1500D/Rebel T7 DSLR Camera with EF-S 18-55 mm f/3.5-5.6 is II Lens</a>
                                </h3>
                                <div class="fs-14 mb-3">
                                    <span class="text-secondary">Paul K. Jensen</span><br>
                                    <span class="fw-700 text-primary">$52.000</span>
                                </div>
                                <span class="badge badge-inline badge-soft-danger fs-13 fw-700 p-3 text-danger" style="border-radius: 20px;">Used</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                    <div class="aiz-card-box p-2 has-transition bg-white">
                        <div class="row hov-scale-img">
                            <div class="col-4 col-md-5 mb-3 mb-md-0">
                                <a href="customer-product/sony-bravia-108-cm-43-inches-full-hd-smart-led-tv-kdl-ok3mt" class="d-block overflow-hidden h-auto h-md-150px text-center">
                                    <img class="img-fluid lazyload mx-auto has-transition" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/Aq1pAApsDQllVJMQWi4foGvqAbRBBOUbaau0lSIT.webp" alt="Sony Bravia 108 cm (43 inches) Full HD Smart LED TV KDL" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                    <a href="customer-product/sony-bravia-108-cm-43-inches-full-hd-smart-led-tv-kdl-ok3mt" class="d-block text-reset hov-text-primary">Sony Bravia 108 cm (43 inches) Full HD Smart LED TV KDL</a>
                                </h3>
                                <div class="fs-14 mb-3">
                                    <span class="text-secondary">Paul K. Jensen</span><br>
                                    <span class="fw-700 text-primary">$320.000</span>
                                </div>
                                <span class="badge badge-inline badge-soft-danger fs-13 fw-700 p-3 text-danger" style="border-radius: 20px;">Used</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                    <div class="aiz-card-box p-2 has-transition bg-white">
                        <div class="row hov-scale-img">
                            <div class="col-4 col-md-5 mb-3 mb-md-0">
                                <a href="customer-product/the-childrens-place-girls-medium-weight-puffer-jacket-wind-resistant-water-resistant-9vvgl" class="d-block overflow-hidden h-auto h-md-150px text-center">
                                    <img class="img-fluid lazyload mx-auto has-transition" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/Nt0fSeEw313xxtfnixQu6z03Pd49KYyeRaIQeIQY.webp" alt="The Children's Place Girls Medium Weight Puffer Jacket, Wind-resistant, Water-resistant" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                    <a href="customer-product/the-childrens-place-girls-medium-weight-puffer-jacket-wind-resistant-water-resistant-9vvgl" class="d-block text-reset hov-text-primary">The Children's Place Girls Medium Weight Puffer Jacket, Wind-resistant, Water-resistant</a>
                                </h3>
                                <div class="fs-14 mb-3">
                                    <span class="text-secondary">Paul K. Jensen</span><br>
                                    <span class="fw-700 text-primary">$43.250</span>
                                </div>
                                <span class="badge badge-inline badge-soft-info fs-13 fw-700 p-3 text-info" style="border-radius: 20px;">new</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                    <div class="aiz-card-box p-2 has-transition bg-white">
                        <div class="row hov-scale-img">
                            <div class="col-4 col-md-5 mb-3 mb-md-0">
                                <a href="customer-product/the-childrens-place-girls-basic-denim-jacket-psabp" class="d-block overflow-hidden h-auto h-md-150px text-center">
                                    <img class="img-fluid lazyload mx-auto has-transition" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/wcCdKFXgllExJgJZu6O0KDrn1t2qXhOrEyPxJ2DM.webp" alt="SAMSUNG Galaxy A23 5G A Series Cell Phone, Factory Unlocked Android Smartphone, 64GB, Wide Lens Camera, 6.6 Infinite Display Screen, Long Battery Life, US Version, 2022, Black" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                    <a href="customer-product/the-childrens-place-girls-basic-denim-jacket-psabp" class="d-block text-reset hov-text-primary">SAMSUNG Galaxy A23 5G A Series Cell Phone, Factory Unlocked Android Smartphone, 64GB, Wide Lens Camera, 6.6 Infinite Display Screen, Long Battery Life, US Version, 2022, Black</a>
                                </h3>
                                <div class="fs-14 mb-3">
                                    <span class="text-secondary">Paul K. Jensen</span><br>
                                    <span class="fw-700 text-primary">$25.260</span>
                                </div>
                                <span class="badge badge-inline badge-soft-danger fs-13 fw-700 p-3 text-danger" style="border-radius: 20px;">Used</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                    <div class="aiz-card-box p-2 has-transition bg-white">
                        <div class="row hov-scale-img">
                            <div class="col-4 col-md-5 mb-3 mb-md-0">
                                <a href="customer-product/carhartt-girls-zip-front-canvas-insulated-hooded-active-jac-xwmyl" class="d-block overflow-hidden h-auto h-md-150px text-center">
                                    <img class="img-fluid lazyload mx-auto has-transition" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/7vuPeohYqQSWgHImeuETfg5sGHD9UL87blPR9sAf.webp" alt="Carhartt Girls' Zip Front Canvas Insulated Hooded Active Jac" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                    <a href="customer-product/carhartt-girls-zip-front-canvas-insulated-hooded-active-jac-xwmyl" class="d-block text-reset hov-text-primary">Carhartt Girls' Zip Front Canvas Insulated Hooded Active Jac</a>
                                </h3>
                                <div class="fs-14 mb-3">
                                    <span class="text-secondary">Paul K. Jensen</span><br>
                                    <span class="fw-700 text-primary">$69.990</span>
                                </div>
                                <span class="badge badge-inline badge-soft-info fs-13 fw-700 p-3 text-info" style="border-radius: 20px;">new</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                    <div class="aiz-card-box p-2 has-transition bg-white">
                        <div class="row hov-scale-img">
                            <div class="col-4 col-md-5 mb-3 mb-md-0">
                                <a href="customer-product/the-childrens-place-girls-mock-neck-warm-sherpa-jacket-fmhup" class="d-block overflow-hidden h-auto h-md-150px text-center">
                                    <img class="img-fluid lazyload mx-auto has-transition" src="frontend/assets/img/placeholder.jpg" data-src="frontend/uploads/all/KUTgw5y2UVdBW46VjroFmNNJAls05foEps8lYhy2.webp" alt="2021 Toyota RAV4" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                    <a href="customer-product/the-childrens-place-girls-mock-neck-warm-sherpa-jacket-fmhup" class="d-block text-reset hov-text-primary">2021 Toyota RAV4</a>
                                </h3>
                                <div class="fs-14 mb-3">
                                    <span class="text-secondary">Paul K. Jensen</span><br>
                                    <span class="fw-700 text-primary">$34.670</span>
                                </div>
                                <span class="badge badge-inline badge-soft-danger fs-13 fw-700 p-3 text-danger" style="border-radius: 20px;">Used</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Sellers -->
<section class="mb-2 mb-md-3 mt-2 mt-md-3">
    <div class="container">
        <!-- Top Section -->
        <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
            <!-- Title -->
            <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                <span class="pb-3">Top Sellers</span>
            </h3>
            <!-- Links -->
            <div class="d-flex">
                <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary" href="sellers">View All Sellers</a>
            </div>
        </div>
        <!-- Sellers Section -->
        <div class="aiz-carousel arrow-x-0 arrow-inactive-none" data-items="5" data-xxl-items="5" data-xl-items="4" data-lg-items="3.4" data-md-items="2.5" data-sm-items="2" data-xs-items="1.4" data-arrows="true" data-dots="false">
            <div class="carousel-box h-100 position-relative text-center border-right border-top border-bottom  border-left  has-transition hov-animate-outline">
                <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                    <!-- Shop logo & Verification Status -->
                    <div class="position-relative mx-auto size-100px size-md-120px">
                        <a href="shop/Lavish-Look-9" class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img" tabindex="0" style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                            <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/1RutGcPmMYvLHiatsxAVq9l8XMM3IiuuvGUq20yh.webp" alt="Lavish Look" class="img-fit lazyload has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                        <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24" viewBox="0 0 24.001 24">
                                <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                    <circle id="Ellipse_637" data-name="Ellipse 637" cx="12" cy="12" r="12" transform="translate(480 345)" fill="#fff"></circle>
                                    <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                        <path id="Union_5" data-name="Union 5" d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z" transform="translate(0 0)" fill="#3490f3"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <!-- Shop name -->
                    <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                        <a href="shop/Lavish-Look-9" class="text-reset hov-text-primary" tabindex="0">Lavish Look</a>
                    </h2>
                    <!-- Shop Rating -->
                    <div class="rating rating-mr-1 text-dark mb-3">
                        <i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i>
                        <span class="opacity-60 fs-14">(0
                            reviews)</span>
                    </div>
                    <!-- Visit Button -->
                    <a href="shop/Lavish-Look-9" class="btn-visit">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Visit Store</span>
                    </a>
                </div>
            </div>
            <div class="carousel-box h-100 position-relative text-center border-right border-top border-bottom  has-transition hov-animate-outline">
                <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                    <!-- Shop logo & Verification Status -->
                    <div class="position-relative mx-auto size-100px size-md-120px">
                        <a href="shop/Filon-Asset-Store-2" class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img" tabindex="0" style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                            <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/Qjj4dDEMSrAv6RlftG5Ue1BKLvgW7Ai5kPYL22xZ.webp" alt="Filon Asset Store" class="img-fit lazyload has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                        <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24" viewBox="0 0 24.001 24">
                                <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                    <circle id="Ellipse_637" data-name="Ellipse 637" cx="12" cy="12" r="12" transform="translate(480 345)" fill="#fff"></circle>
                                    <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                        <path id="Union_5" data-name="Union 5" d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z" transform="translate(0 0)" fill="#3490f3"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <!-- Shop name -->
                    <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                        <a href="shop/Filon-Asset-Store-2" class="text-reset hov-text-primary" tabindex="0">Filon Asset Store</a>
                    </h2>
                    <!-- Shop Rating -->
                    <div class="rating rating-mr-1 text-dark mb-3">
                        <i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i><i class="las la-star active"></i>
                        <span class="opacity-60 fs-14">(1
                            reviews)</span>
                    </div>
                    <!-- Visit Button -->
                    <a href="shop/Filon-Asset-Store-2" class="btn-visit">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Visit Store</span>
                    </a>
                </div>
            </div>
            <div class="carousel-box h-100 position-relative text-center border-right border-top border-bottom  has-transition hov-animate-outline">
                <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                    <!-- Shop logo & Verification Status -->
                    <div class="position-relative mx-auto size-100px size-md-120px">
                        <a href="shop/Adidas-12" class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img" tabindex="0" style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                            <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/AcQrue0Rc4krp9i0LsDXW8FcZ6z4YYWXOdcJL908.webp" alt="Adidas" class="img-fit lazyload has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                        <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24" viewBox="0 0 24.001 24">
                                <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                    <circle id="Ellipse_637" data-name="Ellipse 637" cx="12" cy="12" r="12" transform="translate(480 345)" fill="#fff"></circle>
                                    <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                        <path id="Union_5" data-name="Union 5" d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z" transform="translate(0 0)" fill="#3490f3"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <!-- Shop name -->
                    <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                        <a href="shop/Adidas-12" class="text-reset hov-text-primary" tabindex="0">Adidas</a>
                    </h2>
                    <!-- Shop Rating -->
                    <div class="rating rating-mr-1 text-dark mb-3">
                        <i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                        <span class="opacity-60 fs-14">(0
                            reviews)</span>
                    </div>
                    <!-- Visit Button -->
                    <a href="shop/Adidas-12" class="btn-visit">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Visit Store</span>
                    </a>
                </div>
            </div>
            <div class="carousel-box h-100 position-relative text-center border-right border-top border-bottom  has-transition hov-animate-outline">
                <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                    <!-- Shop logo & Verification Status -->
                    <div class="position-relative mx-auto size-100px size-md-120px">
                        <a href="shop/LOUIS-VUITTON-13" class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img" tabindex="0" style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                            <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/qf8pEDFmjfjIDYYGXaKtJ90ilKQMC7F1rXk2vQJr.webp" alt="LOUIS VUITTON" class="img-fit lazyload has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                        <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24" viewBox="0 0 24.001 24">
                                <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                    <circle id="Ellipse_637" data-name="Ellipse 637" cx="12" cy="12" r="12" transform="translate(480 345)" fill="#fff"></circle>
                                    <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                        <path id="Union_5" data-name="Union 5" d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z" transform="translate(0 0)" fill="#3490f3"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <!-- Shop name -->
                    <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                        <a href="shop/LOUIS-VUITTON-13" class="text-reset hov-text-primary" tabindex="0">LOUIS VUITTON</a>
                    </h2>
                    <!-- Shop Rating -->
                    <div class="rating rating-mr-1 text-dark mb-3">
                        <i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                        <span class="opacity-60 fs-14">(0
                            reviews)</span>
                    </div>
                    <!-- Visit Button -->
                    <a href="shop/LOUIS-VUITTON-13" class="btn-visit">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Visit Store</span>
                    </a>
                </div>
            </div>
            <div class="carousel-box h-100 position-relative text-center border-right border-top border-bottom  has-transition hov-animate-outline">
                <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                    <!-- Shop logo & Verification Status -->
                    <div class="position-relative mx-auto size-100px size-md-120px">
                        <a href="shop/Pink-Horizon-3" class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img" tabindex="0" style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                            <img src="frontend/assets/img/placeholder-rect.jpg" data-src="frontend/uploads/all/QMFN9PeXeCU9pWZN8viMl1ZYjYRwbXLJAsz3abgC.webp" alt="Pink Horizon" class="img-fit lazyload has-transition" onerror="this.onerror=null;this.src='frontend/assets/img/UFViTFdi2ygC.jpg';">
                        </a>
                        <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24" viewBox="0 0 24.001 24">
                                <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                    <circle id="Ellipse_637" data-name="Ellipse 637" cx="12" cy="12" r="12" transform="translate(480 345)" fill="#fff"></circle>
                                    <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                        <path id="Union_5" data-name="Union 5" d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z" transform="translate(0 0)" fill="#3490f3"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <!-- Shop name -->
                    <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                        <a href="shop/Pink-Horizon-3" class="text-reset hov-text-primary" tabindex="0">Pink Horizon</a>
                    </h2>
                    <!-- Shop Rating -->
                    <div class="rating rating-mr-1 text-dark mb-3">
                        <i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                        <span class="opacity-60 fs-14">(0
                            reviews)</span>
                    </div>
                    <!-- Visit Button -->
                    <a href="shop/Pink-Horizon-3" class="btn-visit">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Visit Store</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Brands -->
<section class="mb-2 mb-md-3 mt-2 mt-md-3">
    <div class="container">
        <!-- Top Section -->
        <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
            <!-- Title -->
            <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">Top Brands</h3>
            <!-- Links -->
            <div class="d-flex">
                <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary" href="brands">View All Brands</a>
            </div>
        </div>
        <!-- Brands Section -->
        <div class="bg-white px-3">
            <div class="row row-cols-xxl-6 row-cols-xl-6 row-cols-lg-4 row-cols-md-4 row-cols-3 gutters-16 border-top border-left">
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/ford" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/CVo1G2QVpVtSoZlmCvC0l4hL9WIiWLlTQf6XclMC.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Ford" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Ford
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/chevrolet" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/ecb0DAeSHXtbC4Fn6WYz8MBpJuqVeJweFHpO5Tdv.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Chevrolet" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Chevrolet
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/audi" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/SE5RmXlnnn7IGCueKcCC3bSb6VMbpRKCQ9Uj73im.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Audi" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Audi
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/hyundai" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/psvYUjmOREXrnLNH4O3h9pC3btmXDsyh96vSPEtk.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Hyundai" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Hyundai
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/nissan" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/igAkXQNWqVIiTSwKVsoG9DmihosVVTL6vp94K6qf.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Nissan" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Nissan
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/bmw" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/8epyndbgfapwj0RYIU5mMDUk88yFYWjffqLOQMFD.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="BMW" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            BMW
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/mercedes-benz" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/rCfpiBkUtiOz8Ipakex02EA8uNYXGySvQWH9phRx.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Mercedes-Benz" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Mercedes-Benz
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/toyota" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/rkIzWJlmmr3Ae5oJMwgHbFp3Kg9uinm5su2hmHoH.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Toyota" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Toyota
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/suzuki" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/hOcd5BOA7MVZ4y4potvCzMypnVKospMJsPZb1aPU.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Suzuki" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Suzuki
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/mitsubishi" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/p1cHVKZSlCy5VrGjQRcHQclukEoRhapNQQHXz522.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Mitsubishi" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Mitsubishi
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/honda" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/ED7vbI8nnpPeKv6LXGYsGMCOLKG5s5uWyedONBxj.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Honda" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Honda
                        </p>
                    </a>
                </div>
                <div class="col text-center border-right border-bottom hov-scale-img has-transition hov-shadow-out z-1">
                    <a href="brand/volvo" class="d-block p-sm-3">
                        <img src="frontend/uploads/all/EAB1zQHsBz4bs8Z4DSKmdqYVV2OReXMxiqp32hCk.webp" class="lazyload h-md-100px mx-auto has-transition p-2 p-sm-4 mw-100" alt="Volvo" onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                        <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">
                            Volvo
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection