<template>
    <div class="swiper-container swiper2">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
            <div class="swiper-slide" style="margin-right: 15px;" v-for="product in products">
                <div class="content content-shadow-product">
                    <a v-bind:href="'/product-details/' + product.id">
                        <div class="image">
                            <img v-bind:src="product.image" alt="">
                        </div>
                        <div class="text">
<!--                            <p>7 sold</p>-->
                            <p class="title-product title-product-center" v-text="product.name"></p>
                            <p class="price sale-price" v-text="formatPrice(product.retail) + ' đ'"></p>
                            <p class="price" v-text="formatSalePrice(product.discount, product.retail) + ' đ (-' + product.discount + '%)'"></p>
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
            axios.get('./api/flash-sales')
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
                let val = (sale_price/1).toFixed(0).replace('.', ',');
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
        }
    }
</script>
