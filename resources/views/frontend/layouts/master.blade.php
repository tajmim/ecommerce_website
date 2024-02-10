<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe">
    <meta name="app-url" content="//8x3O4zAkBVcf.com/ecommerce/">
    <meta name="file-base-url" content="//8x3O4zAkBVcf.com/ecommerce/frontend/">

    <title>Active eCommerce | Demo of Active eCommerce CMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Demo of Active eCommerce CMS">
    <meta name="keywords" content="">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Active eCommerce CMS">
    <meta itemprop="description" content="Demo of Active eCommerce CMS">
    <meta itemprop="image" content="frontend/assets/img/owa7P9YOaVWC.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Active eCommerce CMS">
    <meta name="twitter:description" content="Demo of Active eCommerce CMS">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="frontend/assets/img/owa7P9YOaVWC.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Active eCommerce CMS">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://8x3O4zAkBVcf.com/ecommerce">
    <meta property="og:image" content="frontend/assets/img/placeholder.jpg">
    <meta property="og:description" content="Demo of Active eCommerce CMS">
    <meta property="og:site_name" content="Active eCommerce CMS">
    <meta property="fb:app_id" content="">

    <!-- Favicon -->
    <link rel="icon" href="frontend/uploads/all/pOcEwsWKlrd8jMih6o68tn4YAjWbQEAwvZfeZVxJ.svg">
    <link rel="apple-touch-icon" href="frontend/uploads/all/pOcEwsWKlrd8jMih6o68tn4YAjWbQEAwvZfeZVxJ.svg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aiz-core_v=5440.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom-style.css') }}">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected',
            nothing_found: 'Nothing found',
            choose_file: 'Choose file',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>

    <style>
        :root {
            --blue: #3490f3;
            --hov-blue: #2e7fd6;
            --soft-blue: rgba(0, 123, 255, 0.15);
            --secondary-base: #FFBA00;
            --hov-secondary-base: #FBE8E5;
            --soft-secondary-base: rgba(255, 186, 0, 0.15);
            --gray: #9d9da6;
            --gray-dark: #8d8d8d;
            --secondary: #919199;
            --soft-secondary: rgba(145, 145, 153, 0.15);
            --success: #85b567;
            --soft-success: rgba(133, 181, 103, 0.15);
            --warning: #f3af3d;
            --soft-warning: rgba(243, 175, 61, 0.15);
            --light: #f5f5f5;
            --soft-light: #dfdfe6;
            --soft-white: #b5b5bf;
            --dark: #292933;
            --soft-dark: #1b1b28;
            --primary: #D42D2A;
            --hov-primary: #D62400;
            --soft-primary: rgba(212, 45, 42, 0.15);
        }

        body {
            font-family: 'Public Sans', sans-serif;
            font-weight: 400;
        }

        .pagination .page-link,
        .page-item.disabled .page-link {
            min-width: 32px;
            min-height: 32px;
            line-height: 32px;
            text-align: center;
            padding: 0;
            border: 1px solid var(--soft-light);
            font-size: 0.875rem;
            border-radius: 0 !important;
            color: var(--dark);
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .aiz-carousel.coupon-slider .slick-track {
            margin-left: 0;
        }

        .form-control:focus {
            border-width: 2px !important;
        }

        .iti__flag-container {
            padding: 2px;
        }

        .modal-content {
            border: 0 !important;
            border-radius: 0 !important;
        }

        .tagify.tagify--focus {
            border-width: 2px;
            border-color: var(--primary);
        }

        #map {
            width: 100%;
            height: 250px;
        }

        #edit_map {
            width: 100%;
            height: 250px;
        }

        .pac-container {
            z-index: 100000;
        }
    </style>




</head>

<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column bg-white">
        <!-- Header -->
        <!-- Top Bar Banner -->



        <!-- Top Bar -->
        <div class="top-navbar bg-white z-1035 h-35px h-sm-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col">
                        <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                            <!-- Language switcher -->
                            <li class="list-inline-item dropdown mr-4" id="lang-change">

                                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                                    data-toggle="dropdown" data-display="static">
                                    <span class="">English</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item  active ">
                                            <img src="frontend/assets/img/placeholder.jpg"
                                                data-src="frontend/assets/img/flags/en.png" class="mr-1 lazyload"
                                                alt="English" height="11">
                                            <span class="language">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="bd" class="dropdown-item ">
                                            <img src="frontend/assets/img/placeholder.jpg"
                                                data-src="frontend/assets/img/flags/bd.png" class="mr-1 lazyload"
                                                alt="Bangla" height="11">
                                            <span class="language">Bangla</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="sa" class="dropdown-item ">
                                            <img src="frontend/assets/img/placeholder.jpg"
                                                data-src="frontend/assets/img/flags/sa.png" class="mr-1 lazyload"
                                                alt="Arabic" height="11">
                                            <span class="language">Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="fr" class="dropdown-item ">
                                            <img src="frontend/assets/img/placeholder.jpg"
                                                data-src="frontend/assets/img/flags/fr.png" class="mr-1 lazyload"
                                                alt="French" height="11">
                                            <span class="language">French</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Currency Switcher -->
                            <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">

                                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                                    data-toggle="dropdown" data-display="static">
                                    U.S. Dollar
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <li>
                                        <a class="dropdown-item  active " href="javascript:void(0)"
                                            data-currency="USD">U.S. Dollar
                                            ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="AUD">Australian Dollar
                                            ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="BRL">Brazilian Real
                                            (R$)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="CAD">Canadian Dollar
                                            ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CZK">Czech
                                            Koruna
                                            (K)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="DKK">Danish Krone
                                            (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="EUR">Euro
                                            ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="HKD">Hong
                                            Kong Dollar
                                            ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="HUF">Hungarian Forint
                                            (Ft)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="ILS">Israeli New Sheqel
                                            ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="JPY">Japanese Yen
                                            ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="MYR">Malaysian Ringgit
                                            (RM)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="MXN">Mexican Peso
                                            ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="NOK">Norwegian Krone
                                            (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="NZD">New
                                            Zealand Dollar
                                            ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="PHP">Philippine Peso
                                            ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="PLN">Polish Zloty
                                            (zł)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="GBP">Pound
                                            Sterling
                                            ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="RUB">Russian Ruble
                                            ()</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="SGD">Singapore Dollar
                                            ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="SEK">Swedish Krona
                                            (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CHF">Swiss
                                            Franc
                                            (CHF)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="THB">Thai
                                            Baht
                                            (฿)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="BDT">Taka
                                            (৳)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="Rupee">Indian Rupee
                                            (Rs)</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="col-6 text-right d-none d-lg-block">
                        <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                            <!-- Become a Seller -->
                            <li class="list-inline-item mr-0 pl-0 py-2">
                                <a href="shops/create"
                                    class="text-secondary fs-12 pr-3 d-inline-block border-width-2 border-right">Become
                                    a Seller !</a>
                            </li>
                            <!-- Seller Login -->
                            <li class="list-inline-item mr-0 pl-0 py-2">
                                <a href="seller/login" class="text-secondary fs-12 pl-3 d-inline-block">Login to
                                    Seller</a>
                            </li>
                            <!-- Helpline -->
                            <li class="list-inline-item ml-3 pl-3 mr-0 pr-0">
                                <a href="tel:+01 112 352 566" class="text-secondary fs-12 d-inline-block py-2">
                                    <span>Helpline</span>
                                    <span>+01 112 352 566</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <header class=" sticky-top  z-1020 bg-white">
            <!-- Search Bar -->
            <div class="position-relative logo-bar-area border-bottom border-md-nonea z-1025">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <!-- top menu sidebar button -->
                        <button type="button" class="btn d-lg-none mr-3 mr-sm-4 p-0 active"
                            data-toggle="class-toggle" data-target=".aiz-top-menu-sidebar">
                            <svg id="Component_43_1" data-name="Component 43 – 1" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16">
                                <rect id="Rectangle_19062" data-name="Rectangle 19062" width="16" height="2"
                                    transform="translate(0 7)" fill="#919199"></rect>
                                <rect id="Rectangle_19063" data-name="Rectangle 19063" width="16" height="2"
                                    fill="#919199"></rect>
                                <rect id="Rectangle_19064" data-name="Rectangle 19064" width="16" height="2"
                                    transform="translate(0 14)" fill="#919199"></rect>
                            </svg>

                        </button>
                        <!-- Header Logo -->
                        <div class="col-auto pl-0 pr-3 d-flex align-items-center">
                            <a class="d-block py-20px mr-3 ml-0" href="/">
                                <img src="{{ asset('frontend/assets/images/logo.jpg') }}" alt="Active eCommerce CMS"
                                    class="mw-100 h-30px h-md-40px" height="40">
                            </a>
                        </div>
                        <!-- Search Icon for small device -->
                        <div class="d-lg-none ml-auto mr-0">
                            <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle"
                                data-target=".front-header-search">
                                <i class="las la-search la-flip-horizontal la-2x"></i>
                            </a>
                        </div>
                        <!-- Search field -->
                        <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white mx-xl-5">
                            <div class="position-relative flex-grow-1 px-3 px-lg-0">
                                <form action="search" method="GET" class="stop-propagation">
                                    <div class="d-flex position-relative align-items-center">
                                        <div class="d-lg-none" data-toggle="class-toggle"
                                            data-target=".front-header-search">
                                            <button class="btn px-2" type="button"><i
                                                    class="la la-2x la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="search-input-box">
                                            <input type="text"
                                                class="border border-soft-light form-control fs-14 hov-animate-outline"
                                                id="search" name="keyword" placeholder="I am shopping for..."
                                                autocomplete="off">

                                            <svg id="Group_723" data-name="Group 723"
                                                xmlns="http://www.w3.org/2000/svg" width="20.001" height="20"
                                                viewBox="0 0 20.001 20">
                                                <path id="Path_3090" data-name="Path 3090"
                                                    d="M9.847,17.839a7.993,7.993,0,1,1,7.993-7.993A8,8,0,0,1,9.847,17.839Zm0-14.387a6.394,6.394,0,1,0,6.394,6.394A6.4,6.4,0,0,0,9.847,3.453Z"
                                                    transform="translate(-1.854 -1.854)" fill="#b5b5bf"></path>
                                                <path id="Path_3091" data-name="Path 3091"
                                                    d="M24.4,25.2a.8.8,0,0,1-.565-.234l-6.15-6.15a.8.8,0,0,1,1.13-1.13l6.15,6.15A.8.8,0,0,1,24.4,25.2Z"
                                                    transform="translate(-5.2 -5.2)" fill="#b5b5bf"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </form>
                                <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100"
                                    style="min-height: 200px">
                                    <div class="search-preloader absolute-top-center">
                                        <div class="dot-loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="search-nothing d-none p-3 text-center fs-16">

                                    </div>
                                    <div id="search-content" class="text-left">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Search box -->
                        <div class="d-none d-lg-none ml-3 mr-0">
                            <div class="nav-search-box">
                                <a href="#" class="nav-box-link">
                                    <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Compare -->
                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="compare">
                                <a href="compare" class="d-flex align-items-center text-dark" data-toggle="tooltip"
                                    data-title="Compare" data-placement="top">
                                    <span class="position-relative d-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16">
                                            <path id="_9f8e765afedd47ec9e49cea83c37dfea"
                                                data-name="9f8e765afedd47ec9e49cea83c37dfea"
                                                d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z"
                                                transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Wishlist -->
                        <div class="d-none d-lg-block mr-3" style="margin-left: 36px;">
                            <div class="" id="wishlist">
                                <a href="wishlists" class="d-flex align-items-center text-dark" data-toggle="tooltip"
                                    data-title="Wishlist" data-placement="top">
                                    <span class="position-relative d-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4"
                                            viewBox="0 0 16 14.4">
                                            <g id="_51a3dbe0e593ba390ac13cba118295e4"
                                                data-name="51a3dbe0e593ba390ac13cba118295e4"
                                                transform="translate(-3.05 -4.178)">
                                                <path id="Path_32649" data-name="Path 32649"
                                                    d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z"
                                                    transform="translate(0 0)" fill="#919199"></path>
                                                <path id="Path_32650" data-name="Path 32650"
                                                    d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z"
                                                    transform="translate(0 0)" fill="#919199"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Notifications -->
                        <ul class="list-inline mb-0 h-100 d-none d-xl-flex justify-content-end align-items-center">
                            <li class="list-inline-item ml-3 mr-3 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-secondary fs-12" data-toggle="dropdown"
                                    href="javascript:void(0);" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.668" height="16"
                                                viewBox="0 0 14.668 16">
                                                <path id="_26._Notification" data-name="26. Notification"
                                                    d="M8.333,16A3.34,3.34,0,0,0,11,14.667H5.666A3.34,3.34,0,0,0,8.333,16ZM15.06,9.78a2.457,2.457,0,0,1-.727-1.747V6a6,6,0,1,0-12,0V8.033A2.457,2.457,0,0,1,1.606,9.78,2.083,2.083,0,0,0,3.08,13.333H13.586A2.083,2.083,0,0,0,15.06,9.78Z"
                                                    transform="translate(-0.999)" fill="#91919b"></path>
                                            </svg>
                                        </span>
                                    </span></a>

                            </li>
                        </ul>

                        @auth
                        <div class="d-none d-xl-block ml-auto mr-0">
                           
                            <span class="d-flex align-items-center nav-user-info ml-3">
                                <!-- Image -->
                            <span class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/5XVyeLGw5zRpb63bqgn2dtIOjCktLgBltNSQIPG3.webp" class="img-fit h-100" alt="Avatar" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                            </span>
                            <!-- Name -->
                                <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0">{{Auth::user()->name}}</h4>
                                
                            </span>
                        </div>
                        @else
                        <div class="d-none d-xl-block ml-auto mr-0">
                            <!--Login & Registration -->
                            <span class="d-flex align-items-center nav-user-info ml-3">
                                <!-- Image -->
                                <span
                                    class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                                        viewBox="0 0 19.902 20.012">
                                        <path id="fe2df171891038b33e9624c27e96e367"
                                            d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                            transform="translate(-2.064 -1.995)" fill="#91919b"></path>
                                    </svg>
                                </span>
                                <a href="{{ route('users.login') }}"
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                                <a href="{{ route('users.registration') }}"
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
                            </span>
                        </div>
                            
                        @endauth

                        <div class="d-none d-xl-block ml-auto mr-0">
                            <!--Login & Registration -->
                            <span class="d-flex align-items-center nav-user-info ml-3">
                                <!-- Image -->
                                <span
                                    class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                                        viewBox="0 0 19.902 20.012">
                                        <path id="fe2df171891038b33e9624c27e96e367"
                                            d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                            transform="translate(-2.064 -1.995)" fill="#91919b"></path>
                                    </svg>
                                </span>
                                <a href="{{ route('users.login') }}"
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                                <a href="{{ route('users.registration') }}"
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Loged in user Menus -->
                <div class="hover-user-top-menu position-absolute top-100 left-0 right-0 z-3">
                    <div class="container">
                        <div class="position-static float-right">
                            <div class="aiz-user-top-menu bg-white rounded-0 border-top shadow-sm"
                                style="width:220px;">
                                <ul class="list-unstyled no-scrollbar mb-0 text-left">
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="dashboard"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path id="Path_2916" data-name="Path 2916"
                                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                                    fill="#b5b5c0"></path>
                                            </svg>
                                            <span class="user-top-menu-name has-transition ml-3">Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="logout"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999"
                                                viewBox="0 0 16 15.999">
                                                <g id="Group_25503" data-name="Group 25503"
                                                    transform="translate(-24.002 -377)">
                                                    <g id="Group_25265" data-name="Group 25265"
                                                        transform="translate(-216.534 -160)">
                                                        <path id="Subtraction_192" data-name="Subtraction 192"
                                                            d="M12052.535,2920a8,8,0,0,1-4.569-14.567l.721.72a7,7,0,1,0,7.7,0l.721-.72a8,8,0,0,1-4.567,14.567Z"
                                                            transform="translate(-11803.999 -2367)" fill="#d43533">
                                                        </path>
                                                    </g>
                                                    <rect id="Rectangle_19022" data-name="Rectangle 19022"
                                                        width="1" height="8" rx="0.5"
                                                        transform="translate(31.5 377)" fill="#d43533"></rect>
                                                </g>
                                            </svg>
                                            <span
                                                class="user-top-menu-name text-primary has-transition ml-3">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Bar -->
            <div class="d-none d-lg-block position-relative bg-primary h-50px">
                <div class="container h-100">
                    <div class="d-flex h-100">
                        <!-- Categoty Menu Button -->
                        <div class="d-none d-xl-block all-category has-transition bg-black-10" id="category-menu-bar">
                            <div class="px-3 h-100"
                                style="padding-top: 12px;padding-bottom: 12px; width:270px; cursor: pointer;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <span class="fw-700 fs-16 text-white mr-3">Categories</span>
                                        <a href="categories" class="text-reset">
                                            <span class="d-none d-lg-inline-block text-white hov-opacity-80">(See
                                                All)</span>
                                        </a>
                                    </div>
                                    <i class="las la-angle-down text-white has-transition" id="category-menu-bar-icon"
                                        style="font-size: 1.2rem !important"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Header Menus -->
                        <div class="ml-xl-4 w-100 overflow-hidden">
                            <div
                                class="d-flex align-items-center justify-content-center justify-content-xl-start h-100">
                                <ul class="list-inline mb-0 pl-0 hor-swipe c-scrollbar-light">
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href=""
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                            Home
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="flash-deals"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                            Flash Sale
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="blog"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                            Blogs
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="brands"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                            All Brands
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="categories"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                            All Categories
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="sellers"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                            All Sellers
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="coupons"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                            Coupons
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="todays-deal"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                            ">
                                            Todays Deal
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart -->
                        <div class="d-none d-xl-block align-self-stretch ml-5 mr-0 has-transition bg-black-10"
                            data-hover="dropdown">
                            <div class="nav-cart-box dropdown h-100" id="cart_items" style="width: max-content;">
                                <!-- Cart button with cart count -->
                                <a href="javascript:void(0)" class="d-flex align-items-center text-dark px-3 h-100"
                                    data-toggle="dropdown" data-display="static" title="Cart">
                                    <span class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20.562"
                                            viewBox="0 0 24 20.562">
                                            <g id="_5e67fc94b53aaec8ca181b806dd815ee"
                                                data-name="5e67fc94b53aaec8ca181b806dd815ee"
                                                transform="translate(-33.276 -101)">
                                                <path id="Path_32659" data-name="Path 32659"
                                                    d="M34.034,102.519H38.2l-.732-.557c.122.37.243.739.365,1.112q.441,1.333.879,2.666.528,1.6,1.058,3.211.46,1.394.917,2.788c.149.451.291.9.446,1.352l.008.02a.76.76,0,0,0,1.466-.4c-.122-.37-.243-.739-.365-1.112q-.441-1.333-.879-2.666-.528-1.607-1.058-3.213-.46-1.394-.917-2.788c-.149-.451-.289-.9-.446-1.352l-.008-.02a.783.783,0,0,0-.732-.557H34.037a.76.76,0,0,0,0,1.519Z"
                                                    fill="#fff"></path>
                                                <path id="Path_32660" data-name="Path 32660"
                                                    d="M288.931,541.934q-.615,1.1-1.233,2.193c-.058.106-.119.21-.177.317a.767.767,0,0,0,.656,1.142h11.6c.534,0,1.071.01,1.608,0h.023a.76.76,0,0,0,0-1.519h-11.6c-.534,0-1.074-.015-1.608,0h-.023l.656,1.142q.615-1.1,1.233-2.193c.058-.106.119-.21.177-.316a.759.759,0,0,0-1.312-.765Z"
                                                    transform="translate(-247.711 -429.41)" fill="#fff"></path>
                                                <circle id="Ellipse_553" data-name="Ellipse 553" cx="1.724"
                                                    cy="1.724" r="1.724" transform="translate(49.612 117.606)"
                                                    fill="#fff"></circle>
                                                <path id="Path_32661" data-name="Path 32661"
                                                    d="M658.4,739.2a2.267,2.267,0,0,0,1.489,2.1,2.232,2.232,0,0,0,2.433-.648A2.231,2.231,0,1,0,658.4,739.2a.506.506,0,0,0,1.013,0c0-.041,0-.084.005-.124a.381.381,0,0,1,.005-.053c.008-.1,0,.033-.005.03a.979.979,0,0,1,.061-.248c.008-.02.023-.106.04-.111s-.046.094-.018.043a.656.656,0,0,0,.028-.061,2.3,2.3,0,0,1,.129-.215c.048-.073-.068.078.013-.015.025-.028.051-.058.078-.086s.056-.056.084-.081l.038-.033c.018-.015.091-.051.025-.023s-.015.013,0,0,.035-.025.056-.038a.947.947,0,0,1,.086-.051c.038-.023.078-.041.119-.061.013-.008.066-.033,0,0s.025-.008.033-.01A1.56,1.56,0,0,1,660.4,738l.068-.013c.056-.013-.048.005-.048.005.046,0,.094-.01.139-.01a2.043,2.043,0,0,1,.248.008c.094.008-.1-.018.02.005.046.008.089.02.134.03s.076.023.114.035a.589.589,0,0,1,.063.023c0,.008-.094-.048-.043-.018.071.043.149.076.22.122.018.013.035.025.056.038s.056.023,0,0-.018-.015,0,0l.051.043a2.274,2.274,0,0,1,.172.177c.076.084-.035-.058.013.015.02.033.043.063.063.1s.041.068.058.1l.023.046c.048.091.01-.008,0-.013.03.01.063.192.073.225l.023.1c.02.1,0-.03,0-.033.013.013.008.071.008.086a1.749,1.749,0,0,1,0,.23.63.63,0,0,0-.005.071c0,.051-.03.043.005-.03a.791.791,0,0,0-.028.134c-.018.071-.046.139-.066.21s.046-.086.013-.028a.245.245,0,0,0-.02.046c-.02.041-.041.078-.063.117s-.041.066-.063.1c-.068.1.048-.051-.01.018a1.932,1.932,0,0,1-.172.18c-.01.01-.071.076-.089.076,0,0,.1-.071.023-.02-.015.01-.028.018-.041.028-.071.046-.144.084-.218.122s.091-.03-.018.008l-.111.038-.116.03c-.018,0-.033.008-.051.01-.111.025.081-.005.015,0a2.045,2.045,0,0,1-.248.01c-.041,0-.081-.005-.124-.008-.015,0-.076-.008,0,0s-.018-.005-.035-.008a1.912,1.912,0,0,1-.261-.076c-.015-.005-.066-.03,0,0s-.015-.008-.03-.015c-.041-.02-.078-.041-.117-.063s-.073-.048-.111-.073c-.061-.038.008.02.023.02-.01,0-.043-.035-.051-.043a1.872,1.872,0,0,1-.187-.187.3.3,0,0,1-.043-.051c0,.01.061.086.02.023-.025-.038-.051-.073-.073-.111s-.048-.089-.071-.132c-.053-.1.025.081-.015-.033a1.836,1.836,0,0,1-.073-.263.163.163,0,0,0-.01-.051c.038.084.008.071,0,.013s-.008-.106-.008-.16a.513.513,0,0,0-1.026,0Z"
                                                    transform="translate(-609.293 -619.872)" fill="#fff"></path>
                                                <circle id="Ellipse_554" data-name="Ellipse 554" cx="1.724"
                                                    cy="1.724" r="1.724" transform="translate(40.884 117.606)"
                                                    fill="#fff"></circle>
                                                <path id="Path_32662" data-name="Path 32662"
                                                    d="M270.814,272.355a2.267,2.267,0,0,0,1.489,2.1,2.232,2.232,0,0,0,2.433-.648,2.231,2.231,0,1,0-3.922-1.453.506.506,0,0,0,1.013,0c0-.041,0-.084.005-.124a.377.377,0,0,1,.005-.053c.008-.1,0,.033-.005.03a.981.981,0,0,1,.061-.248c.008-.02.023-.106.04-.111s-.046.094-.018.043a.656.656,0,0,0,.028-.061,2.3,2.3,0,0,1,.129-.215c.048-.073-.068.079.013-.015.025-.028.051-.058.078-.086s.056-.056.084-.081l.038-.033c.018-.015.091-.051.025-.023s-.015.013,0,0,.035-.025.056-.038a.96.96,0,0,1,.086-.051c.038-.023.078-.04.119-.061.013-.008.066-.033,0,0s.025-.008.033-.01a1.564,1.564,0,0,1,.213-.061l.068-.013c.056-.013-.048.005-.048.005.046,0,.094-.01.139-.01a2.031,2.031,0,0,1,.248.008c.094.008-.1-.018.02.005.046.008.089.02.134.03s.076.023.114.035a.583.583,0,0,1,.063.023c0,.008-.094-.048-.043-.018.071.043.149.076.22.122.018.013.035.025.056.038s.056.023,0,0-.018-.015,0,0l.051.043a2.257,2.257,0,0,1,.172.177c.076.084-.035-.058.013.015.02.033.043.063.063.1s.04.068.058.1l.023.046c.048.091.01-.008,0-.013.03.01.063.192.073.225l.023.1c.02.1,0-.03,0-.033.013.013.008.071.008.086a1.749,1.749,0,0,1,0,.23.622.622,0,0,0-.005.071c0,.051-.03.043.005-.03a.788.788,0,0,0-.028.134c-.018.071-.046.139-.066.21s.046-.086.013-.028a.249.249,0,0,0-.02.046c-.02.04-.041.078-.063.116s-.041.066-.063.1c-.068.1.048-.051-.01.018a1.929,1.929,0,0,1-.172.18c-.01.01-.071.076-.089.076,0,0,.1-.071.023-.02-.015.01-.028.018-.041.028-.071.046-.144.084-.218.122s.091-.03-.018.008l-.111.038-.116.03c-.018,0-.033.008-.051.01-.111.025.081-.005.015,0a2.039,2.039,0,0,1-.248.01c-.041,0-.081-.005-.124-.008-.015,0-.076-.008,0,0s-.018-.005-.035-.008a1.919,1.919,0,0,1-.261-.076c-.015-.005-.066-.03,0,0s-.015-.008-.03-.015c-.04-.02-.078-.04-.116-.063s-.073-.048-.111-.073c-.061-.038.008.02.023.02-.01,0-.043-.035-.051-.043a1.873,1.873,0,0,1-.187-.187.3.3,0,0,1-.043-.051c0,.01.061.086.02.023-.025-.038-.051-.073-.073-.111s-.048-.089-.071-.132c-.053-.1.025.081-.015-.033a1.84,1.84,0,0,1-.073-.263.164.164,0,0,0-.01-.051c.038.084.008.071,0,.013s-.008-.106-.008-.16a.513.513,0,0,0-1.026,0ZM287.2,258l-3.074,7.926H272.313L269.7,258Z"
                                                    transform="translate(-230.437 -153.024)" fill="#fff"></path>
                                                <path id="Path_32663" data-name="Path 32663"
                                                    d="M267.044,237.988q-.52,1.341-1.038,2.682-.828,2.138-1.654,4.274l-.38.983.489-.372H254.1c-.476,0-.957-.02-1.436,0h-.02l.489.372q-.444-1.348-.886-2.694-.7-2.131-1.4-4.264c-.109-.327-.215-.653-.324-.983l-.489.641h16.791c.228,0,.456.005.681,0h.03a.506.506,0,0,0,0-1.013H250.744c-.228,0-.456-.005-.681,0h-.03a.511.511,0,0,0-.489.641q.444,1.348.886,2.694.7,2.131,1.4,4.264c.109.327.215.653.324.983a.523.523,0,0,0,.489.372h10.359c.476,0,.957.018,1.436,0h.02a.526.526,0,0,0,.489-.372q.52-1.341,1.038-2.682.828-2.138,1.654-4.274l.38-.983a.508.508,0,0,0-.355-.623A.52.52,0,0,0,267.044,237.988Z"
                                                    transform="translate(-210.769 -133.152)" fill="#fff"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="d-none d-xl-block ml-2 fs-14 fw-700 text-white">$0.000</span>
                                    <span class="nav-box-text d-none d-xl-block ml-2 text-white fs-12">

                                        (<span class="cart-count">0</span> Items)

                                    </span>
                                </a>

                                <!-- Cart Items -->
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation rounded-0">
                                    <div class="text-center p-3">
                                        <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                        <h3 class="h6 fw-700">Your Cart is empty</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Categoty Menus -->
                <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 z-3 d-none"
                    id="click-category-menu">
                    <div class="container">
                        <div class="d-flex position-relative">
                            <div class="position-static">
                                <div class="aiz-category-menu bg-white rounded-0 border-top" id="category-sidebar"
                                    style="width:270px;">
                                    <ul class="list-unstyled categories no-scrollbar mb-0 text-left">
                                        <li class="category-nav-element border border-top-0" data-id="1">
                                            <a href="category/women-clothing-fashion"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/46v0RI8PXlQa4Yy0IftaGaK9rZUQdLOAFkpnjRXT.webp"
                                                    width="16" alt="Women Clothing &amp; Fashion"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Women Clothing &amp;
                                                    Fashion</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="2">
                                            <a href="category/men-clothing-fashion"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/LHUk7AM6okO07NvMOkVB35JbQBCLGLjfbRBuUNHc.webp"
                                                    width="16" alt="Men Clothing &amp; Fashion"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Men Clothing &amp; Fashion</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="3">
                                            <a href="category/computer-accessories"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/kTwoR2hUnTf1y6kAOmt9FUidF6Qo8IK0RkvGVMbi.webp"
                                                    width="16" alt="Computer &amp; Accessories"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Computer &amp; Accessories</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="4">
                                            <a href="category/automobile-motorcycle"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/vafdWTltz6NGVOA2BOaSC3Y7PPFmxmSHX6KBhn4Z.webp"
                                                    width="16" alt="Automobile &amp; Motorcycle"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Automobile &amp;
                                                    Motorcycle</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="5">
                                            <a href="category/kids-toy"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/7Hpz9FWvKRNENKEXd13gqNPlFxz8LFJgCTFzlZbR.webp"
                                                    width="16" alt="Kids &amp; toy"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Kids &amp; toy</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="6">
                                            <a href="category/sports-outdoor"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/jNdturV05yXj1UsPHurYFoJs410G39D5C2bnPGor.webp"
                                                    width="16" alt="Sports &amp; outdoor"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Sports &amp; outdoor</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="7">
                                            <a href="category/jewelry-watches"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/R6AnVQNPd89NvPZelfi4F8rfkbFIiu8XteN74BFz.webp"
                                                    width="16" alt="Jewelry &amp; Watches"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Jewelry &amp; Watches</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="8">
                                            <a href="category/cellphones-tabs"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/JjUx7LIwj97wFpsgffYGwYxtdEiQLVGPtBWYE4wq.webp"
                                                    width="16" alt="Cellphones &amp; Tabs"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Cellphones &amp; Tabs</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="9">
                                            <a href="category/beauty-health-hair"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/KHQpABDau3b7oMyDFNSJYSMgprsQ1Kq5uij9fw3U.webp"
                                                    width="16" alt="Beauty, Health &amp; Hair"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Beauty, Health &amp; Hair</span>
                                            </a>

                                            <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                <div class="c-preloader text-center absolute-center">
                                                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="category-nav-element border border-top-0" data-id="10">
                                            <a href="category/home-improvement-tools"
                                                class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="frontend/assets/img/placeholder.jpg"
                                                    data-src="frontend/uploads/all/9hMfQOGGQrpmFO1KEbTJ9SijUxM8p8TEsm6o4FVp.webp"
                                                    width="16" alt="Home Improvement &amp; Tools"
                                                    onerror="this.onerror=null;this.src='frontend/assets/img/owa7P9YOaVWC.jpg';">
                                                <span class="cat-name has-transition">Home Improvement &amp;
                                                    Tools</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Top Menu Sidebar -->
        <div class="aiz-top-menu-sidebar collapse-sidebar-wrap sidebar-xl sidebar-left d-lg-none z-1035">
            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                data-target=".aiz-top-menu-sidebar" data-same=".hide-top-menu-bar"></div>
            <div class="collapse-sidebar c-scrollbar-light text-left">
                <button type="button" class="btn btn-sm p-4 hide-top-menu-bar" data-toggle="class-toggle"
                    data-target=".aiz-top-menu-sidebar">
                    <i class="las la-times la-2x text-primary"></i>
                </button>
                <!--Login & Registration -->
                <span class="d-flex align-items-center nav-user-info pl-4">
                    <!-- Image -->
                    <span
                        class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                            viewBox="0 0 19.902 20.012">
                            <path id="fe2df171891038b33e9624c27e96e367"
                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                transform="translate(-2.064 -1.995)" fill="#91919b"></path>
                        </svg>
                    </span>
                    <a href="users/login"
                        class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                    <a href="users/registration"
                        class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
                </span>
                <hr>
                <ul class="mb-0 pl-3 pb-3 h-100">
                    <li class="mr-0">
                        <a href=""
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                            Home
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="flash-deals"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                            Flash Sale
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="blog"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                            Blogs
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="brands"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                            All Brands
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="categories"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                            All Categories
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="sellers"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                            All Sellers
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="coupons"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                            Coupons
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="todays-deal"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            ">
                            Todays Deal
                        </a>
                    </li>
                </ul>
                <br>
                <br>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="order_details" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div id="order-details-modal-body">

                    </div>
                </div>
            </div>
        </div>


        @yield('content')


        <!-- footer -->
        <!-- footer Description -->
        <section class="bg-light border-top border-bottom mt-auto">
            <div class="container py-4">
                <h1 class="fs-18 fw-700 text-gray-dark mb-3">Active eCommerce CMS | AN ONLINE SHOPPING PLATFORM WITH
                    GREAT DEALS</h1>
                <p class="fs-13 text-gray-dark text-justify mb-0">
                    Active eCommerce CMS Bangladesh is a leading online shopping site based in Bangladesh that brings
                    you great deals, with platforms existing across Asia including Singapore, Thailand, Indonesia,
                    Vietnam, Philippines, and Taiwan. We offer unbeatable deals featuring an endless range of products
                    priced at affordable rates. What is even better? We enhance your experience with the eCommerce
                    Guarantee, which means your payment is held in our system and only released to the seller after you
                    have received your purchase in good condition! All because we value you as our customer. What are
                    you waiting for? Come aboard and start browsing!<br>
                    <br>
                    Active eCommerce CMS -- QUALITY PRODUCTS, LOW PRICES<br>
                    Active eCommerce CMS strives to provide you with a great online shopping experience and we know a
                    great experience often includes affordable prices. That is why you should check out Active eCommerce
                    CMS Bangladesh site/app’s daily online Shocking Sale, where we offer you different products at a
                    discounted price, ensuring you get a bang for your buck. We even offer free shipping, Flat rate
                    shipping, carrier-wise shipping on products! For brand-loyal customers, head over to Active
                    eCommerce CMS Mall for authentic products at superb prices.<br>
                    <br>
                    Want to look your best without burning a hole in your wallet? Check out Style by Active eCommerce
                    CMS for our top picks in fashion. Want to get the best prices for day-to-day items? Browse through
                    our Lowest Price Guaranteed page. If you find the same Lowest Price Guaranteed item being sold at a
                    lower price by a competitor, we will reward you with 120% of the price difference in Active
                    eCommerce CMS Coins! You can also find official online stores for some of Bangladeshis biggest
                    brands here, such as Nestle, Unilever, Mydin, Tefal, Calvin Klein, and more right here on our
                    platform.<br>
                    <br>
                    Store FOR VARIETY WITH Active eCommerce CMS<br>
                    Everyone loves online shopping for convenience and the low prices are a bonus! Active eCommerce CMS
                    strives to help you get a bang for your buck with multiple sales and promotions happening at any one
                    time. Make sure your wallet is ready for our big sales campaigns, such as 7.7 Orange Madness, 9.9
                    Super Shopping Day, 10.10 Brands Festival, 11.11 Big Sale, and 12.12 Birthday Sale. We also have
                    massive sales and offer great savings to you during major festivals like Chinese New Year and Raya!
                    At the same time, check in often because we also have smaller sale periods that are
                    category-specific, such as our Baby Fair and Black Friday sales.<br>
                    <br>
                    Let’s not forget about the frequently occurring Super Brand Day! These days, specific brands offer
                    amazing deals for their top-selling items, so be sure to watch if your favorite brand is featured.
                    Of course, there are always different kinds of smaller promotions happening every day, so you really
                    will benefit if you constantly check your website to ensure you are not missing any mind-blowing
                    offers!
                </p>
            </div>
        </section>

        <!-- footer top Bar -->
        <section class="bg-light border-top mt-auto">
            <div class="container px-xs-0">
                <div class="row no-gutters border-left border-soft-light">
                    <!-- Terms & conditions -->
                    <div class="col-lg-3 col-6 policy-file">
                        <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1"
                            href="terms">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.004" height="32"
                                viewBox="0 0 26.004 32">
                                <path id="Union_8" data-name="Union 8"
                                    d="M-14508,18932v-.01a6.01,6.01,0,0,1-5.975-5.492h-.021v-14h1v13.5h0a4.961,4.961,0,0,0,4.908,4.994h.091v0h14v1Zm17-4v-1a2,2,0,0,0,2-2h1a3,3,0,0,1-2.927,3Zm-16,0a3,3,0,0,1-3-3h1a2,2,0,0,0,2,2h16v1Zm18-3v-16.994h-4v-1h3.6l-5.6-5.6v3.6h-.01a2.01,2.01,0,0,0,2,2v1a3.009,3.009,0,0,1-3-3h.01v-4h.6l0,0H-14507a2,2,0,0,0-2,2v22h-1v-22a3,3,0,0,1,3-3v0h12l0,0,7,7-.01.01V18925Zm-16-4.992v-1h12v1Zm0-4.006v-1h12v1Zm0-4v-1h12v1Z"
                                    transform="translate(14513.998 -18900.002)" fill="#919199"></path>
                            </svg>
                            <h4 class="text-dark fs-14 fw-700 mt-3">Terms &amp; conditions</h4>
                        </a>
                    </div>

                    <!-- Return Policy -->
                    <div class="col-lg-3 col-6 policy-file">
                        <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1"
                            href="return-policy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.001" height="23.971"
                                viewBox="0 0 32.001 23.971">
                                <path id="Union_7" data-name="Union 7"
                                    d="M-14490,18922.967a6.972,6.972,0,0,0,4.949-2.051,6.944,6.944,0,0,0,2.052-4.943,7.008,7.008,0,0,0-7-7v0h-22.1l7.295,7.295-.707.707-7.779-7.779-.708-.707.708-.7,7.774-7.779.712.707-7.261,7.258H-14490v0a8.01,8.01,0,0,1,8,8,8.008,8.008,0,0,1-8,8Z"
                                    transform="translate(14514.001 -18900)" fill="#919199"></path>
                            </svg>
                            <h4 class="text-dark fs-14 fw-700 mt-3">Return Policy</h4>
                        </a>
                    </div>

                    <!-- Support Policy -->
                    <div class="col-lg-3 col-6 policy-file">
                        <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1"
                            href="support-policy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.002" height="32.002"
                                viewBox="0 0 32.002 32.002">
                                <g id="Group_24198" data-name="Group 24198" transform="translate(-1113.999 -2398)">
                                    <path id="Subtraction_14" data-name="Subtraction 14"
                                        d="M-14508,18916h0l-1,0a12.911,12.911,0,0,1,3.806-9.187A12.916,12.916,0,0,1-14496,18903a12.912,12.912,0,0,1,9.193,3.811A12.9,12.9,0,0,1-14483,18916l-1,0a11.918,11.918,0,0,0-3.516-8.484A11.919,11.919,0,0,0-14496,18904a11.921,11.921,0,0,0-8.486,3.516A11.913,11.913,0,0,0-14508,18916Z"
                                        transform="translate(15626 -16505)" fill="#919199"></path>
                                    <path id="Subtraction_15" data-name="Subtraction 15"
                                        d="M-14510,18912h-1a3,3,0,0,1-3-3v-6a3,3,0,0,1,3-3h1a2,2,0,0,1,2,2v8A2,2,0,0,1-14510,18912Zm-1-11a2,2,0,0,0-2,2v6a2,2,0,0,0,2,2h1a1,1,0,0,0,1-1v-8a1,1,0,0,0-1-1Z"
                                        transform="translate(15628 -16489)" fill="#919199"></path>
                                    <path id="Subtraction_19" data-name="Subtraction 19"
                                        d="M4,12H3A3,3,0,0,1,0,9V3A3,3,0,0,1,3,0H4A2,2,0,0,1,6,2v8A2,2,0,0,1,4,12ZM3,1A2,2,0,0,0,1,3V9a2,2,0,0,0,2,2H4a1,1,0,0,0,1-1V2A1,1,0,0,0,4,1Z"
                                        transform="translate(1146.002 2423) rotate(180)" fill="#919199"></path>
                                    <path id="Subtraction_17" data-name="Subtraction 17"
                                        d="M-14512,18908a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2,2,2,0,0,1,2,2v4A2,2,0,0,1-14512,18908Zm0-7a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1,1,1,0,0,0,1-1v-4A1,1,0,0,0-14512,18901Z"
                                        transform="translate(20034 16940.002) rotate(90)" fill="#919199"></path>
                                    <rect id="Rectangle_18418" data-name="Rectangle 18418" width="1"
                                        height="4.001" transform="translate(1137.502 2427.502) rotate(90)"
                                        fill="#919199"></rect>
                                    <path id="Intersection_1" data-name="Intersection 1"
                                        d="M-14508.5,18910a4.508,4.508,0,0,0,4.5-4.5h1a5.508,5.508,0,0,1-5.5,5.5Z"
                                        transform="translate(15646.004 -16482.5)" fill="#919199"></path>
                                </g>
                            </svg>
                            <h4 class="text-dark fs-14 fw-700 mt-3">Support Policy</h4>
                        </a>
                    </div>

                    <!-- Privacy Policy -->
                    <div class="col-lg-3 col-6 policy-file">
                        <a class="text-reset h-100 border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1"
                            href="privacy-policy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32">
                                <g id="Group_24236" data-name="Group 24236"
                                    transform="translate(-1454.002 -2430.002)">
                                    <path id="Subtraction_11" data-name="Subtraction 11"
                                        d="M-14498,18932a15.894,15.894,0,0,1-11.312-4.687A15.909,15.909,0,0,1-14514,18916a15.884,15.884,0,0,1,4.685-11.309A15.9,15.9,0,0,1-14498,18900a15.909,15.909,0,0,1,11.316,4.688A15.885,15.885,0,0,1-14482,18916a15.9,15.9,0,0,1-4.687,11.316A15.909,15.909,0,0,1-14498,18932Zm0-31a14.9,14.9,0,0,0-10.605,4.393A14.9,14.9,0,0,0-14513,18916a14.9,14.9,0,0,0,4.395,10.607A14.9,14.9,0,0,0-14498,18931a14.9,14.9,0,0,0,10.607-4.393A14.9,14.9,0,0,0-14483,18916a14.9,14.9,0,0,0-4.393-10.607A14.9,14.9,0,0,0-14498,18901Z"
                                        transform="translate(15968 -16470)" fill="#919199"></path>
                                    <g id="Group_24196" data-name="Group 24196" transform="translate(0 -1)">
                                        <rect id="Rectangle_18406" data-name="Rectangle 18406" width="2"
                                            height="10" transform="translate(1469 2440)" fill="#919199"></rect>
                                        <rect id="Rectangle_18407" data-name="Rectangle 18407" width="2"
                                            height="2" transform="translate(1469 2452)" fill="#919199"></rect>
                                    </g>
                                </g>
                            </svg>
                            <h4 class="text-dark fs-14 fw-700 mt-3">Privacy Policy</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer subscription & icons -->
        <section class="py-3 text-light footer-widget border-bottom"
            style="border-color: #3d3d46 !important; background-color: #212129 !important;">
            <div class="container">
                <!-- footer logo -->
                <div class="mt-3 mb-4">
                    <a href="https://8x3O4zAkBVcf.com/ecommerce" class="d-block">
                        <img class="lazyload h-45px" src="frontend/assets/img/placeholder-rect.jpg"
                            data-src="frontend/uploads/all/6TgLDR7srOHnPupxhYDsTSPzymj2OOlAxjXrEKI4.svg"
                            alt="Active eCommerce CMS" height="45">
                    </a>
                </div>
                <div class="row">
                    <!-- about & subscription -->
                    <div class="col-xl-6 col-lg-7">
                        <div class="mb-4 text-secondary text-justify">
                            <span style="color: rgb(242, 243, 248); font-family: " open="" sans",=""
                                sans-serif;="" background-color:="" rgb(17,="" 23,="" 35);"="">Complete
                                system for your eCommerce business</span>
                        </div>
                        <h5 class="fs-14 fw-700 text-soft-light mt-1 mb-3">Subscribe to our newsletter for regular
                            updates about Offers, Coupons &amp; more</h5>
                        <div class="mb-3">
                            <form method="POST" action="subscribers">
                                <input type="hidden" name="_token"
                                    value="Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe">
                                <div class="row gutters-10">
                                    <div class="col-8">
                                        <input type="email"
                                            class="form-control border-secondary rounded-0 text-white w-100 bg-transparent"
                                            placeholder="Your Email Address" name="email" required="">
                                    </div>
                                    <div class="col-4">
                                        <button type="submit"
                                            class="btn btn-primary rounded-0 w-100">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col d-none d-lg-block"></div>

                    <!-- Follow & Apps -->
                    <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <!-- Social -->
                        <h5 class="fs-14 fw-700 text-secondary text-uppercase mt-3 mt-lg-0">Follow Us</h5>
                        <ul class="list-inline social colored mb-4">
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="https://facebook.com/" target="_blank" class="facebook"><i
                                        class="lab la-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="https://twitter.com/" target="_blank" class="twitter"><i
                                        class="lab la-twitter"></i></a>
                            </li>
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="https://www.instagram.com/" target="_blank" class="instagram"><i
                                        class="lab la-instagram"></i></a>
                            </li>
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="https://youtube.com/" target="_blank" class="youtube"><i
                                        class="lab la-youtube"></i></a>
                            </li>
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="https://linkedin.com/" target="_blank" class="linkedin"><i
                                        class="lab la-linkedin-in"></i></a>
                            </li>
                        </ul>

                        <!-- Apps link -->
                        <h5 class="fs-14 fw-700 text-secondary text-uppercase mt-3">Mobile Apps</h5>
                        <div class="d-flex mt-3">
                            <div class="">
                                <a href="https://play.google.com/store/apps" target="_blank"
                                    class="mr-2 mb-2 overflow-hidden hov-scale-img">
                                    <img class="lazyload has-transition"
                                        src="frontend/assets/img/placeholder-rect.jpg"
                                        data-src="frontend/assets/img/play.png" alt="Active eCommerce CMS"
                                        height="44">
                                </a>
                            </div>
                            <div class="">
                                <a href="https://www.apple.com/app-store/" target="_blank"
                                    class="overflow-hidden hov-scale-img">
                                    <img class="lazyload has-transition"
                                        src="frontend/assets/img/placeholder-rect.jpg"
                                        data-src="frontend/assets/img/app.png" alt="Active eCommerce CMS"
                                        height="44">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="py-lg-3 text-light footer-widget" style="background-color: #212129 !important;">
            <!-- footer widgets ========== [Accordion Fotter widgets are bellow from this]-->
            <div class="container d-none d-lg-block">
                <div class="row">
                    <!-- Quick links -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="text-center text-sm-left mt-4">
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mb-3">
                                Quick Links
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="sellerpolicy" class="fs-13 text-soft-light animate-underline-white">
                                        Support Policy Page
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="returnpolicy" class="fs-13 text-soft-light animate-underline-white">
                                        Return Policy Page
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="aboutus" class="fs-13 text-soft-light animate-underline-white">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="privacypolicy" class="fs-13 text-soft-light animate-underline-white">
                                        Privacy Policy Page
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="sellerpolicy" class="fs-13 text-soft-light animate-underline-white">
                                        Seller Policy
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="terms" class="fs-13 text-soft-light animate-underline-white">
                                        Term Conditions Page
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contacts -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="text-center text-sm-left mt-4">
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mb-3">Contacts</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Address</p>
                                    <p class="fs-13 text-soft-light">Demo Address</p>
                                </li>
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Phone</p>
                                    <p class="fs-13 text-soft-light">123456789</p>
                                </li>
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Email</p>
                                    <p class="">
                                        <a href="/cdn-cgi/l/email-protection#345051595b1a514c5559445851745359555d581a575b59"
                                            class="fs-13 text-soft-light hov-text-primary"><span class="__cf_email__"
                                                data-cfemail="640001090b4a011c0509140801240309050d084a070b09">[email&nbsp;protected]</span></a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- My Account -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="text-center text-sm-left mt-4">
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mb-3">My Account</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="users/login">
                                        Login
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="purchase_history">
                                        Order History
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="wishlists">
                                        My Wishlist
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="track-your-order">
                                        Track Order
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="affiliate">
                                        Be an affiliate partner
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Seller & Delivery Boy -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="text-center text-sm-left mt-4">
                            <!-- Seller -->
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mb-3">Seller Zone</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <p class="fs-13 text-soft-light mb-0">
                                        Become A Seller
                                        <a href="shops/create" class="fs-13 fw-700 text-secondary-base ml-2">Apply
                                            Now</a>
                                    </p>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="seller/login">
                                        Login to Seller Panel
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" target="_blank"
                                        href="https://play.google.com/store/apps">
                                        Download Seller App
                                    </a>
                                </li>
                            </ul>

                            <!-- Delivery Boy -->
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mt-4 mb-3">Delivery Boy</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="deliveryboy/login">
                                        Login to Delivery Boy Panel
                                    </a>
                                </li>

                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" target="_blank"
                                        href="https://play.google.com/store/apps">
                                        Download Delivery Boy App
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Fotter widgets -->
            <div class="d-lg-none bg-transparent">
                <!-- Quick links -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">Quick Links</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2 pb-2 ">
                                    <a href="sellerpolicy"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Support Policy Page
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="returnpolicy"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Return Policy Page
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="aboutus"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="privacypolicy"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Privacy Policy Page
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="sellerpolicy"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Seller Policy
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="terms"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Term Conditions Page
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contacts -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">Contacts</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Address</p>
                                    <p class="fs-13 text-soft-light">Demo Address</p>
                                </li>
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Phone</p>
                                    <p class="fs-13 text-soft-light">123456789</p>
                                </li>
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Email</p>
                                    <p class="">
                                        <a href="/cdn-cgi/l/email-protection#3b5f5e5654155e435a564b575e7b5c565a525715585456"
                                            class="fs-13 text-soft-light hov-text-primary"><span
                                                class="__cf_email__"
                                                data-cfemail="7b1f1e1614551e031a160b171e3b1c161a121755181416">[email&nbsp;protected]</span></a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- My Account -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">My Account</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="users/login">
                                        Login
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="purchase_history">
                                        Order History
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="wishlists">
                                        My Wishlist
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="track-your-order">
                                        Track Order
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="affiliate">
                                        Be an affiliate partner
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Seller -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">Seller Zone</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2 pb-2 ">
                                    <p class="fs-13 text-soft-light text-sm-secondary mb-0">
                                        Become A Seller
                                        <a href="shops/create" class="fs-13 fw-700 text-secondary-base ml-2">Apply
                                            Now</a>
                                    </p>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="seller/login">
                                        Login to Seller Panel
                                    </a>
                                </li>
                                <li class="mb-2 pb-2">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        target="_blank" href="https://play.google.com/store/apps">
                                        Download Seller App
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Delivery Boy -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">Delivery Boy</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="deliveryboy/login">
                                        Login to Delivery Boy Panel
                                    </a>
                                </li>
                                <li class="mb-2 pb-2">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        target="_blank" href="https://play.google.com/store/apps">
                                        Download Delivery Boy App
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <footer class="pt-3 pb-7 pb-xl-3 bg-black text-soft-light">
            <div class="container">
                <div class="row align-items-center py-3">
                    <!-- Copyright -->
                    <div class="col-lg-6 order-1 order-lg-0">
                        <div class="text-center text-lg-left fs-14" current-verison="8.1">
                            <!-- Active eCommerce CMS 2023 -->
                        </div>
                    </div>

                    <!-- Payment Method Images -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="text-center text-lg-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-3">
                                    <img src="frontend/uploads/all/NankP5emHOKcdCWqX6Bks1Qa63iDgoLA6WPGn7oe.webp"
                                        height="20" class="mw-100 h-auto" style="max-height: 20px"
                                        alt="Payment method">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Mobile bottom nav -->
        <div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom border-top border-sm-bottom border-sm-left border-sm-right mx-auto mb-sm-2"
            style="background-color: rgb(255 255 255 / 90%)!important;">
            <div class="row align-items-center gutters-5">
                <!-- Home -->
                <div class="col">
                    <a href="https://8x3O4zAkBVcf.com/ecommerce"
                        class="text-secondary d-block text-center pb-2 pt-3 svg-active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <g id="Group_24768" data-name="Group 24768" transform="translate(3495.144 -602)">
                                <path id="Path_2916" data-name="Path 2916"
                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                    transform="translate(-3495.144 602)" fill="#b5b5bf"></path>
                            </g>
                        </svg>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset text-primary">Home</span>
                    </a>
                </div>

                <!-- Categories -->
                <div class="col">
                    <a href="categories" class="text-secondary d-block text-center pb-2 pt-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <g id="Group_25497" data-name="Group 25497" transform="translate(3373.432 -602)">
                                <path id="Path_2917" data-name="Path 2917"
                                    d="M126.713,0h-5V5a2,2,0,0,0,2,2h3a2,2,0,0,0,2-2V2a2,2,0,0,0-2-2m1,5a1,1,0,0,1-1,1h-3a1,1,0,0,1-1-1V1h4a1,1,0,0,1,1,1Z"
                                    transform="translate(-3495.144 602)" fill="#91919c"></path>
                                <path id="Path_2918" data-name="Path 2918"
                                    d="M144.713,18h-3a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h5V20a2,2,0,0,0-2-2m1,6h-4a1,1,0,0,1-1-1V20a1,1,0,0,1,1-1h3a1,1,0,0,1,1,1Z"
                                    transform="translate(-3504.144 593)" fill="#91919c"></path>
                                <path id="Path_2919" data-name="Path 2919"
                                    d="M143.213,0a3.5,3.5,0,1,0,3.5,3.5,3.5,3.5,0,0,0-3.5-3.5m0,6a2.5,2.5,0,1,1,2.5-2.5,2.5,2.5,0,0,1-2.5,2.5"
                                    transform="translate(-3504.144 602)" fill="#91919c"></path>
                                <path id="Path_2920" data-name="Path 2920"
                                    d="M125.213,18a3.5,3.5,0,1,0,3.5,3.5,3.5,3.5,0,0,0-3.5-3.5m0,6a2.5,2.5,0,1,1,2.5-2.5,2.5,2.5,0,0,1-2.5,2.5"
                                    transform="translate(-3495.144 593)" fill="#91919c"></path>
                            </g>
                        </svg>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset ">Categories</span>
                    </a>
                </div>
                <!-- Cart -->
                <div class="col-auto">
                    <a href="cart" class="text-secondary d-block text-center pb-2 pt-3 px-3 ">
                        <span class="d-inline-block position-relative px-2">
                            <svg id="Group_25499" data-name="Group 25499" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16.001" height="16"
                                viewBox="0 0 16.001 16">
                                <defs>
                                    <clipPath id="clip-pathw">
                                        <rect id="Rectangle_1383" data-name="Rectangle 1383" width="16"
                                            height="16" fill="#91919c"></rect>
                                    </clipPath>
                                </defs>
                                <g id="Group_8095" data-name="Group 8095" transform="translate(0 0)"
                                    clip-path="url(#clip-pathw)">
                                    <path id="Path_2926" data-name="Path 2926"
                                        d="M8,24a2,2,0,1,0,2,2,2,2,0,0,0-2-2m0,3a1,1,0,1,1,1-1,1,1,0,0,1-1,1"
                                        transform="translate(-3 -11.999)" fill="#91919c"></path>
                                    <path id="Path_2927" data-name="Path 2927"
                                        d="M24,24a2,2,0,1,0,2,2,2,2,0,0,0-2-2m0,3a1,1,0,1,1,1-1,1,1,0,0,1-1,1"
                                        transform="translate(-10.999 -11.999)" fill="#91919c"></path>
                                    <path id="Path_2928" data-name="Path 2928"
                                        d="M15.923,3.975A1.5,1.5,0,0,0,14.5,2h-9a.5.5,0,1,0,0,1h9a.507.507,0,0,1,.129.017.5.5,0,0,1,.355.612l-1.581,6a.5.5,0,0,1-.483.372H5.456a.5.5,0,0,1-.489-.392L3.1,1.176A1.5,1.5,0,0,0,1.632,0H.5a.5.5,0,1,0,0,1H1.544a.5.5,0,0,1,.489.392L3.9,9.826A1.5,1.5,0,0,0,5.368,11h7.551a1.5,1.5,0,0,0,1.423-1.026Z"
                                        transform="translate(0 -0.001)" fill="#91919c"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset ">
                            Cart
                            (<span class="cart-count">0</span>)
                        </span>
                    </a>
                </div>

                <!-- Notifications -->
                <div class="col">
                    <a href="all-notifications" class="text-secondary d-block text-center pb-2 pt-3 ">
                        <span class="d-inline-block position-relative px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.6" height="16"
                                viewBox="0 0 13.6 16">
                                <path id="ecf3cc267cd87627e58c1954dc6fbcc2"
                                    d="M5.488,14.056a.617.617,0,0,0-.8-.016.6.6,0,0,0-.082.855A2.847,2.847,0,0,0,6.835,16h0l.174-.007a2.846,2.846,0,0,0,2.048-1.1h0l.053-.073a.6.6,0,0,0-.134-.782.616.616,0,0,0-.862.081,1.647,1.647,0,0,1-.334.331,1.591,1.591,0,0,1-2.222-.331H5.55ZM6.828,0C4.372,0,1.618,1.732,1.306,4.512h0v1.45A3,3,0,0,1,.6,7.37a.535.535,0,0,0-.057.077A3.248,3.248,0,0,0,0,9.088H0l.021.148a3.312,3.312,0,0,0,.752,2.2,3.909,3.909,0,0,0,2.5,1.232,32.525,32.525,0,0,0,7.1,0,3.865,3.865,0,0,0,2.456-1.232A3.264,3.264,0,0,0,13.6,9.249h0v-.1a3.361,3.361,0,0,0-.582-1.682h0L12.96,7.4a3.067,3.067,0,0,1-.71-1.408h0V4.54l-.039-.081a.612.612,0,0,0-1.132.208h0v1.45a.363.363,0,0,0,0,.077,4.21,4.21,0,0,0,.979,1.957,2.022,2.022,0,0,1,.312,1h0v.155a2.059,2.059,0,0,1-.468,1.373,2.656,2.656,0,0,1-1.661.788,32.024,32.024,0,0,1-6.87,0,2.663,2.663,0,0,1-1.7-.824,2.037,2.037,0,0,1-.447-1.33h0V9.151a2.1,2.1,0,0,1,.305-1.007A4.212,4.212,0,0,0,2.569,6.187a.363.363,0,0,0,0-.077h0V4.653a4.157,4.157,0,0,1,4.2-3.442,4.608,4.608,0,0,1,2.257.584h0l.084.042A.615.615,0,0,0,9.649,1.8.6.6,0,0,0,9.624.739,5.8,5.8,0,0,0,6.828,0Z"
                                    fill="#91919b"></path>
                            </svg>
                        </span>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset ">Notifications</span>
                    </a>
                </div>

                <!-- Account -->
                <div class="col">
                    <a href="users/login" class="text-secondary d-block text-center pb-2 pt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <g id="Group_8094" data-name="Group 8094" transform="translate(3176 -602)">
                                <path id="Path_2924" data-name="Path 2924"
                                    d="M331.144,0a4,4,0,1,0,4,4,4,4,0,0,0-4-4m0,7a3,3,0,1,1,3-3,3,3,0,0,1-3,3"
                                    transform="translate(-3499.144 602)" fill="#b5b5bf"></path>
                                <path id="Path_2925" data-name="Path 2925"
                                    d="M332.144,20h-10a3,3,0,0,0,0,6h10a3,3,0,0,0,0-6m0,5h-10a2,2,0,0,1,0-4h10a2,2,0,0,1,0,4"
                                    transform="translate(-3495.144 592)" fill="#b5b5bf"></path>
                            </g>
                        </svg>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset">My Account</span>
                    </a>
                </div>

            </div>
        </div>


    </div>

    <!-- Floating Buttons -->
    <div class="floating-buttons-section">
        <a class="floating-buttons-section-control d-lg-none" onclick="showFloatingButtons()">
            <i class="las la-2x la-angle-double-right"></i>
        </a>
        <!-- All Categories -->
        <div class="aiz-floating-button">
            <a href="categories">
                <span class="circle">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                            viewBox="0 0 15 14">
                            <g id="Group_29240" data-name="Group 29240" transform="translate(-18 -18)">
                                <rect id="Rectangle_21398" data-name="Rectangle 21398" width="15"
                                    height="2" transform="translate(18 24)" fill="#fff"></rect>
                                <rect id="Rectangle_21399" data-name="Rectangle 21399" width="15"
                                    height="2" transform="translate(18 18)" fill="#fff"></rect>
                                <rect id="Rectangle_21400" data-name="Rectangle 21400" width="15"
                                    height="2" transform="translate(18 30)" fill="#fff"></rect>
                            </g>
                        </svg>
                    </span>
                </span>
                <span class="text">
                    <span class="w-120px mr-3">All Categories</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12"
                        viewBox="0 0 7.073 12">
                        <path id="Path_41557" data-name="Path 41557"
                            d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z"
                            transform="translate(12.913 14.1) rotate(180)" fill="#fff"></path>
                    </svg>
                </span>
            </a>
        </div>
        <!-- Flash Sale -->
        <div class="aiz-floating-button">
            <a href="flash-deals">
                <span class="circle">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.333" height="20"
                            viewBox="0 0 13.333 20">
                            <path id="Path_41551" data-name="Path 41551"
                                d="M28.294,12.246a.4.4,0,0,0-.353-.209H23.855l3.264-6.508a.352.352,0,0,0-.023-.357A.4.4,0,0,0,26.765,5H20.49a.394.394,0,0,0-.358.219l-5.1,10.741a.353.353,0,0,0,.029.353.4.4,0,0,0,.329.169h3.827l-1.857,8.069a.365.365,0,0,0,.216.414.407.407,0,0,0,.476-.106l10.2-12.222a.354.354,0,0,0,.045-.391Z"
                                transform="translate(-15 -5)" fill="#fff"></path>
                        </svg>
                    </span>
                </span>
                <span class="text">
                    <span class="w-120px mr-3">Flash Sale</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12"
                        viewBox="0 0 7.073 12">
                        <path id="Path_41557" data-name="Path 41557"
                            d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z"
                            transform="translate(12.913 14.1) rotate(180)" fill="#fff"></path>
                    </svg>
                </span>
            </a>
        </div>
        <!-- Today's Deal -->
        <div class="aiz-floating-button">
            <a href="todays-deal">
                <span class="circle">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 20 20">
                            <g id="a47ac3ccd1557f7fbdb769f1c535b2b9" transform="translate(0 0)">
                                <path id="Path_41552" data-name="Path 41552"
                                    d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,18.333A8.333,8.333,0,1,1,18.333,10,8.333,8.333,0,0,1,10,18.333Z"
                                    fill="#fff"></path>
                                <path id="Path_41553" data-name="Path 41553"
                                    d="M17.515,14.143,13,11.434V6a1,1,0,0,0-2,0v6a1.075,1.075,0,0,0,.485.857l5,3a1,1,0,1,0,1.03-1.714Z"
                                    transform="translate(-2.588 -1.538)" fill="#fff"></path>
                            </g>
                        </svg>
                    </span>
                </span>
                <span class="text">
                    <span class="w-120px mr-3">Todays Deal</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12"
                        viewBox="0 0 7.073 12">
                        <path id="Path_41557" data-name="Path 41557"
                            d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z"
                            transform="translate(12.913 14.1) rotate(180)" fill="#fff"></path>
                    </svg>
                </span>
            </a>
        </div>
        <!-- Auction -->
        <div class="aiz-floating-button">
            <a href="auction-products">
                <span class="circle">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.627" height="20"
                            viewBox="0 0 19.627 20">
                            <g id="cb3bc0b728579e634f654dfaf5995832" transform="translate(-8 -7.122)">
                                <rect id="Rectangle_21402" data-name="Rectangle 21402" width="2.455"
                                    height="5.729" rx="1.228" transform="translate(10.102 16.386) rotate(-45)"
                                    fill="#fff"></rect>
                                <rect id="Rectangle_21403" data-name="Rectangle 21403" width="2.455"
                                    height="5.729" rx="1.228" transform="translate(17.623 8.858) rotate(-45)"
                                    fill="#fff"></rect>
                                <rect id="Rectangle_21404" data-name="Rectangle 21404" width="4.91"
                                    height="6.547" rx="2" transform="translate(12.702 13.203) rotate(-45)"
                                    fill="#fff"></rect>
                                <rect id="Rectangle_21405" data-name="Rectangle 21405" width="1.637"
                                    height="4.092" transform="translate(12.414 15.225) rotate(-45)"
                                    fill="#fff"></rect>
                                <rect id="Rectangle_21406" data-name="Rectangle 21406" width="1.637"
                                    height="4.092" transform="translate(17.043 10.599) rotate(-45)"
                                    fill="#fff"></rect>
                                <path id="Path_41554" data-name="Path 41554"
                                    d="M21.721,14.563l.577.577L21.14,16.3l-.577-.577a.819.819,0,1,1,1.158-1.158Z"
                                    transform="translate(-7.281 -4.255)" fill="#fff"></path>
                                <rect id="Rectangle_21407" data-name="Rectangle 21407" width="1.637"
                                    height="4.501" transform="translate(18.489 16.673) rotate(-45)"
                                    fill="#fff"></rect>
                                <path id="Path_41555" data-name="Path 41555"
                                    d="M41.235,36.393l1.158-1.158a.409.409,0,0,1,.581,0L46.833,39.1a1.228,1.228,0,0,1,0,1.735h0a1.228,1.228,0,0,1-1.735,0l-3.863-3.859a.409.409,0,0,1,0-.581Z"
                                    transform="translate(-19.564 -16.538)" fill="#fff"></path>
                                <rect id="Rectangle_21408" data-name="Rectangle 21408" width="12.276"
                                    height="1.637" transform="translate(8 25.485)" fill="#fff"></rect>
                                <path id="Path_41556" data-name="Path 41556"
                                    d="M11.637,48H19a1.637,1.637,0,0,1,1.637,1.637H10A1.637,1.637,0,0,1,11.637,48Z"
                                    transform="translate(-1.182 -24.151)" fill="#fff"></path>
                            </g>
                        </svg>
                    </span>
                </span>
                <span class="text">
                    <span class="w-120px mr-3">Auction</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12"
                        viewBox="0 0 7.073 12">
                        <path id="Path_41557" data-name="Path 41557"
                            d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z"
                            transform="translate(12.913 14.1) rotate(180)" fill="#fff"></path>
                    </svg>
                </span>
            </a>
        </div>
    </div>




    <!-- Demo content -->
    <div class="aiz-demos">
        <div class="aiz-demo-content">
            <div class="px-2rem">
                <div class="row gutters-16">
                    <!-- Main Demo -->
                    <div class="col-md-6 my-3">
                        <div class="demo-img-content">
                            <a href="" target="_blank" class="h-100 w-100">
                                <img src="frontend/assets/img/demo/demo_thumb_main.png">
                            </a>
                        </div>
                        <p class="demo-title">Active eCommerce Main Demo</p>
                    </div>
                    <!-- Grocery Store -->
                    <div class="col-md-6 my-3">
                        <div class="demo-img-content">
                            <a href="https://8x3O4zAkBVcf.com/ecommerce-grocery/" target="_blank"
                                class="h-100 w-100">
                                <img src="frontend/assets/img/demo/demo_thumb_grocery.png">
                            </a>
                        </div>
                        <p class="demo-title">Grocery Store</p>
                    </div>
                    <!-- Electronics Shop -->
                    <div class="col-md-6 my-3">
                        <div class="demo-img-content">
                            <a href="https://8x3O4zAkBVcf.com/ecommerce-electronics/" target="_blank"
                                class="h-100 w-100">
                                <img src="frontend/assets/img/demo/demo_thumb_technology.png">
                            </a>
                        </div>
                        <p class="demo-title">Electronics Shop</p>
                    </div>
                    <!-- Fashion Store -->
                    <div class="col-md-6 my-3">
                        <div class="demo-img-content">
                            <a href="https://8x3O4zAkBVcf.com/ecommerce-fashion/" target="_blank"
                                class="h-100 w-100">
                                <img src="frontend/assets/img/demo/demo_thumb_fashion.png">
                            </a>
                        </div>
                        <p class="demo-title">Fashion Store</p>
                    </div>
                    <!-- Automobile Store -->
                    <div class="col-md-6 my-3">
                        <div class="demo-img-content">
                            <a href="https://8x3O4zAkBVcf.com/ecommerce-automobile/" target="_blank"
                                class="h-100 w-100">
                                <img src="frontend/assets/img/demo/demo_thumb_automobile.png">
                            </a>
                        </div>
                        <p class="demo-title">Automobile Store</p>
                    </div>
                    <!-- Furniture Store -->
                    <div class="col-md-6 my-3">
                        <div class="demo-img-content">
                            <a href="https://8x3O4zAkBVcf.com/ecommerce-furniture/" target="_blank"
                                class="h-100 w-100">
                                <img src="frontend/assets/img/demo/demo_thumb_furniture.png">
                            </a>
                        </div>
                        <p class="demo-title">Furniture Store</p>
                    </div>
                    <!-- Demo content -->
                    <div class="col-md-6 my-3">
                        <div class="demo-img-content">
                            <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                                <div class="lds-ellipsis">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <p class="demo-title">Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cookies agreement -->
    <div class="aiz-cookie-alert shadow-xl">
        <div class="p-3 bg-dark rounded">
            <div class="text-white mb-3">
                <p>We use cookie for better user experience, check our policy <a href="privacypolicy">here</a>&nbsp;
                </p>
            </div>
            <button class="btn btn-primary aiz-cookie-accept">
                Ok. I Understood
            </button>
        </div>
    </div>

    <!-- website popup -->
    <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
        <div class="absolute-full bg-black opacity-60"></div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md mx-4 mx-md-auto">
            <div class="modal-content position-relative border-0 rounded-0">
                <div class="aiz-editor-data">
                    <p><img src="frontend/uploads/all/dwaK3um8tkVgEsgmZN1peQb844tFRAIQ1wAS8e3z.webp"
                            style="width: 916.875px;"></p>
                    <p style="text-align: center; "><br></p>
                    <h2 style="text-align: center; "><b>Subscribe to Our Newsletter</b></h2>
                    <p style="text-align: center;">Subscribe our newsletter for coupon, offer and exciting promotional
                        discount..</p>
                </div>
                <div class="pb-5 pt-4 px-3 px-md-5">
                    <form class="" method="POST" action="subscribers">
                        <input type="hidden" name="_token" value="Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe">
                        <div class="form-group mb-0">
                            <input type="email" class="form-control" placeholder="Your Email Address"
                                name="email" required="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">
                            Subscribe Now
                        </button>
                    </form>
                </div>
                <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session"
                    data-key="website-popup" data-value="removed" data-toggle="remove-parent"
                    data-parent=".website-popup">
                    <i class="la la-close fs-20"></i>
                </button>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        function confirm_modal(delete_url) {
            jQuery('#confirm-delete').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>

                <div class="modal-body">
                    <p>Delete confirmation message</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0"
                        data-dismiss="modal">Cancel</button>
                    <a id="delete_link" class="btn btn-danger btn-ok rounded-0">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fw-600">Login</h6>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <form class="form-default" role="form" action="users/login/cart" method="POST">
                            <input type="hidden" name="_token" value="Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe">
                            <!-- Phone -->
                            <div class="form-group phone-form-group mb-1">
                                <input type="tel" id="phone-code" class="form-control" value=""
                                    placeholder="" name="phone" autocomplete="off">
                            </div>
                            <!-- Country Code -->
                            <input type="hidden" name="country_code" value="">
                            <!-- Email -->
                            <div class="form-group email-form-group mb-1 d-none">
                                <input type="email" class="form-control " value="" placeholder="Email"
                                    name="email" id="email" autocomplete="off">
                            </div>
                            <!-- Use Email Instead -->
                            <div class="form-group text-right">
                                <button class="btn btn-link p-0 text-primary" type="button"
                                    onclick="toggleEmailPhone(this)"><i>*Use Email Instead</i></button>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <input type="password" name="password"
                                    class="form-control h-auto rounded-0 form-control-lg" placeholder="Password">
                            </div>

                            <!-- Remember Me & Forgot password -->
                            <div class="row mb-2">
                                <div class="col-6">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="remember">
                                        <span class="opacity-60">Remember Me</span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="password/reset"
                                        class="text-reset opacity-60 hov-opacity-100 fs-14">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="mb-5">
                                <button type="submit"
                                    class="btn btn-primary btn-block fw-600 rounded-0">Login</button>
                            </div>
                        </form>

                        <!-- Register Now -->
                        <div class="text-center mb-3">
                            <p class="text-muted mb-0">Dont have an account?</p>
                            <a href="users/registration">Register Now</a>
                        </div>

                        <!-- Social Login -->
                        <div class="separator mb-3">
                            <span class="bg-white px-3 opacity-60">Or Login With</span>
                        </div>
                        <ul class="list-inline social colored text-center mb-5">
                            <!-- Facebook -->
                            <li class="list-inline-item">
                                <a href="social-login/redirect/facebook" class="facebook">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                            <!-- Google -->
                            <li class="list-inline-item">
                                <a href="social-login/redirect/google" class="google">
                                    <i class="lab la-google"></i>
                                </a>
                            </li>
                            <!-- Twitter -->
                            <li class="list-inline-item">
                                <a href="social-login/redirect/twitter" class="twitter">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                            <!-- Apple -->
                            <li class="list-inline-item">
                                <a href="social-login/redirect/apple" class="apple">
                                    <i class="lab la-apple"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bid Modal -->
    <div class="modal fade" id="bid_for_product" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bid For Product <small
                            id="min_bid_amount"></small> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="auction_product_bids" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe">
                        <input type="hidden" name="product_id" id="bid_product_id" value="">
                        <div class="form-group">
                            <label class="form-label">
                                Place Bid Price
                                <span class="text-danger">*</span>
                            </label>
                            <div class="form-group">
                                <input type="number" step="0.01" class="form-control form-control-sm"
                                    name="amount" id="bid_amount" min="" placeholder="Enter Amount"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit"
                                class="btn btn-sm btn-primary transition-3d-hover mr-1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function account_delete_confirm_modal(delete_url) {
            jQuery('#account_delete_confirm').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('account_delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="account_delete_confirm" tabindex="-1" role="dialog"
        aria-labelledby="account_delete_confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header d-block py-4">
                    <div class="d-flex justify-content-center">
                        <span class="avatar avatar-md mb-2 mt-2">
                            <img src="frontend/assets/img/avatar-place.png" class="image rounded-circle m-auto"
                                onerror="this.onerror=null;this.src='frontend/assets/img/VAJrbDNA15mn.png';"
                                alt="Avatar">
                        </span>
                    </div>
                    <h4 class="modal-title text-center fw-700" id="account_delete_confirmModalLabel"
                        style="color: #ff9819;">Delete Your Account</h4>
                    <p class="fs-16 fw-600 text-center" style="color: #8d8d8d;">Warning: You cannot undo this action
                    </p>
                </div>

                <div class="modal-body pt-3 pb-5 px-xl-5">
                    <p class="text-danger mt-3 fw-800"><i>Note:&nbsp;Don't Click to any button or don't do any action
                            during account Deletion, it may takes some times.</i></p>
                    <p class="fs-14 fw-700" style="color: #8d8d8d;">Deleting Account Means:</p>
                    <div class="row bg-soft-warning py-2 mb-2 ml-0 mr-0 border-left border-width-2 border-danger">
                        <div class="col-1">
                            <img src="frontend/assets/img/warning.png" class="h-20px" alt="warning">
                        </div>
                        <div class="col">
                            <p class="fw-600 mb-0">If you create any classified ptoducts, after deleting your account,
                                those products will no longer in our system</p>
                        </div>
                    </div>
                    <div class="row bg-soft-warning py-3 ml-0 mr-0 border-left border-width-2 border-danger">
                        <div class="col-1">
                            <img src="frontend/assets/img/warning.png" class="h-20px" alt="warning">
                        </div>
                        <div class="col">
                            <p class="fw-600 mb-0">After deleting your account, wallet balance will no longer in our
                                system</p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0 w-150px"
                        data-dismiss="modal">Cancel</button>
                    <a id="account_delete_link" class="btn btn-danger rounded-0 w-150px">Delete Account</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
            role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button"
                    class="close absolute-top-right btn-icon close z-1 btn-circle bg-gray mr-2 mt-2 d-flex justify-content-center align-items-center"
                    data-dismiss="modal" aria-label="Close"
                    style="background: #ededf2; width: calc(2rem + 2px); height: calc(2rem + 2px);">
                    <span aria-hidden="true" class="fs-24 fw-700" style="margin-left: 2px;">×</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <script src="{{ asset('frontend/assets/js/vendors.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aiz-core_v=3224.js') }}"></script>





    <script></script>

    <script>
        $.post('home/section/featured', {
            _token: 'Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe'
        }, function(data) {
            $('#section_featured').html(data);
            AIZ.plugins.slickCarousel();
        });

        $.post('home/section/todays-deal', {
            _token: 'Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe'
        }, function(data) {
            $('#todays_deal').html(data);
            AIZ.plugins.slickCarousel();
        });

        $.post('home/section/best-selling', {
            _token: 'Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe'
        }, function(data) {
            $('#section_best_selling').html(data);
            AIZ.plugins.slickCarousel();
        });

        $.post('home/section/newest-products', {
            _token: 'Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe'
        }, function(data) {
            $('#section_newest').html(data);
            AIZ.plugins.slickCarousel();
        });

        $.post('home/section/auction_products', {
            _token: 'Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe'
        }, function(data) {
            $('#auction_products').html(data);
            AIZ.plugins.slickCarousel();
        });

        $.post('home/section/home-categories', {
            _token: 'Q52uOZXVrY0IpKROh9Ln75MeJSQ8mRokZrv2MWNe'
        }, function(data) {
            $('#section_home_categories').html(data);
            AIZ.plugins.slickCarousel();
        });

        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {

                $(el).on('mouseover', function() {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('category/nav-element-list', {
                            _token: AIZ.data.csrf,
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });

            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('language', {
                            _token: AIZ.data.csrf,
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('currency', {
                            _token: AIZ.data.csrf,
                            currency_code: currency_code
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function() {
            search();
        });

        $('#search').on('focus', function() {
            search();
        });

        function search() {
            var searchKey = $('#search').val();
            if (searchKey.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('ajax-search', {
                    _token: AIZ.data.csrf,
                    search: searchKey
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html(
                            'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        $(".aiz-user-top-menu").on("mouseover", function(event) {
                $(".hover-user-top-menu").addClass('active');
            })
            .on("mouseout", function(event) {
                $(".hover-user-top-menu").removeClass('active');
            });

        $(document).on("click", function(event) {
            var $trigger = $("#category-menu-bar");
            if ($trigger !== event.target && !$trigger.has(event.target).length) {
                $("#click-category-menu").slideUp("fast");;
                $("#category-menu-bar-icon").removeClass('show');
            }
        });

        function updateNavCart(view, count) {
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key) {
            $.post('cart/removeFromCart', {
                _token: AIZ.data.csrf,
                id: key
            }, function(data) {
                updateNavCart(data.nav_cart_view, data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "Item has been removed from cart");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
            });
        }

        function showLoginModal() {
            $('#login_modal').modal();
        }

        function addToCompare(id) {
            $.post('compare/addToCompare', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('#compare').html(data);
                AIZ.plugins.notify('success', "Item has been added to compare list");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function addToWishList(id) {
            AIZ.plugins.notify('warning', "Please login first");
        }

        function showAddToCartModal(id) {
            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('cart/show-cart-modal', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });

        function getVariantPrice() {
            if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajax({
                    type: "POST",
                    url: 'product/variant-price',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('.product-gallery-thumb .carousel-box').each(function(i) {
                            if ($(this).data('variation') && data.variation == $(this).data(
                                'variation')) {
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.max_limit);
                        if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                            $('.buy-now').addClass('d-none');
                            $('.add-to-cart').addClass('d-none');
                            $('.out-of-stock').removeClass('d-none');
                        } else {
                            $('.buy-now').removeClass('d-none');
                            $('.add-to-cart').removeClass('d-none');
                            $('.out-of-stock').addClass('d-none');
                        }

                        AIZ.extra.plusMinus();
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });

            if ($('#option-choice-form input:radio:checked').length == count) {
                return true;
            }

            return false;
        }

        function addToCart() {

            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data.modal_view);
                        AIZ.extra.plusMinus();
                        AIZ.plugins.slickCarousel();
                        updateNavCart(data.nav_cart_view, data.cart_count);
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function buyNow() {

            if (checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        if (data.status == 1) {
                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view, data.cart_count);
                            window.location.replace("cart");
                        } else {
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                        }
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function bid_single_modal(bid_product_id, min_bid_amount) {
            $('#login_modal').modal('show');
        }

        function clickToSlide(btn, id) {
            $('#' + id + ' .aiz-carousel').find('.' + btn).trigger('click');
            $('#' + id + ' .slide-arrow').removeClass('link-disable');
            var arrow = btn == 'slick-prev' ? 'arrow-prev' : 'arrow-next';
            if ($('#' + id + ' .aiz-carousel').find('.' + btn).hasClass('slick-disabled')) {
                $('#' + id).find('.' + arrow).addClass('link-disable');
            }
        }

        function goToView(params) {
            document.getElementById(params).scrollIntoView({
                behavior: "smooth",
                block: "center"
            });
        }

        function copyCouponCode(code) {
            navigator.clipboard.writeText(code);
            AIZ.plugins.notify('success', "Coupon Code Copied");
        }

        $(document).ready(function() {
            $('.cart-animate').animate({
                margin: 0
            }, "slow");

            $({
                deg: 0
            }).animate({
                deg: 360
            }, {
                duration: 2000,
                step: function(now) {
                    $('.cart-rotate').css({
                        transform: 'rotate(' + now + 'deg)'
                    });
                }
            });

            setTimeout(function() {
                $('.cart-ok').css({
                    fill: '#d43533'
                });
            }, 2000);

        });
    </script>

    <script type="text/javascript">
        // Country Code
        var isPhoneShown = true,
            countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone-code");

        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            if (country.iso2 == 'bd') {
                country.dialCode = '88';
            }
        }

        var iti = intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "frontend/assets/js/intlTelutils.js?1590403638580",
            onlyCountries: ["AF", "AL", "DZ", "AS", "AD", "AO", "AI", "AQ", "AG", "AR", "AM", "AW", "AU", "AT",
                "AZ", "BS", "BH", "BD", "BB", "BY", "BE", "BZ", "BJ", "BM", "BT", "BO", "BA", "BW", "BV", "BR",
                "IO", "BN", "BG", "BF", "BI", "KH", "CM", "CA", "CV", "KY", "CF", "TD", "CL", "CN", "CX", "CC",
                "CO", "KM", "CG", "CD", "CK", "CR", "CI", "HR", "CU", "CY", "CZ", "DK", "DJ", "DM", "DO", "TP",
                "EC", "EG", "SV", "GQ", "ER", "EE", "ET", "XA", "FK", "FO", "FJ", "FI", "FR", "GF", "PF", "TF",
                "GA", "GM", "GE", "DE", "GH", "GI", "GR", "GL", "GD", "GP", "GU", "GT", "XU", "GN", "GW", "GY",
                "HT", "HM", "HN", "HK", "HU", "IS", "IN", "ID", "IR", "IQ", "IE", "IL", "IT", "JM", "JP", "XJ",
                "JO", "KZ", "KE", "KI", "KP", "KR", "KW", "KG", "LA", "LV", "LB", "LS", "LR", "LY", "LI", "LT",
                "LU", "MO", "MK", "MG", "MW", "MY", "MV", "ML", "MT", "XM", "MH", "MQ", "MR", "MU", "YT", "MX",
                "FM", "MD", "MC", "MN", "MS", "MA", "MZ", "MM", "NA", "NR", "NP", "AN", "NL", "NC", "NZ", "NI",
                "NE", "NG", "NU", "NF", "MP", "NO", "OM", "PK", "PW", "PS", "PA", "PG", "PY", "PE", "PH", "PN",
                "PL", "PT", "PR", "QA", "RE", "RO", "RU", "RW", "SH", "KN", "LC", "PM", "VC", "WS", "SM", "ST",
                "SA", "SN", "RS", "SC", "SL", "SG", "SK", "SI", "XG", "SB", "SO", "ZA", "GS", "SS", "ES", "LK",
                "SD", "SR", "SJ", "SZ", "SE", "CH", "SY", "TW", "TJ", "TZ", "TH", "TG", "TK", "TO", "TT", "TN",
                "TR", "TM", "TC", "TV", "UG", "UA", "AE", "GB", "US", "UM", "UY", "UZ", "VU", "VA", "VE", "VN",
                "VG", "VI", "WF", "EH", "YE", "YU", "ZM", "ZW"
            ],
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                if (selectedCountryData.iso2 == 'bd') {
                    return "01xxxxxxxxx";
                }
                return selectedCountryPlaceholder;
            }
        });

        var country = iti.getSelectedCountryData();
        $('input[name=country_code]').val(country.dialCode);

        input.addEventListener("countrychange", function(e) {
            // var currentMask = e.currentTarget.placeholder;
            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

        });

        function toggleEmailPhone(el) {
            if (isPhoneShown) {
                $('.phone-form-group').addClass('d-none');
                $('.email-form-group').removeClass('d-none');
                $('input[name=phone]').val(null);
                isPhoneShown = false;
                $(el).html('*Use Phone Instead');
            } else {
                $('.phone-form-group').removeClass('d-none');
                $('.email-form-group').addClass('d-none');
                $('input[name=email]').val(null);
                isPhoneShown = true;
                $(el).html('<i>*Use Email Instead</i>');
            }
        }
    </script>
    <script>
        var acc = document.getElementsByClassName("aiz-accordion-heading");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

    <script>
        function showFloatingButtons() {
            document.querySelector('.floating-buttons-section').classList.toggle('show');;
        }
    </script>

    <script>
        var demoNav = document.querySelector('.aiz-demo-nav');
        var menuBtn = document.querySelector('.aiz-demo-nav-toggler');
        var lineOne = document.querySelector('.aiz-demo-nav-toggler .aiz-demo-nav-btn .line--1');
        var lineTwo = document.querySelector('.aiz-demo-nav-toggler .aiz-demo-nav-btn .line--2');
        var lineThree = document.querySelector('.aiz-demo-nav-toggler .aiz-demo-nav-btn .line--3');
        menuBtn.addEventListener('click', () => {
            toggleDemoNav();
        });

        function toggleDemoNav() {
            // demoNav.classList.toggle('show');
            demoNav.classList.toggle('shadow-none');
            lineOne.classList.toggle('line-cross');
            lineTwo.classList.toggle('line-fade-out');
            lineThree.classList.toggle('line-cross');
            if ($('.aiz-demo-nav-toggler').hasClass('show')) {
                $('.aiz-demo-nav-toggler').removeClass('show');
                demoHideOverlay();
            } else {
                $('.aiz-demo-nav-toggler').addClass('show');
                demoShowOverlay();
            }
        }

        $('.aiz-demos').click(function(e) {
            if (!e.target.closest('.aiz-demos .aiz-demo-content')) {
                toggleDemoNav();
            }
        });

        function demoShowOverlay() {
            $('.top-banner').removeClass('z-1035').addClass('z-1');
            $('.top-navbar').removeClass('z-1035').addClass('z-1');
            $('header').removeClass('z-1020').addClass('z-1');
            $('.aiz-demos').addClass('show');
        }

        function demoHideOverlay(cls = null) {
            if ($('.aiz-demos').hasClass('show')) {
                $('.aiz-demos').removeClass('show');
                $('.top-banner').delay(800).removeClass('z-1').addClass('z-1035');
                $('.top-navbar').delay(800).removeClass('z-1').addClass('z-1035');
                $('header').delay(800).removeClass('z-1').addClass('z-1020');
            }
        }
    </script>

    <script type="text/javascript">
        function show_order_details(order_id) {
            $('#order-details-modal-body').html(null);

            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }

            $.post('admin/orders/details', {
                _token: AIZ.data.csrf,
                order_id: order_id
            }, function(data) {
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
                AIZ.plugins.bootstrapSelect('refresh');
            });
        }
    </script>




</body>

</html>
