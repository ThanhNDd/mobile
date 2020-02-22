@extends('theme.layout.layout')

@section('content')

@include('theme.layout.toolbar')

<div class="tabs">
    <div id="tab-home" class="tab tab-home tab-active">
        <!-- home -->

        <!-- navbar home -->
    @include('theme.layout.header')
    <!-- end navbar home -->

        <!-- sidebarbar or panel -->
        <div class="panel-backdrop"></div>

        <!-- end sidebarbar or panel -->
    @include('theme.layout.sidebar')

    <!-- content -->
    <!-- slider -->
        <div class="slider">
            <div class="swiper-container swiper-init swiper-container-horizontal" data-space-between="10"
                 data-slides-per-view="auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="mask"></div>
                            <img src="images/banner1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="mask"></div>
                            <img src="images/banner3.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="mask"></div>
                            <img src="images/banner2.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- end slider -->

        <!-- cateogries -->
        <div class="categories segments no-pd-b">
            <div class="container">
                <div class="section-title">
                    <h3>Danh mục</h3>
                </div>
                <div class="row">
                    <div class="col-25">
                        <div class="content">
                            <a href="/categories-details/">
                                <div class="icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <span>Bé gái</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-25">
                        <div class="content">
                            <a href="/categories-details/">
                                <div class="icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <span>Bé trai</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-25">
                        <div class="content">
                            <a href="/categories-details/">
                                <div class="icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <span>Giày dép</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-25">
                        <div class="content">
                            <a href="/categories-details/">
                                <div class="icon">
                                    <i class="fas fa-hat-cowboy-side"></i>
                                </div>
                                <span>Phụ kiện</span>
                            </a>
                        </div>
                    </div>
                    {{--<div class="col-20">
                        <div class="content all-categories-link">
                            <a href="/all-categories/">
                                <div class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                                <span>Xem thêm</span>
                            </a>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
        <!-- end cateogries -->

        <!-- latest product -->
        <div class="latest-product segments no-pd-b">
            <div class="container">
                <div class="section-title">
                    <h3>Mới nhất</h3>
                </div>
                <div class="row">
                    <div class="col-50">
                        <div class="content content-shadow-product">
                            <a href="/product-details/">
                                <div class="image">
                                    <img src="images/product1.png" alt="product">
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
                                    <img src="images/product2.png" alt="product">
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
                                    <img src="images/product3.png" alt="product">
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
                                    <img src="images/product4.png" alt="product">
                                </div>
                                <div class="text">
                                    <p class="title-product title-product-center">Elegant Blue t-Shirt</p>
                                    <p class="price">$80.00</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="#" class="view-more">Xem thêm 12 sản phẩm <i class="fas fa-caret-down"></i></a>
                </div>
            </div>
        </div>
        <!-- end latest product -->

        <!-- flash sale -->
        <div class="flash-sale segments no-pd-b">
            <div class="container">
                <div class="section-title">
                    <h3>Flash Sale</h3>
                </div>
                <div data-space-between="15" data-slides-per-view="auto" class="swiper-container swiper-init">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product1.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product2.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product3.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product4.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end flash sale -->

        <!-- banner -->
        {{--<div class="banner segments-bottom">
            <div class="container">
                <div class="content-image">
                    <img src="images/banners.jpg" alt="">
                </div>
            </div>
        </div>--}}
        <!-- end banner -->

        <!-- popular product -->
        <div class="popular-product product segments-bottom">
            <div class="container">
                <div class="section-title">
                    <h3>Nổi bật
                        <a href="#" class="see-all-link">Xem thêm</a>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-50">
                        <div class="content content-shadow-product">
                            <a href="/product-details/">
                                <div class="image">
                                    <img src="images/product1.png" alt="product">
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
                                    <img src="images/product2.png" alt="product">
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
                                    <img src="images/product3.png" alt="product">
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
                                    <img src="images/product4.png" alt="product">
                                </div>
                                <div class="text">
                                    <p class="title-product title-product-center">Elegant Blue t-Shirt</p>
                                    <p class="price">$80.00</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="#" class="view-more">Xem thêm 30 sản phẩm <i class="fas fa-caret-down"></i></a>
                </div>
            </div>
        </div>
        <!-- end popular product -->

        {{--women baby--}}
        <div class="flash-sale segments no-pd-b">
            <div class="container">
                <div class="section-title">
                    <h3>Bé gái <a href="#" class="see-all-link">Xem thêm</a></h3>
                </div>
                <div data-space-between="15" data-slides-per-view="auto" class="swiper-container swiper-init">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product1.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product2.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product3.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product4.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--end women babay--}}

        {{--men baby--}}
        <div class="flash-sale segments no-pd-b">
            <div class="container">
                <div class="section-title">
                    <h3>Bé trai <a href="#" class="see-all-link">Xem thêm</a></h3>
                </div>
                <div data-space-between="15" data-slides-per-view="auto" class="swiper-container swiper-init">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product1.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product2.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product3.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product4.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--end men babay--}}

        {{--shoes baby--}}
        <div class="flash-sale segments no-pd-b">
            <div class="container">
                <div class="section-title">
                    <h3>Giày dép <a href="#" class="see-all-link">Xem thêm</a></h3>
                </div>
                <div data-space-between="15" data-slides-per-view="auto" class="swiper-container swiper-init">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product1.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product2.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product3.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product4.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--end shoes babay--}}

        {{--accessories baby--}}
        <div class="flash-sale segments no-pd-b">
            <div class="container">
                <div class="section-title">
                    <h3>Phụ kiện xinh <a href="#" class="see-all-link">Xem thêm</a></h3>
                </div>
                <div data-space-between="15" data-slides-per-view="auto" class="swiper-container swiper-init">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product1.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product2.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product3.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product4.png" alt="flash-sale">
                                    </div>
                                    <div class="text">
                                        <p>7 sold</p>
                                        <span class="notifi-line"></span>
                                        <p class="price">$49.00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--end accessories babay--}}
        <!-- end home -->
    </div>
    <div id="tab-wishlist" class="tab tab-wishlist">
        <!-- wishlist -->

        <!-- navbar -->
        <div class="navbar navbar-page">
            <div class="navbar-inner">
                <div class="left"></div>
                <div class="title">
                    Wishlist
                </div>
                <div class="right"></div>
            </div>
        </div>
        <!-- end navbar -->

        <div class="wishlists segments">
            <div class="container">
                <div class="row">
                    <div class="col-50">
                        <div class="content content-shadow-product">
                            <a href="/product-details/">
                                <div class="love-button">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="image">
                                    <img src="images/product1.png" alt="product">
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
                                <div class="love-button">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="image">
                                    <img src="images/product2.png" alt="product">
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
                                <div class="love-button">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="image">
                                    <img src="images/product3.png" alt="product">
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
                                <div class="love-button">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="image">
                                    <img src="images/product4.png" alt="product">
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
                                <div class="love-button">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="image">
                                    <img src="images/product5.png" alt="product">
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
                                <div class="love-button">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="image">
                                    <img src="images/product6.png" alt="product">
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

        <!-- end wishlist -->
    </div>
    <div id="tab-brand" class="page-content tab">
        <!-- official brand -->

        <!-- navbar -->
        <div class="navbar navbar-page">
            <div class="navbar-inner">
                <div class="left"></div>
                <div class="title">
                    Official Brand
                </div>
                <div class="right"></div>
            </div>
        </div>
        <!-- end navbar -->

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

            <!-- popular brand -->
            <div class="popular-brand segments-bottom">
                <div class="container">
                    <div class="section-title">
                        <h3>Populars Brand <a href="#" class="see-all-link">Xem thêm</a></h3>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <div class="content">
                                <a href="#"><img src="images/trip.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="#"><img src="images/wobag.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="#"><img src="images/john.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="#"><img src="images/alya.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <div class="content">
                                <a href="#"><img src="images/green.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="#"><img src="images/zona.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="#"><img src="images/beauty.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="#"><img src="images/fitbro.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end popular brand -->

            <!-- banner -->
            <div class="banner segments-bottom">
                <div class="container">
                    <div class="content-image">
                        <img src="images/banners.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- end banner -->

            <!-- product brand -->
            <div class="product-brand segments-bottom product">
                <div class="container">
                    <div class="section-title">
                        <h3>All Product Brands <a href="#" class="see-all-link">Xem thêm</a></h3>
                    </div>
                    <div class="row">
                        <div class="col-50">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <div class="image">
                                        <img src="images/product1.png" alt="product">
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
                                        <img src="images/product2.png" alt="product">
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
                                        <img src="images/product3.png" alt="product">
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
                                        <img src="images/product4.png" alt="product">
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
                                        <img src="images/product5.png" alt="product">
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
                                        <img src="images/product6.png" alt="product">
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

        </div>
        <!-- end official brand -->
    </div>
    <div id="tab-cart" class="page-content tab">
        <!-- cart -->

        <!-- navbar -->
        <div class="navbar navbar-page">
            <div class="navbar-inner">
                <div class="left"></div>
                <div class="title">
                    Shopping Cart
                </div>
                <div class="right"></div>
            </div>
        </div>
        <!-- end navbar -->

        <!-- content cart -->
        <div class="cart segments">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-10">
                            <div class="content-checkbox">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <i class="icon-checkbox"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="content-image">
                                <img src="images/product1.png" alt="">
                            </div>
                        </div>
                        <div class="col-40">
                            <div class="content-text">
                                <p class="title-product">The latest brand</p>
                                <p class="price">$49.00</p>
                            </div>
                        </div>
                        <div class="col-30 align-self-center">
                            <div class="number-goods">
                                <div class="stepper stepper-small stepper-init">
                                    <div class="stepper-button-minus"></div>
                                    <div class="stepper-input-wrap">
                                        <input type="text" value="0" readonly>
                                    </div>
                                    <div class="stepper-button-plus"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="row">
                        <div class="col-10">
                            <div class="content-checkbox">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <i class="icon-checkbox"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="content-image">
                                <img src="images/product1.png" alt="">
                            </div>
                        </div>
                        <div class="col-40">
                            <div class="content-text">
                                <p class="title-product">The latest brand</p>
                                <p class="price">$49.00</p>
                            </div>
                        </div>
                        <div class="col-30 align-self-center">
                            <div class="number-goods">
                                <div class="stepper stepper-small stepper-init">
                                    <div class="stepper-button-minus"></div>
                                    <div class="stepper-input-wrap">
                                        <input type="text" value="0" readonly>
                                    </div>
                                    <div class="stepper-button-plus"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="row">
                        <div class="col-10">
                            <div class="content-checkbox">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <i class="icon-checkbox"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="content-image">
                                <img src="images/product1.png" alt="">
                            </div>
                        </div>
                        <div class="col-40">
                            <div class="content-text">
                                <p class="title-product">The latest brand</p>
                                <p class="price">$49.00</p>
                            </div>
                        </div>
                        <div class="col-30 align-self-center">
                            <div class="number-goods">
                                <div class="stepper stepper-small stepper-init">
                                    <div class="stepper-button-minus"></div>
                                    <div class="stepper-input-wrap">
                                        <input type="text" value="0" readonly>
                                    </div>
                                    <div class="stepper-button-plus"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="row">
                        <div class="col-10">
                            <div class="content-checkbox">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <i class="icon-checkbox"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="content-image">
                                <img src="images/product1.png" alt="">
                            </div>
                        </div>
                        <div class="col-40">
                            <div class="content-text">
                                <p class="title-product">The latest brand</p>
                                <p class="price">$49.00</p>
                            </div>
                        </div>
                        <div class="col-30 align-self-center">
                            <div class="number-goods">
                                <div class="stepper stepper-small stepper-init">
                                    <div class="stepper-button-minus"></div>
                                    <div class="stepper-input-wrap">
                                        <input type="text" value="0" readonly>
                                    </div>
                                    <div class="stepper-button-plus"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="row">
                        <div class="col-10">
                            <div class="content-checkbox">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <i class="icon-checkbox"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-20">
                            <div class="content-image">
                                <img src="images/product1.png" alt="">
                            </div>
                        </div>
                        <div class="col-40">
                            <div class="content-text">
                                <p class="title-product">The latest brand</p>
                                <p class="price">$49.00</p>
                            </div>
                        </div>
                        <div class="col-30 align-self-center">
                            <div class="number-goods">
                                <div class="stepper stepper-small stepper-init">
                                    <div class="stepper-button-minus"></div>
                                    <div class="stepper-input-wrap">
                                        <input type="text" value="0" readonly>
                                    </div>
                                    <div class="stepper-button-plus"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- divider -->
            <div class="divider-space-content"></div>
            <!-- end divider -->

            <!-- wrap total cart -->
            <div class="wrap-total-cart">
                <div class="container">
                    <div class="content-total">
                        <ul>
                            <li>
                                <p>Total</p>
                            </li>
                            <li>
                                <h6>$150</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="content-button">
                        <a href="/checkout/" class="button primary-button"><i
                                    class="fas fa-shopping-bag"></i>Checkout</a>
                    </div>
                </div>
            </div>
            <!-- end wrap total cart -->
        </div>
        <!-- end content cart -->

        <!-- end cart -->
    </div>
    <div id="tab-account" class="page-content tab">
        <!-- account buyer -->

        <!-- content account -->
        <div class="account-buyer segments">
            <div class="container">
                <div class="header-account">
                    <img src="images/user-buyer6.png" alt="">
                    <div class="title-name">
                        <h5>Fardanz Track</h5>
                        <p><i class="fas fa-map-marker-alt"></i>Melbourne</p>
                    </div>
                </div>
            </div>

            <!-- divider space -->
            <div class="divider-space-content"></div>
            <!-- end divider space -->

            <div class="account-menu">
                <div class="list media-list">
                    <ul>
                        <li>
                            <a href="/wishlist/" class="item-link item-content">
                                <div class="item-media">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">Wishlist</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/notification/" class="item-link item-content">
                                <div class="item-media">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">Notification</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/transaction/" class="item-link item-content">
                                <div class="item-media">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">Transaction</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/settings/" class="item-link item-content">
                                <div class="item-media">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">Settings</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/faq/" class="item-link item-content">
                                <div class="item-media">
                                    <i class="fas fa-question"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">Help Center</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item-link item-content">
                                <div class="item-media">
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Logout</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end  content account -->

        <!-- end account buyer -->
    </div>
</div>

@endsection