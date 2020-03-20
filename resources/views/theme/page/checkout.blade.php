@extends('theme.layout.layout')
@section("title", "Thanh toán | Shop Mẹ Ỉn - Thời trang trẻ em")
@section('content')
    <div id="app" class="view view-reviews ios-edges">
        @include('theme.layout.tabbar')
        <div class="page">
            <div class="navbar navbar-page">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="#" class="panel-open">
                            <i class="fas fa-align-left"></i>
                        </a>
                    </div>
                    <div class="title">
                        Giỏ hàng
                    </div>
                    <div class="right">
                        <a href="/notifications/">
                            <i class="fas fa-bell"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end navbar -->
            <div class="page-content">
                <!-- content cart -->
                <div class="cart segments">
                    <checkout-component/>
                </div>
                <!-- end content cart -->
            </div>
        </div>
    </div>
@endsection
