@extends('theme.layout.layout')

@section('content')
    <div class="view view-main view-init ios-edges">
    <div class="page page-home page-with-subnavbar">
        @include('theme.layout.tabbar')

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
            @yield('content')
            <!-- end content -->

{{--        @desktop--}}
{{--        <h1>Desktop view</h1>--}}
{{--        @elsedesktop--}}
{{--        <h1>Mobile view</h1>--}}
{{--        @enddesktop--}}
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
                            <a href="/product-details/123456">
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

        </div>
    </div>
@endsection