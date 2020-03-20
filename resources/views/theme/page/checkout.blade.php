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
                        Xác nhận thanh toán
                    </div>
                    <div class="right">
                        <a href="{{ url('/notifications') }}">
                            <i class="fas fa-bell"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end navbar -->
            <checkout-component/>

{{--            <div class="page-content">--}}
{{--                <!-- content cart -->--}}
{{--                <div class="cart segments">--}}
{{--                    <h5>Danh sách sản phẩm</h5>--}}
{{--                    <div class="divider-space-content"></div>--}}
{{--                    <checkout-component/>--}}
{{--                </div>--}}
{{--                <div class="cart segments">--}}
{{--                    <h5>Thông tin</h5>--}}
{{--                    <div class="divider-space-content"></div>--}}

{{--                </div>--}}
{{--                <div class="content-button">--}}
{{--                    <a href="{{ url('/process-checkout') }}" class="button primary-button" style="width: 60%;margin: auto;">--}}
{{--                        <i class="fas fa-shopping-bag"></i>Thực hiện thanh toán--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <!-- end content cart -->--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
