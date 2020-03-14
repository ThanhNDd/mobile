@extends('theme.layout.layout')
@section('title', 'Shop Mẹ Ỉn - Thời trang trẻ em cao cấp')
@section('content')
    <div id="app" class="view view-main view-init ios-edges">
        @include('theme.layout.header')
        @include('theme.layout.breadcrum')
        <div class="page">
            @include('theme.layout.tabbar')
            <div class="tabs">
            <div class="page-content">
                <div class="official-brand">
                    <!-- slider brand -->
                    <div class="slider-brand segments-bottom">
                        <div class="container">
                            <div class="swiper-container swiper-init swiper-container-horizontal">
                                <div class="swiper-pagination"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="mask"></div>
                                            <img src="{{ url('images/brand1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="mask"></div>
                                            <img src="{{ url('images/brand2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="mask"></div>
                                            <img src="{{ url('images/brand3.png') }}" alt="">
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
                            <div class="row">
                                <div class="col-50">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="image">
                                                <img src="{{ url('images/product1.png') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>
                                                <p class="price">$80.00</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-50">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="image">
                                                <img src="{{ url('images/product2.png') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>
                                                <p class="price">$80.00</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-50">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="image">
                                                <img src="{{ url('images/product3.png') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>
                                                <p class="price">$80.00</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-50">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="image">
                                                <img src="{{ url('images/product4.png') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>
                                                <p class="price">$80.00</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-50">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="image">
                                                <img src="{{ url('images/product5.png') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>
                                                <p class="price">$80.00</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-50">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="image">
                                                <img src="{{ url('images/product6.png') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>
                                                <p class="price">$80.00</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end product brand -->
                    <div class="row justify-content-center pb-4">
                        <a href="#" class="view-more">Xem thêm 12 khuyến mãi<i
                                class="fas fa-caret-down"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- end description sheet modal -->
@endsection
