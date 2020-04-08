@extends('theme.layout.layout')
@section('title', $cat_title.' | Shop Mẹ Ỉn - Thời trang trẻ em cao cấp')
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
                    <div class="product-brand segments-bottom product">
                        <div class="container">
                            <category-component/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
