@extends('frontend.layouts.master')


@section('content')


<section class="mb-4 pt-4">
    <div class="container sm-px-0 pt-2">
        <form class="" id="search-form" action="" method="GET">
            <div class="row">

                <!-- Sidebar Filters -->
                <div class="col-xl-3">
                    <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                        <div class="collapse-sidebar c-scrollbar-light text-left">
                            <div class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                                <h3 class="h6 mb-0 fw-600">Filters</h3>
                                <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                    <i class="las la-times la-2x"></i>
                                </button>
                            </div>

                            <!-- Categories -->
                            <div class="bg-white border mb-3">
                                <div class="fs-16 fw-700 p-3">
                                    <a href="#collapse_1" class="dropdown-toggle filter-section text-dark d-flex align-items-center justify-content-between" data-toggle="collapse">
                                        Categories
                                    </a>
                                </div>
                                <div class="collapse show" id="collapse_1">
                                    <ul class="p-3 mb-0 list-unstyled">
                                        <li class="mb-3">
                                            <a class="text-reset fs-14 fw-600 hov-text-primary" href="/search">
                                                <i class="las la-angle-left"></i>
                                                All Categories
                                            </a>
                                        </li>

                                        <li class="mb-3">
                                            <a class="text-reset fs-14 fw-600 hov-text-primary" href="/category/women-clothing-fashion">
                                                <i class="las la-angle-left"></i>
                                                Women Clothing &amp; Fashion
                                            </a>
                                        </li>
                                        <li class="ml-4 mb-3">
                                            <a class="text-reset fs-14 hov-text-primary" href="/category/Hot-Categories">
                                                Hot Categories
                                            </a>
                                        </li>
                                        <li class="ml-4 mb-3">
                                            <a class="text-reset fs-14 hov-text-primary" href="/category/Wedding-&amp;-events">
                                                Wedding &amp; events
                                            </a>
                                        </li>
                                        <li class="ml-4 mb-3">
                                            <a class="text-reset fs-14 hov-text-primary" href="/category/Bottom">
                                                Bottom
                                            </a>
                                        </li>
                                        <li class="ml-4 mb-3">
                                            <a class="text-reset fs-14 hov-text-primary" href="/category/Tops-&amp;-sets">
                                                Tops &amp; sets
                                            </a>
                                        </li>
                                        <li class="ml-4 mb-3">
                                            <a class="text-reset fs-14 hov-text-primary" href="/category/Accessories">
                                                Accessories
                                            </a>
                                        </li>
                                        <li class="ml-4 mb-3">
                                            <a class="text-reset fs-14 hov-text-primary" href="/category/watch-hyau2">
                                                Women Watch
                                            </a>
                                        </li>
                                        <li class="ml-4 mb-3">
                                            <a class="text-reset fs-14 hov-text-primary" href="/category/women-dress-04vbn">
                                                Baby Dresses
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Price range -->
                            <div class="bg-white border mb-3">
                                <div class="fs-16 fw-700 p-3">
                                    Price range
                                </div>
                                <div class="p-3 mr-3">
                                    <div class="aiz-range-slider">
                                        <div id="input-slider-range" data-range-value-min=" 5 " data-range-value-max=" 25000 " class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                            <div class="noUi-base">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect" style="transform: translate(0.060012%, 0px) scale(0.00520104, 1);"></div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-999.4%, 0px); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="5.0" aria-valuemax="150.0" aria-valuenow="20.0" aria-valuetext="20.00">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-994.199%, 0px); z-index: 6;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="25000.0" aria-valuenow="150.0" aria-valuetext="150.00">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <span class="range-slider-value value-low fs-14 fw-600 opacity-70" data-range-value-low="20" id="input-slider-range-value-low">20.00</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="range-slider-value value-high fs-14 fw-600 opacity-70" data-range-value-high="150" id="input-slider-range-value-high">150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hidden Items -->
                                <input type="hidden" name="min_price" value="">
                                <input type="hidden" name="max_price" value="">
                            </div>

                            <!-- Attributes -->
                            <div class="bg-white border mb-3">
                                <div class="fs-16 fw-700 p-3">
                                    <a href="#" class="dropdown-toggle text-dark filter-section collapsed d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#collapse_Size" style="white-space: normal;">
                                        Size
                                    </a>
                                </div>
                                <div class="collapse " id="collapse_Size">
                                    <div class="p-3 aiz-checkbox-list">
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="M" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">M</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="L" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">L</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="XL" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">XL</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="XXL" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">XXL</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="S" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">S</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="64GB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">64GB</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="128GB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">128GB</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="512GB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">512GB</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="1TB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">1TB</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="3/32 GB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">3/32 GB</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="4/64 GB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">4/64 GB</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="4/128 GB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">4/128 GB</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="8/256 GB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">8/256 GB</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="6/128 GB" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">6/128 GB</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border mb-3">
                                <div class="fs-16 fw-700 p-3">
                                    <a href="#" class="dropdown-toggle text-dark filter-section collapsed d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#collapse_Fabric" style="white-space: normal;">
                                        Fabric
                                    </a>
                                </div>
                                <div class="collapse " id="collapse_Fabric">
                                    <div class="p-3 aiz-checkbox-list">
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Chenille" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Chenille</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Cotton" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Cotton</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Georgette" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Georgette</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Crêpe" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Crêpe</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Canvas" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Canvas</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border mb-3">
                                <div class="fs-16 fw-700 p-3">
                                    <a href="#" class="dropdown-toggle text-dark filter-section collapsed d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#collapse_Sleeve" style="white-space: normal;">
                                        Sleeve
                                    </a>
                                </div>
                                <div class="collapse " id="collapse_Sleeve">
                                    <div class="p-3 aiz-checkbox-list">
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Bell sleeves" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Bell sleeves</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Cap sleeves" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Cap sleeves</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Raglan sleeves" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Raglan sleeves</span>
                                        </label>
                                        <label class="aiz-checkbox mb-3">
                                            <input type="checkbox" name="selected_attribute_values[]" value="Flutter sleeves" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-14 fw-400 text-dark">Flutter sleeves</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Color -->
                            <div class="bg-white border mb-3">
                                <div class="fs-16 fw-700 p-3">
                                    <a href="#" class="dropdown-toggle text-dark filter-section collapsed d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#collapse_color">
                                        Filter by color
                                    </a>
                                </div>
                                <div class="collapse " id="collapse_color">
                                    <div class="p-3 aiz-radio-inline">
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="IndianRed">
                                            <input type="radio" name="color" value="#CD5C5C" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #CD5C5C;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightCoral">
                                            <input type="radio" name="color" value="#F08080" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F08080;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Salmon">
                                            <input type="radio" name="color" value="#FA8072" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FA8072;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkSalmon">
                                            <input type="radio" name="color" value="#E9967A" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #E9967A;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightSalmon">
                                            <input type="radio" name="color" value="#FFA07A" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFA07A;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Crimson">
                                            <input type="radio" name="color" value="#DC143C" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #DC143C;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Red">
                                            <input type="radio" name="color" value="#FF0000" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF0000;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="FireBrick">
                                            <input type="radio" name="color" value="#B22222" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #B22222;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkRed">
                                            <input type="radio" name="color" value="#8B0000" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #8B0000;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Pink">
                                            <input type="radio" name="color" value="#FFC0CB" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFC0CB;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightPink">
                                            <input type="radio" name="color" value="#FFB6C1" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFB6C1;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="HotPink">
                                            <input type="radio" name="color" value="#FF69B4" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF69B4;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DeepPink">
                                            <input type="radio" name="color" value="#FF1493" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF1493;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumVioletRed">
                                            <input type="radio" name="color" value="#C71585" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #C71585;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="PaleVioletRed">
                                            <input type="radio" name="color" value="#DB7093" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #DB7093;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightSalmon">
                                            <input type="radio" name="color" value="#FFA07A" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFA07A;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Coral">
                                            <input type="radio" name="color" value="#FF7F50" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF7F50;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Tomato">
                                            <input type="radio" name="color" value="#FF6347" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF6347;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="OrangeRed">
                                            <input type="radio" name="color" value="#FF4500" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF4500;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkOrange">
                                            <input type="radio" name="color" value="#FF8C00" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF8C00;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Orange">
                                            <input type="radio" name="color" value="#FFA500" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFA500;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Gold">
                                            <input type="radio" name="color" value="#FFD700" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFD700;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Yellow">
                                            <input type="radio" name="color" value="#FFFF00" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFFF00;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightYellow">
                                            <input type="radio" name="color" value="#FFFFE0" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFFFE0;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LemonChiffon">
                                            <input type="radio" name="color" value="#FFFACD" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFFACD;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightGoldenrodYellow">
                                            <input type="radio" name="color" value="#FAFAD2" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FAFAD2;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="PapayaWhip">
                                            <input type="radio" name="color" value="#FFEFD5" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFEFD5;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Moccasin">
                                            <input type="radio" name="color" value="#FFE4B5" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFE4B5;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="PeachPuff">
                                            <input type="radio" name="color" value="#FFDAB9" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFDAB9;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="PaleGoldenrod">
                                            <input type="radio" name="color" value="#EEE8AA" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #EEE8AA;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Khaki">
                                            <input type="radio" name="color" value="#F0E68C" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F0E68C;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkKhaki">
                                            <input type="radio" name="color" value="#BDB76B" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #BDB76B;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Lavender">
                                            <input type="radio" name="color" value="#E6E6FA" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #E6E6FA;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Thistle">
                                            <input type="radio" name="color" value="#D8BFD8" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #D8BFD8;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Plum">
                                            <input type="radio" name="color" value="#DDA0DD" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #DDA0DD;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Violet">
                                            <input type="radio" name="color" value="#EE82EE" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #EE82EE;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Orchid">
                                            <input type="radio" name="color" value="#DA70D6" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #DA70D6;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Fuchsia">
                                            <input type="radio" name="color" value="#FF00FF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF00FF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Magenta">
                                            <input type="radio" name="color" value="#FF00FF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FF00FF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumOrchid">
                                            <input type="radio" name="color" value="#BA55D3" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #BA55D3;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumPurple">
                                            <input type="radio" name="color" value="#9370DB" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #9370DB;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Amethyst">
                                            <input type="radio" name="color" value="#9966CC" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #9966CC;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="BlueViolet">
                                            <input type="radio" name="color" value="#8A2BE2" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #8A2BE2;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkViolet">
                                            <input type="radio" name="color" value="#9400D3" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #9400D3;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkOrchid">
                                            <input type="radio" name="color" value="#9932CC" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #9932CC;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkMagenta">
                                            <input type="radio" name="color" value="#8B008B" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #8B008B;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Purple">
                                            <input type="radio" name="color" value="#800080" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #800080;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Indigo">
                                            <input type="radio" name="color" value="#4B0082" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #4B0082;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="SlateBlue">
                                            <input type="radio" name="color" value="#6A5ACD" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #6A5ACD;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkSlateBlue">
                                            <input type="radio" name="color" value="#483D8B" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #483D8B;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumSlateBlue">
                                            <input type="radio" name="color" value="#7B68EE" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #7B68EE;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="GreenYellow">
                                            <input type="radio" name="color" value="#ADFF2F" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #ADFF2F;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Chartreuse">
                                            <input type="radio" name="color" value="#7FFF00" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #7FFF00;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LawnGreen">
                                            <input type="radio" name="color" value="#7CFC00" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #7CFC00;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Lime">
                                            <input type="radio" name="color" value="#00FF00" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #00FF00;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LimeGreen">
                                            <input type="radio" name="color" value="#32CD32" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #32CD32;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="PaleGreen">
                                            <input type="radio" name="color" value="#98FB98" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #98FB98;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightGreen">
                                            <input type="radio" name="color" value="#90EE90" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #90EE90;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumSpringGreen">
                                            <input type="radio" name="color" value="#00FA9A" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #00FA9A;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="SpringGreen">
                                            <input type="radio" name="color" value="#00FF7F" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #00FF7F;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumSeaGreen">
                                            <input type="radio" name="color" value="#3CB371" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #3CB371;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="SeaGreen">
                                            <input type="radio" name="color" value="#2E8B57" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #2E8B57;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="ForestGreen">
                                            <input type="radio" name="color" value="#228B22" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #228B22;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Green">
                                            <input type="radio" name="color" value="#008000" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #008000;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkGreen">
                                            <input type="radio" name="color" value="#006400" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #006400;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="YellowGreen">
                                            <input type="radio" name="color" value="#9ACD32" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #9ACD32;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="OliveDrab">
                                            <input type="radio" name="color" value="#6B8E23" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #6B8E23;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Olive">
                                            <input type="radio" name="color" value="#808000" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #808000;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkOliveGreen">
                                            <input type="radio" name="color" value="#556B2F" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #556B2F;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumAquamarine">
                                            <input type="radio" name="color" value="#66CDAA" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #66CDAA;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkSeaGreen">
                                            <input type="radio" name="color" value="#8FBC8F" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #8FBC8F;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightSeaGreen">
                                            <input type="radio" name="color" value="#20B2AA" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #20B2AA;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkCyan">
                                            <input type="radio" name="color" value="#008B8B" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #008B8B;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Teal">
                                            <input type="radio" name="color" value="#008080" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #008080;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Aqua">
                                            <input type="radio" name="color" value="#00FFFF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #00FFFF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Cyan">
                                            <input type="radio" name="color" value="#00FFFF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #00FFFF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightCyan">
                                            <input type="radio" name="color" value="#E0FFFF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #E0FFFF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="PaleTurquoise">
                                            <input type="radio" name="color" value="#AFEEEE" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #AFEEEE;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Aquamarine">
                                            <input type="radio" name="color" value="#7FFFD4" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #7FFFD4;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Turquoise">
                                            <input type="radio" name="color" value="#40E0D0" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #40E0D0;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumTurquoise">
                                            <input type="radio" name="color" value="#48D1CC" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #48D1CC;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkTurquoise">
                                            <input type="radio" name="color" value="#00CED1" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #00CED1;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="CadetBlue">
                                            <input type="radio" name="color" value="#5F9EA0" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #5F9EA0;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="SteelBlue">
                                            <input type="radio" name="color" value="#4682B4" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #4682B4;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightSteelBlue">
                                            <input type="radio" name="color" value="#B0C4DE" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #B0C4DE;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="PowderBlue">
                                            <input type="radio" name="color" value="#B0E0E6" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #B0E0E6;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightBlue">
                                            <input type="radio" name="color" value="#ADD8E6" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #ADD8E6;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="SkyBlue">
                                            <input type="radio" name="color" value="#87CEEB" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #87CEEB;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightSkyBlue">
                                            <input type="radio" name="color" value="#87CEFA" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #87CEFA;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DeepSkyBlue">
                                            <input type="radio" name="color" value="#00BFFF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #00BFFF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DodgerBlue">
                                            <input type="radio" name="color" value="#1E90FF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #1E90FF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="CornflowerBlue">
                                            <input type="radio" name="color" value="#6495ED" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #6495ED;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumSlateBlue">
                                            <input type="radio" name="color" value="#7B68EE" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #7B68EE;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="RoyalBlue">
                                            <input type="radio" name="color" value="#4169E1" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #4169E1;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Blue">
                                            <input type="radio" name="color" value="#0000FF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #0000FF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MediumBlue">
                                            <input type="radio" name="color" value="#0000CD" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #0000CD;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkBlue">
                                            <input type="radio" name="color" value="#00008B" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #00008B;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Navy">
                                            <input type="radio" name="color" value="#000080" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #000080;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MidnightBlue">
                                            <input type="radio" name="color" value="#191970" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #191970;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Cornsilk">
                                            <input type="radio" name="color" value="#FFF8DC" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFF8DC;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="BlanchedAlmond">
                                            <input type="radio" name="color" value="#FFEBCD" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFEBCD;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Bisque">
                                            <input type="radio" name="color" value="#FFE4C4" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFE4C4;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="NavajoWhite">
                                            <input type="radio" name="color" value="#FFDEAD" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFDEAD;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Wheat">
                                            <input type="radio" name="color" value="#F5DEB3" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F5DEB3;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="BurlyWood">
                                            <input type="radio" name="color" value="#DEB887" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #DEB887;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Tan">
                                            <input type="radio" name="color" value="#D2B48C" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #D2B48C;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="RosyBrown">
                                            <input type="radio" name="color" value="#BC8F8F" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #BC8F8F;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="SandyBrown">
                                            <input type="radio" name="color" value="#F4A460" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F4A460;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Goldenrod">
                                            <input type="radio" name="color" value="#DAA520" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #DAA520;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkGoldenrod">
                                            <input type="radio" name="color" value="#B8860B" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #B8860B;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Peru">
                                            <input type="radio" name="color" value="#CD853F" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #CD853F;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Chocolate">
                                            <input type="radio" name="color" value="#D2691E" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #D2691E;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="SaddleBrown">
                                            <input type="radio" name="color" value="#8B4513" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #8B4513;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Sienna">
                                            <input type="radio" name="color" value="#A0522D" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #A0522D;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Brown">
                                            <input type="radio" name="color" value="#A52A2A" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #A52A2A;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Maroon">
                                            <input type="radio" name="color" value="#800000" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #800000;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="White">
                                            <input type="radio" name="color" value="#FFFFFF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFFFFF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Snow">
                                            <input type="radio" name="color" value="#FFFAFA" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFFAFA;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Honeydew">
                                            <input type="radio" name="color" value="#F0FFF0" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F0FFF0;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MintCream">
                                            <input type="radio" name="color" value="#F5FFFA" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F5FFFA;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Azure">
                                            <input type="radio" name="color" value="#F0FFFF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F0FFFF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="AliceBlue">
                                            <input type="radio" name="color" value="#F0F8FF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F0F8FF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="GhostWhite">
                                            <input type="radio" name="color" value="#F8F8FF" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F8F8FF;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="WhiteSmoke">
                                            <input type="radio" name="color" value="#F5F5F5" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F5F5F5;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Seashell">
                                            <input type="radio" name="color" value="#FFF5EE" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFF5EE;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Beige">
                                            <input type="radio" name="color" value="#F5F5DC" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #F5F5DC;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="OldLace">
                                            <input type="radio" name="color" value="#FDF5E6" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FDF5E6;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="FloralWhite">
                                            <input type="radio" name="color" value="#FFFAF0" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFFAF0;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Ivory">
                                            <input type="radio" name="color" value="#FFFFF0" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFFFF0;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="AntiqueWhite">
                                            <input type="radio" name="color" value="#FAEBD7" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FAEBD7;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Linen">
                                            <input type="radio" name="color" value="#FAF0E6" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FAF0E6;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LavenderBlush">
                                            <input type="radio" name="color" value="#FFF0F5" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFF0F5;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="MistyRose">
                                            <input type="radio" name="color" value="#FFE4E1" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #FFE4E1;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Gainsboro">
                                            <input type="radio" name="color" value="#DCDCDC" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #DCDCDC;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightGrey">
                                            <input type="radio" name="color" value="#D3D3D3" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #D3D3D3;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Silver">
                                            <input type="radio" name="color" value="#C0C0C0" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #C0C0C0;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkGray">
                                            <input type="radio" name="color" value="#A9A9A9" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #A9A9A9;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Gray">
                                            <input type="radio" name="color" value="#808080" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #808080;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DimGray">
                                            <input type="radio" name="color" value="#696969" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #696969;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="LightSlateGray">
                                            <input type="radio" name="color" value="#778899" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #778899;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="SlateGray">
                                            <input type="radio" name="color" value="#708090" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #708090;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="DarkSlateGray">
                                            <input type="radio" name="color" value="#2F4F4F" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #2F4F4F;"></span>
                                            </span>
                                        </label>
                                        <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="Black">
                                            <input type="radio" name="color" value="#000000" onchange="filter()">
                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                <span class="size-30px d-inline-block rounded" style="background: #000000;"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contents -->
                <div class="col-xl-9">

                    <!-- Breadcrumb -->
                    <ul class="breadcrumb bg-transparent py-0 px-1">
                        <li class="breadcrumb-item has-transition opacity-50 hov-opacity-100">
                            <a class="text-reset" href="">Home</a>
                        </li>
                        <li class="breadcrumb-item opacity-50 hov-opacity-100">
                            <a class="text-reset" href="/search">All Categories</a>
                        </li>
                        <li class="text-dark fw-600 breadcrumb-item">
                            "Women Clothing &amp; Fashion"
                        </li>
                    </ul>

                    <!-- Top Filters -->
                    <div class="text-left">
                        <div class="row gutters-5 flex-wrap align-items-center">
                            <div class="col-lg col-10">
                                <h1 class="fs-20 fs-md-24 fw-700 text-dark">
                                    Women Clothing &amp; Fashion
                                </h1>
                                <input type="hidden" name="keyword" value="">
                            </div>
                            <div class="col-2 col-lg-auto d-xl-none mb-lg-3 text-right">
                                <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                    <i class="la la-filter la-2x"></i>
                                </button>
                            </div>

                            <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                <div class="dropdown bootstrap-select form-control form-control-sm aiz- rounded-0"><select class="form-control form-control-sm aiz-selectpicker rounded-0" name="sort_by" onchange="filter()" tabindex="-98">
                                        <option value="">Sort By</option>
                                        <option value="newest">Newest</option>
                                        <option value="oldest">Oldest</option>
                                        <option value="price-asc">Price low to high</option>
                                        <option value="price-desc">Price high to low</option>
                                    </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Sort By">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Sort By</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products -->
                    <div class="px-3">
                        <div class="row gutters-16 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-2 border-top border-left">
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/like-dreams-large-sherpa-tote-bag-inner-pocket-vegan-leather-large-tote-hand-bags-for-women" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/Q5sQEK1nCCHi8bjMK0kIcS3N5PncM2XuBJBjWbC7.webp" alt="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women" title="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women" >
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(170)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(170)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/like-dreams-large-sherpa-tote-bag-inner-pocket-vegan-leather-large-tote-hand-bags-for-women" class="d-block text-reset hov-text-primary" title="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women">Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women</a>
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
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/insight-cosmetics-3d-highlighter" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/mG4K0TiQAXxg1sOILVVyoNdECruuN5IvMufG9yWF.webp" alt="Insight Cosmetics 3D Highlighter" title="Insight Cosmetics 3D Highlighter" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-2%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(169)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(169)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/insight-cosmetics-3d-highlighter" class="d-block text-reset hov-text-primary" title="Insight Cosmetics 3D Highlighter">Insight Cosmetics 3D Highlighter</a>
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
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/womens-plain-dress-one-piece-for-girls" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/mdNKoKdJXd2FZ38TgpgVI0OpWetrezEQSD6qNdKN.webp" alt="Women's Plain Dress One Piece for Girls" title="Women's Plain Dress One Piece for Girls" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-5%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(168)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(168)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/womens-plain-dress-one-piece-for-girls" class="d-block text-reset hov-text-primary" title="Women's Plain Dress One Piece for Girls">Women's Plain Dress One Piece for Girls</a>
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
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/women-fit-and-flare-dress-rqrit" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/bYGaGfv7z4OFJHlNwsTGTXzRpdDBny6PQmaH6XuM.webp" alt="Women's Christmas Sweatshirt Casual Fashion Printing Long Sleeve O-Neck Pullover Top Blouse Wool Sweater, S-3XL" title="Women's Christmas Sweatshirt Casual Fashion Printing Long Sleeve O-Neck Pullover Top Blouse Wool Sweater, S-3XL" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-20%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(122)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(122)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/women-fit-and-flare-dress-rqrit" class="d-block text-reset hov-text-primary" title="Women's Christmas Sweatshirt Casual Fashion Printing Long Sleeve O-Neck Pullover Top Blouse Wool Sweater, S-3XL">Women's Christmas Sweatshirt Casual Fashion Printing Long Sleeve O-Neck Pullover Top Blouse Wool Sweater, S-3XL</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$45.900</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$36.720</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/dress-the-population-womens-catalina-solid-sleeveless-fit-flare-midi-dress-gxljv" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/qLMBO3HyCqzG5llfrzUX5kD0iZLFvtpxDodgHR4E.webp" alt="Pakistani Women's Readymade Dress Banarasi Art Silk Woven Salwar Kameez Silk Dupatta Stitched Suit" title="Pakistani Women's Readymade Dress Banarasi Art Silk Woven Salwar Kameez Silk Dupatta Stitched Suit" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-3%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(115)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(115)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/dress-the-population-womens-catalina-solid-sleeveless-fit-flare-midi-dress-gxljv" class="d-block text-reset hov-text-primary" title="Pakistani Women's Readymade Dress Banarasi Art Silk Woven Salwar Kameez Silk Dupatta Stitched Suit">Pakistani Women's Readymade Dress Banarasi Art Silk Woven Salwar Kameez Silk Dupatta Stitched Suit</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$140.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$135.800</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/womens-embellished-tiered-sequin-jacket-dress-uv7kp" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/HQboSmyuvf2TShvV4NfJAgeCwm6Qnx1y6xQ2B8gI.webp" alt="Women's Embellished Tiered Sequin Jacket Dress" title="Women's Embellished Tiered Sequin Jacket Dress" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-34%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(114)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(114)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/womens-embellished-tiered-sequin-jacket-dress-uv7kp" class="d-block text-reset hov-text-primary" title="Women's Embellished Tiered Sequin Jacket Dress">Women's Embellished Tiered Sequin Jacket Dress</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$150.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$99.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/bearsland-maternity-womens-3-pieces-soft-nursing-pajamas-set-postpartum-sleepwear-for-breastfeeding-vsqcz" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/xgkm8TcXVQTwQEGFyJcwTj3yJLKOlnACY5wXLWYx.webp" alt="Self Design, Embellished, Embroidered Satin Blend, Net Semi Stitched Flared/A-line Gown" title="Self Design, Embellished, Embroidered Satin Blend, Net Semi Stitched Flared/A-line Gown" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-20%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(112)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(112)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/bearsland-maternity-womens-3-pieces-soft-nursing-pajamas-set-postpartum-sleepwear-for-breastfeeding-vsqcz" class="d-block text-reset hov-text-primary" title="Self Design, Embellished, Embroidered Satin Blend, Net Semi Stitched Flared/A-line Gown">Self Design, Embellished, Embroidered Satin Blend, Net Semi Stitched Flared/A-line Gown</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$120.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$96.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/motherhood-maternity-womens-maternity-lace-trim-nursing-nightgown-90jva" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/JEy6MQqrc4F1HOx5TVlq3VfXtjgasJL7clLpI8Va.webp" alt="VredeVogel Women's Cotton Silk Blend Straight Kurta with Trouser Pant &amp; Banarasi Silk Dupatta" title="VredeVogel Women's Cotton Silk Blend Straight Kurta with Trouser Pant &amp; Banarasi Silk Dupatta" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-20%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(111)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(111)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/motherhood-maternity-womens-maternity-lace-trim-nursing-nightgown-90jva" class="d-block text-reset hov-text-primary" title="VredeVogel Women's Cotton Silk Blend Straight Kurta with Trouser Pant &amp; Banarasi Silk Dupatta">VredeVogel Women's Cotton Silk Blend Straight Kurta with Trouser Pant &amp; Banarasi Silk Dupatta</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$100.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$80.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/adidas-womens-cropped-slim-polyester-shorts-jvdi7" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/8LmfSZEGCktshcYjefNylyAHRdFwPqkKz7hwVG9R.webp" alt="Nautica Voyage By Nautica For Men Eau De Toilette Spray" title="Nautica Voyage By Nautica For Men Eau De Toilette Spray" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(109)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(109)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/adidas-womens-cropped-slim-polyester-shorts-jvdi7" class="d-block text-reset hov-text-primary" title="Nautica Voyage By Nautica For Men Eau De Toilette Spray">Nautica Voyage By Nautica For Men Eau De Toilette Spray</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$65.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/adidas-womens-sports-tights-qpv3a" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/hJoOby7Wzj1UFJGwAN1P7kIvs6lyPlvHREDfmR6d.webp" alt="Adidas Women's Sports Tights" title="Adidas Women's Sports Tights" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-46%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(108)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(108)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/adidas-womens-sports-tights-qpv3a" class="d-block text-reset hov-text-primary" title="Adidas Women's Sports Tights">Adidas Women's Sports Tights</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$60.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$32.400</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/adidas-fitness-tights-for-women-hvo09" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/ws5Hp71WFMOQ9DgK8XmKa8alxEbI5AoAWk1qTE1D.webp" alt="Adidas Fitness Tights for Women" title="Adidas Fitness Tights for Women" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(107)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(107)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/adidas-fitness-tights-for-women-hvo09" class="d-block text-reset hov-text-primary" title="Adidas Fitness Tights for Women">Adidas Fitness Tights for Women</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$55.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/adidas-womens-slim-t-shirt-cfs45" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/v6TzAcnILPKzoFPpLQy1SNLqOtRdVQBJmscfu6ly.webp" alt="Adidas Originals Women's Trefoil Tee" title="Adidas Originals Women's Trefoil Tee" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(106)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(106)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/adidas-womens-slim-t-shirt-cfs45" class="d-block text-reset hov-text-primary" title="Adidas Originals Women's Trefoil Tee">Adidas Originals Women's Trefoil Tee</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$20.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/adidas-womens-cotton-jogger-set-ihfxn" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/6ixeCAeRRuMgqnbNgaYolYne3Nn7UqkisGAvMxxz.webp" alt="The Children's Place Women's Fall Plaid Long Sleeve Dress" title="The Children's Place Women's Fall Plaid Long Sleeve Dress" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-20%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(103)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(103)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/adidas-womens-cotton-jogger-set-ihfxn" class="d-block text-reset hov-text-primary" title="The Children's Place Women's Fall Plaid Long Sleeve Dress">The Children's Place Women's Fall Plaid Long Sleeve Dress</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$40.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$32.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/adidas-women-track-suit-2gimw" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/Hip3HyHRCGm56SzWNRHVV2FR1AbcQoHa7AcC3nAh.webp" alt="Wantdo Women's Hooded Packable Ultra Light Weight Short Down Jacket" title="Wantdo Women's Hooded Packable Ultra Light Weight Short Down Jacket" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-12%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(102)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(102)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/adidas-women-track-suit-2gimw" class="d-block text-reset hov-text-primary" title="Wantdo Women's Hooded Packable Ultra Light Weight Short Down Jacket">Wantdo Women's Hooded Packable Ultra Light Weight Short Down Jacket</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$35.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$30.800</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/western-dress-for-women-black-and-white-one-piece-dress-hosgk" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/WljxxMMxEC3poCFdSiI3qEEEcYe8VBCjTBMAvS7c.webp" alt="Western Dress for Women Black and White One Piece Dress" title="Western Dress for Women Black and White One Piece Dress" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-2%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(52)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(52)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/western-dress-for-women-black-and-white-one-piece-dress-hosgk" class="d-block text-reset hov-text-primary" title="Western Dress for Women Black and White One Piece Dress">Western Dress for Women Black and White One Piece Dress</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$45.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$44.100</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/beige-long-sleeve-mock-neck-midi-dress-du5bk" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/CA0bsCXhWSOAWnJhQRlQzEXd3ySElBSTDkYdgco0.webp" alt="Beige Long Sleeve Mock Neck Midi Dress" title="Beige Long Sleeve Mock Neck Midi Dress" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-2%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(51)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(51)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/beige-long-sleeve-mock-neck-midi-dress-du5bk" class="d-block text-reset hov-text-primary" title="Beige Long Sleeve Mock Neck Midi Dress">Beige Long Sleeve Mock Neck Midi Dress</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$120.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$117.600</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/ma-croix-womens-hooded-anorak-jacket-satin-lined-pt2vk" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/KYz6ld6NyAKTy6fguNFCyeBjHFIMKxPXndNS4AgM.webp" alt="Ma Croix Womens Hooded Anorak Jacket Satin Lined" title="Ma Croix Womens Hooded Anorak Jacket Satin Lined" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-2%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(50)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(50)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/ma-croix-womens-hooded-anorak-jacket-satin-lined-pt2vk" class="d-block text-reset hov-text-primary" title="Ma Croix Womens Hooded Anorak Jacket Satin Lined">Ma Croix Womens Hooded Anorak Jacket Satin Lined</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$50.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$49.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/quality-korean-new-style-handbag-womens-bag-danbaoly-3aqjs" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/l4UZnUK2OXJ74wVbC0TQs5X3P7SQ9uZGWKvECXFf.png" alt="MFCHY Women's Casual Handbag Floral Handbag Women's Handmade Large Capacity Shoulder Messenger Bag" title="MFCHY Women's Casual Handbag Floral Handbag Women's Handmade Large Capacity Shoulder Messenger Bag" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(49)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(49)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/quality-korean-new-style-handbag-womens-bag-danbaoly-3aqjs" class="d-block text-reset hov-text-primary" title="MFCHY Women's Casual Handbag Floral Handbag Women's Handmade Large Capacity Shoulder Messenger Bag">MFCHY Women's Casual Handbag Floral Handbag Women's Handmade Large Capacity Shoulder Messenger Bag</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$55.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/Elegant-Shrug-With-Lacework-Not-An-Abaya-DSi8G" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/Sz1dCurT5OI3cftxUazbJVONeR5px3gbDtgq4h1P.webp" alt="Elegant Shrug With Lacework-Not An Abaya" title="Elegant Shrug With Lacework-Not An Abaya" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-23%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(48)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(48)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/Elegant-Shrug-With-Lacework-Not-An-Abaya-DSi8G" class="d-block text-reset hov-text-primary" title="Elegant Shrug With Lacework-Not An Abaya">Elegant Shrug With Lacework-Not An Abaya</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$50.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$38.500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/NioBe-Clothing-Womens-Juniors-Rolled-Cuffs-Ankle-Length-Distressed-Denim-Overalls-6YDZr" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/L1mIeXeqfp0WdkUGb3XxwmKYdmgF1MtCxOIB9rQU.webp" alt="NioBe Clothing Women's Juniors Rolled Cuffs Ankle Length Distressed Denim Overalls" title="NioBe Clothing Women's Juniors Rolled Cuffs Ankle Length Distressed Denim Overalls" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(47)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(47)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/NioBe-Clothing-Womens-Juniors-Rolled-Cuffs-Ankle-Length-Distressed-Denim-Overalls-6YDZr" class="d-block text-reset hov-text-primary" title="NioBe Clothing Women's Juniors Rolled Cuffs Ankle Length Distressed Denim Overalls">NioBe Clothing Women's Juniors Rolled Cuffs Ankle Length Distressed Denim Overalls</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$80.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/Wrangler-Womens-Long-Sleeve-Denim-Shirtdress-Lp73k" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/dE5em1mz7BVkLi7f128AtCNGSj3B4SU6mI9J8jO0.webp" alt="Wrangler Women's Long-Sleeve Denim Shirtdress" title="Wrangler Women's Long-Sleeve Denim Shirtdress" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(46)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(46)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/Wrangler-Womens-Long-Sleeve-Denim-Shirtdress-Lp73k" class="d-block text-reset hov-text-primary" title="Wrangler Women's Long-Sleeve Denim Shirtdress">Wrangler Women's Long-Sleeve Denim Shirtdress</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$75.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/SHELY-Womens-Floral-Print-Maxi-Dresses-tLvvf" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/JoyxNCAie1mgghNozWlCBkFe2366zGIrVgufjfn5.webp" alt="SHELY Women's Floral Print Maxi Dresses" title="SHELY Women's Floral Print Maxi Dresses" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <span class="absolute-top-left bg-primary ml-1 mt-1 fs-11 fw-700 text-white w-35px text-center" style="padding-top:2px;padding-bottom:2px;">-41%</span>
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(45)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(45)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/SHELY-Womens-Floral-Print-Maxi-Dresses-tLvvf" class="d-block text-reset hov-text-primary" title="SHELY Women's Floral Print Maxi Dresses">SHELY Women's Floral Print Maxi Dresses</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <div class="disc-amount has-transition">
                                                <del class="fw-400 text-secondary mr-1">$45.000</del>
                                            </div>
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$26.550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/ZLTdream-Belly-Dance-Chiffon-Long-Sleeves-6SRgm" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/WKLjoJC4njGdqaB9Z0J0KzZIl00l9nwNZdlKhbQo.webp" alt="ZLTdream Belly Dance Chiffon Long Sleeves" title="ZLTdream Belly Dance Chiffon Long Sleeves" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(44)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(44)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/ZLTdream-Belly-Dance-Chiffon-Long-Sleeves-6SRgm" class="d-block text-reset hov-text-primary" title="ZLTdream Belly Dance Chiffon Long Sleeves">ZLTdream Belly Dance Chiffon Long Sleeves</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$85.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                    <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                        <!-- Image -->
                                        <a href="/product/Cream-Silk-Banarasi-Sarees-rJ5Jb" class="d-block h-100">
                                            <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="/frontend/uploads/all/R6p8ERrpybFfVmZ9eLnitCjnEE87NXmmShuwGMM3.webp" alt="Cream Silk Banarasi Sarees" title="Cream Silk Banarasi Sarees" onerror="this.onerror=null;this.src='/frontend/assets/img/placeholder.jpg';">
                                        </a>
                                        <!-- Discount percentage tag -->
                                        <!-- Wholesale tag -->
                                        <!-- wishlisht & compare icons -->
                                        <div class="absolute-top-right aiz-p-hov-icon">
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(43)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4" viewBox="0 0 16 14.4">
                                                    <g id="_51a3dbe0e593ba390ac13cba118295e4" data-name="51a3dbe0e593ba390ac13cba118295e4" transform="translate(-3.05 -4.178)">
                                                        <path id="Path_32649" data-name="Path 32649" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                        <path id="Path_32650" data-name="Path 32650" d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z" transform="translate(0 0)" fill="#919199"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(43)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <path id="_9f8e765afedd47ec9e49cea83c37dfea" data-name="9f8e765afedd47ec9e49cea83c37dfea" d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z" transform="translate(-2.037 -2.038)" fill="#919199"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- add to cart -->
                                        <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center " href="javascript:void(0)" onclick="showLoginModal()">
                                            <span class="cart-btn-text">
                                                Add to cart
                                            </span>
                                            <span><i class="las la-2x la-shopping-cart"></i></span>
                                        </a>
                                    </div>

                                    <div class="p-2 p-md-3 text-left">
                                        <!-- Product name -->
                                        <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                            <a href="/product/Cream-Silk-Banarasi-Sarees-rJ5Jb" class="d-block text-reset hov-text-primary" title="Cream Silk Banarasi Sarees">Cream Silk Banarasi Sarees</a>
                                        </h3>
                                        <div class="fs-14 d-flex justify-content-center mt-3">
                                            <!-- Previous price -->
                                            <!-- price -->
                                            <div class="">
                                                <span class="fw-700 text-primary">$70.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aiz-pagination mt-4">
                        <nav>
                            <ul class="pagination">

                                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>





                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="/category/women-clothing-fashion?page=2">2</a></li>


                                <li class="page-item">
                                    <a class="page-link" href="/category/women-clothing-fashion?page=2" rel="next" aria-label="Next »">›</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection