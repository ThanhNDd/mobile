<template>
    <div class="swiper-container swiper-relate-product">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="margin-right: 15px;" v-for="product in products">
                <div class="content content-shadow-product">
                    <a v-bind:href="'/product-details/' + product.id">
                        <div class="image">
                            <img v-bind:src="product.image | format_image" v-bind:alt="product.name">
                        </div>
                        <div class="text">
                            <p class="title-product title-product-center" v-text="product.name"></p>
                            <p class="price">{{product.retail | formatPrice}}</p>
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
            let cat_id = document.querySelector('#cat_id').getAttribute('value');
            let id = document.querySelector('#product_id').getAttribute('value');
            axios.get('/api/relate/'+id+'/category/'+cat_id)
                .then(response => {
                    this.products = response.data
                });
        },
        methods: {
        }
    }
</script>
