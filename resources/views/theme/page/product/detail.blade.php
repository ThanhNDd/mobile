@extends('theme.layout.layout')

@section('content')
    <div id="detail-product" class="page">
        <div class="view view-main view-init ios-edges">
            @include('theme.layout.header')
            @include('theme.layout.breadcrum')
            <div class="page-content">
                {{ $title ?? '' }}
                <div class="product-details segments">
                    <div class="container">
                        <!-- wrap content product details -->
                        <div class="wrapper-content">
                            <input type="hidden" id="product_id" ref="productId" value="{{$product->id}}">
                            <input type="hidden" id="cat_id" ref="catId" value="{{$product->category_id}}">
                            <div class="slider-p-details">
                                <div class="swiper-container swiper-detail-product">
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-wrapper">
                                        @foreach (json_decode($product->image) as $image)
                                            <div class="swiper-slide">
                                                <div class="content">
                                                    <div class="mask"></div>
                                                    <img src="{{ url($image->type == 'upload' ? 'https://admin.shopmein.vn/dist/uploads/'.$image->src : $image->src) }}" alt="">
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="swiper-pagination swiper-pagination-detail-product"></div>
                                </div>
                            </div>
                            <div class="wrap-title-product wrap-c-margin">
                                <h4>{{ $product->name }}</h4>
                                <p class="price">{{ number_format($product->retail).' đ' }}</p>
                            </div>
                            <div class="wrap-info">
                                <div class="list">
                                    <attributes-component></attributes-component>
                                </div>
                            </div>
                        </div>
                        <!-- related products -->
                        <div class="related-products segments no-pd-b">
                            <div class="section-title">
                                <h3>Sản phẩm tương tự
{{--                                    <a href="{{ url("/categories/boys") }}" class="see-all-link">Xem thêm &raquo;</a>--}}
                                </h3>
                            </div>
                            <relate-product-component></relate-product-component>
{{--                            <div class="swiper-container swiper-relate-product">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="content content-shadow-product">--}}
{{--                                            <img src="{{ url('images/related-product1.jpg') }}" alt="">--}}
{{--                                            <div class="text">--}}
{{--                                                <a href="#">--}}
{{--                                                    <p class="title-product">Original plain sweater - gray</p>--}}
{{--                                                </a>--}}
{{--                                                <p class="price">$55.00</p>--}}
{{--                                                <p class="location">New York</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="content content-shadow-product">--}}
{{--                                            <img src="{{ url('images/related-product2.jpg') }} " alt="">--}}
{{--                                            <div class="text">--}}
{{--                                                <a href="#">--}}
{{--                                                    <p class="title-product">Premium men's knit sweaters</p>--}}
{{--                                                </a>--}}
{{--                                                <p class="price">$75.00</p>--}}
{{--                                                <p class="location">New York</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="content content-shadow-product">--}}
{{--                                            <img src="{{ url('images/related-product3.jpg') }}" alt="">--}}
{{--                                            <div class="text">--}}
{{--                                                <a href="#">--}}
{{--                                                    <p class="title-product">Plain black men's shirt</p>--}}
{{--                                                </a>--}}
{{--                                                <p class="price">$80.00</p>--}}
{{--                                                <p class="location">New York</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="content content-shadow-product">--}}
{{--                                            <img src="{{ url('images/related-product4.jpg') }}" alt="">--}}
{{--                                            <div class="text">--}}
{{--                                                <a href="#">--}}
{{--                                                    <p class="title-product">Premium soft plain shirt</p>--}}
{{--                                                </a>--}}
{{--                                                <p class="price">$60.00</p>--}}
{{--                                                <p class="location">New York</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="content content-shadow-product">--}}
{{--                                            <img src="{{ url('images/related-product5.jpg') }}" alt="">--}}
{{--                                            <div class="text">--}}
{{--                                                <a href="#">--}}
{{--                                                    <p class="title-product">Mountain jacket - waterproof</p>--}}
{{--                                                </a>--}}
{{--                                                <p class="price">$105.99</p>--}}
{{--                                                <p class="location">New York</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <!-- product review -->
                        <div class="product-review segments">
                            <div class="container">
                                <div class="section-title">
                                    <h3>Đánh giá sản phẩm
                                        <a href="http://localhost:8000/#" class="see-all-link btn btn-sm btn-warning"
                                           style="color: #333;">
                                            <i class="fas fa-pen-nib"></i> Viết nhận xét
                                        </a>
                                    </h3>
                                </div>
                                <div class="content">
                                    <img src="{{ url('images/user-buyer2.png') }}" alt="">
                                    <div class="text">
                                        <h6>Rashaad</h6>
                                        <ul class="rate-product">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star-half-alt"></i></li>
                                        </ul>
                                        <p class="date">3 min ago</p>
                                        <i class="fas fa-thumbs-up like-button"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                                            explicabo.</p>
                                    </div>
                                </div>

                                <!-- divider -->
                                <div class="divider-line-half"></div>
                                <!-- end divider -->

                                <div class="content">
                                    <img src="{{ url('images/user-buyer1.png') }}" alt="">
                                    <div class="text">
                                        <h6>Aamir</h6>
                                        <ul class="rate-product">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star-half-alt"></i></li>
                                        </ul>
                                        <p class="date">3 min ago</p>
                                        <i class="fas fa-thumbs-up like-button"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                                            explicabo.</p>
                                    </div>
                                </div>

                                <!-- divider -->
                                <div class="divider-line-half"></div>
                                <!-- end divider -->

                                <div class="content">
                                    <img src="{{ url('images/user-buyer3.png') }}" alt="">
                                    <div class="text">
                                        <h6>Kemal</h6>
                                        <ul class="rate-product">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star-half-alt"></i></li>
                                        </ul>
                                        <p class="date">3 min ago</p>
                                        <i class="fas fa-thumbs-up like-button"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                                            explicabo.</p>
                                    </div>
                                </div>
                                <!-- view all reviews -->
                                <div class="view-all-review">
                                    <a href="/all-reviews/123456">Xem tất cả</a>
                                </div>
                                <!-- end view all reviews -->
                            </div>
                        </div>
                        <!-- end product review -->
                        <!-- divider -->
                        <div class="divider-line-full"></div>
                        <!-- end divider -->
                        <!-- recommended for you -->
                        <div class="recommended-you">
                            <div class="container">
                                <div class="section-title">
                                    <h3>Có thể bạn quan tâm</h3>
                                </div>
                                <div class="swiper-container swiper-recommended-product">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="content content-shadow-product">
                                                <img src="{{ url('images/product1.jpg') }}" alt="">
                                                <div class="text">
                                                    <a href="#">
                                                        <p class="title-product">Sweater with triangle collar</p>
                                                    </a>
                                                    <p class="price">$75.00</p>
                                                    <p class="location">New York</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content content-shadow-product">
                                                <img src="{{ url('images/product2.jpg') }}" alt="">
                                                <div class="text">
                                                    <a href="#">
                                                        <p class="title-product">New slim smartwatch</p>
                                                    </a>
                                                    <p class="price">$49.00</p>
                                                    <p class="location">New York</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content content-shadow-product">
                                                <img src="{{ url('images/product3.jpg') }}" alt="">
                                                <div class="text">
                                                    <a href="#">
                                                        <p class="title-product">Army jacket premium</p>
                                                    </a>
                                                    <p class="price">$99.99</p>
                                                    <p class="location">New York</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="content content-shadow-product">
                                                <img src="{{ url('images/product5.jpg') }}" alt="">
                                                <div class="text">
                                                    <a href="#">
                                                        <p class="title-product">Black premium shirt plain</p>
                                                    </a>
                                                    <p class="price">$45.00</p>
                                                    <p class="location">New York</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end recommended for you -->
                    </div>
                </div>
                <!-- end product details -->
                <!-- action product details -->
                <div class="wrap-action-product-d">
                    <div class="container">
                        <div class="row">
                            <div class="col-20">
                                <div class="content-message">
                                    <a href="#"><i class="fas fa-comment"></i></a>
                                </div>
                            </div>
                            <div class="col-40">
                                <div class="content-button">
                                    <a href="#" class="button secondary-button">
                                        <i class="fas fa-cart-arrow-down"></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="col-40">
                                <div class="content-button">
                                    <a href="#" class="button secondary-button"><i class="fas fa-cart-plus"></i>Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end action product details -->
            </div>
        </div>
    </div>
    <!-- description sheet modal -->
    <div class="sheet-modal description-sheet">
        <div class="toolbar">
            <div class="toolbar-inner">
                <div class="left">Mô tả sản phẩm</div>
                <div class="right">
                    <a href="#" class="link sheet-close"><i class="fas fa-check"></i></a>
                </div>
            </div>
        </div>
        <div class="sheet-modal-inner segments">
            <div class="page-content">
                <div class="container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere
                        eveniet totam optio eaque nemo, autem doloremque in impedit sequi
                        deleniti!</p>
                    <!-- divider space for text -->
                    <div class="divider-space-text"></div>
                    <!-- end divider space for text -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur,
                        laudantium.</p>
                    <!-- divider space for text -->
                    <div class="divider-space-text"></div>
                    <!-- end divider space for text -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis
                        odit accusamus laborum nemo magnam suscipit!</p>
                    <!-- divider space for text -->
                    <div class="divider-space-text"></div>
                    <!-- end divider space for text -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum
                        quidem expedita nihil molestias quibusdam dolores at sunt obcaecati
                        repudiandae nemo.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end description sheet modal -->
@endsection
