@extends('frontend.layouts.master')


@section('content')

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            <div class="aiz-user-sidenav-wrap position-relative z-1 rounded-0">
                <div class="aiz-user-sidenav overflow-auto c-scrollbar-light px-4 pb-4">
                    <!-- Close button -->
                    <div class="d-xl-none">
                        <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                            <i class="las la-times la-2x"></i>
                        </button>
                    </div>
                    <!-- Customer info -->
                    <div class="p-4 text-center mb-4 border-bottom position-relative">
                        <!-- Image -->
                        <span class="avatar avatar-md mb-3">
                            <img src="/frontend/uploads/all/5XVyeLGw5zRpb63bqgn2dtIOjCktLgBltNSQIPG3.webp" onerror="this.onerror=null;this.src='public/assets/img/avatar-place.png';">
                        </span>
                        <!-- Name -->
                        <h4 class="h5 fs-14 mb-1 fw-700 text-dark">Paul K. Jensen</h4>
                        <!-- Phone -->
                        <div class="text-truncate opacity-60 fs-12">208-295-8053</div>
                        <!-- Email -->
                    </div>

                    <!-- Menus -->
                    <div class="sidemnenu">
                        <ul class="aiz-side-nav-list mb-3 pb-3 border-bottom metismenu" data-toggle="aiz-side-menu">

                            <!-- Dashboard -->
                            <li class="aiz-side-nav-item">
                                <a href="dashboard" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_24768" data-name="Group 24768" transform="translate(3495.144 -602)">
                                            <path id="Path_2916" data-name="Path 2916" d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z" transform="translate(-3495.144 602)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Dashboard</span>
                                </a>
                            </li>


                            <!-- Purchase History -->
                            <li class="aiz-side-nav-item">
                                <a href="purchase_history" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_8109" data-name="Group 8109" transform="translate(-27.466 -542.963)">
                                            <path id="Path_2953" data-name="Path 2953" d="M14.5,5.963h-4a1.5,1.5,0,0,0,0,3h4a1.5,1.5,0,0,0,0-3m0,2h-4a.5.5,0,0,1,0-1h4a.5.5,0,0,1,0,1" transform="translate(22.966 537)" fill="#b5b5bf"></path>
                                            <path id="Path_2954" data-name="Path 2954" d="M12.991,8.963a.5.5,0,0,1,0-1H13.5a2.5,2.5,0,0,1,2.5,2.5v10a2.5,2.5,0,0,1-2.5,2.5H2.5a2.5,2.5,0,0,1-2.5-2.5v-10a2.5,2.5,0,0,1,2.5-2.5h.509a.5.5,0,0,1,0,1H2.5a1.5,1.5,0,0,0-1.5,1.5v10a1.5,1.5,0,0,0,1.5,1.5h11a1.5,1.5,0,0,0,1.5-1.5v-10a1.5,1.5,0,0,0-1.5-1.5Z" transform="translate(27.466 536)" fill="#b5b5bf"></path>
                                            <path id="Path_2955" data-name="Path 2955" d="M7.5,15.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 532)" fill="#b5b5bf"></path>
                                            <path id="Path_2956" data-name="Path 2956" d="M7.5,21.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 529)" fill="#b5b5bf"></path>
                                            <path id="Path_2957" data-name="Path 2957" d="M7.5,27.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 526)" fill="#b5b5bf"></path>
                                            <path id="Path_2958" data-name="Path 2958" d="M13.5,16.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 531.5)" fill="#b5b5bf"></path>
                                            <path id="Path_2959" data-name="Path 2959" d="M13.5,22.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 528.5)" fill="#b5b5bf"></path>
                                            <path id="Path_2960" data-name="Path 2960" d="M13.5,28.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 525.5)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Purchase History</span>
                                    <span class="badge badge-inline badge-success">new</span>
                                </a>
                            </li>

                            <!-- Downloads -->
                            <li class="aiz-side-nav-item mm-active">
                                <a href="digital-purchase-history" class="aiz-side-nav-link active" aria-expanded="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.001" height="16" viewBox="0 0 16.001 16">
                                        <g id="Group_8110" data-name="Group 8110" transform="translate(-1388.154 -562.604)">
                                            <path id="Path_2963" data-name="Path 2963" d="M77.864,98.69V92.1a.5.5,0,1,0-1,0V98.69l-1.437-1.437a.5.5,0,0,0-.707.707l1.851,1.852a1,1,0,0,0,.707.293h.172a1,1,0,0,0,.707-.293l1.851-1.852a.5.5,0,0,0-.7-.713Z" transform="translate(1318.79 478.5)" fill="#b5b5bf"></path>
                                            <path id="Path_2964" data-name="Path 2964" d="M67.155,88.6a3,3,0,0,1-.474-5.963q-.009-.089-.015-.179a5.5,5.5,0,0,1,10.977-.718,3.5,3.5,0,0,1-.989,6.859h-1.5a.5.5,0,0,1,0-1l1.5,0a2.5,2.5,0,0,0,.417-4.967.5.5,0,0,1-.417-.5,4.5,4.5,0,1,0-8.908.866.512.512,0,0,1,.009.121.5.5,0,0,1-.52.479,2,2,0,1,0-.162,4l.081,0h2a.5.5,0,0,1,0,1Z" transform="translate(1324 486)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Downloads</span>
                                </a>
                            </li>

                            <!-- Refund Requests -->
                            <li class="aiz-side-nav-item">
                                <a href="sent-refund-request" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_8107" data-name="Group 8107" transform="translate(-134.153 -539.823)">
                                            <path id="Path_2951" data-name="Path 2951" d="M119.549,4.47h2.033a.5.5,0,0,0,0-1h-3.24a.5.5,0,0,0-.5.5v3.24a.5.5,0,0,0,1,0V5.189a7,7,0,1,1-4.155-1.366.5.5,0,0,0,0-1,8,8,0,1,0,4.862,1.647" transform="translate(27.466 537)" fill="#b5b5bf"></path>
                                            <path id="Path_2952" data-name="Path 2952" d="M120.688,9.323v-1a.5.5,0,0,0-1,0v1a2,2,0,0,0-2,2v.5a2,2,0,0,0,2,2h1a1,1,0,0,1,1,1v.5a1,1,0,0,1-1,1h-1a1,1,0,0,1-1-1,.5.5,0,1,0-1,0,2,2,0,0,0,2,2v1a.5.5,0,0,0,1,0v-1a2,2,0,0,0,2-2v-.5a2,2,0,0,0-2-2h-1a1,1,0,0,1-1-1v-.5a1,1,0,0,1,1-1h1a1,1,0,0,1,1,1,.5.5,0,0,0,1,0,2,2,0,0,0-2-2" transform="translate(21.965 534.5)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Refund Requests</span>
                                </a>
                            </li>

                            <!-- Wishlist -->
                            <li class="aiz-side-nav-item">
                                <a href="wishlists" class="aiz-side-nav-link ">
                                    <svg id="Group_8116" data-name="Group 8116" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="14" viewBox="0 0 16 14">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_1391" data-name="Rectangle 1391" width="16" height="14" fill="#b5b5bf"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_8115" data-name="Group 8115" clip-path="url(#clip-path)">
                                            <path id="Path_2981" data-name="Path 2981" d="M14.682,1.318a4.5,4.5,0,0,0-6.364,0L8,1.636l-.318-.318A4.5,4.5,0,0,0,1.318,7.682l6.046,6.054a.9.9,0,0,0,1.273,0l6.045-6.054a4.5,4.5,0,0,0,0-6.364m-.707,5.657L8,12.959,2.025,6.975a3.5,3.5,0,0,1,4.95-4.95l.389.389a.9.9,0,0,0,1.273,0l.388-.389a3.5,3.5,0,0,1,4.95,4.95" transform="translate(0 0)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Wishlist</span>
                                </a>
                            </li>

                            <!-- Compare -->
                            <li class="aiz-side-nav-item">
                                <a href="compare" class="aiz-side-nav-link ">
                                    <svg id="Group_22071" data-name="Group 22071" xmlns="http://www.w3.org/2000/svg" width="14.6" height="16" viewBox="0 0 14.6 16">
                                        <g id="LWPOLYLINE" transform="translate(0.158)">
                                            <path id="Path_25677" data-name="Path 25677" d="M304.755,426.408v-2.032a.5.5,0,1,1,.993,0v3.239a.5.5,0,0,1-.5.5h-3.216a.5.5,0,0,1,0-1h2.006a6.924,6.924,0,0,0-11.8,1,.5.5,0,0,1-.666.221.5.5,0,0,1-.219-.672,7.913,7.913,0,0,1,13.4-1.256Z" transform="translate(-291.306 -423.268)" fill="#b5b5bf"></path>
                                        </g>
                                        <g id="LWPOLYLINE-2" data-name="LWPOLYLINE" transform="translate(0 10.879)">
                                            <path id="Path_25678" data-name="Path 25678" d="M292.141,414.371V416.4a.5.5,0,1,1-.993,0v-3.238a.5.5,0,0,1,.5-.5h3.216a.5.5,0,0,1,0,1h-2.006a6.924,6.924,0,0,0,11.8-1,.493.493,0,0,1,.666-.221.5.5,0,0,1,.219.671,7.913,7.913,0,0,1-13.4,1.256Z" transform="translate(-291.148 -412.39)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Compare</span>
                                </a>
                            </li>

                            <!-- Followed Sellers -->
                            <li class="aiz-side-nav-item">
                                <a href="followed-seller" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_8114" data-name="Group 8114" transform="translate(-1501.679 -486)">
                                            <path id="Path_2977" data-name="Path 2977" d="M193.408,3.756,192.05.862A1.5,1.5,0,0,0,190.692,0H180.666a1.5,1.5,0,0,0-1.357.862L177.95,3.756l.029-.062A3,3,0,0,0,179.373,7.7a3.091,3.091,0,0,0,.306.128V16h12V9.5a.5.5,0,0,0-1,0V15h-3V10.5a.5.5,0,0,0-.5-.5h-3a.5.5,0,0,0-.5.5V15h-3V8a3,3,0,0,0,2.5-1.342,3,3,0,0,0,5,0,3,3,0,0,0,5.229-2.9M184.679,11h2v4h-2Zm6.4-4.041A2,2,0,0,1,188.719,5.4a.5.5,0,0,0-.49-.4h-.1a.5.5,0,0,0-.49.4,2,2,0,0,1-3.919,0,.5.5,0,0,0-.49-.4h-.1a.5.5,0,0,0-.49.4,2,2,0,1,1-3.781-1.225l1.357-2.888A.5.5,0,0,1,180.666,1h10.025a.5.5,0,0,1,.452.288L192.5,4.175a2,2,0,0,1-1.422,2.784" transform="translate(1324 486)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Followed Sellers</span>
                                </a>
                            </li>

                            <!-- Classified Products -->
                            <li class="aiz-side-nav-item">
                                <a href="customer_products" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="16.001" viewBox="0 0 16.002 16.001">
                                        <g id="Group_24750" data-name="Group 24750" transform="translate(-242.999 -1172.998)">
                                            <g id="Group_24748" data-name="Group 24748" transform="translate(85 -22)">
                                                <path id="Subtraction_183" data-name="Subtraction 183" d="M16260.5,1270h-5a1.5,1.5,0,0,1,0-3h5a1.5,1.5,0,1,1,0,3Zm-5-2a.5.5,0,0,0,0,1h5a.5.5,0,1,0,0-1Z" transform="translate(-16096 -67)" fill="#b5b5bf"></path>
                                                <path id="Subtraction_180" data-name="Subtraction 180" d="M16256,1271a2,2,0,1,1,2-2A2,2,0,0,1,16256,1271Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,16256,1268Z" transform="translate(-16094 -72)" fill="#b5b5bf"></path>
                                            </g>
                                            <g id="Group_24749" data-name="Group 24749" transform="translate(93 -14)">
                                                <path id="Subtraction_182" data-name="Subtraction 182" d="M16252.5,1262h-5a1.5,1.5,0,1,1,0-3h5a1.5,1.5,0,1,1,0,3Zm-5-2a.5.5,0,0,0,0,1h5a.5.5,0,0,0,0-1Z" transform="translate(-16088 -59)" fill="#b5b5bf"></path>
                                                <path id="Subtraction_181" data-name="Subtraction 181" d="M16248,1263a2,2,0,1,1,2-2A2,2,0,0,1,16248,1263Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,16248,1260Z" transform="translate(-16086 -64)" fill="#b5b5bf"></path>
                                            </g>
                                            <path id="Subtraction_174" data-name="Subtraction 174" d="M16418,892h-1v-1a4,4,0,0,0-4-4h-1v-1h1a5.006,5.006,0,0,1,5,5v1Z" transform="translate(-16159 287)" fill="#b5b5bf"></path>
                                            <path id="Subtraction_176" data-name="Subtraction 176" d="M6,6H5V5A4,4,0,0,0,1,1H0V0H1A5.005,5.005,0,0,1,6,5V6Z" transform="translate(249 1188.963) rotate(180)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Classified Products</span>
                                </a>
                            </li>

                            <!-- Auction -->
                            <li class="aiz-side-nav-item">
                                <a href="javascript:void(0);" class="aiz-side-nav-link">
                                    <svg id="Group_8142" data-name="Group 8142" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_1420" data-name="Rectangle 1420" width="16" height="16" fill="#b5b5bf"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_8141" data-name="Group 8141" clip-path="url(#clip-path)">
                                            <path id="Path_3023" data-name="Path 3023" d="M5.3,13.642,11.217,5.2,9.58,4.059a.5.5,0,0,1-.819-.573L11.055.213a.5.5,0,0,1,.819.573L17.607,4.8a.5.5,0,0,1,.819.573L16.131,8.643a.5.5,0,0,1-.819-.573L13.675,6.924,7.762,15.361A1.5,1.5,0,0,1,5.3,13.642M15.886,7.251l1.147-1.637L11.3,1.6,10.153,3.241ZM6.246,14.91a.5.5,0,0,0,.7-.122l5.913-8.437-.819-.573L6.123,14.215a.5.5,0,0,0,.123.7" transform="translate(-5.033 0)" fill="#b5b5bf"></path>
                                            <path id="Path_3024" data-name="Path 3024" d="M3,30.472a.5.5,0,0,0,.5.5h7a.5.5,0,1,0,0-1h-7a.5.5,0,0,0-.5.5" transform="translate(3.5 -14.986)" fill="#b5b5bf"></path>
                                            <path id="Path_3025" data-name="Path 3025" d="M6.5,24.976h4a.5.5,0,0,1,.5.5v2H10v-1.5H7v1.5H6v-2a.5.5,0,0,1,.5-.5" transform="translate(2 -12.488)" fill="#b5b5bf"></path>
                                            <path id="Path_3026" data-name="Path 3026" d="M0,24.478H0a.5.5,0,0,0,.5.5h1a.5.5,0,1,0,0-1H.5a.5.5,0,0,0-.5.5" transform="translate(14 -11.989)" fill="#b5b5bf"></path>
                                            <path id="Path_3027" data-name="Path 3027" d="M4.439,19.007a.5.5,0,0,0-.707,0l-.707.706a.5.5,0,0,0,.707.706l.707-.706a.5.5,0,0,0,0-.706" transform="translate(9.975 -9.431)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Auction</span>
                                    <span class="aiz-side-nav-arrow"></span>
                                </a>
                                <ul class="aiz-side-nav-list level-2 mm-collapse">
                                    <li class="aiz-side-nav-item">
                                        <a href="auction_product_bids" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">Bidded Products</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="auction/purchase_history" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">Purchase History</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Conversations -->
                            <li class="aiz-side-nav-item">
                                <a href="conversations" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_8134" data-name="Group 8134" transform="translate(1053.151 256.688)">
                                            <path id="Path_3012" data-name="Path 3012" d="M134.849,88.312h-8a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2v3l2.4-3h5.6a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2m1,7a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-5a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z" transform="translate(-1178 -341)" fill="#b5b5bf"></path>
                                            <path id="Path_3013" data-name="Path 3013" d="M134.849,81.312h8a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1h-.5a.5.5,0,0,0,0,1h.5a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v.5a.5.5,0,0,0,1,0v-.5a1,1,0,0,1,1-1" transform="translate(-1182 -337)" fill="#b5b5bf"></path>
                                            <path id="Path_3014" data-name="Path 3014" d="M131.349,93.312h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(-1181 -343.5)" fill="#b5b5bf"></path>
                                            <path id="Path_3015" data-name="Path 3015" d="M131.349,99.312h5a.5.5,0,1,1,0,1h-5a.5.5,0,1,1,0-1" transform="translate(-1181 -346.5)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Conversations</span>
                                </a>
                            </li>

                            <!-- My Wallet -->
                            <li class="aiz-side-nav-item">
                                <a href="wallet" class="aiz-side-nav-link ">
                                    <svg id="Group_8103" data-name="Group 8103" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_1386" data-name="Rectangle 1386" width="16" height="16" fill="#b5b5bf"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_8102" data-name="Group 8102" clip-path="url(#clip-path)">
                                            <path id="Path_2936" data-name="Path 2936" d="M13.5,4H13V2.5A2.5,2.5,0,0,0,10.5,0h-8A2.5,2.5,0,0,0,0,2.5v11A2.5,2.5,0,0,0,2.5,16h11A2.5,2.5,0,0,0,16,13.5v-7A2.5,2.5,0,0,0,13.5,4M2.5,1h8A1.5,1.5,0,0,1,12,2.5V4H2.5a1.5,1.5,0,0,1,0-3M15,11H10a1,1,0,0,1,0-2h5Zm0-3H10a2,2,0,0,0,0,4h5v1.5A1.5,1.5,0,0,1,13.5,15H2.5A1.5,1.5,0,0,1,1,13.5v-9A2.5,2.5,0,0,0,2.5,5h11A1.5,1.5,0,0,1,15,6.5Z" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">My Wallet</span>
                                </a>
                            </li>

                            <!-- Earning Points -->
                            <li class="aiz-side-nav-item">
                                <a href="earning-points" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_24762" data-name="Group 24762" transform="translate(-240.535 -537)">
                                            <path id="Path_2961" data-name="Path 2961" d="M221.069,0a8,8,0,1,0,8,8,8,8,0,0,0-8-8m0,15a7,7,0,1,1,7-7,7,7,0,0,1-7,7" transform="translate(27.466 537)" fill="#b5b5bf"></path>
                                            <path id="Union_11" data-name="Union 11" d="M16425.393,420.226l-3.777-5.039a.42.42,0,0,1-.012-.482l1.662-2.515a.416.416,0,0,1,.313-.186l0,0h4.26a.41.41,0,0,1,.346.19l1.674,2.515a.414.414,0,0,1-.012.482l-3.777,5.039a.413.413,0,0,1-.338.169A.419.419,0,0,1,16425.393,420.226Zm-2.775-5.245,3.113,4.148,3.109-4.148-1.32-1.983h-3.592Z" transform="translate(-16177.195 129)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Earning Points</span>
                                </a>
                            </li>

                            <!-- Affiliate -->
                            <li class="aiz-side-nav-item">
                                <a href="javascript:void(0);" class="aiz-side-nav-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.998" height="19.998" viewBox="0 0 19.998 19.998">
                                        <g id="Group_25000" data-name="Group 25000" transform="translate(-298 -935.05)">
                                            <path id="Union_13" data-name="Union 13" d="M8.931,6.946h.993a.5.5,0,1,1-.993,0ZM0,6.946V4.962a4.962,4.962,0,0,1,9.923,0V6.945H8.932V4.962a3.969,3.969,0,0,0-7.939,0V6.946h0a.5.5,0,1,1-.993,0Z" transform="translate(310.981 935.05) rotate(45)" fill="#b5b5bf"></path>
                                            <path id="Union_14" data-name="Union 14" d="M0,2.48V.5A.5.5,0,0,1,.993.5h0V2.48a3.969,3.969,0,1,0,7.939,0V.5h.992V2.48A4.962,4.962,0,0,1,0,2.48ZM8.931.5a.5.5,0,0,1,.993,0Z" transform="translate(303.263 942.769) rotate(45)" fill="#b5b5bf"></path>
                                            <rect id="Rectangle_18625" data-name="Rectangle 18625" width="0.992" height="7.939" rx="0.496" transform="translate(309.93 942.417) rotate(45)" fill="#b5b5bf"></rect>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Affiliate</span>
                                    <span class="aiz-side-nav-arrow"></span>
                                </a>
                                <ul class="aiz-side-nav-list level-2 mm-collapse">
                                    <li class="aiz-side-nav-item">
                                        <a href="affiliate/user" class="aiz-side-nav-link ">
                                            <span class="aiz-side-nav-text">Affiliate System</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="affiliate/user/payment_history" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">Payment History</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="affiliate/user/withdraw_request_history" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">Withdraw request history</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                            <!-- Support Ticket -->
                            <li class="aiz-side-nav-item">
                                <a href="support_ticket" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.001" viewBox="0 0 16 16.001">
                                        <g id="Group_24764" data-name="Group 24764" transform="translate(-316 -1066)">
                                            <path id="Subtraction_184" data-name="Subtraction 184" d="M16427.109,902H16420a8.015,8.015,0,1,1,8-8,8.278,8.278,0,0,1-1.422,4.535l1.244,2.132a.81.81,0,0,1,0,.891A.791.791,0,0,1,16427.109,902ZM16420,887a7,7,0,1,0,0,14h6.283c.275,0,.414,0,.549-.111s-.209-.574-.34-.748l0,0-.018-.022-1.064-1.6A6.829,6.829,0,0,0,16427,894a6.964,6.964,0,0,0-7-7Z" transform="translate(-16096 180)" fill="#b5b5bf"></path>
                                            <path id="Union_12" data-name="Union 12" d="M16414,895a1,1,0,1,1,1,1A1,1,0,0,1,16414,895Zm.5-2.5V891h.5a2,2,0,1,0-2-2h-1a3,3,0,1,1,3.5,2.958v.54a.5.5,0,1,1-1,0Zm-2.5-3.5h1a.5.5,0,1,1-1,0Z" transform="translate(-16090.998 183.001)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Support Ticket</span>
                                    <span class="badge badge-inline badge-success">1</span>
                                </a>
                            </li>

                            <!-- Manage Profile -->
                            <li class="aiz-side-nav-item">
                                <a href="profile" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_8094" data-name="Group 8094" transform="translate(3176 -602)">
                                            <path id="Path_2924" data-name="Path 2924" d="M331.144,0a4,4,0,1,0,4,4,4,4,0,0,0-4-4m0,7a3,3,0,1,1,3-3,3,3,0,0,1-3,3" transform="translate(-3499.144 602)" fill="#b5b5bf"></path>
                                            <path id="Path_2925" data-name="Path 2925" d="M332.144,20h-10a3,3,0,0,0,0,6h10a3,3,0,0,0,0-6m0,5h-10a2,2,0,0,1,0-4h10a2,2,0,0,1,0,4" transform="translate(-3495.144 592)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Manage Profile</span>
                                </a>
                            </li>

                            <!-- Delete My Account -->
                            <li class="aiz-side-nav-item">
                                <a href="javascript:void(0)" onclick="account_delete_confirm_modal('account-deletion')" class="aiz-side-nav-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_25000" data-name="Group 25000" transform="translate(-240.535 -537)">
                                            <path id="Path_2961" data-name="Path 2961" d="M221.069,0a8,8,0,1,0,8,8,8,8,0,0,0-8-8m0,15a7,7,0,1,1,7-7,7,7,0,0,1-7,7" transform="translate(27.466 537)" fill="#b5b5bf"></path>
                                            <rect id="Rectangle_18942" data-name="Rectangle 18942" width="8" height="1" rx="0.5" transform="translate(244.535 544.5)" fill="#b5b5bf"></rect>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Delete My Account</span>
                                </a>
                            </li>

                        </ul>

                        <!-- logout -->
                        <a href="logout" class="btn btn-primary btn-block fs-14 fw-700 mb-5 mb-md-0" style="border-radius: 25px;">Sign Out</a>
                    </div>

                </div>
            </div>
            <div class="aiz-user-panel">
                <div class="card shadow-none rounded-0 border">
                    <div class="card-header border-bottom-0">
                        <h5 class="mb-0 fs-20 fw-700 text-dark">Download Your Products</h5>
                    </div>
                    <div class="card-body">
                        <table class="table aiz-table mb-0 footable footable-1 breakpoint-xl" style="">
                            <thead class="text-gray fs-12">
                                <tr class="footable-header">


                                    <th class="pl-0 footable-first-visible" style="display: table-cell;">Product</th>
                                    <th class="pr-0 text-right footable-last-visible" width="20%" style="display: table-cell;">Option</th>
                                </tr>
                            </thead>
                            <tbody class="fs-14">

                                <tr>


                                    <td class="pl-0 footable-first-visible" style="display: table-cell;">
                                        <a href="product/adobe-photoshop-cc-68450" class="d-flex align-items-center">
                                            <img class="img-fit size-80px ls-is-cached lazyloaded" src="/frontend/uploads/all/d6zJ0hqqTczvV4AgXJX3cFyu1TIFi6kNcHRh1L5I.webp" data-src="/frontend/uploads/all/d6zJ0hqqTczvV4AgXJX3cFyu1TIFi6kNcHRh1L5I.webp" alt="Adobe Illustrator | Vector graphic design software | 12-month Subscription with auto-renewal, PC/Mac" onerror="this.onerror=null;this.src='public/assets/img/placeholder.jpg';">
                                            <span class="ml-2">Adobe Illustrator | Vector graphic design software | 12-month Subscription with auto-renewal, PC/Mac</span>
                                        </a>
                                    </td>
                                    <td class="pr-0 text-right footable-last-visible" style="vertical-align: middle; display: table-cell;">
                                        <a class="btn btn-soft-info btn-icon btn-circle btn-sm hov-svg-white" href="digital-products/download/eyJpdiI6IjNoZmg1ZFJDaFMwb2hwYzNTemlQaFE9PSIsInZhbHVlIjoiNThpaE1La1hybENhMXFQRjN5TkdKQT09IiwibWFjIjoiYmFhZjdkZDc2OWI1NWFiN2M4ZjY2MmMzNGFjNTY1ODYzYjMyZDQ4YTAyMWVjZmQxOThkODkwNjNmNGJmNWMxMCIsInRhZyI6IiJ9" title="Download">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.001" viewBox="0 0 12 12.001">
                                                <g id="Group_24807" data-name="Group 24807" transform="translate(-1341 -424.999)">
                                                    <path id="Union_17" data-name="Union 17" d="M13936.389,851.5l.707-.707,2.355,2.355V846h1v7.1l2.306-2.306.707.707-3.538,3.538Z" transform="translate(-12592.95 -421)" fill="#3490f3"></path>
                                                    <rect id="Rectangle_18661" data-name="Rectangle 18661" width="12" height="1" transform="translate(1341 436)" fill="#3490f3"></rect>
                                                </g>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection