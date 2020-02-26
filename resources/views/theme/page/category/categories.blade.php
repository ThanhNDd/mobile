@extends('theme.layout.layout')

@section('content')
    <div class="view view-reviews ios-edges">
        @include('theme.layout.tabbar')
        <div class="page">
            <div class="navbar navbar-page">
                <div class="navbar-inner">
                    <div class="left"></div>
                    <div class="title">
                        Danh mục
                    </div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="page-content">
                <!-- all categoreis -->
                <div class="all-categories">
                    <div class="container">
                        <div class="content">
                            <a href="{{ url("/categories/boys") }}">
                                <img src="{{ url('images/brand1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ url("/categories/girls") }}">
                                <img src="{{ url('images/brand2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ url("/categories/shoes") }}">
                                <img src="{{ url('images/brand3.png') }}" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <a href="{{ url("/categories/accessories") }}">
                                <img src="{{ url('images/brand1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end all categoreis -->
            </div>
        </div>
    </div>
@endsection
