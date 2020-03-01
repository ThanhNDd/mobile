@extends('theme.layout.layout')

@section('content')
    <div class="view view-reviews ios-edges">
        @include('theme.layout.tabbar')
        <div class="page">
            <!-- navbar -->
            <div class="navbar navbar-page">
                <div class="navbar-inner">
                    <div class="left"></div>
                    <div class="title">
                        Khuyến mãi
                    </div>
                    <div class="right"></div>
                </div>
            </div>
            <!-- end navbar -->
            <div class="page-content">
                <div class="official-brand">
                    <!-- slider brand -->
                    <div class="slider-brand segments-bottom">
                        <div class="container">
                            <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10"
                                 class="swiper-container swiper-init swiper-container-horizontal">
                                <div class="swiper-pagination"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="mask"></div>
                                            <img src="images/brand1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="mask"></div>
                                            <img src="images/brand2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="mask"></div>
                                            <img src="images/brand3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slider brand -->

                    <!-- product brand -->
                    <div class="product-brand segments-bottom product">
                        <div class="container">
                            <sale-component></sale-component>
{{--                            <div class="row">--}}
{{--                                <div class="col-50">--}}
{{--                                    <div class="content content-shadow-product">--}}
{{--                                        <a href="/product-details/">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="images/product1.png" alt="product">--}}
{{--                                            </div>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-50">--}}
{{--                                    <div class="content content-shadow-product">--}}
{{--                                        <a href="/product-details/">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="images/product2.png" alt="product">--}}
{{--                                            </div>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-50">--}}
{{--                                    <div class="content content-shadow-product">--}}
{{--                                        <a href="/product-details/">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="images/product3.png" alt="product">--}}
{{--                                            </div>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-50">--}}
{{--                                    <div class="content content-shadow-product">--}}
{{--                                        <a href="/product-details/">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="images/product4.png" alt="product">--}}
{{--                                            </div>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-50">--}}
{{--                                    <div class="content content-shadow-product">--}}
{{--                                        <a href="/product-details/">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="images/product5.png" alt="product">--}}
{{--                                            </div>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-50">--}}
{{--                                    <div class="content content-shadow-product">--}}
{{--                                        <a href="/product-details/">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="images/product6.png" alt="product">--}}
{{--                                            </div>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <!-- end product brand -->
                    <div class="row justify-content-center pb-4">
                        <a href="#" class="view-more">Xem thêm 12 khuyến mãi<i
                                class="fas fa-caret-down"></i></a>
                    </div>
                </div>
            </div>
            <!-- end official brand -->
        </div>
    </div>
@endsection
