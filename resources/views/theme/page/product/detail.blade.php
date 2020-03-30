@extends('theme.layout.layout')

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
                                <div class="slider-p-details">
                                    <div class="swiper-container swiper-detail-product">
                                        <div class="swiper-pagination"></div>
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
                                    <div class="list">
                                        <attributes-component/>
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
                                <relate-product-component/>
                            </div>
                            <!-- product review -->
                            <div class="product-review segments">
                                <div class="section-title">
                                    <h3>Đánh giá sản phẩm
                                        <a href="http://localhost:8000/#"
                                           class="see-all-link btn btn-sm btn-warning"
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
                            <!-- end product review -->
                            <!-- divider -->
                            <div class="divider-line-full"></div>
                            <!-- end divider -->
                            <!-- recommended for you -->
                            <div class="recommended-you">
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
        <div class="sheet-modal description-sheet">
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
    </div>
@endsection

@section("script")
    <script>
        const detail = new Vue({
            el: '#detail',
            data() {
                return {
                    products: [],
                    type: ''
                }
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
        new Swiper('.swiper-relate-product',{
            slidesPerView: 3
        });
    </script>
@endsection
