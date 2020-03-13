<template>
    <div class="wrapper-content">
        <div class="slider-p-details">
            <div class="swiper-container swiper-detail-product">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content">
                            <div class="mask"></div>
                            <img data-image="black" src="{{ url($product->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-detail-product"></div>
            </div>
        </div>
        <div class="wrap-info">
            <div class="list">
                <ul>
                    <li>
                        <a href="#" class="item-link item-content sheet-open">
                            <div class="item-inner item-cell">
                                <div class="item-row">
                                    <div class="item-cell ">Màu sắc</div>
                                    <div class="item-cell">
                                        <div class="color-choose">
                                            <div>
                                                <input data-image="red" type="radio" id="red"
                                                       name="color" value="red">
                                                <label for="red"><span></span></label>
                                            </div>
                                            <div>
                                                <input data-image="blue" type="radio" id="blue"
                                                       name="color" value="blue">
                                                <label for="blue"><span></span></label>
                                            </div>
                                            <div>
                                                <input data-image="black" type="radio" id="black"
                                                       name="color" value="black">
                                                <label for="black"><span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item-link item-content sheet-open">
                            <div class="item-inner item-cell">
                                <div class="item-row">
                                    <div class="item-cell ">Size</div>
                                    <div class="item-cell">
                                        <div class="size-choose">
                                            <div>
                                                <input type="radio" id="XXL" name="size"
                                                       value="XXL">
                                                <label for="XXL"><span>XXL</span></label>
                                            </div>
                                            <div>
                                                <input type="radio" id="XL" name="size" value="XL">
                                                <label for="XL"><span>XL</span></label>
                                            </div>
                                            <div>
                                                <input type="radio" id="160" name="size"
                                                       value="160">
                                                <label for="160"><span>160</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item-link item-content sheet-open">
                            <div class="item-inner item-cell">
                                <div class="item-row">
                                    <div class="item-cell ">Thông tin sản phẩm</div>
                                    <div class="item-cell description">Mô tả</div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                products: []
            }
        },
        created() {
            axios.get('./api/product-detail/')
                .then(response => {
                    this.products = response.data
                });
        },
        methods: {
            formatPrice(value) {
                let val = (value/1).toFixed(0).replace('.', ',');
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            },
            formatSalePrice(discount, retail) {
                let sale_price = retail - (discount * retail) / 100;
                let val = (sale_price).toFixed(0).replace('.', ',');
                val = val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                if(discount > 0) {
                    val += ' đ (-' + discount + '%)';
                }
                return val;
            },
            format_image(value) {
                let image = JSON.parse(value);
                let src = image[0].src;
                let type = image[0].type;
                if(type === 'upload') {
                    src = 'https://admin.shopmein.vn/dist/uploads/' + src;
                }
                return src;
            }
        }
    }
</script>
