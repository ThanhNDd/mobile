<template>
    <div class="swiper-container swiper-flash-sale">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="margin-right: 15px;" v-for="product in products">
                <div class="content content-shadow-product">
                    <a v-bind:href="'/product-details/' + product.id">
                        <div class="image">
                            <img v-bind:src="format_image(product.image)" v-bind:alt="product.name">
                        </div>
                        <div class="text">
                            <p class="title-product title-product-center" v-text="product.name"></p>
                            <p class="price sale-price" v-text="formatPrice(product.retail)"></p>
                            <p class="price" v-text="formatSalePrice(product.discount, product.retail, product.discount)"></p>
                        </div>
                    </a>
                </div>
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
            axios.get('/api/flash-sales')
                .then(response => {
                    this.products = response.data
                });
        },
        methods: {
            formatPrice(value) {
                let val = (value/1).toFixed(0).replace('.', ',');
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' đ';

            },
            formatSalePrice(discount, retail) {
                let sale_price = retail - (discount * retail) / 100;
                let val = (sale_price).toFixed(0).replace('.', ',');
                val = val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' đ';
                if(discount > 0) {
                    val += ' (-' + discount + '%)';
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
