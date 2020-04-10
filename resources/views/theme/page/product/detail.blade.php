@extends('theme.layout.layout')
@section('title', $prod_title.' | Shop Mẹ Ỉn - Thời trang trẻ em cao cấp')
@section('content')
    <div id="app"></div>
    <div id="detail" xmlns:v-on="http://www.w3.org/1999/xhtml">
        <div id="detail-product" class="page">
            <div class="view view-main view-init ios-edges">
                @include('theme.layout.header')
                @include('theme.layout.breadcrum')
                <div class="page-content">
                    {{--                {{ $title ?? '' }}--}}
                    <div class="product-details segments">
                        <div class="container">
                            <!-- wrap content product details -->
                            <div class="wrapper-content">
                                <input type="hidden" id="cat_id" ref="categoryId" value="{{$product->category_id}}">
                                <input type="hidden" id="product_id" ref="productId" value="{{$product->id}}">
                                <input type="hidden" id="type_id" ref="typeId" value="{{$product->type}}">
                                <div class="slider-p-details">
                                    <div class="swiper-container swiper-detail-product">
{{--                                        <div class="swiper-pagination"></div>--}}
                                        <div class="swiper-wrapper">
                                            @foreach (json_decode($product->image) as $image)
                                                <div class="swiper-slide">
                                                    <div class="content">
                                                        <div class="mask"></div>
                                                        <img
                                                            src="{{ url($image->type == 'upload' ? 'https://admin.shopmein.vn/dist/uploads/'.$image->src : $image->src) }}"
                                                            alt="">
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
                                    <attributes-component :description="'{{ $product->description }}'"/>
                                </div>
                            </div>
                            <!-- related products -->
{{--                            <div class="related-products segments no-pd-b">--}}
{{--                                <div class="section-title">--}}
{{--                                    <h3>Sản phẩm tương tự--}}
{{--                                        --}}{{--                                    <a href="{{ url("/categories/boys") }}" class="see-all-link">Xem thêm &raquo;</a>--}}
{{--                                    </h3>--}}
{{--                                </div>--}}
{{--                                <relate-product-component/>--}}
{{--                            </div>--}}
                            <div>
                                <relate-product-component/>
                            </div>
                            <!-- product review -->
                            <div>
                                <reviews-component/>
                            </div>

                            <!-- end product review -->
                            <!-- divider -->
                            <div class="divider-line-full"></div>
                            <!-- end divider -->
                            <!-- recommended for you -->
                            <div>
                                <recommend-product-component/>
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
                                @foreach (json_decode($product->image) as $image)
                                    @if ($loop->first)
                                <div class="col-40">
                                    <div class="content-button">
                                        <a href="#" class="button secondary-button"
                                           v-on:click="addToCart('{{$product->id}}', '{{$product->name}}', '{{$product->retail}}', '{{ url($image->type == 'upload' ? 'https://admin.shopmein.vn/dist/uploads/'.$image->src : $image->src) }}')">
                                            <i class="fas fa-cart-arrow-down"></i> Thêm vào giỏ</a>
                                    </div>
                                </div>
                                <div class="col-40">
                                    <div class="content-button">
                                        <a href="#" class="button secondary-button"
                                           v-on:click="buyNow('{{$product->id}}', '{{$product->name}}', '{{$product->retail}}', '{{ url($image->type == 'upload' ? 'https://admin.shopmein.vn/dist/uploads/'.$image->src : $image->src) }}')">
                                            <i class="fas fa-cart-plus"></i> Mua ngay
                                        </a>
                                    </div>
                                </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end action product details -->
                </div>
            </div>
        </div>
        <!-- description sheet modal -->
        <div class="sheet-modal detail-sheet">
            <div class="toolbar">
                <div class="toolbar-inner">
                    <div class="left">Bảng chọn size</div>
                    <div class="right">
                        <a href="#" class="link sheet-close"><i class="fas fa-check"></i></a>
                    </div>
                </div>
            </div>
            <div class="sheet-modal-inner segments">
                <div class="page-content">
                    <div class="container">
                        <h3 class="center">Bảng chọn size cho bé</h3>
                        <div class="table-responsive">
                            <h5>1. Size quần áo</h5>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tuổi</th>
                                    <th>Chiều cao (cm)</th>
                                    <th>Cân nặng (kg)</th>
                                    <th>Size</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Anna</td>
                                    <td>Pitt</td>
                                    <td>35</td>
                                    <td>New York</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <h5>2. Size giày dép</h5>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tuổi</th>
                                    <th>Chiều cao (cm)</th>
                                    <th>Cân nặng (kg)</th>
                                    <th>Size</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Anna</td>
                                    <td>Pitt</td>
                                    <td>35</td>
                                    <td>New York</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end description sheet modal -->
        <div class="sheet-modal rating-sheet">
            <div class="toolbar">
                <div class="toolbar-inner">
                    <div class="left">Viết nhận xét</div>
                    <div class="right">
                        <a href="#" class="link sheet-close"><i class="fas fa-check"></i></a>
                    </div>
                </div>
            </div>
            <div class="sheet-modal-inner segments">
                <div class="page-content" style="background: #fff;padding-bottom: 20px;">
                    <div class="container">
                        <form style="padding-top: 10px;">
                            <input id="ratings-hidden" name="rating" type="hidden">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Họ tên" id="fullname" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nhập số điện thoại" id="phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Nhập email" id="email">
                            </div>
                            <div class="form-group">
                                <textarea rows="3" class="form-control" placeholder="Nhập nội dung nhận xét" id="content"></textarea>
                            </div>
                            <div class="text-right">
                                <div class="float-left stars starrr" data-rating="0"></div>
                                <div class="float-right">
                                    <button type="button" class="btn btn-primary">Đồng ý</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script src="{!! asset('js/rating.js') !!}"></script>
    <script>
        const detail = new Vue({
            el: '#detail',
            data() {
                return {
                    products: [],
                    type: '',
                    description: ''
                }
            },
            mounted() {
                console.log('AskQuestionModal component mounted.')
            },
            methods: {
                addToCart: function (id, name, price, image) {
                    let color = document.querySelector('input[name=color]:checked');
                    if (color == null) {
                        this.$toast.top('Bạn chưa chọn màu');
                        return;
                    }
                    let size = document.querySelector('input[name=size]:checked');
                    if (size == null) {
                        this.$toast.top('Bạn chưa chọn size');
                        return;
                    }
                    this.products = [];
                    this.products.push({
                        "id": id,
                        "name": name,
                        "price": price,
                        "image": image,
                        "color": color.value,
                        "size": size.value,
                    });
                    this.storeInCart();
                },
                buyNow: function (id, name, price, image) {
                    this.type = "buyNow";
                    this.addToCart(id, name, price, image);
                },
                storeInCart: function () {
                    axios.post("/api/cart", {
                        body: this.products
                    }).then(response => {
                        this.$toast.top('Đã thêm vào giỏ hàng');
                        document.querySelector('.cart_number').innerHTML = '<span class="badge badge-danger">' + response.data.length + '</span>';
                        if(this.type === "buyNow") {
                            window.location.href =  window.location.protocol + '//' + window.location.hostname + ":" + window.location.port +  "/checkout";
                        }
                    })
                }
            }
        });
        new Swiper('.swiper-detail-product', {
            pagination: {
                el: '.swiper-pagination-detail-product',
                dynamicBullets: true,
                paginationClickable: true
            },
            autoplay: {
                delay: 5000,
            },
        });
        new Swiper('.swiper-relate-product',{
            // slidesPerView: 2
        });

    </script>
@endsection
