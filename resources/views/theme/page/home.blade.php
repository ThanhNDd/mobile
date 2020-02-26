@extends('theme.layout.layout')
@section('title', 'Shop Mẹ Ỉn - Thời trang trẻ em cao cấp')
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
                <div class="page-content">
                    <!-- slider -->
                    <div class="slider">
                        <div class="swiper-container swiper1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="mask"></div>
                                        <img src="{{ url('/images/banner1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="mask"></div>
                                        <img src="{{ url('/images/banner3.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="mask"></div>
                                        <img src="{{ url('/images/banner2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination swiper-pagination1"></div>
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
                                        <a href="{{ url("/categories/girls") }}">
                                            <div class="icon">
                                                <i class="fas fa-tshirt"></i>
                                            </div>
                                            <span>Bé gái</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-25">
                                    <div class="content">
                                        <a href="{{ url("/categories/boys") }}">
                                            <div class="icon">
                                                <i class="fas fa-tshirt"></i>
                                            </div>
                                            <span>Bé trai</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-25">
                                    <div class="content">
                                        <a href="{{ url("/categories/shoes") }}">
                                            <div class="icon">
                                                <i class="fas fa-tools"></i>
                                            </div>
                                            <span>Giày dép</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-25">
                                    <div class="content">
                                        <a href="{{ url("/categories/accessories") }}">
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
                                @foreach ($products as $product)
                                    <div class="col-50">
                                        <div class="content content-shadow-product">
                                            <a href="{{ url("/product-details/".$product->id) }}">
                                                <div class="image">
                                                    <img src="{{ url($product->image ?? 'images/product2.jpg') }}" alt="">
                                                </div>
                                                <div class="text">
                                                    <p class="title-product title-product-center">{{ $product->name }}</p>
                                                    <p class="price">{{ $product->retail }}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                @endforeach

{{--                                <div class="col-50">--}}
{{--                                    <div class="content content-shadow-product">--}}
{{--                                        <a href="{{ url("/product-details/") }}">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="{{ url('images/product2.jpg') }}" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-50">--}}
{{--                                    <div class="content content-shadow-product">--}}
{{--                                        <a href="{{ url("/product-details/") }}">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="{{ url('images/product3.jpg') }}" alt="">--}}
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
{{--                                        <a href="{{ url("/product-details/") }}">--}}
{{--                                            <div class="image">--}}
{{--                                                <img src="{{ url('images/product4.jpg') }}" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="title-product title-product-center">Elegant Blue t-Shirt</p>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
                                <h3>Flash Sale
                                    <a href="{{ url("/sales") }}" class="see-all-link">Xem thêm &raquo;</a>
                                </h3>
                            </div>
                            <div class="swiper-container swiper2">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide" style="margin-right: 15px;">
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
                                    <div class="swiper-slide " style="margin-right: 15px;">
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
                            </div>
                        </div>
                        <!-- end flash sale -->

                        <!-- banner -->

                        <!-- end banner -->

                        <!-- popular product -->
                        <div class="popular-product product segments-bottom">
                            <div class="container">
                                <div class="section-title">
                                    <h3>Nổi bật</h3>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <div class="content content-shadow-product">
                                            <a href="http://localhost:8000/product-details/">
                                                <div class="image">
                                                    <img src="{{ url('images/product1.jpg') }}" alt="">
                                                </div>
                                                <div class="text">
                                                    <p class="title-product title-product-center">Elegant Blue
                                                        t-Shirt</p>
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
                                                    <p class="title-product title-product-center">Elegant Blue
                                                        t-Shirt</p>
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
                                                    <p class="title-product title-product-center">Elegant Blue
                                                        t-Shirt</p>
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
                                                    <p class="title-product title-product-center">Elegant Blue
                                                        t-Shirt</p>
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


                        <div class="blog segments-bottom">
                            <div class="container">
                                <div class="section-title">
                                    <h3>Blog
                                        <a href="http://localhost:8000/#" class="see-all-link">Xem thêm &raquo;</a>
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
                                                    <p class="title-product title-product-center">Elegant Blue
                                                        t-Shirt</p>
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
                                                    <p class="title-product title-product-center">Elegant Blue
                                                        t-Shirt</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
