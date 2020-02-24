@extends('theme.layout.layout')

@section('content')
    <div class="page page-home page-with-subnavbar">
    <div class="tabs">
        <div id="tab-home" class="tab tab-home tab-active">
            <!-- home -->
            <!-- navbar home -->
            <div class="navbar navbar-home">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="{{ url("/") }}" class="panel-open">
                            <i class="fas fa-align-left"></i>
                        </a>
                    </div>
                    <div class="title" style="left: 0px;">
                        <form class="searchbar searchbar-init" data-search-container=".search-list"
                              data-search-in=".item-title">
                            <div class="searchbar-inner">
                                <div class="searchbar-input-wrap">
                                    <input type="search" placeholder="Bạn muốn tìm gì?">
                                    <i class="searchbar-icon"></i>
                                    <span class="input-clear-button"></span>
                                </div>
                                <span class="searchbar-disable-button">Cancel</span>
                            </div>
                        </form>
                    </div>
                    <div class="right">
                        <a href="{{ url("/notification/") }}">
                            <i class="fas fa-bell"></i>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>            <!-- end navbar home -->
            <!-- sidebarbar or panel -->
            <div class="panel-backdrop"></div>

            <!-- end sidebarbar or panel -->
            <div class="panel panel-left panel-cover sidebar">
                <div class="user-view">
                    <img src="{{ url('/images/user-buyer6.png') }}" alt="">
                    <div class="title-name">
                        <h5>Fardanz Track</h5>
                        <p><i class="fas fa-map-marker-alt"></i> Melbourne</p>
                    </div>
                </div>
                <div class="list media-list">
                    <ul>
                        <li>
                            <a href="{{ url("/wishlist/") }}" class="item-link panel-close item-content">
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
                            <a href="{{ url("/notification/") }}" class="item-link panel-close item-content">
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
                            <a href="{{ url("/transaction/") }}" class="item-link panel-close item-content">
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
                            <a href="{{ url("/settings/") }}" class="item-link panel-close item-content">
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
                            <a href="{{ url("/faq/") }}" class="item-link panel-close item-content">
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
                            <a href="{{ url("/logout") }}" class="item-link panel-close item-content">
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
            <!-- slider -->
            <div class="slider">
                <div class="swiper-container swiper-init swiper-container-horizontal swiper-container-initialized"
                     data-space-between="10" data-slides-per-view="auto">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="margin-right: 10px;">
                            <div class="content">
                                <div class="mask"></div>
                                <img src="{{ url('/images/banner1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="margin-right: 10px;">
                            <div class="content">
                                <div class="mask"></div>
                                <img src="{{ url('/images/banner3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide" style="margin-right: 10px;">
                            <div class="content">
                                <div class="mask"></div>
                                <img src="{{ url('/images/banner2.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
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
                                <a href="{{ url("/categories-details/") }}">
                                    <div class="icon">
                                        <i class="fas fa-tshirt"></i>
                                    </div>
                                    <span>Bé gái</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="{{ url("/categories-details/") }}">
                                    <div class="icon">
                                        <i class="fas fa-tshirt"></i>
                                    </div>
                                    <span>Bé trai</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="{{ url("/categories-details/") }}">
                                    <div class="icon">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <span>Giày dép</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="content">
                                <a href="{{ url("/categories-details/") }}">
                                    <div class="icon">
                                        <i class="fas fa-hat-cowboy-side"></i>
                                    </div>
                                    <span>Phụ kiện</span>
                                </a>
                            </div>
                        </div>

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
                                <a href="{{ url("/product-details/123456") }}">
                                    <div class="image">
                                        <img src="{{ url('images/product1.jpg') }}" alt="">
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
                                <a href="{{ url("/product-details/") }}">
                                    <div class="image">
                                        <img src="{{ url('images/product2.jpg') }}" alt="">
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
                                <a href="{{ url("/product-details/") }}">
                                    <div class="image">
                                        <img src="{{ url('images/product3.jpg') }}" alt="">
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
                                <a href="{{ url("/product-details/") }}">
                                    <div class="image">
                                        <img src="{{ url('images/product4.jpg') }}" alt="">
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
                        <a href="#" class="view-more">Xem thêm 12 sản phẩm <i
                                    class="fas fa-caret-down"></i></a>
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
                    <div data-space-between="15" data-slides-per-view="auto"
                         class="swiper-container swiper-init swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product1.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product2.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product3.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
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
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
            <!-- end flash sale -->

            <!-- banner -->

            <!-- end banner -->

            <!-- popular product -->
            <div class="popular-product product segments-bottom">
                <div class="container">
                    <div class="section-title">
                        <h3>Nổi bật
                            <a href="http://localhost:8000/#" class="see-all-link">Xem thêm</a>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-50">
                            <div class="content content-shadow-product">
                                <a href="http://localhost:8000/product-details/">
                                    <div class="image">
                                        <img src="{{ url('images/product1.jpg') }}" alt="">
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
                                <a href="http://localhost:8000/product-details/">
                                    <div class="image">
                                        <img src="{{ url('images/product2.jpg') }}" alt="">
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
                                <a href="http://localhost:8000/product-details/">
                                    <div class="image">
                                        <img src="{{ url('images/product3.jpg') }}" alt="">
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
                                <a href="http://localhost:8000/product-details/">
                                    <div class="image">
                                        <img src="{{ url('images/product4.jpg') }}" alt="">
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
                        <a href="http://localhost:8000/#" class="view-more">Xem thêm 30 sản phẩm <i
                                    class="fas fa-caret-down"></i></a>
                    </div>
                </div>
            </div>
            <!-- end popular product -->


            <div class="flash-sale segments no-pd-b">
                <div class="container">
                    <div class="section-title">
                        <h3>Bé gái <a href="http://localhost:8000/#" class="see-all-link">Xem thêm</a></h3>
                    </div>
                    <div data-space-between="15" data-slides-per-view="auto"
                         class="swiper-container swiper-init swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product1.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product2.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product3.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
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
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
            <div class="flash-sale segments no-pd-b">
                <div class="container">
                    <div class="section-title">
                        <h3>Bé trai <a href="http://localhost:8000/#" class="see-all-link">Xem thêm</a></h3>
                    </div>
                    <div data-space-between="15" data-slides-per-view="auto"
                         class="swiper-container swiper-init swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
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
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>


            <div class="flash-sale segments no-pd-b">
                <div class="container">
                    <div class="section-title">
                        <h3>Giày dép <a href="http://localhost:8000/#" class="see-all-link">Xem thêm</a></h3>
                    </div>
                    <div data-space-between="15" data-slides-per-view="auto"
                         class="swiper-container swiper-init swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
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
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>


            <div class="flash-sale segments no-pd-b">
                <div class="container">
                    <div class="section-title">
                        <h3>Phụ kiện xinh <a href="http://localhost:8000/#" class="see-all-link">Xem thêm</a></h3>
                    </div>
                    <div data-space-between="15" data-slides-per-view="auto"
                         class="swiper-container swiper-init swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>7 sold</p>
                                            <span class="notifi-line"></span>
                                            <p class="price">$49.00</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="margin-right: 15px;">
                                <div class="content content-shadow-product">
                                    <a href="http://localhost:8000/product-details/">
                                        <div class="image">
                                            <img src="{{ url('images/product4.jpg') }}" alt="">
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
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
            <!-- end home -->
        </div>
    </div>
    </div>
@endsection